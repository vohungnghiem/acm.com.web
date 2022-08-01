@extends('admincp.layouts.light.master')
@section('title', 'Admincp | Tạo Đơn hàng')
@push('main') Đơn hàng @endpush
@push('item') {{__('admin.create')}} @endpush
@push('linkmain'){{ 'admincp/donhangs' }}@endpush
@section('content')
    <div class="content-wrapper">
        @include('admincp.layouts.light.breadcrumb')
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <form method="POST" action="admincp/donhangs/store" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h2 class="card-title">Thêm đơn hàng</h2>
                                    <div class="card-tools nutluu">
                                        <button class="btn btn-sm btn-primary" type="submit"><i class="fas fa-save"></i> {{__('admin.confirm')}} </button>
                                        <a class="btn btn-sm btn-dark" href="admincp/donhangs"><i class="fas fa-list"></i> {{__('admin.back_list')}} </a>
                                    </div>
                                </div>
                                <div class="row ml-0">

                                    <div class="card-body col-lg-10">
                                        <div class="form-group">
                                            <label> Tên Đơn Hàng </label>
                                            <input type="text" name="ten" value="{{ old('ten') }}" class="form-control" placeholder="Nhập tên" />
                                        </div>
                                        <div class="form-group">
                                            <label> Địa chỉ làm việc </label>
                                            <input type="text" name="address" value="{{ old('address') }}" class="form-control" placeholder="Nhập địa chỉ làm việc" />
                                        </div>
                                        <div class="form-group">
                                            <label> Công việc </label>
                                            <input type="text" name="job" value="{{ old('job') }}" class="form-control" placeholder="Nhập Công việc" />
                                        </div>
                                        <div class="form-group">
                                            <label> Thời gian làm việc </label>
                                            <input type="text" name="work_time" value="{{ old('work_time') }}" class="form-control" placeholder="Thời gian làm việc" />
                                        </div>
                                        <div class="form-group">
                                            <label> Lương cơ bản </label>
                                            <input type="text" name="salary_base" value="{{ old('salary_base') }}" class="form-control" placeholder="Nhập lương cơ bản" />
                                        </div>
                                        <div class="form-group">
                                            <label> Phí phải trả </label>
                                            <input type="text" name="salary_deduct" value="{{ old('salary_deduct') }}" class="form-control" placeholder="Nhập phí phải trả" />
                                        </div>
                                        <div class="form-group">
                                            <label> Lương thực nhận </label>
                                            <input type="text" name="salary_receive" value="{{ old('salary_receive') }}" class="form-control" placeholder="Nhập lương thực nhận" />
                                        </div>
                                        <div class="form-group">
                                            <label> Số lượng cần tuyển </label>
                                            <input type="text" name="amount" value="{{ old('amount') }}" class="form-control" placeholder="Nhập số lượng cần tuyển" />
                                        </div>
                                        <div class="form-group">
                                            <label> Trình độ </label>
                                            <input type="text" name="degree" value="{{ old('degree') }}" class="form-control" placeholder="Nhập trình độ" />
                                        </div>
                                        <div class="form-group">
                                            <label> Ngày tuyển </label>
                                            <input type="text" name="day_start" value="{{ old('day_start') }}" class="form-control" placeholder="Nhập ngày tuyển" />
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
