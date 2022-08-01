@extends('main.layouts.master')
@section('title', __('main.gioithieu'))
@section('description', __('main.gioithieu'))
@section('content')
<main>
<section class="img-gioithieu" style="padding-top: 100px">
	<div class="container">
		@if(App::getLocale() == 'vi')
            <img style="width: 100%;" src="main_template/img/gioithieu-tv.jpg" alt="">
        @else
            <img style="width:100%;" src="main_template/img/gioithieu2.jpg" alt="">
            <img style="width:100%;" src="main_template/img/gioithieu3.jpg" alt="">
            <img style="width:100%;" src="main_template/img/gioithieu4.jpg" alt="">
            <img style="width:100%;" src="main_template/img/gioithieu5.jpg" alt="">
            <img style="width:100%;" src="main_template/img/gioithieu6.jpg" alt="">
            <img style="width:100%;" src="main_template/img/gioithieu1.jpg" alt="">
        @endif
	</div>
</section>
</main>
@endsection
