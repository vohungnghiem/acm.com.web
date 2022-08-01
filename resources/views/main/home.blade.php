@extends('main.layouts.master')

    @section('title', __('main.trangchu'))
    @section('description',__('main.trangchu'))
    @section('content')

    <div class="hero-wrap" style="background-image: url('main_master/images/banner.jpg'); background-attachment:fixed;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-8 ftco-animate text-center">
                    <h1 class="mb-4">ACM</h1>
                    <p class="mb-5"> Một trong những công ty xuất khẩu lao động Nhật Bản uy tín và hàng đầu Việt Nam</p>
                    <p>
                        <div class="btn btn-primary px-4 py-3" data-toggle="modal" data-target="#applyNow">Ứng tuyển ngay</div>
                        <a href="donhang" class="btn btn-secondary px-4 py-3">Xem đơn hàng</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <section class="ftco-search-course">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="courseSearch-wrap d-md-flex flex-column-reverse">
                        <div class="full-wrap ftco-animate">
                            <div class="one-half">
                                <div class="featured-blog d-md-flex">
                                    <div class="image d-flex order-last">
                                        <a href="donhang/{{$donhang->id}}" class="img" style="background: url(main_master/images/donhang/order-{{rand(1,4)}}.jpg);"></a>
                                    </div>
                                    <div class="text order-first">
                                        <span class="date"><i class="bi bi-calendar-fill"></i> {{$donhang->day_start}}</span>
                                        <h3><a href="donhang/{{$donhang->id}}"><i class="bi bi-box-arrow-right"></i> Đơn hàng mới nhất</a></h3>
                                        <a href="donhang/{{$donhang->id}}" class="text-dot"><i class="bi bi-card-heading"></i> {{$donhang->ten}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services p-3 py-1 d-block text-center">
                        <img src="main_master/images/chuongtrinh/icon-student_optimized.png" alt="acm jinzai" class="image-icon">
                        <div class="media-body px-3">
                            <h3 class="heading text-primary mt-2">DU HỌC SINH</h3>
                            <p>Với mục tiêu tiếp nhận 300.000 du học sinh quốc tế vào năm 2022, Nhật Bản đang là lựa chọn ưu tiên của nhiều bạn trẻ các nước nói chung và Việt Nam nói riêng. Có thể nói tại Châu Á Nhật Bản là quốc gia có nền giáo dục và đào tạo có chất lượng hàng đầu – yếu tố then chốt tạo nên nguồn nhân lực chất lượng hàng đầu góp phần làm nên một Nhật Bản thần kỳ.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services p-3 py-1 d-block text-center">
                        <img src="main_master/images/chuongtrinh/icon-engineer_optimized.png" alt="acm jinzai" class="image-icon">
                        <div class="media-body px-3">
                            <h3 class="heading text-primary mt-2">KỸ SƯ VIỆT - NHẬT</h3>
                            <p>Chương trình kỹ sư là chương trình tiếp nhận chuyên gia, nhân lực có trình độ cao của Chính phủ Nhật Bản nhằm bù đắp cho sự thiếu hụt lực lượng lao động có trình độ kéo dài trong những năm qua.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services p-3 py-1 d-block text-center">
                        <img src="main_master/images/chuongtrinh/icon-internship_optimized.png" alt="acm jinzai" class="image-icon">
                        <div class="media-body px-3">
                            <h3 class="heading text-primary mt-2">THỰC TẬP SINH</h3>
                            <p>Chương trình Thực tập sinh kỹ năng là chương trình do Chính phủ Nhật Bản khởi xướng với mục đích chuyển giao công nghệ, kỹ thuật, kỹ năng cho Việt Nam thông qua hình thức tiếp nhận nhân lực trẻ của Việt Nam sang Nhật Bản thực tập nâng cao trình độ tay nghề (trong thời gian 03 năm) sau đó trở về Việt Nam tiếp tục làm việc trong các công ty có ngành nghề tương tự để áp dụng những kiến thức, kỹ năng đã được thực tập thực tế tại Nhật Bản.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services p-3 py-1 d-block text-center">
                        <img src="main_master/images/chuongtrinh/icon-doctor_optimized.png" alt="acm jinzai" class="image-icon">
                        <div class="media-body px-3">
                            <h3 class="heading text-primary mt-2">ĐÀO TẠO</h3>
                            <p>Bước đầu, Nhật Bản dự kiến tiếp nhận 3.000 điều dưỡng viên trong vòng 1 năm, với sự hỗ trợ tài chính từ phía Tokyo cho hoạt động đào tạo ngôn ngữ, và sau đó mở rộng quy mô lên 10.000 điều dưỡng viên trong 2 năm.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container">
        <h2 class="text-center mb-4">ĐƠN HÀNG</h2>
        <div class="section-donhang wrap-donhang">
            <div class="donhang-info">
                <div class="w-400">
                    TÊN ĐƠN HÀNG
                </div>
                <div class="w-200">
                    Mức lương
                </div>
                <div class="w-200">
                    Yêu cầu
                </div>
                <div class="w-200">
                    Nơi làm việc
                </div>
                <div class="w-200">
                    Ngày tuyển
                </div>
            </div>
            @foreach ($donhangs as $item)

            <div class="donhang-info">
                <div class="w-400">
                    <a href="donhang/{{$item->id}}" class="text-dark">{{'['.$item->job.'] '.$item->ten }}</a>
                </div>
                <div class="w-200">
                    <span class="text-dark">{{$item->salary_receive}}</span>
                </div>
                <div class="w-200">
                    <span class="text-dark">{{$item->degree}}</span>
                </div>
                <div class="w-200">
                    <span class="text-dark">{{$item->address}}</span>
                </div>
                <div class="w-200">
                    <span class="text-dark">{{$item->day_start}}</span>
                </div>
            </div>
            @endforeach
        </div>
        <p class="text-center my-5">
            <a href="donhang" class="btn btn-primary px-4 py-3">Xem đơn hàng</a>
        </p>
    </section>

    <section class="ftco-counter bg-light" id="section-counter">
    	<div class="container">
            <h2 class="text-center mb-4">ACM - {{date('Y')}}</h2>
    		<div class="row justify-content-center">
    			<div class="col-md-10">
		    		<div class="row">
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate fadeInUp ftco-animated">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="1030">1,300</strong>
		                <span>ỨNG VIÊN</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate fadeInUp ftco-animated">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="78">78</strong>
		                <span>ĐƠN HÀNG</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate fadeInUp ftco-animated">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="400">400</strong>
		                <span>HỌC VIÊN XUẤT CẢNH</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate fadeInUp ftco-animated">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="100">100</strong>
		                <span>LIÊN KẾT TRƯỜNG</span>
		              </div>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>

    <section class="ftco-freeTrial">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="d-flex align-items-center">
                        <div class="free-trial ftco-animate">
                            <h3>Mục tiêu</h3>
                            @foreach ($muctieus as $item)
                                {!!$item->noidung!!}
                            @endforeach
                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex align-items-center">
                        <div class=" ftco-animate">
                            <h3>Hồ sơ cần chuẩn bị</h3>
                            @foreach ($hosocanchuanbis as $item)
                            &#10003; {!!$item->ten!!} <br>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section testimony-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">Cảm nhận học viên</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 ftco-animate">
                    <div class="carousel-testimony owl-carousel">
                        @foreach ($camnhanhocviens as $item)

                        <div class="item">
                            <div class="testimony-wrap text-center">
                                <div class="user-img mb-5" style="background-image: url({{$item->image}})">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="bi bi-exclamation"></i>
                                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-5">{{$item->noidung}}</p>
                                    <p class="name">{{$item->tenhocvien}}</p>
                                    <span class="position">CSE Student</span>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">TIN TỨC HOẠT ĐỘNG</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="course align-self-stretch">
                        <a href="tintuc/{{$tintuc->slug}}" class="img" style="background-image: url('{{$tintuc->image}}')"></a>
                        <div class="text p-4">
                            <p class="category"><span>TIN TỨC</span></p>
                            <h3 class="mb-3 text-dot"><a href="tintuc/{{$tintuc->slug}}">{{$tintuc->ten}}</a></h3>
                            <p class="text-dot">{{$tintuc->description}}</p>
                            <p><a href="tintuc" class="btn btn-primary">Xem tin tức khác!</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="course align-self-stretch">
                        <a href="dieuduong/{{$dieuduong->slug}}" class="img" style="background-image: url('{{$dieuduong->image}}')"></a>
                        <div class="text p-4">
                            <p class="category"><span>ĐIỀU DƯỠNG</span></p>
                            <h3 class="mb-3 text-dot"><a href="tintuc/{{$dieuduong->slug}}">{{$dieuduong->ten}}</a></h3>
                            <p class="text-dot">{{$dieuduong->description}}</p>
                            <p><a href="dieuduong" class="btn btn-primary">Xem tin điều dưỡng khác!</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="course align-self-stretch" style="width: 100%;">
                        <a href="donhang/{{$donhang->id}}" class="img" style="background-image: url('main_master/images/course-3.jpg')"></a>
                        <div class="text p-4">
                            <p class="category"><span>ĐƠN HÀNG</span></p>
                            <h3 class="mb-3 text-dot"><a href="donhang/{{$donhang->id}}">{{$donhang->ten}}</a></h3>
                            <p class="text-dot">{{$donhang->job}} - {{$donhang->address}}</p>
                            <p><a href="dieuduong" class="btn btn-primary">Xem đơn hàng khác!</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section testimony-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">Liên kết trường</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 ftco-animate">
                    <div class="carousel-testimony owl-carousel">
                        @foreach ($truonghocs as $item)
                        <div class="item">
                            <div class="testimony-wrap text-center">
                                <div class="mb-5">
                                    <img class="img" src="main_master/images/person_1.jpg" alt="">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                    <p class="name">Dennis Green</p>
                                    <span class="position">CSE Student</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

