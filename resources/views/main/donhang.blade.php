@extends('main.layouts.master')
@section('title', __('main.home-donhang-title3'))
@section('description', __('main.home-donhang-title3'))
@section('content')
<div class="hero-wrap hero-wrap-2" style="background-image: url('main_master/images/banner.jpg'); background-attachment:fixed;">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-8 ftco-animate text-center fadeInUp ftco-animated">
                <p class="breadcrumbs"><span class="mr-2"><a href="/">Trang chủ</a></span> <span>ĐƠN HÀNG</span></p>
                <h1 class="mb-3 bread">DANH SÁCH ĐƠN HÀNG</h1>
            </div>
        </div>
    </div>
</div>
<section class="container mb-5 mt-5">
    <h2 class="text-center mb-4">DANH SÁCH ĐƠN HÀNG</h2>
    <div class="section-donhang">
        <div class="donhang-info">
            <div class="w-400">
                TÊN ĐƠN HÀNG
            </div>
            <div class="w-200">
                Mức lương
            </div>
            <div class="w-200">
                Yêu cầu
            </div>
            <div class="w-200">
                Nơi làm việc
            </div>
            <div class="w-200">
                Ngày tuyển
            </div>
        </div>
        @foreach ($donhangs as $item)
        <div class="donhang-info">
            <div class="w-400">
               <a href="donhang/{{$item->id}}" class="text-dark text-dot">{{'['.$item->job.'] '.$item->ten }}</a>
            </div>
            <div class="w-200">
                <span class="text-dark">{{$item->salary_receive}}</span>
            </div>
            <div class="w-200">
                <span class="text-dark">{{$item->degree}}</span>
            </div>
            <div class="w-200">
                <span class="text-dark">{{$item->address}}</span>
            </div>
            <div class="w-200">
                <span class="text-dark">{{$item->day_start}}</span>
            </div>
        </div>
        @endforeach
    </div>
    <div class="row mt-5">
        <div class="col text-center">
          <div class="block-27">
            {{$donhangs->onEachSide(1)->links('vendor.pagination.default')}}
          </div>
        </div>
      </div>
</section>
@endsection
