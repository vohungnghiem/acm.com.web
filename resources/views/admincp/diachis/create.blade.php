@extends('admincp.layouts.light.master')
@section('title', 'Admincp | Tạo Địa chỉ')
@push('main') Địa chỉ @endpush
@push('item') {{__('admin.create')}} @endpush
@push('linkmain'){{ 'admincp/diachis' }}@endpush
@section('content')
    <div class="content-wrapper">
        @include('admincp.layouts.light.breadcrumb')
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <form method="POST" action="admincp/diachis/store" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h2 class="card-title">{{__('admin.create_form')}}</h2>
                                    <div class="card-tools nutluu">
                                        <button class="btn btn-sm btn-primary" type="submit"><i class="fas fa-save"></i> {{__('admin.confirm')}} </button>
                                        <a class="btn btn-sm btn-dark" href="admincp/diachis"><i class="fas fa-list"></i> {{__('admin.back_list')}} </a>
                                    </div>
                                </div>
                                <div class="row ml-0">
                                    <div class="form-group col-lg-6">
                                        <label> Tên chi nhánh TV </label>
                                        <input type="text" name="ten" value="{{ old('ten') }}" class="form-control" placeholder="Nhập tên" />
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label> Tên chi nhánh JP </label>
                                        <input type="text" name="tenjp" value="{{ old('tenjp') }}" class="form-control" placeholder="Nhập tên JP" />
                                    </div>
                                    <div class="form_group col-lg-6">
                                        <label> Địa chỉ</label>
                                        <textarea name="diachi" class="form-control" cols="30" rows="1"></textarea>
                                    </div>
                                    <div class="form_group col-lg-6">
                                        <label> Địa chỉ JP</label>
                                        <textarea name="diachijp" class="form-control" cols="30" rows="1"></textarea>
                                    </div>
                                    <div class="form-group col-lg-3">
                                        <label> Điện thoại </label>
                                        <input type="text" name="dienthoai" value="{{ old('dienthoai') }}" class="form-control" placeholder="Nhập điện thoại" />
                                    </div>
                                    <div class="form-group col-lg-3">
                                        <label> Fax </label>
                                        <input type="text" name="fax" value="{{ old('fax') }}" class="form-control" placeholder="Nhập fax" />
                                    </div>
                                    <div class="form-group col-lg-3">
                                        <label> Email </label>
                                        <input type="text" name="email" value="{{ old('email') }}" class="form-control" placeholder="Nhập email" />
                                    </div>
                                    <div class="form-group col-lg-3">
                                        <label> Website </label>
                                        <input type="text" name="website" value="{{ old('website') }}" class="form-control" placeholder="Nhập website" />
                                    </div>
                                    {{-- <div class="form-group col-lg-3">
                                        <label> id bản đồ </label>
                                        <input type="text" name="bando" value="{{ old('bando') }}" class="form-control" placeholder="Nhập id bản đồ" />
                                    </div> --}}
                                    <div class="card-body col-lg-2">
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
