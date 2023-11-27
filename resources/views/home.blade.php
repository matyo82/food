@extends('layouts.frontend')

@section('content')
    <!-- Banner -->
    <div class="main-bnr-one">
        <div class="slider-pagination">
            <div class="main-button-prev"><i class="icon-arrow-up"></i></div>
            <div class="main-slider-pagination"></div>
            <div class="main-button-next"><i class="icon-arrow-down"></i></div>
        </div>
        @if(!empty($sliders))
            <div class="main-slider-1 swiper">
                <div class="swiper-wrapper">
                    @foreach($sliders as $item)
                        <div class="swiper-slide">
                            <div class="banner-inner">
                                <div class="container">
                                    <div class="row align-items-center">
                                        <div class="col-xl-7 col-lg-7 col-md-7" style="height: 200px">
                                            <div class="banner-content">
                                                <span class="sub-title wow fadeInUp" data-wow-delay="0.2s">High Quality Test Station </span>
                                                <h1 class="title  wow fadeInUp"
                                                    data-wow-delay="0.4s">{{ $item->title }}</h1>
                                                <p class="wow fadeInUp" data-wow-delay="0.6s">{{ $item->sub_title }}</p>
                                                <div class="banner-btn d-flex align-items-center wow fadeInUp"
                                                     data-wow-delay="0.8s">
                                                    <a href="{{ route('menu') }}"
                                                       class="btn btn-primary btn-md shadow-primary m-r30 btn-hover-1"><span>Book a Table</span></a>
                                                    <a href="{{ route('menu') }}"
                                                       class="btn btn-outline-primary btn-md shadow-primary btn-hover-1"><span>View More</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-5 col-lg-5 col-md-5">
                                            <div class="banner-media wow fadeInRight" data-wow-delay="1s">
                                                <img src="{{ asset($item->thumbnail) }}" alt="/"
                                                     style="padding-top: 150px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <img src="{{ asset('assets/frontend/images/main-slider/slider1/img3.png') }}"
                                     class="img1" alt="/">
                                {{--                            <img src="{{ asset('assets/frontend/images/main-slider/slider1/img1.png') }}" class="img2" alt="/">--}}
                                <img src="{{ asset('assets/frontend/images/main-slider/slider1/img2.png') }}"
                                     class="img3" alt="/">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
        <div class="container">
            <div class="main-thumb1-area swiper-btn-lr wow fadeInUp" data-wow-delay="0.6s">
                <div class="swiper main-thumb1">
                    <div class="swiper-wrapper">
                        {{--<div class="swiper-slide">
                            <div class="food-card">
                                <div class="dz-media">
                                    <img src="assets/images/main-slider/slider1/thumb/pic1.jpg" alt="/">
                                </div>
                                <div class="dz-content">
                                    <h5 class="title">BreakFast</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                </div>
                            </div>
                        </div>--}}
                    </div>
                </div>
                <div class="thumb-button-prev btn-prev-1"><i class="fa-solid fa-angle-left"></i></div>
                <div class="thumb-button-next btn-next-1"><i class="fa-solid fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <!-- Banner -->
    @if(!empty($menus1))
        <!-- Image Box 2 -->
        <section class="content-inner bg-white section-wrapper-2 overflow-hidden">
            <div class="container">
                <div class="section-head text-center">
                    <h2 class="title wow flipInX" data-wow-delay="0.2s">Special Menu</h2>
                </div>
                <div class="row">
                    @foreach($menus1 as $item)
                        <div class="col-lg-3 col-md-6 col-sm-6 m-b30 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="dz-img-box style-2 box-hover">
                                <div class="dz-media">
                                    <img src="{{ asset($item->thumbnail) }}" alt="/">
                                </div>
                                <div class="dz-content">
                                    <h4 class="dz-title"><a href="product-detail.html">{{ $item->title }}</a></h4>
                                    <p>{!! $item->description !!}</p>
                                    <h5 class="dz-price text-primary">${{ $item->price }}</h5>
                                    <a href="#" class="btn btn-primary btn-hover-2">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <img class="bg1 dz-move-down" src="assets/images/background/pic2.png" alt="/">
            <img class="bg2 dz-parallax" data-parallax-speed="0.05" src="assets/images/background/pic3.png" alt="/">
        </section>
        <!-- Image Box-2 -->
    @endif

    @if(!empty($menus2))
        <!-- Image Box-1  -->
        <section class="content-inner-1 bg-white overflow-hidden pt-sm-0">
            <div class="container">
                <div class="section-head text-center">
                    <h2 class="title wow flipInX" data-wow-delay="0.2s">From Our Menu</h2>
                </div>
                <div class="swiper-btn-lr">
                    <div class="swiper portfolio-swiper">
                        <div class="swiper-wrapper">
                            @foreach($menus2 as $item)
                                <div class="swiper-slide">
                                    <div class="dz-img-box style-1 wow fadeInUp" data-wow-delay="0.4s">
                                        <div class="dz-media">
                                            <img src="{{ asset($item->thumbnail) }}" alt="/">
                                        </div>
                                        <span class="dz-tag">TOP SELLER</span>
                                        <div class="dz-content">
                                            <div class="dz-info">
                                                <h5 class="dz-title mb-0"><a
                                                        href="our-menu-1.html">{{ $item->title }}</a>
                                                </h5>
                                                <span class="dz-price">${{ $item->price }}</span>
                                            </div>
                                            <a href="shop-cart.html"
                                               class="btn btn-cart btn-white text-primary btn-square"><i
                                                    class="flaticon-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="pagination mt-xl-0 m-t40">
                        <div class="img-button-prev btn-prev-long"><i class="fa-solid fa-arrow-left"></i></div>
                        <div class="img-button-next btn-next-long"><i class="fa-solid fa-arrow-right"></i></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Image Box-1 -->
    @endif

    <!-- Search Section-->
    <section class="content-inner-1 section-wrapper-1 bg-parallax"
             style="background-image:url({{ asset('assets/frontend/images/background/pic1.png') }}); background-attachment: fixed;">
        <div class="container">
            <div class="section-head text-center">
                <h2 class="title text-white wow flipInX" data-wow-delay="0.2s">Reservation</h2>
            </div>
            <form action="{{ route('reserve') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-4 col-md-6 m-b30 m-sm-b50 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="input-group input-line">
                            <div class="input-group-prepand">
                                <i class="flaticon-user"></i>
                            </div>
                            <input name="name" required type="text" class="form-control" placeholder="Your Name">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 m-b30 m-sm-b50 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="input-group input-line">
                            <div class="input-group-prepand">
                                <i class="flaticon-phone-call"></i>
                            </div>
                            <input name="phone" required type="text" class="form-control dz-number"
                                   placeholder="Phone Number">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 m-b30 m-sm-b50 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="input-group input-line">
                            <div class="input-group-prepand">
                                <i class="flaticon-email-1"></i>
                            </div>
                            <input name="email" required type="text" class="form-control"
                                   placeholder="Your Email">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 m-b30 m-sm-b50 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="input-group input-line">
                            <div class="input-group-prepand">
                                <i class="flaticon-two-people"></i>
                            </div>
                            <select name="people" class="form-select default-select">
                                <option>Number Of People</option>
                                <option value="1">Member 1</option>
                                <option value="2">Member 2</option>
                                <option value="3">Member 3</option>
                                <option value="4">Member 4</option>
                                <option value="5">Member 5</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 m-b30 m-sm-b50 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="input-group input-line">
                            <div class="input-group-prepand">
                                <i class="flaticon-calendar-date"></i>
                            </div>
                            <input required name="date" type="text" class="form-control" id="datePickerOnly" placeholder="Date">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 m-b30 m-sm-b50 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="input-group input-line">
                            <div class="input-group-prepand">
                                <i class="flaticon-clock"></i>
                            </div>
                            <input required name="time" type="text" class="form-control" id="timePickerOnly" placeholder="Time">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 text-center">
                        <button type="submit" name="submit" value="submit" class="btn btn-lg btn-white btn-hover-1">
                            <span>Book a Table</span></button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- Search Section-->

    <!-- Testimonials -->
    <section class="content-inner-1 section-wrapper-2 right overflow-hidden">
        <div class="container">
            <div class="section-head text-center">
                <h2 class="title wow flipInX" data-wow-delay="0.2s">Customer's Comment</h2>
            </div>
            <div class="row gx-0 wow fadeInUp" data-wow-delay="0.4s">
                <div class="col-lg-7 col-md-12">
                    <div class="swiper testimonial-one-thumb">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="assets/images/testimonial/small/pic1.jpg" alt="/">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/images/testimonial/small/pic2.jpg" alt="/">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/images/testimonial/small/pic3.jpg" alt="/">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/images/testimonial/small/pic4.jpg" alt="/">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/images/testimonial/small/pic5.jpg" alt="/">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/images/testimonial/small/pic6.jpg" alt="/">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12">
                    <div class="swiper testimonial-one-swiper h-100">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-1">
                                    <div class="testimonial-text">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the
                                            majority have suffered alteration in some form, by injected humour, or
                                            randomised words which don't look even slightly believable. If you are
                                            going to use a passage of Lorem Ipsum, you need to be sure there isn't
                                            anything embarrassing hidden in the middle of text.</p>
                                    </div>
                                    <div class="testimonial-info">
                                        <h5 class="testimonial-name">John Doe</h5>
                                        <span class="testimonial-position">Food Expert</span>
                                    </div>
                                    <i class="flaticon-right-quote quote"></i>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-1">
                                    <div class="testimonial-text">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the
                                            majority have suffered alteration in some form, by injected humour, or
                                            randomised words which don't look even slightly believable. If you are
                                            going to use a passage of Lorem Ipsum, you need to be sure there isn't
                                            anything embarrassing hidden in the middle of text.</p>
                                    </div>
                                    <div class="testimonial-info">
                                        <h5 class="testimonial-name">Jolly Roy</h5>
                                        <span class="testimonial-position">Food Tester</span>
                                    </div>
                                    <i class="flaticon-right-quote quote"></i>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-1">
                                    <div class="testimonial-text">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the
                                            majority have suffered alteration in some form, by injected humour, or
                                            randomised words which don't look even slightly believable. If you are
                                            going to use a passage of Lorem Ipsum, you need to be sure there isn't
                                            anything embarrassing hidden in the middle of text.</p>
                                    </div>
                                    <div class="testimonial-info">
                                        <h5 class="testimonial-name">Thomas Hed</h5>
                                        <span class="testimonial-position">Food Expert</span>
                                    </div>
                                    <i class="flaticon-right-quote quote"></i>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-1">
                                    <div class="testimonial-text">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the
                                            majority have suffered alteration in some form, by injected humour, or
                                            randomised words which don't look even slightly believable. If you are
                                            going to use a passage of Lorem Ipsum, you need to be sure there isn't
                                            anything embarrassing hidden in the middle of text.</p>
                                    </div>
                                    <div class="testimonial-info">
                                        <h5 class="testimonial-name">Kally Mint</h5>
                                        <span class="testimonial-position">Food Expert</span>
                                    </div>
                                    <i class="flaticon-right-quote quote"></i>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-1">
                                    <div class="testimonial-text">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the
                                            majority have suffered alteration in some form, by injected humour, or
                                            randomised words which don't look even slightly believable. If you are
                                            going to use a passage of Lorem Ipsum, you need to be sure there isn't
                                            anything embarrassing hidden in the middle of text.</p>
                                    </div>
                                    <div class="testimonial-info">
                                        <h5 class="testimonial-name">Ronny joy</h5>
                                        <span class="testimonial-position">Assistant</span>
                                    </div>
                                    <i class="flaticon-right-quote quote"></i>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-1">
                                    <div class="testimonial-text">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the
                                            majority have suffered alteration in some form, by injected humour, or
                                            randomised words which don't look even slightly believable. If you are
                                            going to use a passage of Lorem Ipsum, you need to be sure there isn't
                                            anything embarrassing hidden in the middle of text.</p>
                                    </div>
                                    <div class="testimonial-info">
                                        <h5 class="testimonial-name">Dolly kom</h5>
                                        <span class="testimonial-position">Food Expert</span>
                                    </div>
                                    <i class="flaticon-right-quote quote"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <img class="bg1 dz-move-down" src="assets/images/background/pic2.png" alt="/">
    </section>
    <!-- Testimonial -->

    <!-- Team Section 1-->
    <section class="content-inner-1 overflow-hidden bg-light">
        <div class="container">
            <div class="section-head text-center">
                <h2 class="title wow flipInX" data-wow-delay="0.2s">Master Chefs</h2>
            </div>
        </div>
        <div class="container">
            <div class="swiper team-swiper swiper-visible swiper-btn-lr">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="dz-team style-1 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="dz-media">
                                <img src="assets/images/team/pic1.jpg" alt="/">
                            </div>
                            <div class="dz-content">
                                <div class="clearfix">
                                    <h6 class="dz-name"><a href="team-detail.html">Sarah Albert</a></h6>
                                    <span class="dz-position">Senior Chef</span>
                                </div>
                                <ul class="team-social">
                                    <li>
                                        <a class="share-btn" href="javascript:void(0);"><i
                                                class="flaticon-share"></i></a>
                                        <ul class="sub-team-social">
                                            <li><a class="fb-btn" href="https://www.facebook.com/"
                                                   target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a class="tw-btn" href="https://twitter.com/" target="_blank"><i
                                                        class="fab fa-twitter"></i></a></li>
                                            <li><a class="in-btn" href="https://www.instagram.com/" target="_blank"><i
                                                        class="fab fa-instagram"></i></a></li>
                                            <li><a class="lin-btn" href="https://www.linkedin.com/" target="_blank"><i
                                                        class="fa-brands fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="dz-team style-1 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="dz-media">
                                <img src="assets/images/team/pic2.jpg" alt="/">
                            </div>
                            <div class="dz-content">
                                <div class="clearfix">
                                    <h6 class="dz-name"><a href="team-detail.html">John Doe</a></h6>
                                    <span class="dz-position">Senior Chef</span>
                                </div>
                                <ul class="team-social">
                                    <li>
                                        <a class="share-btn" href="javascript:void(0);"><i
                                                class="flaticon-share"></i></a>
                                        <ul class="sub-team-social">
                                            <li><a class="fb-btn" href="https://www.facebook.com/"
                                                   target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a class="tw-btn" href="https://twitter.com/" target="_blank"><i
                                                        class="fab fa-twitter"></i></a></li>
                                            <li><a class="in-btn" href="https://www.instagram.com/" target="_blank"><i
                                                        class="fab fa-instagram"></i></a></li>
                                            <li><a class="lin-btn" href="https://www.linkedin.com/" target="_blank"><i
                                                        class="fa-brands fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="dz-team style-1 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="dz-media">
                                <img src="assets/images/team/pic3.jpg" alt="/">
                            </div>
                            <div class="dz-content">
                                <div class="clearfix">
                                    <h6 class="dz-name"><a href="team-detail.html">Jemy Carline</a></h6>
                                    <span class="dz-position">Junior Chef</span>
                                </div>
                                <ul class="team-social">
                                    <li>
                                        <a class="share-btn" href="javascript:void(0);"><i
                                                class="flaticon-share"></i></a>
                                        <ul class="sub-team-social">
                                            <li><a class="fb-btn" href="https://www.facebook.com/"
                                                   target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a class="tw-btn" href="https://twitter.com/" target="_blank"><i
                                                        class="fab fa-twitter"></i></a></li>
                                            <li><a class="in-btn" href="https://www.instagram.com/" target="_blank"><i
                                                        class="fab fa-instagram"></i></a></li>
                                            <li><a class="lin-btn" href="https://www.linkedin.com/" target="_blank"><i
                                                        class="fa-brands fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="dz-team style-1 wow fadeInUp" data-wow-delay="0.8s">
                            <div class="dz-media">
                                <img src="assets/images/team/pic4.jpg" alt="/">
                            </div>
                            <div class="dz-content">
                                <div class="clearfix">
                                    <h6 class="dz-name"><a href="team-detail.html">Cotlin Care</a></h6>
                                    <span class="dz-position">Senior Chef</span>
                                </div>
                                <ul class="team-social">
                                    <li>
                                        <a class="share-btn" href="javascript:void(0);"><i
                                                class="flaticon-share"></i></a>
                                        <ul class="sub-team-social">
                                            <li><a class="fb-btn" href="https://www.facebook.com/"
                                                   target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a class="tw-btn" href="https://twitter.com/" target="_blank"><i
                                                        class="fab fa-twitter"></i></a></li>
                                            <li><a class="in-btn" href="https://www.instagram.com/" target="_blank"><i
                                                        class="fab fa-instagram"></i></a></li>
                                            <li><a class="lin-btn" href="https://www.linkedin.com/" target="_blank"><i
                                                        class="fa-brands fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="dz-team style-1 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="dz-media">
                                <img src="assets/images/team/pic1.jpg" alt="/">
                            </div>
                            <div class="dz-content">
                                <div class="clearfix">
                                    <h6 class="dz-name"><a href="team-detail.html">Sarah Albert</a></h6>
                                    <span class="dz-position">Senior Chef</span>
                                </div>
                                <ul class="team-social">
                                    <li>
                                        <a class="share-btn" href="javascript:void(0);"><i
                                                class="flaticon-share"></i></a>
                                        <ul class="sub-team-social">
                                            <li><a class="fb-btn" href="https://www.facebook.com/"
                                                   target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a class="tw-btn" href="https://twitter.com/" target="_blank"><i
                                                        class="fab fa-twitter"></i></a></li>
                                            <li><a class="in-btn" href="https://www.instagram.com/" target="_blank"><i
                                                        class="fab fa-instagram"></i></a></li>
                                            <li><a class="lin-btn" href="https://www.linkedin.com/" target="_blank"><i
                                                        class="fa-brands fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="dz-team style-1 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="dz-media">
                                <img src="assets/images/team/pic2.jpg" alt="/">
                            </div>
                            <div class="dz-content">
                                <div class="clearfix">
                                    <h6 class="dz-name"><a href="team-detail.html">John Doe</a></h6>
                                    <span class="dz-position">Senior Chef</span>
                                </div>
                                <ul class="team-social">
                                    <li>
                                        <a class="share-btn" href="javascript:void(0);"><i
                                                class="flaticon-share"></i></a>
                                        <ul class="sub-team-social">
                                            <li><a class="fb-btn" href="https://www.facebook.com/"
                                                   target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a class="tw-btn" href="https://twitter.com/" target="_blank"><i
                                                        class="fab fa-twitter"></i></a></li>
                                            <li><a class="in-btn" href="https://www.instagram.com/" target="_blank"><i
                                                        class="fab fa-instagram"></i></a></li>
                                            <li><a class="lin-btn" href="https://www.linkedin.com/" target="_blank"><i
                                                        class="fa-brands fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="dz-team style-1 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="dz-media">
                                <img src="assets/images/team/pic3.jpg" alt="/">
                            </div>
                            <div class="dz-content">
                                <div class="clearfix">
                                    <h6 class="dz-name"><a href="team-detail.html">Jemy Carline</a></h6>
                                    <span class="dz-position">Junior Chef</span>
                                </div>
                                <ul class="team-social">
                                    <li>
                                        <a class="share-btn" href="javascript:void(0);"><i
                                                class="flaticon-share"></i></a>
                                        <ul class="sub-team-social">
                                            <li><a class="fb-btn" href="https://www.facebook.com/"
                                                   target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a class="tw-btn" href="https://twitter.com/" target="_blank"><i
                                                        class="fab fa-twitter"></i></a></li>
                                            <li><a class="in-btn" href="https://www.instagram.com/" target="_blank"><i
                                                        class="fab fa-instagram"></i></a></li>
                                            <li><a class="lin-btn" href="https://www.linkedin.com/" target="_blank"><i
                                                        class="fa-brands fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="dz-team style-1 wow fadeInUp" data-wow-delay="0.8s">
                            <div class="dz-media">
                                <img src="assets/images/team/pic4.jpg" alt="/">
                            </div>
                            <div class="dz-content">
                                <div class="clearfix">
                                    <h6 class="dz-name"><a href="team-detail.html">Cotlin Care</a></h6>
                                    <span class="dz-position">Senior Chef</span>
                                </div>
                                <ul class="team-social">
                                    <li>
                                        <a class="share-btn" href="javascript:void(0);"><i
                                                class="flaticon-share"></i></a>
                                        <ul class="sub-team-social">
                                            <li><a class="fb-btn" href="https://www.facebook.com/"
                                                   target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a class="tw-btn" href="https://twitter.com/" target="_blank"><i
                                                        class="fab fa-twitter"></i></a></li>
                                            <li><a class="in-btn" href="https://www.instagram.com/" target="_blank"><i
                                                        class="fab fa-instagram"></i></a></li>
                                            <li><a class="lin-btn" href="https://www.linkedin.com/" target="_blank"><i
                                                        class="fa-brands fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pagination mt-xl-0 m-t40">
                    <div class="team-button-prev btn-prev-long"><i class="fa-solid fa-arrow-left"></i></div>
                    <div class="team-button-next btn-next-long"><i class="fa-solid fa-arrow-right"></i></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section 1 -->

    <!-- Our Blog  -->
    <section class="content-inner-1 overflow-hidden">
        <div class="container">
            <div class="section-head text-center">
                <h2 class="title wow flipInX" data-wow-delay="0.2s">News & blog</h2>
            </div>
            <div class="swiper blog-swiper swiper-visible swiper-btn-lr">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="dz-card style-1 blog-half overlay-shine dz-img-effect zoom wow fadeInUp"
                             data-wow-delay="0.4s">
                            <div class="dz-media">
                                <a href="blog-standard.html"><img
                                        src="{{ asset('assets/frontend/images/blog/grid/pic1.jpg') }}"
                                        alt="/"></a>
                            </div>
                            <div class="dz-info">
                                <div class="dz-meta">
                                    <ul>
                                        <li><a href="javascript:void(0);"><i class="flaticon-calendar-date"></i> 26
                                                Jan 2023</a></li>
                                        <li class="dz-comment"><a href="javascript:void(0);"><i
                                                    class="flaticon-chat-bubble"></i> 2.5K </a></li>
                                    </ul>
                                </div>
                                <h5 class="dz-title"><a href="blog-standard.html">Taste of Paradise Dishes</a></h5>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                    have.</p>
                                <div class="read-btn">
                                    <a href="blog-standard.html" class="btn btn-primary btn-hover-2">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="dz-card style-1 blog-half overlay-shine dz-img-effect zoom wow fadeInUp"
                             data-wow-delay="0.6s">
                            <div class="dz-media">
                                <a href="blog-standard.html"><img
                                        src="{{ asset('assets/frontend/images/blog/grid/pic2.jpg') }}"
                                        alt="/"></a>
                            </div>
                            <div class="dz-info">
                                <div class="dz-meta">
                                    <ul>
                                        <li><a href="javascript:void(0);"><i class="flaticon-calendar-date"></i> 15
                                                Mar 2023</a></li>
                                        <li class="dz-comment"><a href="javascript:void(0);"><i
                                                    class="flaticon-chat-bubble"></i> 1.5K</a></li>
                                    </ul>
                                </div>
                                <h5 class="dz-title"><a href="blog-standard.html">The Spices Route Taste</a></h5>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                    have.</p>
                                <div class="read-btn">
                                    <a href="blog-standard.html" class="btn btn-primary btn-hover-2">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="dz-card style-1 blog-half wow overlay-shine dz-img-effect zoom fadeInUp"
                             data-wow-delay="0.4s">
                            <div class="dz-media">
                                <a href="blog-standard.html"><img
                                        src="{{ asset('assets/frontend/images/blog/grid/pic3.jpg') }}"
                                        alt="/"></a>
                            </div>
                            <div class="dz-info">
                                <div class="dz-meta">
                                    <ul>
                                        <li><a href="javascript:void(0);"><i class="flaticon-calendar-date"></i> 20
                                                Sep 2023</a></li>
                                        <li class="dz-comment"><a href="javascript:void(0);"><i
                                                    class="flaticon-chat-bubble"></i> 2.0K</a></li>
                                    </ul>
                                </div>
                                <h5 class="dz-title"><a href="blog-standard.html">The Fork & Knife</a></h5>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                    have.</p>
                                <div class="read-btn">
                                    <a href="blog-standard.html" class="btn btn-primary btn-hover-2">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="dz-card style-1 blog-half overlay-shine dz-img-effect zoom wow fadeInUp"
                             data-wow-delay="0.6s">
                            <div class="dz-media">
                                <a href="blog-standard.html"><img
                                        src="{{ asset('assets/frontend/images/blog/grid/pic4.jpg') }}"
                                        alt="/"></a>
                            </div>
                            <div class="dz-info">
                                <div class="dz-meta">
                                    <ul>
                                        <li><a href="javascript:void(0);"><i class="flaticon-calendar-date"></i> 30
                                                Nov 2023</a></li>
                                        <li class="dz-comment"><a href="javascript:void(0);"><i
                                                    class="flaticon-chat-bubble"></i> 3.5K </a></li>
                                    </ul>
                                </div>
                                <h5 class="dz-title"><a href="blog-standard.html">Flavors Of The World</a></h5>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                    have.</p>
                                <div class="read-btn">
                                    <a href="blog-standard.html" class="btn btn-primary btn-hover-2">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="dz-card style-1 blog-half overlay-shine dz-img-effect zoom wow fadeInUp"
                             data-wow-delay="0.4s">
                            <div class="dz-media">
                                <a href="blog-standard.html"><img
                                        src="{{ asset('assets/frontend/images/blog/grid/pic1.jpg') }}"
                                        alt="/"></a>
                            </div>
                            <div class="dz-info">
                                <div class="dz-meta">
                                    <ul>
                                        <li><a href="javascript:void(0);"><i class="flaticon-calendar-date"></i> 26
                                                Jan 2023</a></li>
                                        <li class="dz-comment"><a href="javascript:void(0);"><i
                                                    class="flaticon-chat-bubble"></i> 2.5K </a></li>
                                    </ul>
                                </div>
                                <h5 class="dz-title"><a href="blog-standard.html">Taste of Paradise Dishes</a></h5>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                    have.</p>
                                <div class="read-btn">
                                    <a href="blog-standard.html" class="btn btn-primary btn-hover-2">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="dz-card style-1 blog-half overlay-shine dz-img-effect zoom wow fadeInUp"
                             data-wow-delay="0.6s">
                            <div class="dz-media">
                                <a href="blog-standard.html"><img
                                        src="{{ asset('assets/frontend/images/blog/grid/pic2.jpg') }}"
                                        alt="/"></a>
                            </div>
                            <div class="dz-info">
                                <div class="dz-meta">
                                    <ul>
                                        <li><a href="javascript:void(0);"><i class="flaticon-calendar-date"></i> 15
                                                Mar 2023</a></li>
                                        <li class="dz-comment"><a href="javascript:void(0);"><i
                                                    class="flaticon-chat-bubble"></i> 1.5K</a></li>
                                    </ul>
                                </div>
                                <h5 class="dz-title"><a href="blog-standard.html">The Spices Route Taste</a></h5>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                    have.</p>
                                <div class="read-btn">
                                    <a href="blog-standard.html" class="btn btn-primary btn-hover-2">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="dz-card style-1 blog-half wow overlay-shine dz-img-effect zoom fadeInUp"
                             data-wow-delay="0.4s">
                            <div class="dz-media">
                                <a href="blog-standard.html"><img
                                        src="{{ asset('assets/frontend/images/blog/grid/pic3.jpg') }}"
                                        alt="/"></a>
                            </div>
                            <div class="dz-info">
                                <div class="dz-meta">
                                    <ul>
                                        <li><a href="javascript:void(0);"><i class="flaticon-calendar-date"></i> 20
                                                Sep 2023</a></li>
                                        <li class="dz-comment"><a href="javascript:void(0);"><i
                                                    class="flaticon-chat-bubble"></i> 2.0K</a></li>
                                    </ul>
                                </div>
                                <h5 class="dz-title"><a href="blog-standard.html">The Fork & Knife</a></h5>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                    have.</p>
                                <div class="read-btn">
                                    <a href="blog-standard.html" class="btn btn-primary btn-hover-2">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="dz-card style-1 blog-half overlay-shine dz-img-effect zoom wow fadeInUp"
                             data-wow-delay="0.6s">
                            <div class="dz-media">
                                <a href="blog-standard.html"><img
                                        src="{{ asset('assets/frontend/images/blog/grid/pic4.jpg') }}"
                                        alt="/"></a>
                            </div>
                            <div class="dz-info">
                                <div class="dz-meta">
                                    <ul>
                                        <li><a href="javascript:void(0);"><i class="flaticon-calendar-date"></i> 30
                                                Nov 2023</a></li>
                                        <li class="dz-comment"><a href="javascript:void(0);"><i
                                                    class="flaticon-chat-bubble"></i> 3.5K </a></li>
                                    </ul>
                                </div>
                                <h5 class="dz-title"><a href="blog-standard.html">Flavors Of The World</a></h5>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                    have.</p>
                                <div class="read-btn">
                                    <a href="blog-standard.html" class="btn btn-primary btn-hover-2">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pagination mt-xl-0 m-t40">
                    <div class="blog-button-prev btn-prev-long"><i class="fa-solid fa-arrow-left"></i></div>
                    <div class="blog-button-next btn-next-long"><i class="fa-solid fa-arrow-right"></i></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Blog End  -->
@endsection
