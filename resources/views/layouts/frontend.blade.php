<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from swigo.dexignzone.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Oct 2023 03:56:15 GMT -->
<head>

    <!-- Title -->
    <title>@yield('title') - hotfood</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="DexignZone">
    <meta name="robots" content="">
    <meta name="keywords"
          content="restaurant, restaurant website templates, restaurant template, food, restro, hotel, bootstrap 5, bootstrap, html, frontend, swigo, responsive template, shop, cart, menu, taste, blog, service, cook, customers, website, hungry, shop cart, fast food, table booking, website templates for restaurants, food website templates">
    <meta name="description"
          content="Boost your food business with Swigo's restaurant website templates. Our professionally designed templates cater specifically to the needs of restaurants, offering visually stunning and functional designs. Choose from a variety of food website templates that are perfect for showcasing your menu, promoting your services, and attracting hungry customers. Partner with DexignZone to create an impressive online presence for your restaurant. Start driving more traffic and growing your business today.">
    <meta property="og:title" content="Swigo - Empowering Your Restaurant Website Templates | DexignZone">
    <meta property="og:description"
          content="Boost your food business with Swigo's restaurant website templates. Our professionally designed templates cater specifically to the needs of restaurants, offering visually stunning and functional designs. Choose from a variety of food website templates that are perfect for showcasing your menu, promoting your services, and attracting hungry customers. Partner with DexignZone to create an impressive online presence for your restaurant. Start driving more traffic and growing your business today.">
    <meta property="og:image" content="social-home.png">
    <meta name="format-detection" content="telephone=no">

    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/frontend/images/favicon.png ') }}">

    <!-- Stylesheet -->
    <link href="{{ asset('assets/frontend/vendor/animate/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/vendor/magnific-popup/magnific-popup.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/vendor/bootstrap-select/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/vendor/tempus-dominus/css/tempus-dominus.min.css') }}" rel="stylesheet">

    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendor/rangeslider/rangeslider.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendor/nouislider/nouislider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendor/switcher/switcher.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="{{ asset('assets/frontendd/fonts.googleapis.com/index.html') }}">
    <link rel="preconnect" href="{{ asset('assets/frontendd/fonts.gstatic.com/index.html') }}" crossorigin>
    <link
        href="{{ asset('assets/frontendd/fonts.googleapis.com/css21aea.css?family=Lobster&amp;family=Lobster+Two:ital,wght@0,400;0,700;1,400;1,700&amp;family=Poppins:ital,wght@0,100;0,200;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap') }}"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.3.0/css/flat-ui.min.css" rel="stylesheet"/>

</head>
<body id="bg">
<div id="loading-area" class="loading-page-3">
    <img src="{{ asset('assets/frontend/images/loading.gif') }}" alt="">
