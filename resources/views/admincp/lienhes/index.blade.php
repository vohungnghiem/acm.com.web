@extends('admincp.layouts.light.master')
@section('title', 'Admincp | Liên hệ')
@push('main') Trang chủ @endpush
@push('item') Liên hệ @endpush
@push('linkmain'){{'/'}}@endpush
@section('content')
    <div class="content-wrapper">
        @include('admincp.layouts.light.breadcrumb')
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">Liên hệ</h3>
                                <div class="card-tools">
                                    <a class="btn btn-sm btn-primary" href="admincp/lienhes/create"><i class="fas fa-plus"> </i> Tạo liên hệ</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <table id="myTable" class="table table-bordered table-striped dt-responsive nowrap" width="100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>

                                            <th>Họ và tên</th>
                                            <th>email</th>
                                            <th>Tiêu đề</th>
                                            <th>Số đt</th>
                                            <th>Nội dung</th>
                                            <th>Ngày nhận</th>
                                            <th>Trạng thái</th>
                                            <th>Tác vụ</th>
                                        </tr>
                                    </thead>
                                        @foreach ($lienhe as $key => $item)
                                            <tr>
                                                <td>{{++$key}}</td>
                                                <td>{{$item->hovaten}}</td>
                                                <td>{{$item->email}}</td>
                                                <td>{{$item->tieude}}</td>
                                                <td>{{$item->sodienthoai}}</td>
                                                <td>{{mysubstr($item->noidung,50)}}</td>
                                                <td>{{datevn($item->created_at)}}</td>
                                                <td>
                                                    @if ($item->tinhtrang == 1)
                                                        <div class="btn btn-xs btn-success btn-status" data-id={{$item->id}} data-toggle="tooltip" title="@lang('admin.update_status')">
                                                            <i class="fas fa-check"></i>
                                                        </div>
                                                    @else
                                                        <div class="btn btn-xs btn-warning btn-status" data-id={{$item->id}} data-toggle="tooltip" title="@lang('admin.update_status')">
                                                            <i class="fas fa-exclamation-circle"></i>
                                                        </div>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="admincp/lienhes/edit/{{$item->id}}" class="btn btn-xs btn-primary" data-toggle="tooltip" title="@lang('admin.update_info')">
                                                        <i class="fas fa-pen-nib"></i>
                                                    </a>
                                                    <div class="btn btn-xs btn-danger btn-destroy" data-id="{{$item->id}}" data-toggle="tooltip" title="@lang('admin.delete_info')"  >
                                                    <i class="fas fa-trash-alt"></i></div>
                                                </td>
                                            </tr>
                                        @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

@endsection
@push('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="admin_template/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="admin_template/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="admin_template/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <style>
        img {max-width:100% !important;}
    </style>
@endpush
@push('scripts')
    <!-- DataTables  & Plugins -->
    <script src="admin_template/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="admin_template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="admin_template/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="admin_template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script>
        $(function() {
            $.fn.dataTable.ext.errMode = 'throw';
            $('#myTable').DataTable({
                stateSave: true,
                processing: true,
                columns: [
                    { width: '5px'},
                    { width: '90%'},
                    { width: '90%'},
                    { width: '90%'},
                    { width: '90%'},
                    { width: '90%'},
                    { width: '90%'},
                    { width: '1%'},
                    { width: '1%'},
                ],
                search: {
                    "regex": true
                },
            });
        });


    </script>
    <script>
        status('admincp/lienhes');
        destroy('admincp/lienhes');
    </script>
@endpush
