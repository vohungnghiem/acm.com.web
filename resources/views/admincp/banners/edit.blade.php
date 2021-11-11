@extends('admincp.layouts.light.master')
@section('title', 'Admincp | Chỉnh sửa Menu')
@push('main') Menu @endpush
@push('item') {{__('admin.edit')}} @endpush
@push('linkmain'){{ 'admincp/menus' }}@endpush
@section('content')
    <div class="content-wrapper">
        @include('admincp.layouts.light.breadcrumb')
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <form method="POST" action="admincp/menus/{{$menu->id}}/update" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h2 class="card-title">{{__('admin.edit_form')}}</h2>
                                    <div class="card-tools nutluu">
                                        <button class="btn btn-sm btn-primary" type="submit"><i class="fas fa-save"></i> {{__('admin.confirm')}} </button>
                                        <a class="btn btn-sm btn-dark" href="admincp/menus"><i class="fas fa-list"></i> {{__('admin.back_list')}} </a>
                                    </div>
                                </div>
                                <div class="row ml-0">

                                    <div class="card-body col-lg-10">
                                        <div class="form-group">
                                            <label> Tên TV </label>
                                            <input type="text" name="ten" value="{{ $menu->ten }}" class="form-control" placeholder="Nhập tên" />
                                        </div>
                                        <div class="form-group">
                                            <label> Tên JP </label>
                                            <input type="text" name="tenjp" value="{{ $menu->tenjp }}" class="form-control" placeholder="Nhập tên JP" />
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label> link (slug) - lập trình viên mới sửa thôi</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"> <span class="input-group-text">link</span> </div>
                                                <input type="text" name="link" value="{{$menu->link}}" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label> {{__('admin.status')}}</label>
                                            <input type="checkbox" name="status" @if ($menu->stt == 1) checked @endif data-bootstrap-switch data-off-color="danger" data-on-color="primary">
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

    $('#remove_img').click(function (e) {
        $('#file_hidden').val('default');
        $('#preview').remove();
    });

    xoaImg('phieus');
</script>
@endpush
