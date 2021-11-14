@extends('admincp.layouts.light.master')
@section('title', 'Admincp | Chỉnh sửa mxh')
@push('main') mxh @endpush
@push('item') {{__('admin.edit')}} @endpush
@push('linkmain'){{ 'admincp/mxhs' }}@endpush
@section('content')
    <div class="content-wrapper">
        @include('admincp.layouts.light.breadcrumb')
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <form method="POST" action="admincp/mxhs/{{$mxh->id}}/update" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h2 class="card-title">{{__('admin.edit_form')}}</h2>
                                    <div class="card-tools nutluu">
                                        <button class="btn btn-sm btn-primary" type="submit"><i class="fas fa-save"></i> {{__('admin.confirm')}} </button>
                                        <a class="btn btn-sm btn-dark" href="admincp/mxhs"><i class="fas fa-list"></i> {{__('admin.back_list')}} </a>
                                    </div>
                                </div>
                                <div class="row ml-0">

                                    <div class="card-body col-lg-10">
                                        <div class="form-group">
                                            <label> Tên TV </label>
                                            <input type="text" name="ten" value="{{ $mxh->ten }}" class="form-control" placeholder="Nhập tên" />
                                        </div>
                                        <div class="form-group">
                                            <label> icon </label>
                                            <input type="text" name="icom" value="{{ $mxh->icon }}" class="form-control" placeholder="Nhập icon" />
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label> link </label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"> <span class="input-group-text">link</span> </div>
                                                <input type="text" name="link" value="{{$mxh->link}}" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label> Image </label>
                                            <div class="input-group">
                                                <div class="input-group-prepend lfm" data-input="thumbnail" data-preview="holder">
                                                    <span class="input-group-text btn btn-info"><i class="far fa-image"> </i> &nbsp; Chọn image</span>
                                                </div>
                                                <input id="thumbnail" class="form-control d-none" type="text" name="image" value="{{$mxh->image}}">
                                            </div>
                                            <div id="holder">
                                                <img src="{{$mxh->image}}" style="height: 10rem;">
                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <label> {{__('admin.status')}}</label>
                                            <input type="checkbox" name="status" @if ($mxh->stt == 1) checked @endif data-bootstrap-switch data-off-color="danger" data-on-color="primary">
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