</div>
<div class="page-wraper">

    <!-- Header -->
    @include('partials.frontend.header')
    <!-- Header -->

    <!-- Offcanvas Form Start -->
    @guest
        {{--    login    --}}
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasLogin">
            <div class="offcanvas-body">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                <div class="offcanvas-form">
                    <div class="login-head">
                        <h4 class="title">Welcome Back</h4>
                        <p>We’d love have you join our 100% remote network of creatord & freelance.</p>
                        <h6 class="login-title"><span></span></h6>
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group m-b15">
                            <label class="form-label">Email*</label>
                            <div class="input-group">
                                <input name="email" required type="text"
                                       class="form-control @error('email') is-invalid @enderror"
                                       placeholder="Enter Your Email">
                            </div>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                        <div class="form-group m-b30">
                            <label class="form-label">Password*</label>
                            <div class="input-group search-input">
                                <input name="password" type="password"
                                       class="form-control dz-password @error('password') is-invalid @enderror"
                                       placeholder="Enter a Password">
                                <div class="show-pass">
                                    <svg class="eye-close" xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                         fill="#8ea5c8">
                                        <path
                                            d="M11 17.188a8.71 8.71 0 0 1-1.576-.147.69.69 0 0 1-.579-.678.7.7 0 0 1 .817-.676 7.33 7.33 0 0 0 1.339.127c4.073 0 7.61-3.566 8.722-4.812a18.51 18.51 0 0 0-2.434-2.274.69.69 0 0 1 .335-1.226.69.69 0 0 1 .268.019c.087.024.169.064.24.12a18.79 18.79 0 0 1 3.036 2.939.69.69 0 0 1 0 .848c-.185.234-4.581 5.763-10.167 5.763zm7.361-13.549a.69.69 0 0 0-.972 0l-2.186 2.186a10.68 10.68 0 0 0-2.606-.864c-.527-.099-1.061-.149-1.597-.149-5.585 0-9.982 5.528-10.166 5.763a.69.69 0 0 0 0 .848c.897 1.09 1.915 2.075 3.033 2.936.529.415 1.083.796 1.66 1.142l-1.888 1.887c-.066.063-.118.139-.154.223a.69.69 0 0 0 .145.757.67.67 0 0 0 .226.15c.085.034.175.052.266.051a.69.69 0 0 0 .265-.056c.084-.036.16-.088.223-.154l13.75-13.75a.69.69 0 0 0 0-.972zm-13.65 9.636A18.51 18.51 0 0 1 2.278 11C3.39 9.754 6.927 6.187 11 6.187a7.31 7.31 0 0 1 1.348.127 8.92 8.92 0 0 1 1.814.55L12.895 8.13c-.661-.437-1.453-.632-2.241-.552a3.44 3.44 0 0 0-2.085.989c-.56.56-.91 1.297-.989 2.085a3.44 3.44 0 0 0 .552 2.241l-1.601 1.604a14.43 14.43 0 0 1-1.82-1.222zm4.432-1.392c-.134-.275-.204-.577-.206-.883a2.07 2.07 0 0 1 .6-1.456 2.12 2.12 0 0 1 2.338-.392l-2.731 2.731z"></path>
                                    </svg>
                                    <svg class="eye-open" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                         fill="#8ea5c8">
                                        <path
                                            d="M19.873 9.611c-.179-.244-4.436-5.985-9.873-5.985S.305 9.367.127 9.611a.66.66 0 0 0 0 .778c.178.244 4.436 5.985 9.873 5.985s9.694-5.74 9.873-5.984a.66.66 0 0 0 0-.778zM10 15.055c-4.005 0-7.474-3.81-8.501-5.055C2.525 8.753 5.986 4.945 10 4.945c4.005 0 7.473 3.809 8.501 5.055-1.025 1.247-4.487 5.054-8.501 5.054zm0-9.011A3.96 3.96 0 0 0 6.044 10 3.96 3.96 0 0 0 10 13.956 3.96 3.96 0 0 0 13.956 10 3.96 3.96 0 0 0 10 6.044zm0 6.593A2.64 2.64 0 0 1 7.363 10 2.64 2.64 0 0 1 10 7.363 2.64 2.64 0 0 1 12.637 10 2.64 2.64 0 0 1 10 12.637z"></path>
                                    </svg>
                                </div>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <button name="submit" value="submit" type="submit"
                                class="btn btn-primary w-100 d-block btn-hover-2">
                            <span>Sign In</span>
                        </button>
                    </form>

                    <p class="text-center m-t30">Not registered?
                        <a class="register text-primary font-weight-500" data-bs-toggle="offcanvas"
                           href="#offcanvasRegister" role="button" aria-controls="offcanvasRegister">Register here</a>
                    </p>

                    <p class="text-center m-t30">Forgot Your Password?
                        <a class="register text-primary font-weight-500"
                           href="{{ route('password.request') }}" role="button">Reset password</a>
                    </p>
                </div>
            </div>
        </div>

        {{--    register    --}}
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRegister">
            <div class="offcanvas-body">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                <div class="offcanvas-form">
                    <div class="login-head">
                        <h4 class="title">Join Our Network</h4>
                        <p>We’d love have you join our 100% remote network of creatord & freelance.</p>
                        <h6 class="login-title"><span>OR</span></h6>
                    </div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group m-b15">
                            <label class="form-label">Name*</label>
                            <div class="input-group">
                                <input name="name" required type="text"
                                       class="form-control @error('name') is-invalid @enderror"
                                       placeholder="Enter Your Name">
                            </div>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group m-b15">
                            <label class="form-label">Email*</label>
                            <div class="input-group">
                                <input name="email" required type="text"
                                       class="form-control @error('email') is-invalid @enderror"
                                       placeholder="Enter Your Email">
                            </div>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group m-b30">
                            <label class="form-label">Password*</label>
                            <div class="input-group search-input">
                                <input name="password" type="password"
                                       class="form-control dz-password @error('password') is-invalid @enderror"
                                       placeholder="Create a Password">
                                <div class="show-pass">
                                    <svg class="eye-close" xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                         fill="#8ea5c8">
                                        <path
                                            d="M11 17.188a8.71 8.71 0 0 1-1.576-.147.69.69 0 0 1-.579-.678.7.7 0 0 1 .817-.676 7.33 7.33 0 0 0 1.339.127c4.073 0 7.61-3.566 8.722-4.812a18.51 18.51 0 0 0-2.434-2.274.69.69 0 0 1 .335-1.226.69.69 0 0 1 .268.019c.087.024.169.064.24.12a18.79 18.79 0 0 1 3.036 2.939.69.69 0 0 1 0 .848c-.185.234-4.581 5.763-10.167 5.763zm7.361-13.549a.69.69 0 0 0-.972 0l-2.186 2.186a10.68 10.68 0 0 0-2.606-.864c-.527-.099-1.061-.149-1.597-.149-5.585 0-9.982 5.528-10.166 5.763a.69.69 0 0 0 0 .848c.897 1.09 1.915 2.075 3.033 2.936.529.415 1.083.796 1.66 1.142l-1.888 1.887c-.066.063-.118.139-.154.223a.69.69 0 0 0 .145.757.67.67 0 0 0 .226.15c.085.034.175.052.266.051a.69.69 0 0 0 .265-.056c.084-.036.16-.088.223-.154l13.75-13.75a.69.69 0 0 0 0-.972zm-13.65 9.636A18.51 18.51 0 0 1 2.278 11C3.39 9.754 6.927 6.187 11 6.187a7.31 7.31 0 0 1 1.348.127 8.92 8.92 0 0 1 1.814.55L12.895 8.13c-.661-.437-1.453-.632-2.241-.552a3.44 3.44 0 0 0-2.085.989c-.56.56-.91 1.297-.989 2.085a3.44 3.44 0 0 0 .552 2.241l-1.601 1.604a14.43 14.43 0 0 1-1.82-1.222zm4.432-1.392c-.134-.275-.204-.577-.206-.883a2.07 2.07 0 0 1 .6-1.456 2.12 2.12 0 0 1 2.338-.392l-2.731 2.731z"></path>
                                    </svg>
                                    <svg class="eye-open" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                         fill="#8ea5c8">
                                        <path
                                            d="M19.873 9.611c-.179-.244-4.436-5.985-9.873-5.985S.305 9.367.127 9.611a.66.66 0 0 0 0 .778c.178.244 4.436 5.985 9.873 5.985s9.694-5.74 9.873-5.984a.66.66 0 0 0 0-.778zM10 15.055c-4.005 0-7.474-3.81-8.501-5.055C2.525 8.753 5.986 4.945 10 4.945c4.005 0 7.473 3.809 8.501 5.055-1.025 1.247-4.487 5.054-8.501 5.054zm0-9.011A3.96 3.96 0 0 0 6.044 10 3.96 3.96 0 0 0 10 13.956 3.96 3.96 0 0 0 13.956 10 3.96 3.96 0 0 0 10 6.044zm0 6.593A2.64 2.64 0 0 1 7.363 10 2.64 2.64 0 0 1 10 7.363 2.64 2.64 0 0 1 12.637 10 2.64 2.64 0 0 1 10 12.637z"></path>
                                    </svg>
                                </div>
                            </div>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group m-b30">
                            <label class="form-label">config Password*</label>
                            <div class="input-group search-input">
                                <input name="password_confirmation" type="password"
                                       class="form-control dz-password @error('password_confirmation') is-invalid @enderror"
                                       placeholder="Create a Password">
                                <div class="show-pass">
                                    <svg class="eye-close" xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                         fill="#8ea5c8">
                                        <path
                                            d="M11 17.188a8.71 8.71 0 0 1-1.576-.147.69.69 0 0 1-.579-.678.7.7 0 0 1 .817-.676 7.33 7.33 0 0 0 1.339.127c4.073 0 7.61-3.566 8.722-4.812a18.51 18.51 0 0 0-2.434-2.274.69.69 0 0 1 .335-1.226.69.69 0 0 1 .268.019c.087.024.169.064.24.12a18.79 18.79 0 0 1 3.036 2.939.69.69 0 0 1 0 .848c-.185.234-4.581 5.763-10.167 5.763zm7.361-13.549a.69.69 0 0 0-.972 0l-2.186 2.186a10.68 10.68 0 0 0-2.606-.864c-.527-.099-1.061-.149-1.597-.149-5.585 0-9.982 5.528-10.166 5.763a.69.69 0 0 0 0 .848c.897 1.09 1.915 2.075 3.033 2.936.529.415 1.083.796 1.66 1.142l-1.888 1.887c-.066.063-.118.139-.154.223a.69.69 0 0 0 .145.757.67.67 0 0 0 .226.15c.085.034.175.052.266.051a.69.69 0 0 0 .265-.056c.084-.036.16-.088.223-.154l13.75-13.75a.69.69 0 0 0 0-.972zm-13.65 9.636A18.51 18.51 0 0 1 2.278 11C3.39 9.754 6.927 6.187 11 6.187a7.31 7.31 0 0 1 1.348.127 8.92 8.92 0 0 1 1.814.55L12.895 8.13c-.661-.437-1.453-.632-2.241-.552a3.44 3.44 0 0 0-2.085.989c-.56.56-.91 1.297-.989 2.085a3.44 3.44 0 0 0 .552 2.241l-1.601 1.604a14.43 14.43 0 0 1-1.82-1.222zm4.432-1.392c-.134-.275-.204-.577-.206-.883a2.07 2.07 0 0 1 .6-1.456 2.12 2.12 0 0 1 2.338-.392l-2.731 2.731z"></path>
                                    </svg>
                                    <svg class="eye-open" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                         fill="#8ea5c8">
                                        <path
                                            d="M19.873 9.611c-.179-.244-4.436-5.985-9.873-5.985S.305 9.367.127 9.611a.66.66 0 0 0 0 .778c.178.244 4.436 5.985 9.873 5.985s9.694-5.74 9.873-5.984a.66.66 0 0 0 0-.778zM10 15.055c-4.005 0-7.474-3.81-8.501-5.055C2.525 8.753 5.986 4.945 10 4.945c4.005 0 7.473 3.809 8.501 5.055-1.025 1.247-4.487 5.054-8.501 5.054zm0-9.011A3.96 3.96 0 0 0 6.044 10 3.96 3.96 0 0 0 10 13.956 3.96 3.96 0 0 0 13.956 10 3.96 3.96 0 0 0 10 6.044zm0 6.593A2.64 2.64 0 0 1 7.363 10 2.64 2.64 0 0 1 10 7.363 2.64 2.64 0 0 1 12.637 10 2.64 2.64 0 0 1 10 12.637z"></path>
                                    </svg>
                                </div>
                            </div>
                            @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <button name="submit" value="submit" type="submit"
                                class="btn btn-primary w-100 d-block btn-hover-2">
                            <span>Sign Up</span>
                        </button>
                    </form>
                    <p class="text-center m-t30">Already have an account?
                        <a class="text-primary font-weight-500" data-bs-toggle="offcanvas" href="#offcanvasLogin"
                           role="button" aria-controls="offcanvasLogin">Login</a>
                    </p>
                </div>
            </div>
        </div>
    @endguest
    <!-- Offcanvas Form End -->

    <div class="page-content bg-white">
        @yield('content')

        <!-- Map Iframe -->
        <div class="map-iframe style-1">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d244934.17139458598!2d75.27787773507539!3d25.125368923263647!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1678086292169!5m2!1sen!2sin"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-- Map Iframe -->

    </div>

    <!--Footer-->
    @include('partials.frontend.footer')

