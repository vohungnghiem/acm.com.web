@extends('main.layouts.master')
@section('title', 'Giấy phép')
@section('description', __('messages.layout-giayphep'))
@section('content')
<div class="hero-wrap hero-wrap-2" style="background-image: url('main_master/images/banner.jpg'); background-attachment:fixed;">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-8 ftco-animate text-center fadeInUp ftco-animated">
                <p class="breadcrumbs"><span class="mr-2"><a href="/">Trang chủ</a></span> <span>GIẤY PHÉP</span></p>
                <h1 class="mb-3 bread">GIẤY PHÉP</h1>
            </div>
        </div>
    </div>
</div>
<section class="ftco-section">
    <div class="container">
        <div class="row">
            <img src="main_template/img/giayphep.png" alt="giay-phep" style="width:100%">
        </div>
    </div>
</section>
@endsection
