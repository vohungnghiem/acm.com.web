@extends('main.layouts.master')
@section('title', 'Giấy phép')
@section('description', __('messages.layout-giayphep'))
@section('content')
<section class="ftco-section" style="padding-top: 30px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Giấy phép kinh doanh</h4>
                <iframe src="{{url('main_master/files/giayphep/GPDKKD.pdf')}}"  type="application/pdf"
                width="100%" height="800px"></iframe>

                <br>
                <h4>Giấy phép tư vấn du học</h4>
                <iframe src="{{url('main_master/files/giayphep/GPTVDH.pdf')}}"  type="application/pdf"
                width="100%" height="800px"></iframe>
                <br>
                <h4>Giấy phép dịch vụ hoạt động giới thiệu việc làm</h4>
                <iframe src="{{url('main_master/files/giayphep/GPDVHDGTVL.pdf')}}"  type="application/pdf"
                width="100%" height="800px"></iframe>
            </div>
        </div>
    </div>
</section>
@endsection