</div>
@yield('script')
<!-- JAVASCRIPT FILES ========================================= -->
<script src="{{ asset('assets/frontend/js/jquery.min.js') }}"></script><!-- JQUERY.MIN JS -->
<script src="{{ asset('assets/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- BOOTSTRAP.MIN JS -->
<script src="{{ asset('assets/frontend/vendor/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
<!-- BOOTSTRAP SELEECT -->
<script src="{{ asset('assets/frontend/vendor/magnific-popup/magnific-popup.js') }}"></script>
<!-- MAGNIFIC POPUP JS -->
<script src="{{ asset('assets/frontend/vendor/counter/waypoints-min.js') }}"></script><!-- WAYPOINTS JS -->
<script src="{{ asset('assets/frontend/vendor/wow/wow.js') }}"></script><!-- WOW JS -->
<script src="{{ asset('assets/frontend/vendor/counter/counterup.min.js') }}"></script><!-- COUNTERUP JS -->
<script src="{{ asset('assets/frontend/vendor/swiper/swiper-bundle.min.js') }}"></script><!-- OWL-CAROUSEL -->
<script src="{{ asset('assets/frontend/vendor/popper/popper.js') }}"></script><!-- Popper -->
<script src="{{ asset('assets/frontend/vendor/tempus-dominus/js/tempus-dominus.min.js') }}"></script>
<!-- Tempus Dominus -->
<script src="{{ asset('assets/frontend/vendor/tilt/tilt.jquery.min.js') }}"></script><!-- TILT -->
<script src="{{ asset('assets/frontend/js/dz.carousel.min.js') }}"></script><!-- OWL-CAROUSEL -->
<script src="{{ asset('assets/frontend/js/dz.ajax.js') }}"></script><!-- AJAX -->
<script src="{{ asset('assets/frontend/js/custom.min.js') }}"></script><!-- CUSTOM JS -->
<script src="{{ asset('assets/frontend/js/dznav-init.js') }}"></script><!-- DZNAV INIT -->
<script src="{{ asset('assets/frontend/vendor/rangeslider/rangeslider.js') }}"></script>
<script src="{{ asset('assets/frontend/vendor/switcher/switcher.js') }}"></script>


<script src="{{ asset('assets/frontend/vendor/masonry/masonry-4.2.2.js') }}"></script><!-- MASONRY -->
<script src="{{ asset('assets/frontend/vendor/masonry/isotope.pkgd.min.js') }}"></script><!-- ISOTOPE -->
<script src="{{ asset('assets/frontend/vendor/imagesloaded/imagesloaded.js') }}"></script><!-- IMAGESLOADED -->
<script
    src="{{ asset('assets/frontend/vendor/bootstrap-touchspin/bootstrap-touchspin.js') }}"></script><!-- TOUCHSPIN -->
<script src="{{ asset('assets/frontend/vendor/nouislider/nouislider.min.js') }}"></script><!-- NOUSLIDER MIN JS-->
<script src="{{ asset('assets/frontend/vendor/wnumb/wNumb.js') }}"></script><!-- WNUMB -->
</body>

<!-- Mirrored from swigo.dexignzone.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Oct 2023 03:58:12 GMT -->
</html>
