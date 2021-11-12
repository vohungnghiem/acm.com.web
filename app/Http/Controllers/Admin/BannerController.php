<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class BannerController extends Controller
{
    public function index() {
        $banner = DB::table('vhn_banners')->get();
        return view('admincp.banners.index',compact('banner'));
    }
    public function create() {
        return view('admincp.banners.create');
    }
    public function store(Request $request)
    {
        try {
            $id = DB::table('vhn_banners')->insertGetId(
                [
                    'image'=> $request->image,
                    'stt'=> $request->status == 'on' ? 1 : 0
                ]);
            return redirect('admincp/banners/edit/'.$id)->with('success','Success !');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error','error!');
        }
    }
    public function edit($id)
    {
        try {
            $banner = DB::table('vhn_banners')->where('id',$id)->first();
            return view('admincp.banners.edit',['banner'=>$banner]);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error');
        }
    }
    public function update(Request $request, $id)
    {
        try {
            DB::table('vhn_banners')->where('id',$id)->update(
                [
                    'image'=> $request->image,
                    'stt'=> $request->status == 'on' ? 1 : 0
                ]);
            return redirect('admincp/banners/edit/'.$id)->with('success','Success !');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error','error!');
        }
    }
    public function status(Request $request){
        try {
            $item = DB::table('vhn_banners')->where('id',$request->id)->first();
            $stt = ($item->stt == 1) ? 0 : 1;
            DB::table('vhn_banners')->where('id',$request->id)->update(['stt'=>$stt]);
            return response()->json('success');

        } catch (\Throwable $th) {
            return response()->json('error');
        }
    }
    public function destroy(Request $request)
    {
        try {
            DB::table('vhn_banners')->where('id', $request->id)->delete();
            return response()->json('success');
        } catch (\Throwable $th) {
            return response()->json('error');
        }
    }
}
