@extends('admincp.layouts.light.master')
@section('title', 'Admincp | Chỉnh sửa Mục tiêu')
@push('main') Mục tiêu @endpush
@push('item') {{__('admin.edit')}} @endpush
@push('linkmain'){{ 'admincp/muctieus' }}@endpush
@section('content')
    <div class="content-wrapper">
        @include('admincp.layouts.light.breadcrumb')
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <form method="POST" action="admincp/muctieus/{{$muctieu->id}}/update" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h2 class="card-title">{{__('admin.edit_form')}}</h2>
                                    <div class="card-tools nutluu">
                                        <button class="btn btn-sm btn-primary" type="submit"><i class="fas fa-save"></i> {{__('admin.confirm')}} </button>
                                        <a class="btn btn-sm btn-dark" href="admincp/muctieus"><i class="fas fa-list"></i> {{__('admin.back_list')}} </a>
                                    </div>
                                </div>
                                <div class="row ml-0">
                                    <div class="form-group col-lg-6">
                                        <label> Tên TV </label>
                                        <input type="text" name="ten" value="{{ $muctieu->ten }}" class="form-control" placeholder="Nhập tên" />
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label> Tên JP </label>
                                        <input type="text" name="tenjp" value="{{ $muctieu->tenjp }}" class="form-control" placeholder="Nhập tên JP" />
                                    </div>
                                    <div class="form_group col-lg-6">
                                        <label> Nội dung TV</label>
                                        <textarea name="noidung" class="tinymce" cols="30" rows="10">{!!$muctieu->noidung!!}</textarea>
                                    </div>
                                    <div class="form_group col-lg-6">
                                        <label> Nội dung JP</label>
                                        <textarea name="noidungjp" class="tinymce" cols="30" rows="10">{!!$muctieu->noidungjp!!}</textarea>
                                    </div>
                                    <div class="card-body col-lg-2">
                                        <div class="form-group">
                                            <label> {{__('admin.status')}}</label>
                                            <input type="checkbox" name="status" @if ($muctieu->stt == 1) checked @endif data-bootstrap-switch data-off-color="danger" data-on-color="primary">
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
