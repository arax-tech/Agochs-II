@extends('layouts.app')

@section('title', 'About')
@section('content')



<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image " style="margin-bottom: 60px !important"  data-bs-bg="{{ asset('/assets/img/bg/14.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner">
                    <h1 class="page-title">About Us</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="{{ url('/') }}"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                            <li>About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->



<!-- ABOUT US AREA START -->
<div class="ltn__about-us-area pt-0 pb-90 ">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-start">
                <div class="about-us-img-wrap about-img-left">
                    {{-- <img src="{{ asset('/assets/img/others/7.png') }}" alt="About Us Image"> --}}
                    {{-- <iframe width="100%" height="550"
                    src="https://www.youtube.com/shorts/iP5MvniBux4">
                    </iframe> --}}
                    {{-- https://www.youtube.com/watch?v=wy9P_ylsTBk&t=74s --}}
                    <iframe width="100%" height="310"
                    src="https://www.youtube.com/embed/wy9P_ylsTBk?autoplay=1&mute=1">
                    </iframe>
                    {{-- <div class="about-us-img-info about-us-img-info-2 about-us-img-info-3">
                        
                        <div class="ltn__video-img ltn__animation-pulse1">
                            <iframe width="420" height="315"
                            src="https://www.youtube.com/shorts/iP5MvniBux4">
                            </iframe>
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
                        {{-- <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">About Us</h6> --}}
                        <h1 class="section-title">A History of Excellence<span>.</span><span>.</span><span>.</span></h1>
                        <p class="text-justify">
                           Agochs-II stands as a distinguished undertaking by Irshad Associates Private Limited, a company with an impressive 25-year legacy of unwavering commitment, exceptional distinction, and a track record of professional excellence. Over the years, Irshad Associates has consistently met the rigorous demands of high-profile engineering projects, both on a national and international scale, spanning civil, electrical, and mechanical domains. This legacy of excellence forms the very foundation of Agochs-II.
                           <br>

                        </p>
                    </div>

                </div>
            </div>
            <div class="col-lg-12 align-self-center">
                <p class="text-justify">
                    
                    This project is strategically located at the heart of the Twin Cities, Rawalpindi, and Islamabad, right on the main 6-Line G.T Road, just opposite DHA Phase-2 gate, a mere 1-minute drive from GIGA Mall. It's more than just a housing development; it's a vision for the future. It will transform into a gated community fortified by a robust 24-hour surveillance and security system, ensuring that the peace of mind of its residents remains paramount.
                    <br>
                    {{-- This visionary city is set to redefine urban living, harmoniously blending breathtaking natural landscapes with well-planned, spacious, and impeccably maintained roads and open spaces. The result is an environment that is not just beautiful but also functional, offering an idyllic setting for families to thrive.
                    <br>
                    Residents of Agochs-II will benefit from access to the very best in education and healthcare systems, making it a hub of educational and medical excellence within the region. Additionally, the community is designed to cater to both essential and luxury amenities, ensuring that every aspect of modern living is readily available within its bounds.
                    <br>
                    Agochs-II is a testament to the unwavering dedication of Irshad Associates Private Limited to enhancing the quality of life for its community members. It's not just a development; it's a promise of a better, more enriched future for those fortunate enough to call it home.
                    <br> --}}
                    
                </p>
            </div>

            <div class="col-lg-12 mt-20">
                <div>
                    <center>
                        <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">Our Vision</h6>
                        <h1 class="section-title">Our Vision<span>.</span><span>.</span><span>.</span></h1>
                    </center>
                    <p class="text-justify">
                       At Agochs-II, we envision a future where modern living seamlessly
                       coexists with the serenity of nature. We aim to create a vibrant, sustainable community that fosters a sense of belonging, where every resident thrives, and each moment is cherished.
                       <br>

                    </p>
                </div>

            </div>

            <div class="col-lg-12 mt-20">
                <div>
                    <center>
                        <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">Mission</h6>
                        <h1 class="section-title">Mission<span>.</span><span>.</span><span>.</span></h1>
                    </center>
                    <p class="text-justify">
                       Our mission at Agochs-II is to redefine urban living by offering an exceptional blend of contemporary comforts, green spaces, and sustainable practices. We are committed to crafting a fully gated community that celebrates community living, ethical values, and environmental stewardship. Through innovation, integrity, and inclusiveness, we strive to provide a living experience that transcends the ordinary.
                       <br>

                    </p>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- ABOUT US AREA END -->





<!-- TEAM AREA START (Team - 3) -->
{{-- <div class="ltn__team-area pt-115 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2--- text-center">
                    <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">Team</h6>
                    <h1 class="section-title">Property Agents</h1>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-sm-6">
                <div class="ltn__team-item ltn__team-item-3---">
                    <div class="team-img">
                        <img src="{{ asset('assets/img/team/4.jpg') }}" alt="Image">
                    </div>
                    <div class="team-info">
                        <h4><a href="team-details.html">Rosalina D. William</a></h4>
                        <h6 class="ltn__secondary-color">Real Estate Broker</h6>
                        <div class="ltn__social-media">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="ltn__team-item ltn__team-item-3---">
                    <div class="team-img">
                        <img src="{{ asset('assets/img/team/2.jpg') }}" alt="Image">
                    </div>
                    <div class="team-info">
                        <h4><a href="team-details.html">Kelian Anderson</a></h4>
                        <h6 class="ltn__secondary-color">Selling Agents</h6>
                        <div class="ltn__social-media">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="ltn__team-item ltn__team-item-3---">
                    <div class="team-img">
                        <img src="{{ asset('assets/img/team/5.jpg') }}" alt="Image">
                    </div>
                    <div class="team-info">
                        <h4><a href="team-details.html">Miranda H. Halim</a></h4>
                        <h6 class="ltn__secondary-color">Property Seller</h6>
                        <div class="ltn__social-media">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- TEAM AREA END -->

@endsection
