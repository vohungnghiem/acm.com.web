@extends('main.layouts.master')

    @section('title', __('messages.trangchu'))
    @section('description',__('messages.trangchu'))
    @section('content')

    <main>
        <section class="header-banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="title">đơn hàng nổi bật</h2>
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <p>Nơi làm việc: Tokyo</p>
                                    <p>Công việc: Chế tạo kim loại xây dựng</p>
                                    <p>Lương cơ bản: 140.000 YÊN</p>
                                    <p>Ngày tuyển: 27/12/2019</p>
                                    <div class="box-img"><img src="main_template/img/co-khi.jpg"
                                            alt="co-khi.jpg"></div>
                                    <h3 class="sub-title">cơ khí</h3>
                                </div>
                                <div class="swiper-slide">
                                    <p>Nơi làm việc: Tokyo</p>
                                    <p>Công việc: Chế biến thực phẩm</p>
                                    <p>Lương cơ bản: 140.000 YÊN</p>
                                    <p>Ngày tuyển: 27/12/2019</p>
                                    <div class="box-img"><img src="main_template/img/che-bien-thuc-pham.jpg"
                                            alt="che-bien-thuc-pham.jpg"></div>
                                    <h3 class="sub-title">chế biến thực phẩm</h3>
                                </div>
                            </div>
                            <div class="pagination"></div><a class="see-more" href="#">xem chi tiết </a>
                        </div>
                    </div>
                    <div class="col-md-6 banner-right">
                        <div class="figure">
                            <div class="box-img"><img src="main_template/img/header-banner.png"
                                    alt="header-banner"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="don-hang">
            <h2 class="title text-center">danh sách đơn hàng</h2>
            <div class="container">
                <div class="row">
                    <div class="table-top">
                        <div class="display">
                            <p>Đang hiển thị <span>1</span> đến <span>10</span> trong <span>55</span> đơn hàng</p>
                        </div>
                        <div class="search-box">
                            <label for="search">Tìm kiếm:</label>
                            <input type="text" placeholder="Tìm kiếm gì đó..." id="search">
                        </div>
                    </div>
                    <div class="table-wrap">
                        <table>
                            <thead>
                                <tr>
                                    <th>công việc</th>
                                    <th>đơn hàng</th>
                                    <th>mức lương</th>
                                    <th>yêu cầu</th>
                                    <th>nơi làm việc</th>
                                    <th>ngày tuyển</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="#">[ THỰC TẬP SINH NHẬT BẢN ] 5~10 NAM NỮ - CHĂN NUÔI</a></td>
                                    <td><a href="#">nông nghiệp</a></td>
                                    <td><span>160.000 yên</span></td>
                                    <td><span class="n3">n3</span></td>
                                    <td><a href="#">KANAGAWA</a></td>
                                    <td>18/10/2019</td>
                                </tr>
                                <tr>
                                    <td><a href="#">[ THỰC TẬP SINH NHẬT BẢN ] 2 NỮ CHẾ BIẾN THỦY SẢN GIA NHIỆT</a></td>
                                    <td><a href="#">thủy sản</a></td>
                                    <td><span>139.725 yên</span></td>
                                    <td><span class="n3">n3</span></td>
                                    <td><a href="#">SHIZUOKA</a></td>
                                    <td>18/10/2019</td>
                                </tr>
                                <tr>
                                    <td><a href="#">[ƯU TIÊN PHỎNG VẤN NGAY ] Tuyển 14 nữ điều dưỡng</a></td>
                                    <td><a href="#">Điều dưỡng</a></td>
                                    <td><span>130.000 yên</span></td>
                                    <td><span>KHÔNG</span></td>
                                    <td><a href="#">OSAKA</a></td>
                                    <td>18/10/2019</td>
                                </tr>
                                <tr>
                                    <td><a href="#">[ƯU TIÊN PHỎNG VẤN NGAY ] Tuyển 14 nữ điều dưỡng</a></td>
                                    <td><a href="#">Điều dưỡng</a></td>
                                    <td><span>130.000 yên</span></td>
                                    <td><span>KHÔNG</span></td>
                                    <td><a href="#">OSAKA</a></td>
                                    <td>18/10/2019</td>
                                </tr>
                                <tr>
                                    <td><a href="#">[ THỰC TẬP SINH NHẬT BẢN ] 5~10 NAM NỮ - CHĂN NUÔI</a></td>
                                    <td><a href="#">nông nghiệp</a></td>
                                    <td><span>160.000 yên</span></td>
                                    <td><span class="n4">n4</span></td>
                                    <td><a href="#">KANAGAWA</a></td>
                                    <td>18/10/2019</td>
                                </tr>
                                <tr>
                                    <td><a href="#">[ THỰC TẬP SINH NHẬT BẢN ] 2 NỮ CHẾ BIẾN THỦY SẢN GIA NHIỆT</a></td>
                                    <td><a href="#">thủy sản</a></td>
                                    <td><span>139.725 yên</span></td>
                                    <td><span class="n2">n2</span></td>
                                    <td><a href="#">SHIZUOKA</a></td>
                                    <td>18/10/2019</td>
                                </tr>
                                <tr>
                                    <td><a href="#">[ THỰC TẬP SINH NHẬT BẢN ] 2 NỮ CHẾ BIẾN THỦY SẢN GIA NHIỆT</a></td>
                                    <td><a href="#">thủy sản</a></td>
                                    <td><span>139.725 yên</span></td>
                                    <td><span class="n2">n2</span></td>
                                    <td><a href="#">SHIZUOKA</a></td>
                                    <td>18/10/2019</td>
                                </tr>
                                <tr>
                                    <td><a href="#">[ƯU TIÊN PHỎNG VẤN NGAY ] Tuyển 14 nữ điều dưỡng</a></td>
                                    <td><a href="#">Điều dưỡng</a></td>
                                    <td><span>130.000 yên</span></td>
                                    <td><span class="n1">n1</span></td>
                                    <td><a href="#">OSAKA</a></td>
                                    <td>18/10/2019</td>
                                </tr>
                                <tr>
                                    <td><a href="#">[ƯU TIÊN PHỎNG VẤN NGAY ] Tuyển 14 nữ điều dưỡng</a></td>
                                    <td><a href="#">Điều dưỡng</a></td>
                                    <td><span>130.000 yên</span></td>
                                    <td><span class="n1">n1</span></td>
                                    <td><a href="#">OSAKA</a></td>
                                    <td>18/10/2019</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="table-bottom">
                        <div class="pagination"><a class="lnr lnr-arrow-left isDisabled" href="#"></a><a
                                class="lnr lnr-chevron-left isDisabled" href="#"></a><a class="current"
                                href="#">1</a><a href="#">2</a><a href="#">3</a><a href="#">4</a><a
                                class="lnr lnr-chevron-right" href="#"></a><a class="lnr lnr-arrow-right" href="#"></a>
                        </div>
                        <div class="display-mode"><span>Hiển thị</span>
                            <select name="display-number">
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select><span>đơn hàng</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container gioi-thieu">
            <div class="row gioi-thieu-wrap">
                <div class="gioi-thieu-inner">
                    <div class="content">
                        <h2 class="title">acm</h2>
                        <p>1 trong những công ty xuất khẩu lao động Nhật Bản uy tín và hàng đầu Việt Nam</p>
                    </div>
                </div>
            </div>
        </div>
        <section class="tieu-bieu">
            <div class="container grid-container">
                <div class="item">
                    <div class="box-img"><img src="main_template/img/icon-success.png" alt="icon-success.png">
                    </div>
                    <h3 class="sub-title">tương lai</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem maiores, natus quos nostrum
                        laudantium possimus expedita dolore libero provident laboriosam.</p>
                </div>
                <div class="item">
                    <div class="box-img"><img src="main_template/img/icon-idea.png" alt="icon-idea.png"></div>
                    <h3 class="sub-title">sáng tạo</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem maiores, natus quos nostrum
                        laudantium possimus expedita dolore libero provident laboriosam.</p>
                </div>
                <div class="item">
                    <div class="box-img"><img src="main_template/img/icon-growing.png" alt="icon-growing.png">
                    </div>
                    <h3 class="sub-title">thu nhập</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem maiores, natus quos nostrum
                        laudantium possimus expedita dolore libero provident laboriosam.</p>
                </div>
                <div class="item">
                    <div class="box-img"><img src="main_template/img/icon-presentation.png"
                            alt="icon-presentation.png"></div>
                    <h3 class="sub-title">Đơn hàng</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem maiores, natus quos nostrum
                        laudantium possimus expedita dolore libero provident laboriosam.</p>
                </div>
                <div class="item">
                    <div class="box-img"><img src="main_template/img/icon-management.png"
                            alt="icon-management.png"></div>
                    <h3 class="sub-title">hệ thống đào tạo</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem maiores, natus quos nostrum
                        laudantium possimus expedita dolore libero provident laboriosam.</p>
                </div>
            </div>
        </section>
        <section class="muc-tieu">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="content">
                            <h2 class="title">mục tiêu</h2>
                            <p>Mục tiêu đào tạo và giáo dục của chúng tôi là chuyển biến nhân sự của doanh nghiệp trở
                                thành nguồn tài nguyên quan trọng nhất bằng cách thay đổi ý thức và tư duy sao cho bản
                                thân nhân viên tự mình suy nghĩ, tự đặt ra mục tiêu, tự hành động để tạo ra được sự tin
                                tưởng lớn nhất...</p>
                        </div>
                        <div class="line"></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="ho-so container">
            <div class="ho-so-inner">
                <div class="left">
                    <p>hồ</p>
                    <p>sơ</p>
                    <p>cần</p>
                    <p>chuẩn</p>
                    <p>bị</p>
                </div>
                <div class="right">
                    <p>Chứng minh nhân dân</p>
                    <p>Hộ chiếu</p>
                    <p>2 ảnh 4x6 ( chuẩn quốc tế )</p>
                    <p>Khám sức khỏe ( Nam: 1.000.000đ - Nữ: 900.000đ )</p>
                    <p>Đơn xác nhận hạnh kiểm / Đơn xác nhận tiền án tiền sự</p>
                    <p>Đơn xác nhận tình trạng hôn nhân (đối với trường hợp chưa kết hôn)</p>
                    <p>Đối với các ứng viên đã từng đăng ký / tham gia đi làm việc / du học / giao lưu văn hóa / du lịch
                        /... tại nước ngoài, cần đem theo toàn bộ hồ sơ liên quan.</p>
                </div>
            </div>
        </section>
        <section class="cam-nhan">
            <div class="container">
                <div class="cam-nhan-inner">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <figure>
                                    <div class="box-img"><img src="main_template/img/user.jpg" alt="user.jpg">
                                    </div>
                                    <figcaption>
                                        <div class="item-title">
                                            <p class="name">tên học viên</p>
                                            <p>Điều dưỡng</p>
                                            <p>Xuất cảnh: 27/12/2019</p>
                                        </div>
                                        <div class="item-content">
                                            <p>Em rất cám ơn ACM đã tạo cơ hội cho em lorem ipsum dolor sit amet,
                                                consectetur adipiscing elit. Aenean feugiat aliquet molestie.</p><br>
                                            <p>Donec consectetur quam metus, id dictum erat malesuada vitae. Duis
                                                vestibulum congue eros in dignissim. Proin euismod sagittis sapien id
                                                aliquam. Sed non risus nec enim euismod gravida commodo id lacus.</p>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="swiper-slide">
                                <figure>
                                    <div class="box-img"><img src="main_template/img/nu-3.png" alt="nu-3.png">
                                    </div>
                                    <figcaption>
                                        <div class="item-title">
                                            <p class="name">tên học viên</p>
                                            <p>Điều dưỡng</p>
                                            <p>Xuất cảnh: 27/12/2019</p>
                                        </div>
                                        <div class="item-content">
                                            <p>Em rất cám ơn ACM đã tạo cơ hội cho em lorem ipsum dolor sit amet,
                                                consectetur adipiscing elit. Aenean feugiat aliquet molestie.</p><br>
                                            <p>Donec consectetur quam metus, id dictum erat malesuada vitae. Duis
                                                vestibulum congue eros in dignissim. Proin euismod sagittis sapien id
                                                aliquam. Sed non risus nec enim euismod gravida commodo id lacus.</p>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="swiper-slide">
                                <figure>
                                    <div class="box-img"><img src="main_template/img/user.jpg" alt="user.jpg">
                                    </div>
                                    <figcaption>
                                        <div class="item-title">
                                            <p class="name">tên học viên</p>
                                            <p>Điều dưỡng</p>
                                            <p>Xuất cảnh: 27/12/2019</p>
                                        </div>
                                        <div class="item-content">
                                            <p>Em rất cám ơn ACM đã tạo cơ hội cho em lorem ipsum dolor sit amet,
                                                consectetur adipiscing elit. Aenean feugiat aliquet molestie.</p><br>
                                            <p>Donec consectetur quam metus, id dictum erat malesuada vitae. Duis
                                                vestibulum congue eros in dignissim. Proin euismod sagittis sapien id
                                                aliquam. Sed non risus nec enim euismod gravida commodo id lacus.</p>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="swiper-slide">
                                <figure>
                                    <div class="box-img"><img src="main_template/img/nu-3.png" alt="nu-3.png">
                                    </div>
                                    <figcaption>
                                        <div class="item-title">
                                            <p class="name">tên học viên</p>
                                            <p>Điều dưỡng</p>
                                            <p>Xuất cảnh: 27/12/2019</p>
                                        </div>
                                        <div class="item-content">
                                            <p>Em rất cám ơn ACM đã tạo cơ hội cho em lorem ipsum dolor sit amet,
                                                consectetur adipiscing elit. Aenean feugiat aliquet molestie.</p><br>
                                            <p>Donec consectetur quam metus, id dictum erat malesuada vitae. Duis
                                                vestibulum congue eros in dignissim. Proin euismod sagittis sapien id
                                                aliquam. Sed non risus nec enim euismod gravida commodo id lacus.</p>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="swiper-slide">
                                <figure>
                                    <div class="box-img"><img src="main_template/img/user.jpg" alt="user.jpg">
                                    </div>
                                    <figcaption>
                                        <div class="item-title">
                                            <p class="name">tên học viên</p>
                                            <p>Điều dưỡng</p>
                                            <p>Xuất cảnh: 27/12/2019</p>
                                        </div>
                                        <div class="item-content">
                                            <p>Em rất cám ơn ACM đã tạo cơ hội cho em lorem ipsum dolor sit amet,
                                                consectetur adipiscing elit. Aenean feugiat aliquet molestie.</p><br>
                                            <p>Donec consectetur quam metus, id dictum erat malesuada vitae. Duis
                                                vestibulum congue eros in dignissim. Proin euismod sagittis sapien id
                                                aliquam. Sed non risus nec enim euismod gravida commodo id lacus.</p>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="swiper-slide">
                                <figure>
                                    <div class="box-img"><img src="main_template/img/nu-3.png" alt="nu-3.png">
                                    </div>
                                    <figcaption>
                                        <div class="item-title">
                                            <p class="name">tên học viên</p>
                                            <p>Điều dưỡng</p>
                                            <p>Xuất cảnh: 27/12/2019</p>
                                        </div>
                                        <div class="item-content">
                                            <p>Em rất cám ơn ACM đã tạo cơ hội cho em lorem ipsum dolor sit amet,
                                                consectetur adipiscing elit. Aenean feugiat aliquet molestie.</p><br>
                                            <p>Donec consectetur quam metus, id dictum erat malesuada vitae. Duis
                                                vestibulum congue eros in dignissim. Proin euismod sagittis sapien id
                                                aliquam. Sed non risus nec enim euismod gravida commodo id lacus.</p>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="pagination-wrap">
                        <div class="pagination"></div><span>cảm nhận học viên</span>
                    </div>
                </div>
            </div>
        </section>
        <section class="tin-tuc">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 class="title">tin tức hoạt động</h2>
                        <p>Chọn giáo dục & việc làm là cơ sở cốt lõi cho sự phát triển một xã hội phồn vinh & bền vững
                            nhất</p>
                    </div>
                    <div class="col-lg-8">
                        <div class="swiper-container">
                            <div class="swiper-wrapper"><a class="swiper-slide" href="#">
                                    <article>
                                        <div class="box-img"><img src="main_template/img/news-1.png"
                                                alt="news-1.png"></div>
                                        <h4 class="article-title">"Thực tập sinh kỹ năng" và "Kỹ năng đặc định"</h4>
                                        <p class="posted">18/10/2019</p>
                                        <div class="item-content">
                                            <p>Thời gian gần đây, thị trường xuất khẩu lao động Nhật Bản trở nên sôi
                                                động hơn hẳn do Chính phủ Nhật đã thông qua Luật mới Chương trình làm
                                                việc liên tục 5 năm với tên gọi “Kỹ năng đặc định”.</p>
                                        </div>
                                    </article>
                                </a><a class="swiper-slide" href="#">
                                    <article>
                                        <div class="box-img"><img src="main_template/img/news-2.png"
                                                alt="news-2.png"></div>
                                        <h4 class="article-title">Đi Nhật làm việc: Chọn 01 năm hay 03 năm?!</h4>
                                        <p class="posted">18/10/2019</p>
                                        <div class="item-content">
                                            <p>Bài viết này sẽ giúp bạn có những hình dung cơ bản về chương trình 01 năm
                                                và 03 năm, để từ đó có thể đưa ra quyết định phù hợp với nguyện vọng,
                                                mục tiêu và điều kiện của bản thân. Hơn hết, Esuhai mong rằng, với sự
                                                lựa chọn phù hợp sẽ giúp bạn có cơ hội và điều kiện phát triển tốt hơn
                                                cả về cuộc sống lẫn công việc và sự nghiệp trong tương lai, bạn nhé!</p>
                                        </div>
                                    </article>
                                </a><a class="swiper-slide" href="#">
                                    <article>
                                        <div class="box-img"><img src="main_template/img/news-3.png"
                                                alt="news-3.png"></div>
                                        <h4 class="article-title">Giành lấy cơ hội tham dự chương trình kỹ sư làm việc
                                            tại Nhật ngay trong tháng 10 này</h4>
                                        <p class="posted">18/10/2019</p>
                                        <div class="item-content">
                                            <p>Chỉ còn 2 tuần nữa thôi, tháng 10/2019 sẽ khép lại rồi! Nếu bạn đang mong
                                                muốn phát triển sự nghiệp tại Nhật Bản thông qua con đường kỹ sư, hãy
                                                đến ngay hội thảo của ACM trong tháng 10 này nhé!</p>
                                        </div>
                                    </article>
                                </a><a class="swiper-slide" href="#">
                                    <article>
                                        <div class="box-img"><img src="main_template/img/news-1.png"
                                                alt="news-1.png"></div>
                                        <h4 class="article-title">"Thực tập sinh kỹ năng" và "Kỹ năng đặc định"</h4>
                                        <p class="posted">18/10/2019</p>
                                        <div class="item-content">
                                            <p>Thời gian gần đây, thị trường xuất khẩu lao động Nhật Bản trở nên sôi
                                                động hơn hẳn do Chính phủ Nhật đã thông qua Luật mới Chương trình làm
                                                việc liên tục 5 năm với tên gọi “Kỹ năng đặc định”.</p>
                                        </div>
                                    </article>
                                </a><a class="swiper-slide" href="#">
                                    <article>
                                        <div class="box-img"><img src="main_template/img/news-2.png"
                                                alt="news-2.png"></div>
                                        <h4 class="article-title">Đi Nhật làm việc: Chọn 01 năm hay 03 năm?!</h4>
                                        <p class="posted">18/10/2019</p>
                                        <div class="item-content">
                                            <p>Bài viết này sẽ giúp bạn có những hình dung cơ bản về chương trình 01 năm
                                                và 03 năm, để từ đó có thể đưa ra quyết định phù hợp với nguyện vọng,
                                                mục tiêu và điều kiện của bản thân. Hơn hết, Esuhai mong rằng, với sự
                                                lựa chọn phù hợp sẽ giúp bạn có cơ hội và điều kiện phát triển tốt hơn
                                                cả về cuộc sống lẫn công việc và sự nghiệp trong tương lai, bạn nhé!</p>
                                        </div>
                                    </article>
                                </a><a class="swiper-slide" href="#">
                                    <article>
                                        <div class="box-img"><img src="main_template/img/news-3.png"
                                                alt="news-3.png"></div>
                                        <h4 class="article-title">Giành lấy cơ hội tham dự chương trình kỹ sư làm việc
                                            tại Nhật ngay trong tháng 10 này</h4>
                                        <p class="posted">18/10/2019</p>
                                        <div class="item-content">
                                            <p>Chỉ còn 2 tuần nữa thôi, tháng 10/2019 sẽ khép lại rồi! Nếu bạn đang mong
                                                muốn phát triển sự nghiệp tại Nhật Bản thông qua con đường kỹ sư, hãy
                                                đến ngay hội thảo của ACM trong tháng 10 này nhé!</p>
                                        </div>
                                    </article>
                                </a>
                            </div>
                        </div>
                        <div class="pagination"></div>
                    </div>
                    <div class="col-lg-4">
                        <div class="tin-tuc-khac">
                            <div class="item">
                                <p class="posted">18/10/2019</p><a class="item-title" href="#">Lễ hội Trà
                                    Tokyo 2019</a>
                            </div>
                            <div class="item">
                                <p class="posted">18/10/2019</p><a class="item-title" href="#">Học cách
                                    người Nhật Bản ứng phó với bão</a>
                            </div>
                            <div class="item">
                                <p class="posted">18/10/2019</p><a class="item-title" href="#">ACM vinh dự
                                    đón tiếp đoàn khách quý từ Bộ LĐ – TB & XH, UBND Tp. HCM, Sở LĐ – TB & XH Tp.HCM và
                                    CLB Doanh nhân Tỉnh Tiền Giang tại Tp.HCM đến thăm và làm việc</a>
                            </div>
                            <div class="item">
                                <p class="posted">18/10/2019</p><a class="item-title" href="#">Tưng bừng
                                    khai giảng lớp kỹ sư công nghệ KS18 – Dự Bị</a>
                            </div>
                            <div class="item">
                                <p class="posted">18/10/2019</p><a class="item-title" href="#">Bão Hagibis
                                    suy yếu thành áp thấp</a>
                            </div>
                            <div class="item">
                                <p class="posted">18/10/2019</p><a class="item-title" href="#">Hỗ trợ
                                    người nước ngoài bằng nhiều thứ tiếng sau bão Hagibis</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="lien-ket">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="text-center">Liên kết với trường Đại Học, Cao Đẳng tạo cơ hội việc làm tiếng
                            Nhật cho sinh viên</div>
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="box-img"><img src="main_template/img/school-1.png"
                                            alt="school-1.png"></div>
                                    <p>Trường Cao Đẳng Nghề Đà Nẵng</p>
                                </div>
                                <div class="swiper-slide">
                                    <div class="box-img"><img src="main_template/img/school-2.png"
                                            alt="school-2.png"></div>
                                    <p>Trường CĐ Kỹ Thuật Công Nghệ Bà Rịa - Vũng Tàu</p>
                                </div>
                                <div class="swiper-slide">
                                    <div class="box-img"><img src="main_template/img/school-3.png"
                                            alt="school-3.png"></div>
                                    <p>Trường ĐH Công nghiệp Thực phẩm Tp. HCM</p>
                                </div>
                                <div class="swiper-slide">
                                    <div class="box-img"><img src="main_template/img/school-4.png"
                                            alt="school-4.png"></div>
                                    <p>Trường ĐH Sư phạm Kỹ thuật TP. HCM</p>
                                </div>
                                <div class="swiper-slide">
                                    <div class="box-img"><img src="main_template/img/school-5.png"
                                            alt="school-5.png"></div>
                                    <p>Trường Cao Đẳng Kỹ Thuật Đồng Nai</p>
                                </div>
                                <div class="swiper-slide">
                                    <div class="box-img"><img src="main_template/img/school-1.png"
                                            alt="school-1.png"></div>
                                    <p>Trường Cao Đẳng Nghề Đà Nẵng</p>
                                </div>
                                <div class="swiper-slide">
                                    <div class="box-img"><img src="main_template/img/school-2.png"
                                            alt="school-2.png"></div>
                                    <p>Trường CĐ Kỹ Thuật Công Nghệ Bà Rịa - Vũng Tàu</p>
                                </div>
                                <div class="swiper-slide">
                                    <div class="box-img"><img src="main_template/img/school-3.png"
                                            alt="school-3.png"></div>
                                    <p>Trường ĐH Công nghiệp Thực phẩm Tp. HCM</p>
                                </div>
                                <div class="swiper-slide">
                                    <div class="box-img"><img src="main_template/img/school-4.png"
                                            alt="school-4.png"></div>
                                    <p>Trường ĐH Sư phạm Kỹ thuật TP. HCM</p>
                                </div>
                                <div class="swiper-slide">
                                    <div class="box-img"><img src="main_template/img/school-5.png"
                                            alt="school-5.png"></div>
                                    <p>Trường Cao Đẳng Kỹ Thuật Đồng Nai</p>
                                </div>
                            </div>
                        </div>
                        <div class="pagination"></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bo-suu-tap">
            <div class="container">
                <div class="bo-suu-tap-inner">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="box-img"><a href="img/user.jpg" data-fancybox="hinh-anh"><img
                                            src="main_template/img/user.jpg" alt="user.jpg"></a></div>
                                <div class="gallery">
                                    <div class="box-img"><a href="img/hoat-dong(3).jpg"
                                            data-fancybox="hinh-anh"><img src="main_template/img/hoat-dong(3).jpg"
                                                alt="hoat-dong(3).jpg"></a></div>
                                    <div class="box-img"><a href="img/hoat-dong(1).jpg"
                                            data-fancybox="hinh-anh"><img src="main_template/img/hoat-dong(1).jpg"
                                                alt="hoat-dong(1).jpg"></a></div>
                                    <div class="box-img"><a href="img/hoat-dong(3).jpg"
                                            data-fancybox="hinh-anh"><img src="main_template/img/hoat-dong(3).jpg"
                                                alt="hoat-dong(3).jpg"></a></div>
                                    <div class="box-img"><a href="img/hoat-dong(1).jpg"
                                            data-fancybox="hinh-anh"><img src="main_template/img/hoat-dong(1).jpg"
                                                alt="hoat-dong(1).jpg"></a></div>
                                </div>
                                <div class="text-center"><span>Hình ảnh ACM</span></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box-img"><a href="img/hoat-dong(2).jpg" data-fancybox="20-11"><img
                                            src="main_template/img/hoat-dong(2).jpg" alt="img/hoat-dong(2).jpg"></a>
                                </div>
                                <div class="gallery">
                                    <div class="box-img"><a href="img/hoat-dong(3).jpg"
                                            data-fancybox="20-11"><img src="main_template/img/hoat-dong(3).jpg"
                                                alt="hoat-dong(3).jpg"></a></div>
                                    <div class="box-img"><a href="img/hoat-dong(1).jpg"
                                            data-fancybox="20-11"><img src="main_template/img/hoat-dong(1).jpg"
                                                alt="hoat-dong(1).jpg"></a></div>
                                    <div class="box-img"><a href="img/hoat-dong(3).jpg"
                                            data-fancybox="20-11"><img src="main_template/img/hoat-dong(3).jpg"
                                                alt="hoat-dong(3).jpg"></a></div>
                                    <div class="box-img"><a href="img/hoat-dong(1).jpg"
                                            data-fancybox="20-11"><img src="main_template/img/hoat-dong(1).jpg"
                                                alt="hoat-dong(1).jpg"></a></div>
                                </div>
                                <div class="text-center"><span>Ngày 20-11 ở ACM</span></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box-img"><a href="img/user.jpg" data-fancybox="thuc-te"><img
                                            src="main_template/img/xay-dung.jpg" alt="img/xay-dung.jpg"></a></div>
                                <div class="gallery">
                                    <div class="box-img"><a href="img/hoat-dong(3).jpg"
                                            data-fancybox="thuc-te"><img src="main_template/img/hoat-dong(3).jpg"
                                                alt="hoat-dong(3).jpg"></a></div>
                                </div>
                                <div class="text-center"><span>Hình ảnh công việc thực tế</span></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box-img"><a href="img/user.jpg" data-fancybox="hinh-anh"><img
                                            src="main_template/img/user.jpg" alt="user.jpg"></a></div>
                                <div class="gallery">
                                    <div class="box-img"><a href="img/hoat-dong(3).jpg"
                                            data-fancybox="hinh-anh"><img src="main_template/img/hoat-dong(3).jpg"
                                                alt="hoat-dong(3).jpg"></a></div>
                                    <div class="box-img"><a href="img/hoat-dong(1).jpg"
                                            data-fancybox="hinh-anh"><img src="main_template/img/hoat-dong(1).jpg"
                                                alt="hoat-dong(1).jpg"></a></div>
                                    <div class="box-img"><a href="img/hoat-dong(3).jpg"
                                            data-fancybox="hinh-anh"><img src="main_template/img/hoat-dong(3).jpg"
                                                alt="hoat-dong(3).jpg"></a></div>
                                    <div class="box-img"><a href="img/hoat-dong(1).jpg"
                                            data-fancybox="hinh-anh"><img src="main_template/img/hoat-dong(1).jpg"
                                                alt="hoat-dong(1).jpg"></a></div>
                                </div>
                                <div class="text-center"><span>Hình ảnh ACM</span></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box-img"><a href="img/hoat-dong(2).jpg" data-fancybox="20-11"><img
                                            src="main_template/img/hoat-dong(2).jpg" alt="img/hoat-dong(2).jpg"></a>
                                </div>
                                <div class="gallery">
                                    <div class="box-img"><a href="img/hoat-dong(3).jpg"
                                            data-fancybox="20-11"><img src="main_template/img/hoat-dong(3).jpg"
                                                alt="hoat-dong(3).jpg"></a></div>
                                    <div class="box-img"><a href="img/hoat-dong(1).jpg"
                                            data-fancybox="20-11"><img src="main_template/img/hoat-dong(1).jpg"
                                                alt="hoat-dong(1).jpg"></a></div>
                                    <div class="box-img"><a href="img/hoat-dong(3).jpg"
                                            data-fancybox="20-11"><img src="main_template/img/hoat-dong(3).jpg"
                                                alt="hoat-dong(3).jpg"></a></div>
                                    <div class="box-img"><a href="img/hoat-dong(1).jpg"
                                            data-fancybox="20-11"><img src="main_template/img/hoat-dong(1).jpg"
                                                alt="hoat-dong(1).jpg"></a></div>
                                </div>
                                <div class="text-center"><span>Ngày 20-11 ở ACM</span></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box-img"><a href="img/user.jpg" data-fancybox="thuc-te"><img
                                            src="main_template/img/xay-dung.jpg" alt="img/xay-dung.jpg"></a></div>
                                <div class="gallery">
                                    <div class="box-img"><a href="img/hoat-dong(3).jpg"
                                            data-fancybox="thuc-te"><img src="main_template/img/hoat-dong(3).jpg"
                                                alt="hoat-dong(3).jpg"></a></div>
                                </div>
                                <div class="text-center"><span>Hình ảnh công việc thực tế</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination-wrap">
                        <div class="pagination"></div><span>bộ sưu tập</span>
                        <div class="line"></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="lien-he">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2 class="title">liên hệ với chúng tôi</h2>
                        <form class="contact-form" method="post">
                            <div class="form-item">
                                <input type="text" placeholder="Nhập họ và tên">
                            </div>
                            <div class="form-item">
                                <input type="text" placeholder="exemple@email.com">
                            </div>
                            <div class="form-item">
                                <input type="text" placeholder="Nhập tiêu đề">
                            </div>
                            <div class="form-item">
                                <input type="text" placeholder="Nhập Số điện thoại">
                            </div>
                            <div class="form-item">
                                <textarea id="content" placeholder="Nhập nội dung..."></textarea>
                            </div>
                            <input class="contact-send" type="submit" value="GỬI">
                        </form>
                    </div>
                    <div class="col-md-8">
                        <div class="box-img"><img src="main_template/img/header-banner.png" alt="header-banner">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

