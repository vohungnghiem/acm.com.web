<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class DonHangController extends Controller
{
    public function index() {
        $donhang = DB::table('vhn_donhang')->get();
        return view('admincp.donhangs.index',compact('donhang'));
    }
    public function create() {
        return view('admincp.donhangs.create');
    }
    public function edit($id)
    {
        try {
            $donhang = DB::table('vhn_donhang')->where('id',$id)->first();
            return view('admincp.donhangs.edit',['donhang'=>$donhang]);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error');
        }
    }
    public function store(Request $request)
    {
        try {
            $id = DB::table('vhn_donhang')->insertGetId(
                [
                    'ten'=> $request->ten,
                    'slug' => Str::of($request->ten)->slug('-'),
                    'address'=> $request->address,
                    'job' => $request->job,
                    'work_time'=> $request->work_time,
                    'salary_base' => $request->salary_base,
                    'salary_deduct' => $request->salary_deduct,
                    'salary_receive' => $request->salary_receive,
                    'amount' => $request->amount,
                    'degree' => $request->degree,
                    'day_start' => $request->day_start,
                    'stt'=> $request->status == 'on' ? 1 : 0,
                    'created_at' => date('Y-m-d H:i:s')
                ]);
            return redirect('admincp/donhangs/edit/'.$id)->with('success','Success !');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error','Tài khoản không có quyền chỉnh sửa!');
        }
    }
    public function update(Request $request, $id)
    {
        try {
            DB::table('vhn_donhang')->where('id',$id)->update(
                [
                    'ten'=> $request->ten,
                    'slug' => Str::of($request->slug)->slug('-'),
                    'address'=> $request->address,
                    'job' => $request->job,
                    'work_time'=> $request->work_time,
                    'salary_base' => $request->salary_base,
                    'salary_deduct' => $request->salary_deduct,
                    'salary_receive' => $request->salary_receive,
                    'amount' => $request->amount,
                    'degree' => $request->degree,
                    'day_start' => $request->day_start,
                    'stt'=> $request->status == 'on' ? 1 : 0,
                    'updated_at' => date('Y-m-d H:i:s')
                ]);
            return redirect('admincp/donhangs/edit/'.$id)->with('success','Success !');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error','Tài khoản không có quyền chỉnh sửa!');
        }
    }
    public function status(Request $request){
        try {
            $item = DB::table('vhn_donhang')->where('id',$request->id)->first();
            $stt = ($item->stt == 1) ? 0 : 1;
            DB::table('vhn_donhang')->where('id',$request->id)->update(['stt'=>$stt]);
            return response()->json('success');

        } catch (\Throwable $th) {
            return response()->json('error');
        }
    }
    public function destroy(Request $request)
    {
        try {
            DB::table('vhn_donhang')->where('id', $request->id)->delete();
            return response()->json('success');
        } catch (\Throwable $th) {
            return response()->json('error');
        }

    }
}
