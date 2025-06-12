@extends('main.layouts.master')
@section('title', 'Giấy phép')
@section('description', __('messages.layout-giayphep'))
@section('content')
    <section class="ftco-section" style="padding-top: 30px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>{{ $licensePage->name }}</h4>
                    @php
                        $fileExists = File::exists(ltrim($licensePage->file, '/'));
                        if ($fileExists) {
                            $fileExtension = pathinfo($licensePage->file, PATHINFO_EXTENSION);
                        }
                    @endphp
                    {{-- @if ($fileExists)
                        @if (strtolower($fileExtension) == 'pdf')
                            <iframe src="{{ url($licensePage->file) }}" type="application/pdf"
                                style="width: 100%; height: 80vh; border: none;"></iframe>
                            <!-- JS kiểm tra thiết bị -->
                            <div id="pdf-js-container" style="display: none; width: 100%; overflow-x: auto;"></div>
                        @elseif (in_array(strtolower($fileExtension), ['png', 'jpg', 'jpeg']))
                            <img src="{{ $licensePage->file }}" alt="{{ $licensePage->name }}">
                        @endif
                    @else
                        <p>File does not exist.</p>
                    @endif --}}
                    @if ($fileExists && $fileExtension === 'pdf')
                        <!-- Đây là nơi PDF sẽ hiển thị -->
                        <div id="pdf-render-container" style="width: 100%; overflow-x: auto;"></div>
                    @else
                        {{-- <p>File không tồn tại hoặc không phải PDF.</p> --}}
                        <img src="{{ $licensePage->file }}" alt="{{ $licensePage->name }}">
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
@push('custom-js')
    <!-- PDF.js script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.12.313/pdf.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const pdfUrl = "{{ url($licensePage->file) }}";
            const container = document.getElementById("pdf-render-container");

            // Cấu hình worker
            pdfjsLib.GlobalWorkerOptions.workerSrc = "https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.12.313/pdf.worker.min.js";

            // Tải và render PDF
            pdfjsLib.getDocument(pdfUrl).promise.then(function (pdf) {
                for (let pageNum = 1; pageNum <= pdf.numPages; pageNum++) {
                    pdf.getPage(pageNum).then(function (page) {
                        const scale = 1.5;
                        const viewport = page.getViewport({ scale });

                        const canvas = document.createElement("canvas");
                        const context = canvas.getContext("2d");
                        canvas.height = viewport.height;
                        canvas.width = viewport.width;

                        container.appendChild(canvas);

                        const renderContext = {
                            canvasContext: context,
                            viewport: viewport
                        };

                        page.render(renderContext);
                    });
                }
            }).catch(function (err) {
                container.innerHTML = "<p>Lỗi khi hiển thị PDF: " + err.message + "</p>";
            });
        });
    </script>
@endpush
