<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class LienHeController extends Controller
{
    public function index() {
        $lienhe = DB::table('vhn_lienhes')->orderBy('id','desc')->get();
        return view('admincp.lienhes.index',compact('lienhe'));
    }
    public function create() {
        return view('admincp.lienhes.create');
    }
    public function store(Request $request)
    {
        try {
            $id = DB::table('vhn_lienhes')->insertGetId(
                [
                    'ten' => $request->ten,
                    'tenjp' => $request->tenjp,
                    'noidung' => $request->noidung,
                    'noidungjp' => $request->noidungjp,
                    'image'=> $request->image,
                    'stt'=> $request->status == 'on' ? 1 : 0
                ]);
            return redirect('admincp/lienhes/edit/'.$id)->with('success','Success !');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error','error!');
        }
    }
    public function edit($id)
    {
        try {
            $lienhe = DB::table('vhn_lienhes')->where('id',$id)->first();
            return view('admincp.lienhes.edit',['lienhe'=>$lienhe]);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error');
        }
    }
    public function update(Request $request, $id)
    {
        try {
            DB::table('vhn_lienhes')->where('id',$id)->update(
                [
                    'ten' => $request->ten,
                    'tenjp' => $request->tenjp,
                    'noidung' => $request->noidung,
                    'noidungjp' => $request->noidungjp,
                    'image'=> $request->image,
                    'stt'=> $request->status == 'on' ? 1 : 0
                ]);
            return redirect('admincp/lienhes/edit/'.$id)->with('success','Success !');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error','error!');
        }
    }
    public function status(Request $request){
        try {
            $item = DB::table('vhn_lienhes')->where('id',$request->id)->first();
            $stt = ($item->tinhtrang == 1) ? 0 : 1;
            DB::table('vhn_lienhes')->where('id',$request->id)->update(['tinhtrang'=>$stt]);
            return response()->json('success');

        } catch (\Throwable $th) {
            return response()->json('error');
        }
    }
    public function destroy(Request $request)
    {
        try {
            DB::table('vhn_lienhes')->where('id', $request->id)->delete();
            return response()->json('success');
        } catch (\Throwable $th) {
            return response()->json('error');
        }
    }
}
