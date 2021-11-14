<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class TinTucController extends Controller
{
    public function index() {
        $tintuc = DB::table('vhn_tintucs')->orderBy('id','desc')->get();
        return view('admincp.tintucs.index',compact('tintuc'));
    }
    public function create() {
        return view('admincp.tintucs.create');
    }
    public function store(Request $request)
    {
        try {
            $id = DB::table('vhn_tintucs')->insertGetId(
                [
                    'ten' => $request->ten,
                    'slug' => Str::of($request->ten)->slug('-'),
                    'tenjp' => $request->tenjp,
                    'description' => $request->description,
                    'descriptionjp' => $request->descriptionjp,
                    'id_loaitintuc' => $request->id_loaitintuc,
                    'noidung' => $request->noidung,
                    'noidungjp' => $request->noidungjp,
                    'image'=> $request->image,
                    'stt'=> $request->status == 'on' ? 1 : 0
                ]);
            return redirect('admincp/tintucs/edit/'.$id)->with('success','Success !');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error','error!');
        }
    }
    public function edit($id)
    {
        try {
            $tintuc = DB::table('vhn_tintucs')->where('id',$id)->first();
            return view('admincp.tintucs.edit',['tintuc'=>$tintuc]);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error');
        }
    }
    public function update(Request $request, $id)
    {
        try {
            DB::table('vhn_tintucs')->where('id',$id)->update(
                [
                    'ten' => $request->ten,
                    'slug' => $request->slug,
                    'tenjp' => $request->tenjp,
                    'description' => $request->description,
                    'descriptionjp' => $request->descriptionjp,
                    'id_loaitintuc' => $request->id_loaitintuc,
                    'noidung' => $request->noidung,
                    'noidungjp' => $request->noidungjp,
                    'image'=> $request->image,
                    'stt'=> $request->status == 'on' ? 1 : 0
                ]);
            return redirect('admincp/tintucs/edit/'.$id)->with('success','Success !');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error','error!');
        }
    }
    public function status(Request $request){
        try {
            $item = DB::table('vhn_tintucs')->where('id',$request->id)->first();
            $stt = ($item->stt == 1) ? 0 : 1;
            DB::table('vhn_tintucs')->where('id',$request->id)->update(['stt'=>$stt]);
            return response()->json('success');

        } catch (\Throwable $th) {
            return response()->json('error');
        }
    }
    public function destroy(Request $request)
    {
        try {
            DB::table('vhn_tintucs')->where('id', $request->id)->delete();
            return response()->json('success');
        } catch (\Throwable $th) {
            return response()->json('error');
        }
    }
}
