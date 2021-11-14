<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class HinhAnhController extends Controller
{
    public function index() {
        $hinhanh = DB::table('vhn_hinhanhs')->orderBy('id','desc')->get();
        return view('admincp.hinhanhs.index',compact('hinhanh'));
    }
    public function create() {
        return view('admincp.hinhanhs.create');
    }
    public function store(Request $request)
    {
        try {
            $id = DB::table('vhn_hinhanhs')->insertGetId(
                [
                    'ten' => $request->ten,
                    'slug' => Str::of($request->ten)->slug('-'),
                    'tenjp' => $request->tenjp,

                    'hinhanh'=> json_encode($request->image),
                    'stt'=> $request->status == 'on' ? 1 : 0
                ]);
            return redirect('admincp/hinhanhs/edit/'.$id)->with('success','Success !');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error','error!');
        }
    }
    public function edit($id)
    {
        try {
            $hinhanh = DB::table('vhn_hinhanhs')->where('id',$id)->first();
            return view('admincp.hinhanhs.edit',['hinhanh'=>$hinhanh]);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error');
        }
    }
    public function update(Request $request, $id)
    {
        try {
            DB::table('vhn_hinhanhs')->where('id',$id)->update(
                [
                    'ten' => $request->ten,
                    'slug' => $request->slug,
                    'tenjp' => $request->tenjp,
                    'hinhanh'=> json_encode($request->image),
                    'stt'=> $request->status == 'on' ? 1 : 0
                ]);
            return redirect('admincp/hinhanhs/edit/'.$id)->with('success','Success !');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error','error!');
        }
    }
    public function status(Request $request){
        try {
            $item = DB::table('vhn_hinhanhs')->where('id',$request->id)->first();
            $stt = ($item->stt == 1) ? 0 : 1;
            DB::table('vhn_hinhanhs')->where('id',$request->id)->update(['stt'=>$stt]);
            return response()->json('success');

        } catch (\Throwable $th) {
            return response()->json('error');
        }
    }
    public function destroy(Request $request)
    {
        try {
            DB::table('vhn_hinhanhs')->where('id', $request->id)->delete();
            return response()->json('success');
        } catch (\Throwable $th) {
            return response()->json('error');
        }
    }
}
