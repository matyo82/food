@extends('layouts.frontend')
@section('title', 'Blog')

@section('content')
    <!-- Banner  -->
    <div class="dz-bnr-inr style-1 text-center bg-parallax"
         style="background-image:url({{ asset('assets/frontend/images/banner/bnr3.jpg') }}); background-size:cover; background-position:center;">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>Blog List</h1>
                <!-- Breadcrumb Row -->
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blog List</li>
                    </ul>
                </nav>
                <!-- Breadcrumb Row End -->
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Blog Section -->
    <section class="content-inner-1">
        <div class="container">
            <div class="row justify-content-center loadmore-content">
                @if(!empty($blog))
                    @foreach($blog as $item)
                        <div class="col-xl-6 col-lg-8">
                            <div class="dz-card style-1 blog-half overlay-shine dz-img-effect zoom m-b30">
                                <div class="dz-media">
                                    <a href="{{ route('get.blog', $item->id) }}"><img
                                            src="{{ asset($item->thumbnail) }}" alt="$item->title"></a>
                                </div>
                                <div class="dz-info">
                                    <div class="dz-meta">
                                        <ul>
                                            <li><a href="javascript:void(0);"><i
                                                        class="flaticon-calendar-date"></i>{{ $item->created_at->format('d M Y') }}
                                                </a></li>
                                            <li><a href="javascript:void(0);"><i
                                                        class="flaticon-cuisine"></i>{{ $item->category->name }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h5 class="dz-title"><a
                                            href="{{ route('get.blog', $item->id) }}">{{ $item->title }}</a></h5>
                                    <p>{!! Str::limit($item->description, 100) !!}</p>
                                    <div class="read-btn">
                                        <a href="{{ route('get.blog', $item->id) }}"
                                           class="btn btn-primary btn-hover-2">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="text-center m-t10">
                <a class="btn btn-primary dz-load-more btn-hover-2" href="javascript:void(0);"
                   rel="assets/ajax/blog-list.html">Load More</a>
            </div>
        </div>
    </section>
    <!-- Blog Section -->
@endsection
