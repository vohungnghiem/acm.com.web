@extends('main.layouts.master')
    @section('title', "$detail->ten")
    @section('description', "$detail->ten")
    @section('content')
    <div class="hero-wrap hero-wrap-3" style="background-image: url('main_master/images/banner.jpg'); background-attachment:fixed;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-8 ftco-animate text-center fadeInUp ftco-animated">
                    <p class="breadcrumbs"><span class="mr-2"><a href="/">Trang chủ</a></span>
                        @if ($detail->id_loaitintuc == 1)
                            <span>TIN TỨC</span>
                        @elseif ($detail->id_loaitintuc == 2)
                            <span>ĐIỀU DƯỠNG</span>
                        @else
                            <span>TƯ VẤN DU HỌC</span>
                        @endif
                    </p>
                    <h1 class="mb-3 bread news-tintuc">{{$detail->ten}}</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="ftco-section ftco-degree-bg">
        <div class="container">
          <div class="row">
            <div class="col-md-8 ftco-animate fadeInUp ftco-animated ">
              {{-- <h2 class="mb-3">{{$detail->ten}}</h2> --}}
              <div class="news-wrap-p">
                {!!$detail->noidung!!}
                </div>
              <div class="tag-widget post-tag-container mb-5 mt-5">
                <div class="tagcloud">
                  <a href="tintuc" class="tag-cloud-link">Tin tức</a>
                  <a href="dieuduong" class="tag-cloud-link">Điều dưỡng</a>
                  <a href="donhang" class="tag-cloud-link">Đơn hàng</a>
                  <a href="tuvanduhoc" class="tag-cloud-link">Tư vấn du học</a>
                </div>
              </div>
            </div> <!-- .col-md-8 -->
            <div class="col-md-4 sidebar ftco-animate fadeInUp ftco-animated">
              <div class="sidebar-box">
                @if ($detail->id_loaitintuc == 1)
                    <form action="tintuc" class="search-form">
                        <div class="form-group">
                            <span class="icon fa fa-search"></span>
                            <input type="text" class="form-control" placeholder="Tìm kiếm tin tức">
                        </div>
                    </form>
                @elseif ($detail->id_loaitintuc == 2)
                    <form action="dieuduong" class="search-form">
                        <div class="form-group">
                            <span class="icon fa fa-search"></span>
                            <input type="text" class="form-control" placeholder="Tìm kiếm tin điều dưỡng">
                        </div>
                    </form>
                @else
                    <form action="tuvanduhoc" class="search-form">
                        <div class="form-group">
                            <span class="icon fa fa-search"></span>
                            <input type="text" class="form-control" placeholder="Tìm kiếm tư vấn du học">
                        </div>
                    </form>
                @endif

              </div>
              <div class="sidebar-box ftco-animate fadeInUp ftco-animated">
                <div class="categories">
                  <h3>Bài viết liên quan</h3>
                  <li><a href="tintuc">Tin tức <span>({{$counttt}})</span></a></li>
                  <li><a href="dieuduong">Tin điều dưỡng <span>({{$countdd}})</span></a></li>
                  <li><a href="donhang">Đơn hàng <span>({{$countdh}})</span></a></li>
                  <li><a href="tuvanduhoc">Tư vấn du học <span>({{$counttvdh}})</span></a></li>
                </div>
              </div>

              <div class="sidebar-box ftco-animate fadeInUp ftco-animated">
                <h3>Tin gần đây</h3>
                @if ($detail->id_loaitintuc == 1)
                    @foreach ($tintuc as $item)
                    <div class="block-21 mb-4 d-flex">
                        <a href="tintuc/{{$item->slug}}" class="blog-img mr-4" style="background-image: url('{{$item->image}}');"></a>
                        <div class="text">
                            <h3 class="heading"><a href="tintuc/{{$item->slug}}" class="text-dot">{{$item->ten}}</a></h3>
                            <div class="meta">
                                <div><a href="#"><span class="bi bi-calendar"></span> {!! date('d/m/Y',strtotime($item->created_at)) !!}</a></div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <p class="text-center">
                        <a href="tintuc" class="btn btn-primary">Xem thêm tin tức</a>
                    </p>
                @elseif (($detail->id_loaitintuc == 2))
                    @foreach ($dieuduong as $item)
                        <div class="block-21 mb-4 d-flex">
                            <a href="tintuc/{{$item->slug}}" class="blog-img mr-4" style="background-image: url('{{$item->image}}');"></a>
                            <div class="text">
                                <h3 class="heading"><a href="tintuc/{{$item->slug}}">{{$item->ten}}</a></h3>
                                <div class="meta">
                                    <div><a href="#"><span class="bi bi-calendar"></span> {!! date('d/m/Y',strtotime($item->created_at)) !!}</a></div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <p class="text-center">
                        <a href="dieuduong" class="btn btn-primary">Xem thêm điều dưỡng</a>
                    </p>
                @else
                    @foreach ($tuvanduhoc as $item)
                        <div class="block-21 mb-4 d-flex">
                            <a href="tintuc/{{$item->slug}}" class="blog-img mr-4" style="background-image: url('{{$item->image}}');"></a>
                            <div class="text">
                                <h3 class="heading"><a href="tintuc/{{$item->slug}}">{{$item->ten}}</a></h3>
                                <div class="meta">
                                    <div><a href="#"><span class="bi bi-calendar"></span> {!! date('d/m/Y',strtotime($item->created_at)) !!}</a></div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <p class="text-center">
                        <a href="tuvanduhoc" class="btn btn-primary">Xem thêm tư vấn du học</a>
                    </p>
                @endif
              </div>

            </div>

          </div>
        </div>
      </section>
@endsection
