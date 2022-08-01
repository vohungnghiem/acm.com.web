@extends('main.layouts.master')
@section('title', __('main.gioithieu'))
@section('description', __('main.gioithieu'))
@section('content')
<section>
	<div class="container">
		@if(App::getLocale() == 'vi')
            <img style="width: 100%;" src="main_master/images/gioithieu/gioithieu-tv.jpg" alt="">
        @else
            <img style="width:100%;" src="main_master/images/gioithieu/gioithieu2.jpg" alt="">
            <img style="width:100%;" src="main_master/images/gioithieu/gioithieu3.jpg" alt="">
            <img style="width:100%;" src="main_master/images/gioithieu/gioithieu4.jpg" alt="">
            <img style="width:100%;" src="main_master/images/gioithieu/gioithieu5.jpg" alt="">
            <img style="width:100%;" src="main_master/images/gioithieu/gioithieu6.jpg" alt="">
            <img style="width:100%;" src="main_master/images/gioithieu/gioithieu1.jpg" alt="">
        @endif
	</div>
</section>
@endsection
