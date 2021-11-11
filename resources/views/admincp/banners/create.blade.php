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
                                            <textarea id="timymce" name="tinymce" rows="30"></textarea>
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
<script src="tinymce/tinymce.min.js"></script>
<script>
    tinymce.baseURL = "tinymce";
    tinymce.init({
        selector: "textarea#timymce",
        plugins: [
        "image",
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | lignleft aligncenter alignright alignjustify | bullist numlist outdent indent | image",
        file_picker_callback: function (callback, value, meta) {
        let x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
        let y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

        let type = 'image' === meta.filetype ? 'Images' : 'Files',
            url  = '/laravel-filemanager?editor=tinymce5&type=' + type;

        tinymce.activeEditor.windowManager.openUrl({
            url : url,
            title : 'Filemanager',
            width : x * 0.9,
            height : y * 1,
            onMessage: (api, message) => {
                callback(message.content);
            }
        });
    }
    });
</script>
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
