<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class MXHController extends Controller
{
    public function index() {
        $mxh = DB::table('vhn_mxhs')->get();
        return view('admincp.mxhs.index',compact('mxh'));
    }
    public function create() {
        return view('admincp.mxhs.create');
    }
    public function edit($id)
    {
        try {
            $mxh = DB::table('vhn_mxhs')->where('id',$id)->first();
            return view('admincp.mxhs.edit',['mxh'=>$mxh]);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error');
        }
    }
    public function store(Request $request)
    {
        try {
            $id = DB::table('vhn_mxhs')->insertGetId(
                [
                    'ten'=> $request->ten,
                    'icon'=> $request->icon,
                    'link'=> $request->link,
                    'image' => $request->image,
                    'stt'=> $request->status == 'on' ? 1 : 0
                ]);
            return redirect('admincp/mxhs/edit/'.$id)->with('success','Success !');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error','Tài khoản không có quyền chỉnh sửa!');
        }
    }
    public function update(Request $request, $id)
    {
        try {
            DB::table('vhn_mxhs')->where('id',$id)->update(
                [
                    'ten'=> $request->ten,
                    'icon'=> $request->icon,
                    'link'=> $request->link,
                    'image' => $request->image,
                    'stt'=> $request->status == 'on' ? 1 : 0
                ]);
            return redirect('admincp/mxhs/edit/'.$id)->with('success','Success !');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error','Tài khoản không có quyền chỉnh sửa!');
        }
    }
    public function status(Request $request){
        try {
            $item = DB::table('vhn_mxhs')->where('id',$request->id)->first();
            $stt = ($item->stt == 1) ? 0 : 1;
            DB::table('vhn_mxhs')->where('id',$request->id)->update(['stt'=>$stt]);
            return response()->json('success');

        } catch (\Throwable $th) {
            return response()->json('error');
        }
    }
    public function destroy(Request $request)
    {
        try {
            DB::table('vhn_mxhs')->where('id', $request->id)->delete();
            return response()->json('success');
        } catch (\Throwable $th) {
            return response()->json('error');
        }

    }
}
