<header>
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-12 flex-box">
                    <div class="logo"><a href="#"><img src="main_template/img/logo.png" alt="logo"></a></div>
                    <div class="hamburger"></div>
                    <nav class="header-nav">
                        <li><a class="active" href="index.html">trang chủ</a></li>
                        <li><a href="don-hang.html">đơn hàng</a></li>
                        <li><a href="dieu-duong-2.html">Điều dưỡng</a></li>
                        <li><a href="tin-tuc.html">tin tức</a></li>
                        @foreach (Config::get('languages') as $lang => $language)
                            @if ($language['status'] == 1)
                                <li><a href="{{ route('lang.switch', $lang) }}"><img src="main_template/img/flag{{ $language['flag-icon'] }}.png" alt="flag{{ $language['flag-icon'] }}.png"></a></li>
                            @endif
                        @endforeach
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="nav-mobile">
        <nav>
            <li>
                @foreach (Config::get('languages') as $lang => $language)
                    @if ($language['status'] == 1)
                        <a href="{{ route('lang.switch', $lang) }}"><img
                                src="main_template/img/flag{{ $language['flag-icon'] }}.png" alt="flag{{ $language['flag-icon'] }}.png"></a>
                    @endif
                @endforeach
            </li>
            <li><a class="active" href="index.html">trang chủ</a></li>
            <li><a href="don-hang.html">đơn hàng</a></li>
            <li><a href="dieu-duong-2.html">Điều dưỡng</a></li>
            <li><a href="tin-tuc.html">tin tức</a></li>
        </nav>
    </div>
</header>
