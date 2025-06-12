 @php
     $dclienhe = DB::table('vhn_dclienhes')->where('stt', '=', '1')->orderBy('id', 'desc')->get();
     $tintuc = DB::table('vhn_tintucs')
         ->where([['stt', '=', '1'], ['id_loaitintuc', '=', '2']])
         ->take(2)
         ->orderBy('id', 'desc')
         ->get();
     $mxh = DB::table('vhn_mxhs')->where('stt', '=', '1')->orderBy('id', 'desc')->get();
     $menu = DB::table('vhn_menu')->where('stt', '=', '1')->orderBy('id', 'asc')->get();
 @endphp

 <section class="ftco-section-parallax">
     <div class="parallax-img d-flex align-items-center">
         <div class="container">
             <div class="row d-flex justify-content-center">
                 <div class="col-md-7 text-center heading-section heading-section-white ftco-animate lienhe">
                     <h2>LIÊN HỆ VỚI CHÚNG TÔI</h2>
                     @foreach ($dclienhe as $item)
                         <p class="btn contact-bi"><i class="bi bi-telephone"></i> {{ $item->dienthoai }}</p>
                         <p class="btn contact-bi"><i class="bi bi-envelope"></i> {{ $item->email }}</p>
                     @endforeach
                     <div class="row d-flex justify-content-center mt-5">
                         <div class="col-md-8">
                             <form method="post" action="storeLienHe" class="subscribe-form">
                                 {{ csrf_field() }}
                                 <div class="form-group mb-1">
                                     <input type="text" class="form-control" name="hovaten"
                                         placeholder="@lang('main.home-lienhe-title2')" value="{{ old('hovaten') }}" required>
                                 </div>
                                 <div class="form-group mb-1">
                                     <input type="text" class="form-control" name="email" placeholder="Nhập email"
                                         value="{{ old('email') }}">
                                 </div>
                                 <div class="form-group mb-1">
                                     <input type="text" class="form-control" name="sodienthoai"
                                         placeholder="@lang('main.home-lienhe-title4')" value="{{ old('sodienthoai') }}">
                                 </div>
                                 <div class="form-group mb-1">
                                     <input type="text" class="form-control" name="tieude"
                                         placeholder="@lang('main.home-lienhe-title3')" value="{{ old('tieude') }}">
                                 </div>
                                 <div class="form-group mb-1">
                                     <input type="text" class="form-control" name="noidung"
                                         placeholder="@lang('main.home-lienhe-title5')" value="{{ old('noidung') }}">
                                 </div>
                                 <div class="text-center mb-1">
                                     <input type="submit" class="btn btn-secondary" value="@lang('main.home-lienhe-title6')">
                                 </div>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <div id="applyNow" class="modal fade" tabindex="-1" role="dialog">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h4 class="modal-title">Liên hệ với chúng tôi</h4>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                         aria-hidden="true">&times;</span></button>
             </div>
             <div class="modal-body">
                 <form method="post" action="storeLienHe">
                     {{ csrf_field() }}
                     <div class="text-center mb-1">
                         <input type="text" class="form-control mb-1" name="hovaten" placeholder="@lang('main.home-lienhe-title2')"
                             value="{{ old('hovaten') }}" required>
                         <input type="text" class="form-control mb-1" name="email" placeholder="Nhập email"
                             value="{{ old('email') }}">
                         <input type="text" class="form-control mb-1" name="sodienthoai"
                             placeholder="@lang('main.home-lienhe-title4')" value="{{ old('sodienthoai') }}">
                         <input type="text" class="form-control mb-1" name="tieude" placeholder="@lang('main.home-lienhe-title3')"
                             value="{{ old('tieude') }}">
                         <input type="text" class="form-control mb-1" name="noidung" placeholder="@lang('main.home-lienhe-title5')"
                             value="{{ old('noidung') }}">
                         <input type="submit" class="btn btn-secondary" value="@lang('main.home-lienhe-title6')">
                     </div>
                 </form>
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
             </div>
         </div><!-- /.modal-content -->
     </div><!-- /.modal-dialog -->
 </div><!-- /.modal -->
 <footer class="ftco-footer ftco-bg-dark ftco-section img"
     style="background-image: url('main_master/images/banner.jpg'); background-attachment:fixed;">
     <div class="overlay"></div>
     <div class="container">
         <div class="row mb-5">
             <div class="col-md-3">
                 <div class="ftco-footer-widget mb-4">
                     <h2>
                         <a class="navbar-brand" href="/"><img src="main_master/images/logo/logo-footer.png"
                                 alt=""></a>
                         <p>CÔNG TY TNHH NHÂN LỰC ACM</p>
                     </h2>

                     <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-2">
                         @foreach ($mxh as $item)
                             <li class="ftco-animate"><a href="{{ $item->link }}" target="_blank"><span
                                         class="bi bi-{{ $item->icon }}"></span></a></li>
                         @endforeach
                     </ul>
                     <div class="block-23 mb-3">
                         <ul>
                             @foreach ($dclienhe as $item)
                                 <li>
                                     <p>
                                         <i class="bi bi-building"></i>
                                         @php
                                             if (App::getLocale() == 'vi') {
                                                 echo $item->diachi;
                                             } else {
                                                 echo $item->diachijp;
                                             }
                                         @endphp
                                     </p>
                                     <p><i class="bi bi-telephone"></i> {{ $item->dienthoai }}</p>
                                     <p><i class="bi bi-envelope"></i> {{ $item->email }}</p>
                                     <p><i class="bi bi-envelope-paper-fill"></i> {{ $item->fax }}</p>
                                     <p><i class="bi bi-globe"></i> {{ $item->website }}</p>
                                 </li>
                             @endforeach
                         </ul>
                     </div>
                 </div>
             </div>
             <div class="col-md-4">
                 <div class="ftco-footer-widget mb-4">
                     <h2 class="ftco-heading-2">Tin tức gần đây</h2>

                     @foreach ($tintuc as $item)
                         <div class="block-21 mb-4 d-flex">
                             <div class="text">
                                 <h6><a href="tintuc/{{ $item->slug }}"><i class="bi bi-chevron-compact-right"></i>
                                         {{ $item->ten }}</a></h6>
                                 <div class="meta">
                                     <div><a href="tintuc/{{ $item->slug }}"><span class="icon-calendar"></span>
                                             {!! date('d/m/Y', strtotime($item->created_at)) !!}</a></div>
                                 </div>
                             </div>
                         </div>
                     @endforeach
                 </div>
             </div>
             <div class="col-md-2">
                 <div class="ftco-footer-widget mb-4 ml-md-4">
                     <h2 class="ftco-heading-2">DANH MỤC</h2>
                     <ul class="list-unstyled">
                         <li><a href="/" class="py-2 d-block"><i class="bi bi-caret-right"></i>
                                 @lang('main.trangchu')</a></li>
                         @foreach ($menu as $item)
                             <li>
                                 <a href="{{ $item->link }}" class="py-2 d-block"> <i
                                         class="bi bi-caret-right"></i>
                                     @php
                                         if (App::getLocale() == 'vi') {
                                             echo $item->ten;
                                         } else {
                                             echo $item->tenjp;
                                         }
                                     @endphp
                                 </a>
                             </li>
                         @endforeach
                     </ul>
                 </div>
             </div>
             <div class="col-md-3">
                 <div class="ftco-footer-widget mb-4">
                     <div class="giayphep">
                         @php
                             $licensePages = DB::table('vhn_license_page')->where('status', 1)->get();
                         @endphp
                         @foreach ($licensePages as $license)
                             {{-- <div class="col-4">
                                 <a class="license-page" href="{{ 'giayphep/' . $license->slug }}">
                                     <span class="img-col">
                                         <img src="miraihuman/assets/images/icon_giayphep@2x.png" width="45"
                                             height="45" alt="" />
                                     </span>
                                     <span class="title-col">{{ $license->code }}</span>
                                     <span class="title-content">{{ $license->title }}</span>
                                 </a>
                             </div> --}}
                             <a href="giayphep/{{ $license->slug }}" class="mt-2">
                                 <img src="main_master/files/giayphep/icon_giayphep@2x.png" alt="icon-footer">
                                 <p style="font-size: 11px; color: #e96c18;">{{ $license->code }}</p>
                                 <p style="font-size: 10px;">{{ $license->title }}</p>
                             </a>
                         @endforeach
                         {{-- <a href="giayphep" class="mt-2">
                            <img src="main_master/files/giayphep/icon_giayphep@2x.png" alt="icon-footer">
                            <p style="font-size: 11px; color: #e96c18;">DKKD-GP</p>
                            <p style="font-size: 10px;">GIẤY PHÉP KINH DOANH</p>
                        </a>
                        <a href="giayphep" class="mt-2">
                            <img src="main_master/files/giayphep/icon_giayphep@2x.png" alt="icon-footer">
                            <p style="font-size: 11px; color: #e96c18;">TVDH-GP</p>
                            <p style="font-size: 10px;">GIẤY PHÉP TƯ VẤN DU HỌC</p>
                        </a>
                         <a href="giayphep" class="mt-2">
                            <img src="main_master/files/giayphep/icon_giayphep@2x.png" alt="icon-footer">
                            <p style="font-size: 11px; color: #e96c18;"> 4956 /2025/19/SNV-VLATLĐ</p>
                            <p style="font-size: 10px;">Giấy phép dịch vụ hoạt động giới thiệu việc làm</p>
                        </a> --}}
                     </div>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-md-12 text-center">

                 <p>
                     Copyright © 2020 ACM Co., Ltd. All rights reserved.
                 </p>
             </div>
         </div>
     </div>
 </footer>
 <!-- loader -->
 <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
         <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
             stroke="#eeeeee" />
         <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
             stroke-miterlimit="10" stroke="#F96D00" />
     </svg></div>
 <script src="main_master/js/jquery.min.js"></script>
 <script src="main_master/js/jquery-migrate-3.0.1.min.js"></script>
 <script src="main_master/js/popper.min.js"></script>
 <script src="main_master/js/bootstrap.min.js"></script>
 <script src="main_master/js/jquery.easing.1.3.js"></script>
 <script src="main_master/js/jquery.waypoints.min.js"></script>
 <script src="main_master/js/jquery.stellar.min.js"></script>
 <script src="main_master/js/owl.carousel.min.js"></script>
 <script src="main_master/js/jquery.magnific-popup.min.js"></script>
 <script src="main_master/js/aos.js"></script>
 <script src="main_master/js/jquery.animateNumber.min.js"></script>
 <script src="main_master/js/bootstrap-datepicker.js"></script>
 <script src="main_master/js/jquery.timepicker.min.js"></script>
 <script src="main_master/js/scrollax.min.js"></script>
 <script src="main_master/js/main.js?v={{ time() }}"></script>
 <script>
     $('.testimony-wrap').on('click', '.text', function(e) {
         $('.testimony-wrap .text').css({
             "height": "auto"
         });
         $('.testimony-wrap .text').addClass('text-wrap');
     });
     $('.testimony-wrap').on('click', '.text-wrap', function(e) {
         $('.testimony-wrap .text').css({
             "height": "200px"
         });
         $('.testimony-wrap .text').removeClass('text-wrap');
     });
     var url = window.location + "";
     var path = url.replace(window.location.protocol + "//" + window.location.host + "/", "");
     path = path.replace('public/', '');
     var index = path.indexOf("?");
     if (index >= 0) {
         var res = path.slice(0, index).split("/");
     } else {
         var res = path.split("/");
     }
     if (res[0] == "") {
         $('#home').addClass('active');
     }
     $(".navbar-nav .nav-item .nav-link").each(function() {
         if ((res[0]) == $(this).attr('href')) {
             $(this).parents('.nav-item').addClass('active');
         }
     });
 </script>
 </body>

 </html>
