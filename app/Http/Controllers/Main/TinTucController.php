<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
class TinTucController extends Controller
{
    public function dieuduong()
    {
        $perpage = 9;
        $tintucs = DB::table('vhn_tintucs')->where([['stt', '=', '1'],['id_loaitintuc','=','2']])->orderBy('id','desc')->paginate($perpage);
        $skippage = $tintucs->currentPage() * $perpage;
        $tintucorther = DB::table('vhn_tintucs')->where([['stt', '=', '1'],['id_loaitintuc','=','2']])->skip($skippage)->take($perpage)->orderBy('id','desc')->get();
        $tinlienquan = DB::table('vhn_tintucs')->where([['stt', '=', '1'],['id_loaitintuc','=','2']])->orderBy('id','desc')->get(); // BỎ
        if (App::getLocale() == 'jp') {
            return redirect('gioithieu');
        }else{
            return view('main.dieuduong',compact('tintucs','tintucorther','tinlienquan'));
        }
    }
    public function tintuc()
    {
        $perpage = 9;
        $tintucs = DB::table('vhn_tintucs')->where([['stt', '=', '1'],['id_loaitintuc','=','1']])->orderBy('id','desc')->paginate($perpage);
        $skippage = $tintucs->currentPage() * $perpage;
        $tintucorther = DB::table('vhn_tintucs')->where([['stt', '=', '1'],['id_loaitintuc','=','1']])->skip($skippage)->take($perpage)->orderBy('id','desc')->get();
        $tinlienquan = DB::table('vhn_tintucs')->where([['stt', '=', '1'],['id_loaitintuc','=','1']])->orderBy('id','desc')->get(); // BỎ
        if (App::getLocale() == 'jp') {
            return redirect('gioithieu');
        }else{
            return view('main.tintuc',compact('tintucs','tintucorther','tinlienquan'));
        }
    }
    public function detail($slug){
        $detail = DB::table('vhn_tintucs')->where('slug', '=', $slug)->first();
        $countdh = DB::table('vhn_donhang')->where('stt',1)->count();
        $counttt = DB::table('vhn_tintucs')->where([['stt', '=', '1'],['id_loaitintuc','=','1']])->count();
        $countdd = DB::table('vhn_tintucs')->where([['stt', '=', '1'],['id_loaitintuc','=','2']])->count();
        $tintuc = DB::table('vhn_tintucs')->where([['stt', '=', '1'],['id_loaitintuc','=','1']])->skip(0)->take(6)->orderBy('id','desc')->get();
        $dieuduong = DB::table('vhn_tintucs')->where([['stt', '=', '1'],['id_loaitintuc','=','2']])->skip(0)->take(6)->orderBy('id','desc')->get();
        if (App::getLocale() == 'jp') {
            return redirect('gioithieu');
        }else{
            return view('main.detail',compact('detail','countdh','counttt','countdd','tintuc','dieuduong'));
        }
    }
}
