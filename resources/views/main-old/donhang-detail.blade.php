@extends('main.layouts.master')
@section('title', __('main.home-donhang-title3'))
@section('description', __('main.home-donhang-title3'))
@section('content')
<main>
    <section class="page-banner"><img src="main_template/img/banner.jpg" alt="banner.jpg"></section>
    <section class="don-hang">
        <h2 class="title text-center">Thông tin đơn hàng</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h2 class="sub-title color-title">{{$donhang->ten}}</h2>
                    <div class="line"></div>
                    <div class="row donhang-detail">
                        <div class="col-md-4 mt-3"><b>Địa chỉ làm việc: </b></div>
                        <div class="col-md-8 mt-3"><span>{{$donhang->address}}</span></div>
                        <div class="col-md-4 mt-3"><b>Công việc: </b></div>
                        <div class="col-md-8 mt-3"><span>{{$donhang->job}}</span></div>
                        <div class="col-md-4 mt-3"><b>Thời gian làm việc: </b></div>
                        <div class="col-md-8 mt-3"><span>{{$donhang->work_time}}</span></div>
                        <div class="col-md-4 mt-3"><b>Lương cơ bản: </b></div>
                        <div class="col-md-8 mt-3"><span>{{$donhang->salary_base}}</span></div>
                        <div class="col-md-4 mt-3"><b>Phí phải trả: </b></div>
                        <div class="col-md-8 mt-3"><span>{{$donhang->salary_deduct}}</span></div>
                        <div class="col-md-4 mt-3"><b>Lương thực nhận: </b></div>
                        <div class="col-md-8 mt-3"><span>{{$donhang->salary_receive}}</span></div>
                        <div class="col-md-4 mt-3"><b>Số lượng cần tuyển: </b></div>
                        <div class="col-md-8 mt-3"><span>{{$donhang->amount}}</span></div>
                        <div class="col-md-4 mt-3"><b>Trình độ: </b></div>
                        <div class="col-md-8 mt-3"><span>{{$donhang->degree}}</span></div>
                    </div>
                    <div class="text-center m-5"><a class="btn-apply" href="https://www.messenger.com/t/acmjinzai" target="_blank">Apply đơn hàng</a></div>
                </div>
                <div class="col-md-3">
                    <h2 class="sub-title color-title">Đơn hàng khác</h2>
                    <div class="line"></div>
                    <div class="donhang-khac">
                        @foreach ($donhangs as $item)
                        <div class="item">
                            <a class="item-title" href="donhang/{{$item->id}}">
                                {{$item->ten}}
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection
