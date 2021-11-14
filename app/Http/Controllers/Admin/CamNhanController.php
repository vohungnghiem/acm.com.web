<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CamNhanController extends Controller
{
    public function index() {
        $camnhan = DB::table('vhn_camnhanhocvien')->get();
        return view('admincp.camnhans.index',compact('camnhan'));
    }
    public function create() {
        return view('admincp.camnhans.create');
    }
    public function store(Request $request)
    {
        try {
            $id = DB::table('vhn_camnhanhocvien')->insertGetId(
                [
                    'tenhocvien' => $request->tenhocvien,
                    'nganhnghe' => $request->nganhnghe,
                    'nganhnghejp' => $request->nganhnghejp,
                    'ngayxuatcanh' => date('Y-m-d',strtotime($request->ngayxuatcanh)),
                    'noidung' => $request->noidung,
                    'noidungjp' => $request->noidungjp,
                    'image'=> $request->image,
                    'stt'=> $request->status == 'on' ? 1 : 0
                ]);
            return redirect('admincp/camnhans/edit/'.$id)->with('success','Success !');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error','error!');
        }
    }
    public function edit($id)
    {
        try {
            $camnhan = DB::table('vhn_camnhanhocvien')->where('id',$id)->first();
            return view('admincp.camnhans.edit',['camnhan'=>$camnhan]);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error');
        }
    }
    public function update(Request $request, $id)
    {
        try {
            DB::table('vhn_camnhanhocvien')->where('id',$id)->update(
                [
                    'tenhocvien' => $request->tenhocvien,
                    'nganhnghe' => $request->nganhnghe,
                    'nganhnghejp' => $request->nganhnghejp,
                    'ngayxuatcanh' => date('Y-m-d',strtotime($request->ngayxuatcanh)),
                    'noidung' => $request->noidung,
                    'noidungjp' => $request->noidungjp,
                    'image'=> $request->image,
                    'stt'=> $request->status == 'on' ? 1 : 0
                ]);
            return redirect('admincp/camnhans/edit/'.$id)->with('success','Success !');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error','error!');
        }
    }
    public function status(Request $request){
        try {
            $item = DB::table('vhn_camnhanhocvien')->where('id',$request->id)->first();
            $stt = ($item->stt == 1) ? 0 : 1;
            DB::table('vhn_camnhanhocvien')->where('id',$request->id)->update(['stt'=>$stt]);
            return response()->json('success');

        } catch (\Throwable $th) {
            return response()->json('error');
        }
    }
    public function destroy(Request $request)
    {
        try {
            DB::table('vhn_camnhanhocvien')->where('id', $request->id)->delete();
            return response()->json('success');
        } catch (\Throwable $th) {
            return response()->json('error');
        }
    }
}
