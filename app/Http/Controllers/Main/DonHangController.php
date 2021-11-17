<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
class DonHangController extends Controller
{
    public function index() {
        $donhang = collect();
        if (App::getLocale() == 'jp') {
            return redirect('gioithieu');
        }else{
            return view('main.donhang',compact('donhang'));
        }
    }
}
