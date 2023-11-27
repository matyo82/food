<footer class="site-footer  style-1 bg-dark" id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-12 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="dz-form-card bg-primary">
                        <div class="section-head">
                            <h4 class="title m-0">Contact us</h4>
                            <p class="m-t10">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                        <form class="dzForm dezPlaceAni" method="POST" action="https://swigo.dexignzone.com/xhtml/script/contact_smtp.php">
                            <input type="hidden" class="form-control" name="dzToDo" value="Contact">
                            <input type="hidden" class="form-control" name="reCaptchaEnable" value="0" >
                            <div class="dzFormMsg"></div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="input-group input-line">
                                        <input name="dzName" required type="text" class="form-control" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="input-group input-line">
                                        <input name="dzEmail" required type="text" class="form-control" placeholder="Email Address">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="input-group input-line">
                                        <input name="dzOther[Subject]" required type="text" class="form-control" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-sm-12 ">
                                    <div class="input-group input-line">
                                        <textarea name="dzMessage" required class="form-control" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <button type="submit" name="submit" value="submit" class="btn btn-md btn-white btn-hover-1"><span>Send Message</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-5 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="widget widget_getintuch">
                        <h5 class="footer-title">Contact</h5>
                        <ul>
                            <li>
                                <i class="flaticon-placeholder"></i>
                                <p>{{ $general->address }}</p>
                            </li>
                            <li>
                                <i class="flaticon-telephone"></i>
                                <p>{{ $general->primary_phone }}<br>
                                    {{ $general->secondary_phone }}</p>
                            </li>
                            <li>
                                <i class="flaticon-email-1"></i>
                                <p>{{ $general->email }}</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="widget widget_services">
                        <h5 class="footer-title">Our Links</h5>
                        <ul>
                            <li><a href="index.html"><span>Home</span></a></li>
                            <li><a href="about-us.html"><span>About Us</span></a></li>
                            <li><a href="services.html"><span>Services</span></a></li>
                            <li><a href="team.html"><span>Team</span></a></li>
                            <li><a href="{{ route('allblogs') }}"><span>Blog</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="widget widget_services">
                        <h5 class="footer-title">Help Center</h5>
                        <ul>
                            <li><a href="faq.html"><span>FAQ</span></a></li>
                            <li><a href="shop-style-1.html"><span>Shop</span></a></li>
                            <li><a href="shop-style-2.html"><span>Category Filter</span></a></li>
                            <li><a href="testimonial.html"><span>Testimonials</span></a></li>
                            <li><a href="contact-us.html"><span>Contact Us</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Bottom Part -->
    <div class="container">
        <div class="footer-bottom">
            <div class="row">
                <div class="col-xl-6 col-md-6 text-md-start">
                    <p>Copyright 2023 All rights reserved.</p>
                </div>
                <div class="col-xl-6 col-md-6 text-md-end">
                    <span class="copyright-text">Crafted With <span class="heart"></span> by <a href="https://dexignzone.com/" target="_blank">DexignZone</a></span>
                </div>
            </div>
        </div>
    </div>
    <img class="bg1 dz-move" src="{{ asset('assets/frontend/images/background/pic5.png') }}" alt="/">
    <img class="bg2 dz-move" src="{{ asset('assets/frontend/images/background/pic6.png') }}" alt="/">
</footer>

<!-- Footer -->
<div class="scroltop-progress scroltop-primary">
    <svg width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
    </svg>
</div>
