<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HosoController extends Controller
{
    public function index() {
        $hoso = DB::table('vhn_hosocanchuanbi')->get();
        return view('admincp.hosos.index',compact('hoso'));
    }
    public function create() {
        return view('admincp.hosos.create');
    }
    public function store(Request $request)
    {
        try {
            $id = DB::table('vhn_hosocanchuanbi')->insertGetId(
                [
                    'ten' => $request->ten,
                    'tenjp' => $request->tenjp,
                    'stt'=> $request->status == 'on' ? 1 : 0
                ]);
            return redirect('admincp/hosos/edit/'.$id)->with('success','Success !');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error','error!');
        }
    }
    public function edit($id)
    {
        try {
            $hoso = DB::table('vhn_hosocanchuanbi')->where('id',$id)->first();
            return view('admincp.hosos.edit',['hoso'=>$hoso]);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error');
        }
    }
    public function update(Request $request, $id)
    {
        try {
            DB::table('vhn_hosocanchuanbi')->where('id',$id)->update(
                [
                    'ten' => $request->ten,
                    'tenjp' => $request->tenjp,
                    'stt'=> $request->status == 'on' ? 1 : 0
                ]);
            return redirect('admincp/hosos/edit/'.$id)->with('success','Success !');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error','error!');
        }
    }
    public function status(Request $request){
        try {
            $item = DB::table('vhn_hosocanchuanbi')->where('id',$request->id)->first();
            $stt = ($item->stt == 1) ? 0 : 1;
            DB::table('vhn_hosocanchuanbi')->where('id',$request->id)->update(['stt'=>$stt]);
            return response()->json('success');

        } catch (\Throwable $th) {
            return response()->json('error');
        }
    }
    public function destroy(Request $request)
    {
        try {
            DB::table('vhn_hosocanchuanbi')->where('id', $request->id)->delete();
            return response()->json('success');
        } catch (\Throwable $th) {
            return response()->json('error');
        }
    }
}
