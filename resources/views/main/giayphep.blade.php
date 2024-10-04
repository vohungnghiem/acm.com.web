@extends('main.layouts.master')
@section('title', 'Giấy phép')
@section('description', __('messages.layout-giayphep'))
@section('content')
{{-- <div class="hero-wrap hero-wrap-2" style="background-image: url('main_master/images/banner.jpg'); background-attachment:fixed;">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-8 ftco-animate text-center fadeInUp ftco-animated">
                <p class="breadcrumbs"><span class="mr-2"><a href="/">Trang chủ</a></span> <span>GIẤY PHÉP</span></p>
                <h1 class="mb-3 bread">GIẤY PHÉP</h1>
            </div>
        </div>
    </div>
</div> --}}
<section class="ftco-section" style="padding-top: 30px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Giấy phép kinh doanh</h4>
                <iframe src="{{url('main_master/files/giayphep/GPDKKD.pdf')}}" class="d-none d-xl-block" type="application/pdf"
                width="100%" height="800px"></iframe>

                <br>
                <h4>Giấy phép tư vấn du học</h4>
                <iframe src="{{url('main_master/files/giayphep/GPTVDH.pdf')}}" class="d-none d-xl-block" type="application/pdf"
                width="100%" height="800px"></iframe>

            </div>
        </div>
    </div>
</section>
@endsection

{{-- @push('custom-js') --}}

{{-- @endpush --}}
