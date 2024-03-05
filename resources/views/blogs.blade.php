@extends('layouts.app')

@section('title', 'Blogs')
@section('content')



<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image " style="margin-bottom: 60px !important"  data-bs-bg="{{ asset('/assets/img/bg/14.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner">
                    <h1 class="page-title">Blogs</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="{{ url('/') }}"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                            <li>Blogs</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->



<!-- BLOG AREA START -->
<div class="ltn__blog-area ltn__blog-item-3-normal mb-100">
    <div class="container">
        <div class="row">

            @foreach ($blogs as $blog)
            @php
                $blog_url =  $blog->title;
            @endphp
                <!-- Blog Item -->
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="ltn__blog-item ltn__blog-item-3">
                        <div class="ltn__blog-img">
                            <a href="{{ url('/blog/'.$blog_url) }}"><img style="width: 100% !important; height: 250px !important"    src="{{ asset('/backend/blog/'.$blog->image) }}" alt="{{ url('/blog/'.$blog_url) }}"></a>
                        </div>
                        <div class="ltn__blog-brief">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-author">
                                        <a href="#"><i class="far fa-user"></i>by: {{ $blog->author }}</a>
                                    </li>
                                    {{-- <li class="ltn__blog-tags">
                                        <a href="#"><i class="fas fa-tags"></i>{{ $blog->category }}</a>
                                    </li> --}}
                                </ul>
                            </div>
                            <h3 class="ltn__blog-title"><a href="{{ url('/blog/'.$blog_url) }}">{!! mb_strimwidth($blog->title, 0, 25, "...") !!}</a></h3>
                            <p class="text-justify" style="font-style: 14px !important; font-weight: normal !important;">
                                {!! mb_strimwidth($blog->description, 0, 120, "...") !!}
                            </p>
                            <div class="ltn__blog-meta-btn">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>{{ date('d M Y', strtotime($blog->created_at)) }}</li>
                                    </ul>
                                </div>
                                <div class="ltn__blog-btn">
                                    <a href="{{ url('/blog/'.$blog_url) }}">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            
      


        </div>
        <div class="row">
            <div class="col-lg-12">
                {{ $blogs->links('vendor.pagination.custom') }}
            </div>
        </div>
    </div>
</div>
<!-- BLOG AREA END -->

@endsection
