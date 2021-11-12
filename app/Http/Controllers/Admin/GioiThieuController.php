<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class GioiThieuController extends Controller
{
    public function index() {
        $gioithieu = DB::table('vhn_gioithieuhome')->get();
        return view('admincp.gioithieus.index',compact('gioithieu'));
    }
    public function create() {
        return view('admincp.gioithieus.create');
    }
    public function store(Request $request)
    {
        try {
            $id = DB::table('vhn_gioithieuhome')->insertGetId(
                [
                    'ten' => $request->ten,
                    'tenjp' => $request->tenjp,
                    'noidung' => $request->noidung,
                    'noidungjp' => $request->noidungjp,
                    'image'=> $request->image,
                    'stt'=> $request->status == 'on' ? 1 : 0
                ]);
            return redirect('admincp/gioithieus/edit/'.$id)->with('success','Success !');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error','error!');
        }
    }
    public function edit($id)
    {
        try {
            $gioithieu = DB::table('vhn_gioithieuhome')->where('id',$id)->first();
            return view('admincp.gioithieus.edit',['gioithieu'=>$gioithieu]);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error');
        }
    }
    public function update(Request $request, $id)
    {
        try {
            DB::table('vhn_gioithieuhome')->where('id',$id)->update(
                [
                    'ten' => $request->ten,
                    'tenjp' => $request->tenjp,
                    'noidung' => $request->noidung,
                    'noidungjp' => $request->noidungjp,
                    'image'=> $request->image,
                    'stt'=> $request->status == 'on' ? 1 : 0
                ]);
            return redirect('admincp/gioithieus/edit/'.$id)->with('success','Success !');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error','error!');
        }
    }
    public function status(Request $request){
        try {
            $item = DB::table('vhn_gioithieuhome')->where('id',$request->id)->first();
            $stt = ($item->stt == 1) ? 0 : 1;
            DB::table('vhn_gioithieuhome')->where('id',$request->id)->update(['stt'=>$stt]);
            return response()->json('success');

        } catch (\Throwable $th) {
            return response()->json('error');
        }
    }
    public function destroy(Request $request)
    {
        try {
            DB::table('vhn_gioithieuhome')->where('id', $request->id)->delete();
            return response()->json('success');
        } catch (\Throwable $th) {
            return response()->json('error');
        }
    }
}
