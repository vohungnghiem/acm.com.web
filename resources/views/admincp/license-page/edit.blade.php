@extends('admincp.layouts.light.master')
@section('title', 'Admincp | Chỉnh sửa giấy phép kinh doanh')
@push('main')
    giấy phép kinh doanh
@endpush
@push('item')
    {{ __('admin.edit') }}
@endpush
@push('linkmain')
    {{ 'admincp/license-page' }}
@endpush
@section('content')
    <div class="content-wrapper">
        @include('admincp.layouts.light.breadcrumb')
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <form method="POST" action="admincp/license-page/{{ $licensePage->id }}/update" autocomplete="off"
                            enctype="multipart/form-data">
                            @csrf
                             <input type="hidden" name="id" value="{{ $licensePage->id }}">
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h2 class="card-title">{{ __('admin.edit_form') }}</h2>
                                    <div class="card-tools nutluu">
                                        <button class="btn btn-sm btn-primary" type="submit"><i class="fas fa-save"></i>
                                            {{ __('admin.confirm') }} </button>
                                        <a class="btn btn-sm btn-dark" href="admincp/license-page"><i
                                                class="fas fa-list"></i> {{ __('admin.back_list') }} </a>
                                    </div>
                                </div>
                                <div class="row ml-0">

                                    <div class="card-body col-lg-10">
                                        <div class="form-group">
                                            <label> Tên giấy phép kinh doanh </label>
                                            <input type="text" name="name" value="{{ $licensePage->name }}"
                                                class="form-control" placeholder="Nhập tên" />
                                        </div>
                                        <div class="form-group">
                                            <label> mã giấy phép </label>
                                            <input type="text" name="code"
                                                value="{{ old('code', $licensePage->code) }}" class="form-control"
                                                placeholder="Nhập mã giấy phép" />
                                        </div>
                                        <div class="form-group">
                                            <label>tiêu đề giấy phép </label>
                                            <input type="text" name="title"
                                                value="{{ old('title', $licensePage->title) }}" class="form-control"
                                                placeholder="Nhập tiêu đề giấy phép" />
                                        </div>
                                        <div class="col-md-4 ">
                                            <label class="text-uppercase badge bg-light text-dark" for="formFile">
                                                <i class="bi bi-paragraph"></i> Chèn file</label>
                                            <input class="form-control" name="file" type="file" id="formFile">
                                            <input type="hidden" name="hidefile"
                                                value="{{ old('hidefile', $licensePage->file) }}">
                                        </div>
                                        <div class="form-group">

                                            @php
                                                $fileExists = File::exists(ltrim($licensePage->file, '/'));
                                                if ($fileExists) {
                                                    $fileExtension = pathinfo($licensePage->file, PATHINFO_EXTENSION);
                                                }
                                            @endphp
                                            @if ($fileExists)
                                                @if (strtolower($fileExtension) == 'pdf')
                                                    <embed src="{{ $licensePage->file }}" type="application/pdf"
                                                        width="100%" height="100%" />
                                                @elseif (in_array(strtolower($fileExtension), ['png', 'jpg', 'jpeg']))
                                                    <img src="{{ $licensePage->file }}" class="card-img-top"
                                                        alt="...">
                                                @else
                                                    <a href="{{ $licensePage->file }}">file</a>
                                                @endif
                                            @else
                                                <p>File does not exist.</p>
                                            @endif
                                        </div>

                                        {{-- <div class="form-group">
                                            <label> {{ __('admin.status') }}</label>
                                            <input type="checkbox" name="status"
                                                @if ($licensePage->status == 1) checked @endif data-bootstrap-switch
                                                data-off-color="danger" data-on-color="primary">
                                        </div> --}}
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
        $('.datemask').inputmask('dd-mm-yyyy', {
            'placeholder': 'dd-mm-yyyy'
        });
        $('.number').inputmask('999,999,999', {
            numericInput: true
        });
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

        $('#remove_img').click(function(e) {
            $('#file_hidden').val('default');
            $('#preview').remove();
        });

        xoaImg('phieus');
    </script>
@endpush
