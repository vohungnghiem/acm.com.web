@php
$menu = DB::table('vhn_menu')->where('stt', '=', '1')->orderBy('id','asc')->get();
function showmenu($item) {
    $showmenu = '';
    if (App::getLocale() == 'vi') {
        $showmenu = $item->ten;
    }else{
        $os = array(2,3,4);
        if (!in_array($item->id, $os)) {
            $showmenu = $item->tenjp;
        }
    }
    return $showmenu;
}
@endphp
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="/"> <img src="main_master/images/logo/logo.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="oi oi-menu"></span> Menu
  </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item" id="home"><a href="/" class="nav-link">@lang('main.trangchu')</a></li>
                <li class="nav-item"><a href="gioithieu" class="nav-link">@lang('main.gioithieu')</a></li>
                @foreach ($menu as $item)
                    <li class="nav-item"><a href="{{$item->link}}" class="nav-link">{{showmenu($item)}}</a></li>
                @endforeach

                <li class="nav-item"><a href="lang/vi" class="nav-link"><img src="main_master/images/flag/flagvn.png" alt="flagvn.png"></a></li>
                <li class="nav-item"><a href="lang/jp" class="nav-link"><img src="main_master/images/flag/flagjp.png" alt="flagjp.png"></a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->
