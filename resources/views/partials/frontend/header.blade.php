<header class="site-header mo-left header header-transparent style-1">
    <!-- Main Header -->
    <div class="sticky-header main-bar-wraper navbar-expand-lg">
        <div class="main-bar clearfix ">
            <div class="container clearfix">
                <!-- Website Logo -->
                <div class="logo-header mostion">
                    <a href="/" class="anim-logo">
                        <img src="{{ asset( $general ? $general->logo:'assets/frontend/images/logo.png') }}" alt="/">
                    </a>
                </div>

                <!-- Nav Toggle Button -->
                <button class="navbar-toggler collapsed navicon justify-content-end" type="button"
                        data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

                <!-- EXTRA NAV -->
                <div class="extra-nav">
                    <div class="extra-cell">
                        <ul>
                            @guest
                                <li>
                                    <a class="btn btn-white btn-square btn-shadow" data-bs-toggle="offcanvas"
                                       href="#offcanvasLogin" role="button" aria-controls="offcanvasLogin">
                                        <i class="flaticon-user"></i>
                                    </a>
                                </li>
                            @endguest

                            @auth
                                <li>
                                    <a class="btn btn-white btn-square btn-shadow" href="#">
                                        <i class="flaticon-user"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="btn btn-white btn-square btn-shadow" href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="fui-exit"></i>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            @endauth

                            @guest
                            @else
                                    <li>
                                        <button type="button" class="btn btn-white btn-square btn-shadow cart-btn">
                                            <i class="flaticon-shopping-bag-1"></i>
                                            <span class="badge">{{ \App\Models\Cart::where('user_id', auth()->user()->id)->sum('quantity') }}</span>
                                        </button>
                                        <ul class="dropdown-menu cart-list">
                                            <li class="cart-item">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <a href="product-detail.html">
                                                            <img alt="/" class="media-object" src="assets/images/shop/pic2.jpg">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="dz-title"><a href="product-detail.html"
                                                                                class="media-heading">Double Burger</a></h6>
                                                        <span class="dz-price">$28.00</span>
                                                        <span class="item-close">&times;</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="cart-item">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <a href="product-detail.html">
                                                            <img alt="/" class="media-object" src="assets/images/shop/pic3.jpg">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="dz-title"><a href="product-detail.html"
                                                                                class="media-heading">Cheese Burger</a></h6>
                                                        <span class="dz-price">$20.00</span>
                                                        <span class="item-close">&times;</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="cart-item">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <a href="product-detail.html">
                                                            <img alt="/" class="media-object" src="assets/images/shop/pic4.jpg">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="dz-title"><a href="product-detail.html"
                                                                                class="media-heading">Burger</a></h6>
                                                        <span class="dz-price">$15.00</span>
                                                        <span class="item-close">&times;</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="cart-item text-center d-flex justify-content-between">
                                                <h6 class="text-primary mb-0">Total:</h6>
                                                <h6 class="text-primary mb-0">$63</h6>
                                            </li>
                                            <li class="text-center d-flex">
                                                <a href="shop-cart.html" class="btn btn-primary me-2 w-100 d-block btn-hover-1"><span>View Cart</span></a>
                                                <a href="our-menu-1.html"
                                                   class="btn btn-outline-primary w-100 d-block btn-hover-1"><span>Menu</span></a>
                                            </li>
                                        </ul>
                                    </li>
                            @endguest

                        </ul>
                    </div>
                </div>
                <!-- EXTRA NAV -->

                <!-- Header Nav -->
                <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
                    {{-- alert --}}
                    @include('sweetalert::alert')
                    {{-- end alert --}}
                    <div class="logo-header">
                        <a href="index.html" class="anim-logo"><img src="assets/images/logo.png" alt="/"></a>
                    </div>
                    <ul class="nav navbar-nav navbar">
                        <li class="sub-menu-down"><a href="javascript:void(0);">Home</a>
                            <ul class="sub-menu">
                                <li><a href="index.html">Home 01</a></li>
                                <li><a href="index-2.html">Home 02</a></li>
                                <li><a href="index-3.html">Home 03</a></li>
                            </ul>
                        </li>
                        <li class="has-mega-menu">
                            <a href="javascript:void(0);">Pages</a>
                            <ul class="mega-menu">
                                <li><a href="javascript:;">Pages</a>
                                    <ul>
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="faq.html">FAQ</a></li>
                                        <li><a href="team.html">Team</a></li>
                                        <li><a href="team-detail.html">Team Detail</a></li>
                                        <li><a href="testimonial.html">Testimonial</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:;">Pages</a>
                                    <ul>
                                        <li><a href="services.html">Services</a></li>
                                        <li><a href="service-detail.html">Service Detail</a></li>
                                        <li><a href="error-404.html">Error 404</a></li>
                                        <li><a href="coming-soon.html">Coming Soon</a></li>
                                        <li><a href="under-maintenance.html">Under Maintenance</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:;">Our Menus</a>
                                    <ul>
                                        <li><a href="our-menu-1.html">Menu Style 1</a></li>
                                        <li><a href="our-menu-2.html">Menu Style 2</a></li>
                                        <li><a href="our-menu-3.html">Menu Style 3</a></li>
                                        <li><a href="our-menu-4.html">Menu Style 4</a></li>
                                        <li><a href="our-menu-5.html">Menu Style 5</a></li>
                                    </ul>
                                </li>
                                <li class="header-adv p-0"><img src="assets/images/adv-media.jpg" alt="/"></li>
                            </ul>
                        </li>
                        <li class="sub-menu-down"><a href="javascript:void(0);">Shop</a>
                            <ul class="sub-menu">
                                <li><a href="shop-style-1.html">Shop Style 1</a></li>
                                <li><a href="shop-style-2.html">Shop Style 2</a></li>
                                <li><a href="shop-cart.html">Shop Cart</a></li>
                                <li><a href="shop-wishlist.html">Shop Wishlist</a></li>
                                <li><a href="shop-checkout.html">Shop Checkout</a></li>
                                <li><a href="product-detail.html">Product Detail</a></li>
                            </ul>
                        </li>
                        <li class="has-mega-menu">
                            <a href="javascript:void(0);">Blogs</a>
                            <ul class="mega-menu">
                                <li><a href="javascript:;">Blog Grid</a>
                                    <ul>
                                        <li><a href="blog-grid-2.html">Blog Grid 2</a></li>
                                        <li><a href="blog-grid-3.html">Blog Grid 3</a></li>
                                        <li><a href="blog-grid-left-sidebar.html">Blog Grid Left Sidebar</a></li>
                                        <li><a href="blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:;">Blog List</a>
                                    <ul>
                                        <li><a href="blog-list.html">Blog List</a></li>
                                        <li><a href="blog-list-left-sidebar.html">Blog List Left Sidebar</a></li>
                                        <li><a href="blog-list-right-sidebar.html">Blog List Right Sidebar</a></li>
                                        <li><a href="blog-both-sidebar.html">Blog Both Sidebar</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:;">Blog Single</a>
                                    <ul>
                                        <li><a href="blog-standard.html">Blog Detail</a></li>
                                        <li><a href="blog-open-gutenberg.html">Blog Open Gutenberg</a></li>
                                        <li><a href="blog-detail-left-sidebar.html">Blog Details Left Sidebar</a></li>
                                        <li><a href="blog-detail-right-sidebar.html">Blog Details Right Sidebar</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:;">Blog Masonry</a>
                                    <ul>
                                        <li><a href="blog-grid-3-masonary.html">Blog Grid 3 Masonry</a></li>
                                        <li><a href="blog-grid-4-masonary.html">Blog Grid 4 Masonry</a></li>
                                        <li><a href="blog-wide-list-sidebar.html">Blog Wide List Sidebar</a></li>
                                        <li><a href="blog-wide-grid-sidebar.html">Blog Wide Grid Sidebar</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="contact-us.html">Contact Us</a></li>
                    </ul>
                    <div class="dz-social-icon">
                        <ul>
                            <li><a target="_blank" class="fab fa-facebook-f"
                                   href="{{ $general ? $general->facebook:'' }}"></a></li>
                            <li><a target="_blank" class="fab fa-twitter"
                                   href="{{ $general ? $general->twitter:'' }}"></a></li>
                            <li><a target="_blank" class="fab fa-instagram"
                                   href="{{ $general ? $general->instagram:'' }}"></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Main Header End -->
</header>
