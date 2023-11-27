@extends('layouts.frontend')

@section('content')
    <!-- Banner  -->
    <div class="dz-bnr-inr style-1 text-center bg-parallax"
         style="background-image:url({{ url('assets/frontend/images/banner/bnr2.jpg') }}); background-size:cover; background-position:center;">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>List menu</h1>
                <!-- Breadcrumb Row -->
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Shop Style 2</li>
                    </ul>
                </nav>
                <!-- Breadcrumb Row End -->
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Search Section -->
    <section class="content-inner-1">
        <div class="container">
            <div class="row search-wraper text-center">
                <div class="col-lg-8 m-auto">
                    <form>
                        <div class="input-group">
                            <input required="required" type="text" class="form-control" placeholder="Type here">
                            <div class="input-group-addon">
                                <button name="submit" value="submit" type="submit" class="btn btn-primary btn-hover-2">
                                    <span>Search</span><i class="icon-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <aside class="side-bar left sticky-top">
                        <div class="shop-filter">
                            <div class="widget widget_tag_cloud ">
                                <div class="d-flex justify-content-between">
                                    <div class="widget-title">
                                        <h4 class="title">Current Search</h4>
                                    </div>
                                    <a href="javascript:void(0);" class="panel-close-btn"><i
                                            class="fa-solid fa-xmark"></i></a>
                                </div>
                                <div class="tagcloud">
                                    <a href="product-detail.html">Burger</a>
                                    <a href="product-detail.html">Restaurant</a>
                                    <a href="product-detail.html">Pizza</a>
                                </div>
                            </div>
                            <div class="widget dz-widget_services">
                                <div class="widget-title">
                                    <h4 class="title">Refine By Categories</h4>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="productCheckBox-01">
                                    <label class="form-check-label" for="productCheckBox-01">
                                        Pizza
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="productCheckBox-02">
                                    <label class="form-check-label" for="productCheckBox-02">
                                        Hamburger
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="productCheckBox-03">
                                    <label class="form-check-label" for="productCheckBox-03">
                                        Cold Drink
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="productCheckBox-04">
                                    <label class="form-check-label" for="productCheckBox-04">
                                        Sandwich
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="productCheckBox-05">
                                    <label class="form-check-label" for="productCheckBox-05">
                                        Muffin
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="productCheckBox-06">
                                    <label class="form-check-label" for="productCheckBox-06">
                                        Burrito
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="productCheckBox-07">
                                    <label class="form-check-label" for="productCheckBox-07">
                                        Taco
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="productCheckBox-08">
                                    <label class="form-check-label" for="productCheckBox-08">
                                        Hot Dog
                                    </label>
                                </div>
                            </div>
                            <div class="widget">
                                <div class="widget-title">
                                    <h4 class="title">Price Range</h4>
                                </div>
                                <div class="range-slider style-1">
                                    <div id="slider-tooltips"></div>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
                <div class="col-lg-9">
                    @if(!empty($menus))
                        <ul id="masonry" class="row">
                            @foreach($menus as $item)
                                <li class="card-container col-xl-4 col-md-6 m-b30">
                                    <div class="dz-img-box style-7">
                                        <div class="dz-media">
                                            <img src="{{ asset($item->thumbnail) }}" alt="/">
                                            <div class="dz-meta">
                                                <ul>
                                                    <li class="seller">{{$item->category->name}}</li>
                                                    <li class="rating"><i class="fa-solid fa-star"></i>{{ rand(3,5) }}
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="dz-content">
                                            <h5 class="title"><a href="#">{{ $item->title }}</a></h5>
                                            <p>{{ $item->description }}</p>
                                            <span class="price">${{ $item->price }}</span>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!-- Search Section -->
    <div class="modal modal-detail fade" id="menuDetailModal" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
					<span class="badge">
						<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
						<rect x="0.5" y="0.5" width="16" height="16" stroke="#0F8A65"/>
						<circle cx="8.5" cy="8.5" r="5.5" fill="#0F8A65"/>
						</svg>
						Pure veg
					</span>
                    <div class="detail-media">
                        <img src="assets/images/modal/pic1.jpg" alt="/">
                    </div>
                    <div class="detail-info">
                        <div class="dz-head">
                            <h5 class="title">Double Patty Veg Burger</h5>
                            <div class="rating">
                                <i class="fa-solid fa-star"></i> <span><strong class="text-dark">4.5</strong> - 20 Reviews</span>
                            </div>
                        </div>
                        <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum has been the industry</p>
                        <ul class="detail-list">
                            <li>Price <span class="text-primary m-t5">$20.00</span></li>
                            <li>Quantity
                                <div class="btn-quantity style-1 m-t5">
                                    <input id="demo_vertical2" type="text" value="1" name="demo_vertical2">
                                </div>
                            </li>
                        </ul>
                        <h6 class="title">Add On</h6>
                        <ul class="add-product">
                            <li>
                                <div class="mini-modal">
                                    <div class="dz-media">
                                        <img src="{{ asset('assets/frontend/images/modal/mini/pic1.jpg') }}" alt="/">
                                    </div>
                                    <div class="dz-content">
                                        <p class="title">French Frise</p>
                                        <div class="form-check search-content">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="mini-modal">
                                    <div class="dz-media">
                                        <img src="{{ asset('assets/frontend/images/modal/mini/pic2.jpg') }}" alt="/">
                                    </div>
                                    <div class="dz-content">
                                        <p class="title">Extra Cheese</p>
                                        <div class="form-check search-content">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="mini-modal">
                                    <div class="dz-media">
                                        <img src="{{ asset('assets/frontend/images/modal/mini/pic3.jpg') }}" alt="/">
                                    </div>
                                    <div class="dz-content">
                                        <p class="title">Coca Cola</p>
                                        <div class="form-check search-content">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="mini-modal">
                                    <div class="dz-media">
                                        <img src="{{ asset('assets/frontend/images/modal/mini/pic4.jpg') }}" alt="/">
                                    </div>
                                    <div class="dz-content">
                                        <p class="title">Choco Lava</p>
                                        <div class="form-check search-content">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="modal-btn-group">
                            <li><a href="shop-cart.html" class="btn btn-primary">Add To Cart <i
                                        class="flaticon-shopping-bag-1 m-l10"></i></a></li>
                            <li><a href="shop-checkout.html" class="btn btn-outline-secondary">Buy Now <i
                                        class="flaticon-shopping-cart m-l10"></i></a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="scroltop-progress scroltop-primary">
        <svg width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
        </svg>
    </div>

@endsection


