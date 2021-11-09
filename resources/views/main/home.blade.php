@extends('main.layouts.master')

    @section('title', __('main.trangchu'))
    @section('description',__('main.trangchu'))
    @section('content')

    <main>
        @include('main.home.banner')
        {{-- @include('main.home.donhang') --}}
        @include('main.home.gioithieu')
        @include('main.home.muctieu')
        @include('main.home.hoso')
        @include('main.home.camnhan')
        @include('main.home.tintuc')
        @include('main.home.truonghoc')
        @include('main.home.hinhanh')
        @include('main.home.lienhe')
        {{-- <section class="lien-he">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2 class="title">liên hệ với chúng tôi</h2>
                        <form class="contact-form" method="post">
                            <div class="form-item">
                                <input type="text" placeholder="Nhập họ và tên">
                            </div>
                            <div class="form-item">
                                <input type="text" placeholder="exemple@email.com">
                            </div>
                            <div class="form-item">
                                <input type="text" placeholder="Nhập tiêu đề">
                            </div>
                            <div class="form-item">
                                <input type="text" placeholder="Nhập Số điện thoại">
                            </div>
                            <div class="form-item">
                                <textarea id="content" placeholder="Nhập nội dung..."></textarea>
                            </div>
                            <input class="contact-send" type="submit" value="GỬI">
                        </form>
                    </div>
                    <div class="col-md-8">
                        <div class="box-img"><img src="main_template/img/header-banner.png" alt="header-banner">
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
    </main>
@endsection

