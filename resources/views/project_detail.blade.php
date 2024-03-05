@extends('layouts.app')

@section('title', $project->title)
@section('content')



<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image " style="margin-bottom: 60px !important"  data-bs-bg="{{ asset('/assets/img/bg/14.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner">
                    <h1 class="page-title">{{ $project->title }}</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="{{ url('/') }}"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                            <li>{{ $project->title }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->





<!-- SHOP DETAILS AREA START -->
<div class="ltn__shop-details-area pb-10">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="ltn__shop-details-inner ltn__page-details-inner mb-60">
                   
                    <img src="{{ asset('/backend/project/'.$project->images) }}" alt="Image">
                    <h1>{{ $project->title }}</h1>
                    <label><span class="ltn__secondary-color"><i class="flaticon-pin"></i></span> {{ $project->location }}</label>
                    <h4 class="title-2">Description</h4>
                    <p>
                        {!! $project->description !!}
                    </p>



                </div>
            </div>
            <div class="col-lg-4">
                <aside class="sidebar ltn__shop-sidebar ltn__right-sidebar---">
                   

                    <!-- Top Rated Product Widget -->
                    <div class="widget ltn__top-rated-product-widget">
                        <h4 class="ltn__widget-title ltn__widget-title-border-2">Ralated Projects</h4>
                        <ul>
                            @foreach ($reletedProjects as $project)
                                <li>
                                    <div class="top-rated-product-item clearfix">
                                        <div class="top-rated-product-img">
                                            <a href="{{ url('/project/'.$project->id) }}"><img style="height: 60px !important" src="{{ asset('/backend/project/'.explode(",", $project->images)[0]) }}" alt="#"></a>
                                        </div>
                                        <div class="top-rated-product-info">
                                            <div class="product-ratting">
                                                <ul>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <h6><a href="{{ url('/project/'.$project->id) }}">{{ $project->title }}</a></h6>
                                            <div class="product-price">
                                                <a href="{{ url('/project/'.$project->id) }}">View Project <i class="flaticon-right-arrow"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                   

                    <!-- Popular Post Widget -->
                    <div class="widget ltn__popular-post-widget">
                        <h4 class="ltn__widget-title ltn__widget-title-border-2">Leatest Blogs</h4>
                        <ul>
                            @foreach ($latestBlogs as $blog3)
                                <li>
                                    <div class="popular-post-widget-item clearfix">
                                        <div class="popular-post-widget-img">
                                            <a href="{{ url('/blog/'.$blog3->id) }}"><img src="{{ asset('/backend/blog/'.$blog3->image) }}" alt="#"></a>
                                        </div>
                                        <div class="popular-post-widget-brief">
                                            <h6><a href="{{ url('/blog/'.$blog3->id) }}">{!! mb_strimwidth($blog3->title, 0, 25, "...") !!}</a></h6>
                                            <div class="ltn__blog-meta">
                                                <ul>
                                                    <li class="ltn__blog-date">
                                                        <a href="#"><i class="far fa-calendar-alt"></i>{{ date('d M Y', strtotime($blog3->created_at)) }}</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                  

                    <!-- Banner Widget -->
                    <div class="widget ltn__banner-widget d-none">
                        <a href="shop.html"><img src="{{ asset('/assets/img/banner/2.jpg') }}" alt="#"></a>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</div>
<!-- SHOP DETAILS AREA END -->




@endsection
