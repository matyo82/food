@extends('layouts.frontend')

@section('content')
    <!-- Banner  -->
    <div class="dz-bnr-inr style-1 text-center bg-parallax"
         style="background-image:url({{ asset('assets/frontend/images/banner/bnr1.jpg') }}); background-size:cover; background-position:center;">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>Contact Us</h1>
                <!-- Breadcrumb Row -->
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ul>
                </nav>
                <!-- Breadcrumb Row End -->
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Contact Section -->
    <section class="section-wrapper-8 content-inner-1">
        <div class="container">
            <div class="row inner-section-wrapper align-items-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="icon-bx-wraper style-5 hover-aware box-hover">
                        <div class="icon-bx">
                            <div class="icon-cell">
                                <i class="flaticon-placeholder"></i>
                            </div>
                        </div>
                        <div class="icon-content">
                            <h5 class="title">Location</h5>
                            <p>{{ $general ? $general->address:'' }}</p>
                            <div class="effect bg-primary"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="icon-bx-wraper style-5 hover-aware box-hover active">
                        <div class="icon-bx">
                            <div class="icon-cell">
                                <i class="flaticon-telephone"></i>
                            </div>
                        </div>
                        <div class="icon-content">
                            <h5 class="title">Phone Number</h5>
                            <p>{{ $general ? $general->primary_phone:'' }}
                                <br>{{ $general ? $general->secondary_phone:'' }}</p>
                            <div class="effect bg-primary"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="icon-bx-wraper style-5 hover-aware box-hover">
                        <div class="icon-bx ">
                            <div class="icon-cell">
                                <i class="flaticon-email-1"></i>
                            </div>
                        </div>
                        <div class="icon-content">
                            <h5 class="title">Email Address</h5>
                            <p>{{ $general ? $general->email:'' }}</p>
                            <div class="effect bg-primary"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-head text-center">
            <h2 class="title">contact us</h2>
        </div>
        <form method="post" action="{{ route('mail') }}">
            @csrf
            <div class="row">
                <div class="col-lg-6 col-md-6 m-b30 m-sm-b50">
                    <label class="form-label text-primary">Your Name</label>
                    <div class="input-group input-line input-black">
                        <input name="name" required type="text" class="form-control" placeholder="John Doe">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 m-b30 m-sm-b50">
                    <label class="form-label text-primary">Your Email</label>
                    <div class="input-group input-line input-black">
                        <input name="email" required type="text" class="form-control" placeholder="info@example.com">
                    </div>
                </div>
                <div class="col-lg-12 col-md-6 m-b30 m-sm-b50">
                    <label class="form-label text-primary">Your Number</label>
                    <div class="input-group input-line input-black">
                        <input name="phoneNumber" required type="text" class="form-control dz-number"
                               placeholder="9876543210">
                    </div>
                </div>
                <div class="col-sm-12 m-b40">
                    <label class="form-label text-primary">Message</label>
                    <div class="input-group input-line input-black">
                        <textarea name="message" required class="form-control"
                                  placeholder="Hi, do you Have a moment to talk About !"></textarea>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary btn-hover-1"><span>send</span>
                    </button>
                </div>
            </div>
        </form>
    </section>
    <!-- Contact Section -->
@endsection


