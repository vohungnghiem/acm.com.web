@extends('admincp.layouts.light.master')
@section('title', 'Admincp | Tạo Menu')
@push('main') Menu @endpush
@push('item') {{__('admin.create')}} @endpush
@push('linkmain'){{ 'admincp/banners' }}@endpush
@section('content')
    <div class="content-wrapper">
        @include('admincp.layouts.light.breadcrumb')
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <form method="POST" action="admincp/banners/store" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h2 class="card-title">{{__('admin.create_form')}}</h2>
                                    <div class="card-tools nutluu">
                                        <button class="btn btn-sm btn-primary" type="submit"><i class="fas fa-save"></i> {{__('admin.confirm')}} </button>
                                        <a class="btn btn-sm btn-dark" href="admincp/banners"><i class="fas fa-list"></i> {{__('admin.back_list')}} </a>
                                    </div>
                                </div>
                                <div class="row ml-0">

                                    <div class="card-body col-lg-10">
                                        {{-- <div class="form-group">
                                            <label> Tên TV </label>
                                            <input type="text" name="ten" value="{{ old('ten') }}" class="form-control" placeholder="Nhập tên" />
                                        </div>
                                        <div class="form-group">
                                            <label> Tên JP </label>
                                            <input type="text" name="tenjp" value="{{ old('tenjp') }}" class="form-control" placeholder="Nhập tên JP" />
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label> link (slug) - lập trình viên mới sửa thôi</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"> <span class="input-group-text">link</span> </div>
                                                <input type="text" name="link" value="{{ old('link') }}" class="form-control" >
                                            </div>
                                        </div> --}}
                                        <div class="form-group">
                                            <textarea class="timymce" name="tinymce" rows="10"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-btn">
                                                  <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                                    <i class="fa fa-picture-o"></i> Choose
                                                  </a>
                                                </span>
                                                <input id="thumbnail" class="form-control" type="text" name="filepath">
                                              </div>
                                                <div  id="holder">
                                                    {{-- <img src="/storage/photos/2/FILE GHEP_000.jpg" style="height: 5rem;"> --}}
                                                </div>
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
<style>
    .file {
        visibility: hidden;
        position: absolute;
    }
</style>
@endpush
@push('scripts')
<script src="vendor/tinymce/tinymce.min.js"></script>
<script src="vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script src="vendor/vhn_tinymce_filemanager.js"></script>


<script src="admin_template/plugins/inputmask/jquery.inputmask.js"></script>
<script>
    $('.datemask').inputmask('dd-mm-yyyy', { 'placeholder': 'dd-mm-yyyy' });
    $('.number').inputmask('999,999,999', { numericInput: true });
</script>
<script>
    $(document).on("click", ".browse", function() {
        var file = $(this).parents().find(".file");
        file.trigger("click");
    });
    $('.file').change(function(e) {
        var fileName = e.target.files[0].name;
        $("#file").val(fileName);
        var reader = new FileReader();
    });
</script>
@endpush
