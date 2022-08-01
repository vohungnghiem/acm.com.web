@extends('main.layouts.master')
    @section('title', "$detail->ten")
    @section('description', "$detail->ten")
    @section('content')
    <div class="hero-wrap hero-wrap-3" style="background-image: url('main_master/images/banner.jpg'); background-attachment:fixed;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-8 ftco-animate text-center fadeInUp ftco-animated">
                    <p class="breadcrumbs"><span class="mr-2"><a href="/">Trang chủ</a></span> @if ($detail->id_loaitintuc == 1) <span>TIN TỨC</span> @else <span>ĐIỀU DƯỠNG</span> @endif </p>
                    <h1 class="mb-3 bread news-tintuc">{{$detail->ten}}</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="ftco-section ftco-degree-bg">
        <div class="container">
          <div class="row">
            <div class="col-md-8 ftco-animate fadeInUp ftco-animated ">
              {{-- <h2 class="mb-3">{{$detail->ten}}</h2> --}}
              <div class="news-wrap-p">
                {!!$detail->noidung!!}
                </div>
              <div class="tag-widget post-tag-container mb-5 mt-5">
                <div class="tagcloud">
                  <a href="tintuc" class="tag-cloud-link">Tin tức</a>
                  <a href="dieuduong" class="tag-cloud-link">Điều dưỡng</a>
                  <a href="donhang" class="tag-cloud-link">Đơn hàng</a>
                </div>
              </div>

              {{-- <div class="about-author d-flex p-5 bg-light">
                <div class="bio align-self-md-center mr-5">
                  <img src="main_master/images/person_1.jpg" alt="Image placeholder" class="img-fluid mb-4">
                </div>
                <div class="desc align-self-md-center">
                  <h3>Lance Smith</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
                </div>
              </div> --}}


              {{-- <div class="pt-5 mt-5">
                <h3 class="mb-5">6 Comments</h3>
                <ul class="comment-list">
                  <li class="comment">
                    <div class="vcard bio">
                      <img src="main_master/images/person_1.jpg" alt="Image placeholder">
                    </div>
                    <div class="comment-body">
                      <h3>John Doe</h3>
                      <div class="meta">June 27, 2018 at 2:21pm</div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                      <p><a href="#" class="reply">Reply</a></p>
                    </div>
                  </li>

                  <li class="comment">
                    <div class="vcard bio">
                      <img src="main_master/images/person_1.jpg" alt="Image placeholder">
                    </div>
                    <div class="comment-body">
                      <h3>John Doe</h3>
                      <div class="meta">June 27, 2018 at 2:21pm</div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                      <p><a href="#" class="reply">Reply</a></p>
                    </div>

                    <ul class="children">
                      <li class="comment">
                        <div class="vcard bio">
                          <img src="main_master/images/person_1.jpg" alt="Image placeholder">
                        </div>
                        <div class="comment-body">
                          <h3>John Doe</h3>
                          <div class="meta">June 27, 2018 at 2:21pm</div>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                          <p><a href="#" class="reply">Reply</a></p>
                        </div>


                        <ul class="children">
                          <li class="comment">
                            <div class="vcard bio">
                              <img src="main_master/images/person_1.jpg" alt="Image placeholder">
                            </div>
                            <div class="comment-body">
                              <h3>John Doe</h3>
                              <div class="meta">June 27, 2018 at 2:21pm</div>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                              <p><a href="#" class="reply">Reply</a></p>
                            </div>

                              <ul class="children">
                                <li class="comment">
                                  <div class="vcard bio">
                                    <img src="main_master/images/person_1.jpg" alt="Image placeholder">
                                  </div>
                                  <div class="comment-body">
                                    <h3>John Doe</h3>
                                    <div class="meta">June 27, 2018 at 2:21pm</div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                    <p><a href="#" class="reply">Reply</a></p>
                                  </div>
                                </li>
                              </ul>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>

                  <li class="comment">
                    <div class="vcard bio">
                      <img src="main_master/images/person_1.jpg" alt="Image placeholder">
                    </div>
                    <div class="comment-body">
                      <h3>John Doe</h3>
                      <div class="meta">June 27, 2018 at 2:21pm</div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                      <p><a href="#" class="reply">Reply</a></p>
                    </div>
                  </li>
                </ul>
                <!-- END comment-list -->

                <div class="comment-form-wrap pt-5">
                  <h3 class="mb-5">Leave a comment</h3>
                  <form action="#" class="p-5 bg-light">
                    <div class="form-group">
                      <label for="name">Name *</label>
                      <input type="text" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                      <label for="email">Email *</label>
                      <input type="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                      <label for="website">Website</label>
                      <input type="url" class="form-control" id="website">
                    </div>

                    <div class="form-group">
                      <label for="message">Message</label>
                      <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                      <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
                    </div>

                  </form>
                </div>
              </div> --}}

            </div> <!-- .col-md-8 -->
            <div class="col-md-4 sidebar ftco-animate fadeInUp ftco-animated">
              <div class="sidebar-box">
                @if ($detail->id_loaitintuc == 1)
                <form action="tintuc" class="search-form">
                    <div class="form-group">
                        <span class="icon fa fa-search"></span>
                        <input type="text" class="form-control" placeholder="Tìm kiếm tin tức">
                      </div>
                    </form>
                @else
                <form action="dieuduong" class="search-form">
                    <div class="form-group">
                        <span class="icon fa fa-search"></span>
                        <input type="text" class="form-control" placeholder="Tìm kiếm tin điều dưỡng">
                      </div>
                </form>
                @endif

              </div>
              <div class="sidebar-box ftco-animate fadeInUp ftco-animated">
                <div class="categories">
                  <h3>Bài viết liên quan</h3>
                  <li><a href="tintuc">Tin tức <span>({{$counttt}})</span></a></li>
                  <li><a href="dieuduong">Tin điều dưỡng <span>({{$countdd}})</span></a></li>
                  <li><a href="donhang">Đơn hàng <span>({{$countdh}})</span></a></li>
                </div>
              </div>

              <div class="sidebar-box ftco-animate fadeInUp ftco-animated">
                <h3>Tin gần đây</h3>
                @if ($detail->id_loaitintuc == 1)
                    @foreach ($tintuc as $item)
                    <div class="block-21 mb-4 d-flex">
                        <a href="tintuc/{{$item->slug}}" class="blog-img mr-4" style="background-image: url('{{$item->image}}');"></a>
                        <div class="text">
                            <h3 class="heading"><a href="tintuc/{{$item->slug}}" class="text-dot">{{$item->ten}}</a></h3>
                            <div class="meta">
                                <div><a href="#"><span class="bi bi-calendar"></span> {!! date('d/m/Y',strtotime($item->created_at)) !!}</a></div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <p class="text-center">
                        <a href="tintuc" class="btn btn-primary">Xem thêm tin tức</a>
                    </p>
                @else
                    @foreach ($dieuduong as $item)
                    <div class="block-21 mb-4 d-flex">
                        <a href="tintuc/{{$item->slug}}" class="blog-img mr-4" style="background-image: url('{{$item->image}}');"></a>
                        <div class="text">
                            <h3 class="heading"><a href="tintuc/{{$item->slug}}">{{$item->ten}}</a></h3>
                            <div class="meta">
                                <div><a href="#"><span class="bi bi-calendar"></span> {!! date('d/m/Y',strtotime($item->created_at)) !!}</a></div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <p class="text-center">
                        <a href="dieuduong" class="btn btn-primary">Xem thêm điều dưỡng</a>
                    </p>
                @endif

                {{-- <div class="block-21 mb-4 d-flex">
                  <a class="blog-img mr-4" style="background-image: url(main_master/images/image_2.jpg);"></a>
                  <div class="text">
                    <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                    <div class="meta">
                      <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                      <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                      <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                    </div>
                  </div>
                </div>
                <div class="block-21 mb-4 d-flex">
                  <a class="blog-img mr-4" style="background-image: url(main_master/images/image_3.jpg);"></a>
                  <div class="text">
                    <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                    <div class="meta">
                      <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                      <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                      <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                    </div>
                  </div>
                </div> --}}
              </div>

            </div>

          </div>
        </div>
      </section>
@endsection
