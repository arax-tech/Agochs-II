@extends('layouts.app')

@section('title', 'Your Home, Our Commitment!
')
@section('content')

<!-- SLIDER AREA START (slider-3) -->
<div class="ltn__slider-area ltn__slider-3  section-bg-2">
    <div class="ltn__slide-one-active slick-slide-arrow-1 slick-slide-dots-1">
        @foreach ($sliders as $key => $slider)
            <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-3-normal--- ltn__slide-item-3 bg-image bg-overlay-theme-black-60" data-bs-bg="{{ asset('/backend/slider/'.$slider->image) }}">
                <div class="ltn__slide-item-inner text-{{$slider->allignments}}">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 align-self-center align-content-center justify-content-center">
                                <div class="slide-item-info" style="float: {{ $slider->allignments }} !important">
                                    <div class="slide-item-info-inner ltn__slide-animation">
                                        <div class="slide-video mb-50 d-none">
                                            <a class="ltn__video-icon-2 ltn__video-icon-2-border" href="https://www.youtube.com/embed/tlThdr3O5Qo" data-rel="lightcase:myCollection">
                                                <i class="fa fa-play"></i>
                                            </a>
                                        </div>
                                       
                                        <h1 class="slide-title animated ">{!! $slider->title !!}</h1>
                                        <div class="slide-brief animated">
                                            <p>{!! $slider->description !!}</p>
                                        </div>
                                        <div class="btn-wrapper animated">
                                            <a href="#ltn__utilize-cart-menu" class="ltn__utilize-toggle theme-btn-1 btn btn-effect-1">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<!-- SLIDER AREA END -->


<!-- ABOUT US AREA START -->
<div class="ltn__about-us-area pt-30 pb-20 ">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="about-us-img-wrap about-img-left">
                    <iframe width="100%" height="310"
                    src="https://www.youtube.com/embed/wy9P_ylsTBk?autoplay=1&mute=1">
                    </iframe>

                    {{-- <img src="{{ asset('/assets/img/others/7.png') }}" alt="About Us Image">
                    <div class="about-us-img-info about-us-img-info-2 about-us-img-info-3">
                        
                        <div class="ltn__video-img ltn__animation-pulse1">
                            <img src="{{ asset('/assets/img/others/8.png') }}" alt="video popup bg image">
                            <a class="ltn__video-icon-2 ltn__video-icon-2-border---" href="https://www.youtube.com/embed/iP5MvniBux4?autoplay=1&amp;showinfo=0"  data-rel="lightcase:myCollection">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="col-lg-6 align-self-center">
                <div class="about-us-info-wrap">
                    <div class="section-title-area ltn__section-title-2--- mb-20">
                        <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">About Us</h6>
                        <h1 class="section-title">Agochs-II<span>.</span><span>.</span><span>.</span></h1>
                        <p style="text-align: justify;">Agochs-II stands as a distinguished undertaking by Irshad Associates Private Limited, a company with an impressive 25-year legacy of unwavering commitment, exceptional distinction, and a track record of professional excellence. Over the years, Irshad Associates has consistently met the rigorous demands of high-profile engineering projects, both on a national and international scale, spanning civil, electrical, and mechanical domains. This legacy of excellence forms the very foundation of Agochs-II....<a style="color: var(--ltn__secondary-color) !important;" href="{{ url('/about') }}">Read More</a></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- ABOUT US AREA END -->


<!-- SEARCH BY PLACE AREA START (testimonial-7) -->
<div class="ltn__search-by-place-area section-bg-1 before-bg-top--- bg-image-top--- pt-30" data-bs-bg="img/bg/20.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2--- text-center">
                    <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">Facilities</h6>
                    <h1 class="section-title">Members Facilities</h1>
                </div>
            </div>
        </div>
        <div class="row ltn__search-by-place-slider-1-active slick-arrow-1">
            
            @foreach ($facilities as $facilitie)
                <div class="col-lg-4">
                    <div class="ltn__search-by-place-item">
                        <div class="search-by-place-img">
                            <a href="#"><img  style="width: 100% !important; height: 250px !important" src="{{ asset('/backend/facilitie/'.$facilitie->image) }}" alt="#"></a>
                        </div>
                        <div class="search-by-place-info">
                            <h4><a href="#">{{ $facilitie->title }} </a></h4>
                            <p>{{ mb_strimwidth($facilitie->description, 0, 120, "read more...") }}</p>
                        </div>
                    </div>
                </div>
            @endforeach

            <!--  -->
        </div>
    </div>
</div>
<!-- SEARCH BY PLACE AREA END -->

<!-- PRODUCT SLIDER AREA START -->
<div class="ltn__product-slider-area ltn__product-gutter pt-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2--- text-center">
                    <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">Projects</h6>
                    <h1 class="section-title">Our Projects</h1>
                </div>
            </div>
        </div>
        <div class="row ltn__product-slider-item-three-active slick-arrow-1">
            @foreach ($projects as $project)
                @php
                    error_reporting(0);
                    $project_url =  $project->title;
                @endphp
                <!-- ltn__product-item -->
                <div class="col-lg-12">
                    <div class="ltn__product-item ltn__product-item-4 text-center---">
                        <div class="product-img">
                            <a href="{{ url('/project/'.$project_url) }}"><img  style="width: 100% !important; height: 250px !important" src="{{ asset('/backend/project/'.$project->images) }}" alt="#"></a>
                            {{-- <div class="product-badge">
                                <ul>
                                    <li class="sale-badge bg-green">{{ $project->category }}</li>
                                </ul>
                            </div> --}}
                            <div class="product-img-location-gallery">
                                <div class="product-img-location">
                                    <ul>
                                        {{-- <li>
                                            <a href="locations.html"><i class="flaticon-pin"></i> {{ $project->location }}</a>
                                        </li> --}}
                                    </ul>
                                </div>
                                <div class="product-img-gallery">
                                    <ul>
                                        <li>
                                            <a href="{{ url('/project/'.$project_url) }}"><i class="fas fa-camera"></i> {{ count($images) }}</a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="product-info">
                            
                            <h2 class="product-title"><a href="{{ url('/project/'.$project_url) }}">{{ $project->title }}</a></h2>
                            <div class="product-description">
                                <p class="text-justify">
                                    {!! mb_strimwidth($project->description, 0, 140, "...") !!}
                                </p>
                            </div>
                            
                        </div>
                        <div class="product-info-bottom">
                            <div class="search-by-place-btn">
                                <a href="{{ url('/project/'.$project_url) }}">View Project <i class="flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
<!-- PRODUCT SLIDER AREA END -->

<!-- VIDEO AREA START -->
<div class="ltn__video-popup-area ltn__video-popup-margin---">
    <div class="ltn__video-bg-img ltn__video-popup-height-600--- bg-overlay-black-30 bg-image bg-fixed ltn__animation-pulse1" data-bs-bg="{{ asset('/images/bg.jpeg') }}">
       {{--  <a class="ltn__video-icon-2 ltn__video-icon-2-border---" href="https://www.youtube.com/embed/iP5MvniBux4?autoplay=1&amp;showinfo=0" data-rel="lightcase:myCollection">
            <i class="fa fa-play"></i>
        </a> --}}
    </div>
</div>
<!-- VIDEO AREA END -->

<!-- TESTIMONIAL AREA START -->
<div class="ltn__testimonial-area ltn__testimonial-4 pt-30 plr--9">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2--- text-center">
                    <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">Our Testimonial</h6>
                    <h1 class="section-title">Clients Feedback</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__testimonial-slider-4 ltn__testimonial-slider-4-active slick-arrow-1">
                    <div class="ltn__testimonial-item-5">
                        <div class="ltn__quote-icon">
                            <i class="far fa-comments"></i>
                        </div>
                        <div class="ltn__testimonial-image">
                            <img src="{{ asset('/images/1.jpg') }}" alt="quote">
                        </div>
                        <div class="ltn__testimonial-info">
                            <p>Living in Agochs-II has been a breeze due to its excellent location. It's easily accessible from major roads, and the proximity to essential amenities is a huge plus.</p>
                            <h4>Haris</h4>
                        </div>
                    </div>
                    <div class="ltn__testimonial-item-5">
                        <div class="ltn__quote-icon">
                            <i class="far fa-comments"></i>
                        </div>
                        <div class="ltn__testimonial-image"><img src="{{ asset('/images/2.jpg') }}" alt="quote"></div>
                        <div class="ltn__testimonial-info">
                            <p>One of the key factors that drew me to Agochs-II was the top-notch security measures in place. I feel safe and secure knowing that the housing society takes our safety seriously.</p>
                            <h4>Hamza</h4>
                        </div>
                    </div>
                    
                    <div class="ltn__testimonial-item-5">
                        <div class="ltn__quote-icon">
                            <i class="far fa-comments"></i>
                        </div>
                        <div class="ltn__testimonial-image"><img src="{{ asset('/images/3.jpg') }}" alt="quote"></div>
                        <div class="ltn__testimonial-info">
                            <p>Agochs-II boasts a vibrant and diverse community. The facilities such as parks, recreational areas, and a community center have made it a great place for families.</p>
                            <h4>Abbas</h4>
                        </div>
                    </div>

                    <div class="ltn__testimonial-item-5">
                        <div class="ltn__quote-icon">
                            <i class="far fa-comments"></i>
                        </div>
                        <div class="ltn__testimonial-image"><img src="{{ asset('/images/4.jpg') }}" alt="quote"></div>
                        <div class="ltn__testimonial-info">
                            <p>The maintenance team at Agochs-II does an excellent job in keeping the surroundings clean and well-maintained. It's a pleasure to live in a community that takes pride in its appearance.</p>
                            <h4>Raees Ur Rehman</h4>
                        </div>
                    </div>
                </div>
                <ul class="ltn__testimonial-quote-menu d-none d-lg-block">
                    <li><img src="{{ asset('/images/1.jpg') }}" alt="Quote image"></li>
                    <li><img src="{{ asset('/images/2.jpg') }}" alt="Quote image"></li>
                    <li><img src="{{ asset('/images/3.jpg') }}" alt="Quote image"></li>
                    <li><img src="{{ asset('/images/4.jpg') }}" alt="Quote image"></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- TESTIMONIAL AREA END -->




<!-- BLOG AREA START (blog-3) -->
<div class="ltn__blog-area pt-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2--- text-center">
                    <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">News & Blogs</h6>
                    <h1 class="section-title">Leatest News Feeds</h1>
                </div>
            </div>
        </div>
        <div class="row  ltn__blog-slider-one-active slick-arrow-1 ltn__blog-item-3-normal">
            @foreach ($blogs as $blog)
            @php
                $blog_url =  $blog->title;
            @endphp
                <!-- Blog Item -->
                <div class="col-lg-12">
                    <div class="ltn__blog-item ltn__blog-item-3">
                        <div class="ltn__blog-img">
                            <a href="{{ url('/blog/'.$blog_url) }}"><img  style="width: 100% !important; height: 250px !important" src="{{ asset('/backend/blog/'.$blog->image) }}" alt="{{ url('/blog/'.$blog_url) }}"></a>
                        </div>
                        <div class="ltn__blog-brief">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-author">
                                        <a href="{{ url('/blog/'.$blog_url) }}"><i class="far fa-user"></i>by: {{ $blog->author }}</a>
                                    </li>
                                    {{-- <li class="ltn__blog-tags">
                                        <a href="{{ url('/blog/'.$blog_url) }}"><i class="fas fa-tags"></i>{{ $blog->category }}</a>
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
    </div>
</div>
<!-- BLOG AREA END -->

<!-- CALL TO ACTION START (call-to-action-6) -->
<div class="ltn__call-to-action-area call-to-action-6 before-bg-bottom" data-bs-bg="{{ asset('/assets/img/1.jpg--') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="call-to-action-inner call-to-action-inner-6 ltn__secondary-bg position-relative text-center---">
                    <div class="coll-to-info text-color-white">
                        <h1>Looking for a dream home?</h1>
                        <p>We can help you realize your dream of a new home</p>
                    </div>
                    <div class="btn-wrapper">
                        <a class="btn btn-effect-3 btn-white" href="{{ url('/contact') }}">Contact Us <i class="icon-next"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CALL TO ACTION END -->



<div id="ltn__utilize-cart-menu" class="ltn__utilize ltn__utilize-cart-menu">
    <div class="ltn__utilize-menu-inner ltn__scrollbar">
        <div class="ltn__utilize-menu-head">
            <span class="ltn__utilize-menu-title">Request Form</span>
            <button class="ltn__utilize-close">×</button>
        </div>
        <form method="post" action="{{ url('/request') }}">
            @csrf
            
            <div class="mini-cart-product-area ltn__scrollbar">
                <input type="text" name="name" placeholder="Name*" required="">
                <input type="text" name="phone" placeholder="Phone*" required="">
                <input type="text" name="subject" placeholder="Subject*" required="">
                <textarea name="message" placeholder="Message"></textarea>

                <div class="g-recaptcha" data-sitekey="6LevDxMpAAAAADyIjHHtECsrhRTjBoa7szVYqOcc"></div>
                <br/>
            </div>
            <div class="mini-cart-footer">
                <div class="btn-wrapper">
                    <button type="submit" class="theme-btn-1 btn btn-effect-1">Submit</button>
                    <a href="javascript::" class="ltn__utilize-close theme-btn-2 btn btn-effect-2">Close</a>
                </div>
            </div>
        </form>

    </div>
</div>

@endsection



