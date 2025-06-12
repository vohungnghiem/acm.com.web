<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
class MainController extends Controller
{
    public function home() {

        $donhangs = DB::table('vhn_donhang')->where('stt',1)->orderBy('id','desc')->skip(0)->take(6)->get();
        $muctieus = DB::table('vhn_muctieuhome')->orderBy('id','desc')->get();
        $hosocanchuanbis = DB::table('vhn_hosocanchuanbi')->where('stt', '=', '1')->orderBy('id','asc')->get();
        $camnhanhocviens = DB::table('vhn_camnhanhocvien')->where('stt', '=', '1')->orderBy('id','asc')->get();
        $tintuc = DB::table('vhn_tintucs')->where([['stt', '=', '1'],['id_loaitintuc','=','1']])->orderBy('id','desc')->first();
        $dieuduong = DB::table('vhn_tintucs')->where([['stt', '=', '1'],['id_loaitintuc','=','2']])->orderBy('id','desc')->first();
        $donhang = DB::table('vhn_donhang')->where('stt',1)->orderBy('id','desc')->first();
        $truonghocs = DB::table('vhn_truonghoc')->where('stt', '=', '1')->orderBy('id','desc')->get();

        if (App::getLocale() == 'jp') {
            return redirect('gioithieu');
        }else{
            return view('main.home',compact('donhangs','muctieus','hosocanchuanbis','camnhanhocviens','tintuc','dieuduong','donhang','truonghocs',
            ));
        }
    }
    public function gioithieu() {
        return view('main.gioithieu');
    }
    public function giayphep() {
        return view('main.giayphep');
    }

     public function giayphepSlug($slug)
    {
        try {
            $licensePage = DB::table('vhn_license_page')->where([['status',1],['slug' ,$slug]])->first();
            $licensePage->id;
            return view('main.giayphep-slug',compact('licensePage'));
        } catch (\Throwable $th) {
            return redirect('/');
        }
    }
    public function storeLienHe(Request $request){
        DB::table('vhn_lienhes')->insert(
            [
                'hovaten' => $request->hovaten,
                'email' => $request->email,
                'tieude' => $request->tieude,
                'sodienthoai' => $request->sodienthoai,
                'noidung' => $request->noidung,
                // 'created_at' => $request->created_at,
                'tinhtrang' => 0
            ]
        );
        return redirect('/')->with('alert','Gửi thành công!');
    }
}
