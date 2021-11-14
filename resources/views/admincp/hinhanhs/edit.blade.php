@extends('admincp.layouts.light.master')
@section('title', 'Admincp | Chỉnh sửa hình ảnh')
@push('main') Hình ảnh @endpush
@push('hinhanh') {{__('admin.edit')}} @endpush
@push('linkmain'){{ 'admincp/hinhanhs' }}@endpush
@section('content')
    <div class="content-wrapper">
        @include('admincp.layouts.light.breadcrumb')
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <form method="POST" action="admincp/hinhanhs/{{$hinhanh->id}}/update" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h2 class="card-title">{{__('admin.edit_form')}}</h2>
                                    <div class="card-tools nutluu">
                                        <button class="btn btn-sm btn-primary" type="submit"><i class="fas fa-save"></i> {{__('admin.confirm')}} </button>
                                        <a class="btn btn-sm btn-dark" href="admincp/hinhanhs"><i class="fas fa-list"></i> {{__('admin.back_list')}} </a>
                                    </div>
                                </div>
                                <div class="row ml-0">
                                    <div class="form-group col-lg-4">
                                        <label> Tiêu đề TV </label>
                                        <input type="text" name="ten" value="{{ $hinhanh->ten }}" class="form-control" placeholder="Nhập tên" />
                                    </div>
                                    <div class="form-group col-lg-4">
                                        <label> Slug </label>
                                        <input type="text" name="slug" value="{{ $hinhanh->slug }}" class="form-control" placeholder="Nhập slug" />
                                    </div>
                                    <div class="form-group col-lg-4">
                                        <label> Tiêu đề TV </label>
                                        <input type="text" name="tenjp" value="{{ $hinhanh->tenjp }}" class="form-control" placeholder="Nhập tên Jp" />
                                    </div>
                                    <div class="card-body col-lg-2">
                                        <div class="form-group">
                                            <label>Hình ảnh </label>
                                            <div class="input-group">
                                                <div class="input-group-prepend lfm" data-input="thumbnail" data-preview="holder">
                                                    <span class="input-group-text btn btn-info"><i class="far fa-image"> </i> &nbsp; Chọn image</span>
                                                </div>
                                                @foreach (json_decode($hinhanh->hinhanh) as $item)
                                                    <input id="thumbnail" class="form-control d-none" type="text" name="image[]" value="{{$item}}">
                                                @endforeach

                                            </div>
                                            <div id="holder">
                                                @foreach (json_decode($hinhanh->hinhanh) as $item)
                                                    <img src="{{$item}}" style="height: 10rem;">
                                                @endforeach
                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <label> {{__('admin.status')}}</label>
                                            <input type="checkbox" name="status" @if ($hinhanh->stt == 1) checked @endif data-bootstrap-switch data-off-color="danger" data-on-color="primary">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@push('css')

@endpush
@push('scripts')
    <script src="vendor/tinymce/tinymce.min.js"></script>
    <script src="vendor/laravel-filemanager/js/stand-alone-button.js?v={{time()}}"></script>
    <script src="vendor/vhn_tinymce_filemanager.js?v={{time()}}"></script>
@endpush
