@extends('admincp.layouts.light.master')
@section('title', 'Admincp | Tạo Tin tức')
@push('main') Tin tức @endpush
@push('item') {{__('admin.create')}} @endpush
@push('linkmain'){{ 'admincp/tintucs' }}@endpush
@section('content')
    <div class="content-wrapper">
        @include('admincp.layouts.light.breadcrumb')
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <form method="POST" action="admincp/tintucs/store" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h2 class="card-title">{{__('admin.create_form')}}</h2>
                                    <div class="card-tools nutluu">
                                        <button class="btn btn-sm btn-primary" type="submit"><i class="fas fa-save"></i> {{__('admin.confirm')}} </button>
                                        <a class="btn btn-sm btn-dark" href="admincp/tintucs"><i class="fas fa-list"></i> {{__('admin.back_list')}} </a>
                                    </div>
                                </div>
                                <div class="row ml-0">
                                    <div class="form-group col-lg-6">
                                        <label> Tiêu đề TV </label>
                                        <input type="text" name="ten" value="{{ old('ten') }}" class="form-control" placeholder="Nhập tên" />
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label> Tiêu đề JP </label>
                                        <input type="text" name="tenjp" value="{{ old('tenjp') }}" class="form-control" placeholder="Nhập tên JP" />
                                    </div>
                                    <div class="form_group col-lg-6">
                                        <label> Mô tả TV</label>
                                        <textarea name="description" class="form-control" cols="30" rows="3"></textarea>
                                    </div>
                                    <div class="form_group col-lg-6">
                                        <label> Mô tả JP</label>
                                        <textarea name="descriptionjp" class="form-control" cols="30" rows="3"></textarea>
                                    </div>
                                    <div class="form_group col-lg-6">
                                        <label> Nội dung TV</label>
                                        <textarea name="noidung" class="tinymce" cols="30" rows="30"></textarea>
                                    </div>
                                    <div class="form_group col-lg-6">
                                        <label> Nội dung JP</label>
                                        <textarea name="noidungjp" class="tinymce" cols="30" rows="30"></textarea>
                                    </div>
                                    <div class="card-body col-lg-2">
                                        <div class="form-group">
                                            <label> Loại tin tức</label>
                                            <select name="id_loaitintuc" class="form-control select2bs4">
                                                <option value="1">Tin Tức</option>
                                                <option value="2">Điều dưỡng</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label> Hình ảnh </label>
                                            <div class="input-group">
                                                <div class="input-group-prepend lfm" data-input="thumbnail" data-preview="holder">
                                                    <span class="input-group-text btn btn-info"><i class="far fa-image"> </i> &nbsp; Chọn image</span>
                                                </div>
                                                <input id="thumbnail" class="form-control d-none" type="text" name="image">
                                            </div>
                                            <div id="holder"> </div>

                                        </div>
                                        <div class="form-group">
                                            <label> {{__('admin.status')}}</label>
                                            <input type="checkbox" name="status" checked data-bootstrap-switch data-off-color="danger" data-on-color="primary">
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
