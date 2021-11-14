<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class DiaChiController extends Controller
{
    public function index() {
        $diachi = DB::table('vhn_dclienhes')->get();
        return view('admincp.diachis.index',compact('diachi'));
    }
    public function create() {
        return view('admincp.diachis.create');
    }
    public function store(Request $request)
    {
        try {
            $id = DB::table('vhn_dclienhes')->insertGetId(
                [
                    'ten' => $request->ten,
                    'slug' => Str::of($request->ten)->slug('-'),
                    'tenjp' => $request->tenjp,
                    'diachi' => $request->diachi,
                    'diachijp' => $request->diachijp,
                    'dienthoai' => $request->dienthoai,
                    'fax' => $request->fax,
                    'email' => $request->email,
                    'website' => $request->website,
                    'stt'=> $request->status == 'on' ? 1 : 0
                ]);
            return redirect('admincp/diachis/edit/'.$id)->with('success','Success !');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error','error!');
        }
    }
    public function edit($id)
    {
        try {
            $diachi = DB::table('vhn_dclienhes')->where('id',$id)->first();
            return view('admincp.diachis.edit',['diachi'=>$diachi]);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error');
        }
    }
    public function update(Request $request, $id)
    {
        try {
            DB::table('vhn_dclienhes')->where('id',$id)->update(
                [
                    'ten' => $request->ten,
                    'slug' => $request->slug,
                    'tenjp' => $request->tenjp,
                    'diachi' => $request->diachi,
                    'diachijp' => $request->diachijp,
                    'dienthoai' => $request->dienthoai,
                    'fax' => $request->fax,
                    'email' => $request->email,
                    'website' => $request->website,
                    'stt'=> $request->status == 'on' ? 1 : 0
                ]);
            return redirect('admincp/diachis/edit/'.$id)->with('success','Success !');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error','error!');
        }
    }
    public function status(Request $request){
        try {
            $item = DB::table('vhn_dclienhes')->where('id',$request->id)->first();
            $stt = ($item->stt == 1) ? 0 : 1;
            DB::table('vhn_dclienhes')->where('id',$request->id)->update(['stt'=>$stt]);
            return response()->json('success');

        } catch (\Throwable $th) {
            return response()->json('error');
        }
    }
    public function destroy(Request $request)
    {
        try {
            DB::table('vhn_dclienhes')->where('id', $request->id)->delete();
            return response()->json('success');
        } catch (\Throwable $th) {
            return response()->json('error');
        }
    }
}
