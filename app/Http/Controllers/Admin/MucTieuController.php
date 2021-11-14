<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class MucTieuController extends Controller
{
    public function index() {
        $muctieu = DB::table('vhn_muctieuhome')->get();
        return view('admincp.muctieus.index',compact('muctieu'));
    }
    public function create() {
        return view('admincp.muctieus.create');
    }
    public function store(Request $request)
    {
        try {
            $id = DB::table('vhn_muctieuhome')->insertGetId(
                [
                    'ten' => $request->ten,
                    'tenjp' => $request->tenjp,
                    'noidung' => $request->noidung,
                    'noidungjp' => $request->noidungjp,
                    'stt'=> $request->status == 'on' ? 1 : 0
                ]);
            return redirect('admincp/muctieus/edit/'.$id)->with('success','Success !');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error','error!');
        }
    }
    public function edit($id)
    {
        try {
            $muctieu = DB::table('vhn_muctieuhome')->where('id',$id)->first();
            return view('admincp.muctieus.edit',['muctieu'=>$muctieu]);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error');
        }
    }
    public function update(Request $request, $id)
    {
        try {
            DB::table('vhn_muctieuhome')->where('id',$id)->update(
                [
                    'ten' => $request->ten,
                    'tenjp' => $request->tenjp,
                    'noidung' => $request->noidung,
                    'noidungjp' => $request->noidungjp,
                    'stt'=> $request->status == 'on' ? 1 : 0
                ]);
            return redirect('admincp/muctieus/edit/'.$id)->with('success','Success !');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error','error!');
        }
    }
    public function status(Request $request){
        try {
            $item = DB::table('vhn_muctieuhome')->where('id',$request->id)->first();
            $stt = ($item->stt == 1) ? 0 : 1;
            DB::table('vhn_muctieuhome')->where('id',$request->id)->update(['stt'=>$stt]);
            return response()->json('success');

        } catch (\Throwable $th) {
            return response()->json('error');
        }
    }
    public function destroy(Request $request)
    {
        try {
            DB::table('vhn_muctieuhome')->where('id', $request->id)->delete();
            return response()->json('success');
        } catch (\Throwable $th) {
            return response()->json('error');
        }
    }
}
