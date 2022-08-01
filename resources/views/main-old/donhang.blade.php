@extends('main.layouts.master')
@section('title', __('main.home-donhang-title3'))
@section('description', __('main.home-donhang-title3'))
@section('content')
<main>
    <section class="page-banner"><img src="main_template/img/banner.jpg" alt="banner.jpg"></section>
    <section class="don-hang">
        <h2 class="title text-center">@lang('main.home-donhang-title1')</h2>
        <div class="container">
            <div class="row">
                <div class="table-wrap">
                    <table id="example">
                        <thead>
                            <tr>
                                {{-- <th>@lang('main.home-donhang-title2')</th> --}}
                                <th>@lang('main.home-donhang-title3')</th>
                                <th>@lang('main.home-donhang-title4')</th>
                                <th>@lang('main.home-donhang-title5')</th>
                                <th>@lang('main.home-donhang-title6')</th>
                                <th>@lang('main.home-donhang-title7')</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($donhang as $item)
                                <tr>
                                    {{-- <td><a href="donhang/{{$item->id}}">{{$item->job}}</a></td> --}}
                                    <td><a href="donhang/{{$item->id}}">{{'['.$item->job.']'.$item->ten }}</a></td>
                                    <td><span>{{$item->salary_receive}}</span></td>
                                    <td><span>{{$item->degree}}</span></td>
                                    <td><a href="donhang/{{$item->id}}">{{$item->address}}</a></td>
                                    <td> {{$item->day_start}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection
