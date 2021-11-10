<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class MenuController extends Controller
{
    public function index() {
        $menu = DB::table('vhn_menu')->get();
        return view('admincp.menus.index',compact('menu'));
    }
    public function create() {
        return view('admincp.menus.create');
    }
    public function edit($id)
    {
        try {
            $menu = DB::table('vhn_menu')->where('id',$id)->first();
            return view('admincp.menus.edit',['menu'=>$menu]);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error');
        }
    }
    public function store(Request $request)
    {
        try {
            $id = DB::table('vhn_menu')->insertGetId(
                [
                    'ten'=> $request->ten,
                    'tenjp'=> $request->tenjp,
                    'link'=> $request->link,
                    'stt'=> $request->status == 'on' ? 1 : 0
                ]);
            return redirect('admincp/menus/edit/'.$id)->with('success','Success !');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error','Tài khoản không có quyền chỉnh sửa!');
        }
    }
    public function update(Request $request, $id)
    {
        try {
            DB::table('vhn_menu')->where('id',$id)->update(
                [
                    'ten'=> $request->ten,
                    'tenjp'=> $request->tenjp,
                    'link'=> $request->link,
                    'stt'=> $request->status == 'on' ? 1 : 0
                ]);
            return redirect('admincp/menus/edit/'.$id)->with('success','Success !');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error','Tài khoản không có quyền chỉnh sửa!');
        }
    }
    public function status(Request $request){
        try {
            $item = DB::table('vhn_menu')->where('id',$request->id)->first();
            $stt = ($item->stt == 1) ? 0 : 1;
            DB::table('vhn_menu')->where('id',$request->id)->update(['stt'=>$stt]);
            return response()->json('success');

        } catch (\Throwable $th) {
            return response()->json('error');
        }
    }
    public function destroy(Request $request)
    {
        try {
            DB::table('vhn_menu')->where('id', $request->id)->delete();
            return response()->json('success');
        } catch (\Throwable $th) {
            return response()->json('error');
        }

    }
}
