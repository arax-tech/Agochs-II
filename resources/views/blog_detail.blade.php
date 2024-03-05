@extends('layouts.app')

@section('title', $blog->title)
@section('content')



<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image " style="margin-bottom: 60px !important"  data-bs-bg="{{ asset('/assets/img/bg/14.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner">
                    <h1 class="page-title">{!! $blog->title !!}</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="{{ url('/') }}"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                            <li>{!! $blog->title !!}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->



<!-- PAGE DETAILS AREA START (blog-details) -->
<div class="ltn__page-details-area ltn__blog-details-area mb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="ltn__blog-details-wrap">
                    <div class="ltn__page-details-inner ltn__blog-details-inner">
                        
                        <h2 class="ltn__blog-title">{!! $blog->title !!}</h2>
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author">
                                    <a href="#"><img src="{{ asset('/backend/placeholder.jpg') }}" alt="#">By: {{ $blog->author }}</a>
                                </li>
                                <li class="ltn__blog-date">
                                    <i class="far fa-calendar-alt"></i>{{ date('d M Y', strtotime($blog->created_at)) }}
                                </li>
                            </ul>
                        </div>
                        <img src="{{ asset('/backend/blog/'.$blog->image) }}" alt="Image">
                        <p>{!! $blog->description !!}</p>
                    
                        
                    


                       
                        
                    </div>
                  

                    <hr>
                    <!-- related-post -->
                    <div class="related-post-area mb-50">
                        <h4 class="title-2">Related Post</h4>
                        <div class="row">
                            @foreach ($reletedBlogs as $blog1)
                                <div class="col-md-6">
                                    <!-- Blog Item -->
                                    <div class="ltn__blog-item ltn__blog-item-6">
                                        <div class="ltn__blog-img">
                                            <a href="{{ url('/blog/'.$blog1->id) }}"><img src="{{ asset('/backend/blog/'.$blog1->image) }}" alt="Image"></a>
                                        </div>
                                        <div class="ltn__blog-brief">
                                            <div class="ltn__blog-meta">
                                                <ul>
                                                    <li class="ltn__blog-date ltn__secondary-color">
                                                        <i class="far fa-calendar-alt"></i>{{ date('d M Y', strtotime($blog1->created_at)) }}
                                                    </li>
                                                </ul>
                                            </div>
                                            <h3 class="ltn__blog-title"><a href="{{ url('/blog/'.$blog1->id) }}">{!! mb_strimwidth($blog1->title, 0, 25, "...") !!}</a></h3>
                                            <p>{!! mb_strimwidth($blog1->description, 0, 30, "...") !!}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            

                        </div>
                    </div>
                    

                </div>
            </div>
            <div class="col-lg-4">
                <aside class="sidebar-area blog-sidebar ltn__right-sidebar">
                  

                    <!-- Popular Product Widget -->
                    <div class="widget ltn__popular-product-widget">       
                        <h4 class="ltn__widget-title ltn__widget-title-border-2">Popular Posts</h4>                     
                        <div class="row ltn__popular-product-widget-active slick-arrow-1">
                            @foreach ($latestBlogs as $blog2)
                                <!-- ltn__product-item -->
                                <div class="col-12">
                                    <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                                        <div class="product-img">
                                            <a href="{{ url('/blog/'.$blog2->id) }}"><img src="{{ asset('/backend/blog/'.$blog2->image) }}" alt="#"></a>
                                        </div>
                                        <div class="product-info">
                                            
                                            <h2 class="product-title"><a href="{{ url('/blog/'.$blog2->id) }}">{!! mb_strimwidth($blog2->title, 0, 25, "...") !!}</a></h2>
                                           
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
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
                    
                    
                </aside>
            </div>
        </div>
    </div>
</div>
<!-- PAGE DETAILS AREA END -->

@endsection
