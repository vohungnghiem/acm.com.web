@extends('main.layouts.master')
@section('title', __('main.layout-tintuc-title3'))
@section('description', __('main.layout-tintuc-title3'))
@section('content')
<div class="hero-wrap hero-wrap-2" style="background-image: url('main_master/images/banner.jpg'); background-attachment:fixed;">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-8 ftco-animate text-center fadeInUp ftco-animated">
                <p class="breadcrumbs"><span class="mr-2"><a href="/">Trang chủ</a></span> <span>TƯ VẤN DU HỌC</span></p>
                <h1 class="mb-3 bread">TƯ VẤN DU HỌC</h1>
            </div>
        </div>
    </div>
</div>
<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h2 class="mb-3">TIN TỨC TƯ VẤN DU HỌC</h2>
                <div class="row d-flex">
                    @foreach ($tintucs as $item)
                    <div class="col-md-4 d-flex ftco-animate fadeInUp ftco-animated">
                        <div class="blog-entry align-self-stretch">
                            <a href="tintuc/{{ $item->slug }}">
                                <img src="{{$item->image }}" alt="acmjinzai" style="width: 100%;">
                            </a>
                            <div class="text p-4 d-block">
                                <div class="meta mb-3">
                                    <div><a href="tintuc/{{ $item->slug }}">
                                        <i class="bi bi-calendar"></i> {!! date('d/m/Y',strtotime($item->created_at)) !!}
                                    </a></div>
                                </div>
                                <h6 class="heading mt-3"><a href="tintuc/{{ $item->slug }}" class="text-dot">{{$item->ten}}</a></h6>
                                <p class="text-dot">{{$item->description}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="mt-5">
                    <div class="col text-center">
                        <div class="block-27">
                           {{$tintucs->onEachSide(1)->links('vendor/pagination/default')}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <h4 class="mb-3">TIN TỨC CŨ HƠN</h4>
                @if (count($tintucorther) > 0)
                    @foreach ($tintucorther as $item)
                    <div class="block-21 ttdd mb-4 d-flex">
                        <div class="text">
                            <h5 class="heading"><a href="tintuc/{{ $item->slug }}" class="text-dot">{{$item->ten}}</a></h5>
                            <div class="meta">
                                <div><a href="tintuc/{{ $item->slug }}">
                                    <i class="bi bi-calendar"></i> {!! date('d/m/Y',strtotime($item->created_at)) !!}
                                </a></div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @else
                <div class="block-21 ttdd mb-4 d-flex">
                    <div class="text">
                        <div class="meta">
                            <div>chưa có tin tức cũ hơn</div>
                        </div>
                    </div>
                </div>
                @endif

            </div>
        </div>
    </div>

</div>
</section>
@endsection
