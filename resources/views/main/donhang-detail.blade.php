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
                <h1 class="mb-3 bread">{{$donhang->ten}}</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h2 class="mb-3"><i class="bi bi-card-heading"></i> {{$donhang->ten}}</h2>
                <div class="row donhang-detail">
                    <div class="col-md-4 mt-3"><b><i class="bi bi-check"></i> Địa chỉ làm việc: </b></div>
                    <div class="col-md-8 mt-3"><span>{{$donhang->address}}</span></div>
                    <div class="col-md-4 mt-3"><b><i class="bi bi-check"></i> Công việc: </b></div>
                    <div class="col-md-8 mt-3"><span>{{$donhang->job}}</span></div>
                    <div class="col-md-4 mt-3"><b><i class="bi bi-check"></i> Thời gian làm việc: </b></div>
                    <div class="col-md-8 mt-3"><span>{{$donhang->work_time}}</span></div>
                    <div class="col-md-4 mt-3"><b><i class="bi bi-check"></i> Lương cơ bản: </b></div>
                    <div class="col-md-8 mt-3"><span>{{$donhang->salary_base}}</span></div>
                    <div class="col-md-4 mt-3"><b><i class="bi bi-check"></i> Phí phải trả: </b></div>
                    <div class="col-md-8 mt-3"><span>{{$donhang->salary_deduct}}</span></div>
                    <div class="col-md-4 mt-3"><b><i class="bi bi-check"></i> Lương thực nhận: </b></div>
                    <div class="col-md-8 mt-3"><span>{{$donhang->salary_receive}}</span></div>
                    <div class="col-md-4 mt-3"><b><i class="bi bi-check"></i>Số lượng cần tuyển: </b></div>
                    <div class="col-md-8 mt-3"><span>{{$donhang->amount}}</span></div>
                    <div class="col-md-4 mt-3"><b><i class="bi bi-check"></i> Trình độ: </b></div>
                    <div class="col-md-8 mt-3"><span>{{$donhang->degree}}</span></div>
                </div>
                <div class="text-center m-5">
                    <a class="btn btn-primary" href="https://www.messenger.com/t/acmjinzai" target="_blank">Ứng tuyển qua messenger</a>
                    <div class="btn btn-secondary" data-toggle="modal" data-target="#applyNow">Ứng tuyển ngay</div>
                </div>
            </div>
            <div class="col-md-3">
                <h4 class="mb-3 text-primary">ĐƠN HÀNG KHÁC</h4>
                @foreach ($donhangs as $item)
                <div class="block-21 ttdd mb-4 d-flex">
                    <div class="text">
                        <h6 class="heading"><a href="donhang/{{$item->id}}" class="text-secondary"><i class="bi bi-card-heading"></i> {{$item->ten}}</a></h6>
                        <div class="meta">
                            <div><a href="donhang/{{$item->id}}"><span class="bi-calendar"></span> {{$item->day_start}}</a></div>
                            <div><a href="donhang/{{$item->id}}"><span class="bi bi-three-dots"></span> {{$item->job}}</a></div>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="text-center m-5"><a class="btn btn-secondary" href="donhang">Xem đơn hàng khác</a></div>
            </div>
        </div>
    </div>
</section>
@endsection
