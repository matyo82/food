@extends('layouts.frontend')
@section('title', $blog->title)

@section('content')
    <div class="page-content bg-white">

        <!-- Banner  -->
        <div class="dz-breadcrumb-bnr">
            <div class="container">
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a href="/blog">Blog</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blog Standard</li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- Banner End -->

        <!-- Blog Detail -->
        <section class="content-inner">
            <div class="min-container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="blog-single dz-card sidebar">
                            <div class="dz-media rounded-md">
                                <img src="{{ asset($blog->thumbnail) }}" alt="/">
                            </div>
                            <div class="dz-info">
                                <h1 class="title">{{ $blog->title }}</h1>
                                <div class="dz-meta">
                                    <ul>
                                        <li class="dz-user">
                                            <a href="{{ route('category.blog', $blog->category) }}">
                                                <i class="flaticon-chat-bubble"></i>
                                                category <span>{{ $blog->category->name }}
                                                </span>
                                            </a>
                                        </li>
                                        <li class="dz-date">
                                            <a href="javascript:void(0);">
                                                <i class="flaticon-calendar-date"></i>
                                                {{ $blog->created_at->format('d M Y') }}
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="dz-post-text">
                                    {!! $blog->description !!}
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Detail End -->
    </div>
@endsection
