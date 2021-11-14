@extends('admincp.layouts.light.master')
@section('title', 'Admincp | Tạo cảm nhận')
@push('main') Cảm nhận @endpush
@push('item') {{__('admin.create')}} @endpush
@push('linkmain'){{ 'admincp/camnhans' }}@endpush
@section('content')
    <div class="content-wrapper">
        @include('admincp.layouts.light.breadcrumb')
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <form method="POST" action="admincp/camnhans/store" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h2 class="card-title">{{__('admin.create_form')}}</h2>
                                    <div class="card-tools nutluu">
                                        <button class="btn btn-sm btn-primary" type="submit"><i class="fas fa-save"></i> {{__('admin.confirm')}} </button>
                                        <a class="btn btn-sm btn-dark" href="admincp/camnhans"><i class="fas fa-list"></i> {{__('admin.back_list')}} </a>
                                    </div>
                                </div>
                                <div class="row ml-0">
                                    <div class="form-group col-lg-4">
                                        <label> Tên học viên </label>
                                        <input type="text" name="tenhocvien" value="{{ old('tenhocvien') }}" class="form-control" placeholder="Nhập tên học viên" />
                                    </div>
                                    <div class="form-group col-lg-4">
                                        <label> Ngành nghề </label>
                                        <input type="text" name="nganhnghe" value="{{ old('nganhnghe') }}" class="form-control" placeholder="Nhập ngành nghề" />
                                    </div>
                                    <div class="form-group col-lg-4">
                                        <label> Ngành nghề JP</label>
                                        <input type="text" name="nganhnghejp" value="{{ old('nganhnghejp') }}" class="form-control" placeholder="Nhập ngành nghề JP" />
                                    </div>
                                    <div class="form_group col-lg-6">
                                        <label> Nội dung TV</label>
                                        <textarea name="noidung" class="form-control" cols="30" rows="5"></textarea>
                                    </div>
                                    <div class="form_group col-lg-6">
                                        <label> Nội dung JP</label>
                                        <textarea name="noidungjp" class="form-control" cols="30" rows="5"></textarea>
                                    </div>

                                    <div class="card-body col-lg-3">
                                        <div class="form-group">
                                            <label> Ngày xuất cảnh </label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"> <span class="input-group-text">ngày xuất cảnh</span> </div>
                                                <input type="text" name="ngayxuatcanh" value="{{date('d-m-Y')}}" class="form-control datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd-mm-yyyy" data-mask >
                                            </div>
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
    <script src="admin_template/plugins/inputmask/jquery.inputmask.js"></script>
    <script>
        $('.datemask').inputmask('dd-mm-yyyy', { 'placeholder': 'dd-mm-yyyy' });
        $('.number').inputmask('999,999,999', { numericInput: true });
    </script>
    <script src="vendor/tinymce/tinymce.min.js"></script>
    <script src="vendor/laravel-filemanager/js/stand-alone-button.js?v={{time()}}"></script>
    <script src="vendor/vhn_tinymce_filemanager.js?v={{time()}}"></script>
@endpush
