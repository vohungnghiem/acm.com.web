<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
use Illuminate\Pagination\Paginator;
class DonHangController extends Controller
{
    public function index() {
        $donhangs = DB::table('vhn_donhang')->where('stt',1)->orderBy('id','desc')->paginate(10);
        if (App::getLocale() == 'jp') {
            return redirect('gioithieu');
        }else{
            return view('main.donhang',compact('donhangs'));
        }
    }
    public function getiddonhang($id) {
        $donhang = DB::table('vhn_donhang')->where([['stt',1],['id',$id]])->first();
        $donhangs = DB::table('vhn_donhang')->whereNotIn('id', [$id])->where('stt',1)->orderBy('id','desc')->skip(0)->take(10)->get();
        if (App::getLocale() == 'jp') {
            return redirect('gioithieu');
        }else{
            return view('main.donhang-detail',compact('donhang','donhangs'));
        }
    }
}
