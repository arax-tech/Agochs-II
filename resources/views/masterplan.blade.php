@extends('layouts.app')

@section('title', 'Master Plan')
@section('content')



<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image " style="margin-bottom: 60px !important"  data-bs-bg="{{ asset('/assets/img/bg/14.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner">
                    <h1 class="page-title">Master Plan</h1>
                    <div class="ltn__breadcrumb-list d-flex align-items-center justify-content-between">
                        <ul>
                            <li><a href="{{ url('/') }}"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                            <li>Master Plan</li>
                        </ul>
                        <a href="{{ url('/images/mp-printing.pdf') }}" target="_blank" class="theme-btn-1 btn btn-effect-1">Download AGOCHS-II Master Plan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->


<!-- Gallery area start -->
<div class="ltn__gallery-area mb-120">
    <div class="container">
        
      


        <!--Portfolio Wrapper Start-->

        <div class="ltn__gallery-active row ltn__gallery-style-1">
            <div class="ltn__gallery-sizer col-1"></div>

            <div class="ltn__gallery-item filter_category_3 col-md-12 col-sm-12 col-12">
                <div class="ltn__gallery-item-inner">
                    <div class="ltn__gallery-item-img">
                        <a href="{{ asset('/images/MasterPlan.png') }}" data-rel="lightcase:myCollection">
                            <img  style="width: 100% !important; height: 650px !important" src="{{ asset('/images/MasterPlan.png/') }}" alt="Image">
                            <span class="ltn__gallery-action-icon">
                                <i class="fas fa-search"></i>
                            </span>
                        </a>
                    </div>
                    <div class="ltn__gallery-item-info">
                        <h4><a href="#">Unveiling the Agochs-II Master Plan</a></h4>
                        <p class="text-justify">
                            <b>A Vision for Elevated Living</b><br>
                            Welcome to Agochs-II, where innovation meets nature, and urban living transcends expectations. Our master plan is a testament to our commitment to creating a harmonious and holistic community that redefines modern living. Here's an exclusive glimpse into the heart of our visionary development:
                            <br>
                            <b>1. A Gated Oasis of Tranquility:</b><br>
                            Agochs-II is designed as a fully gated community, ensuring the safety and security of our residents. It's not just a place to live; it's a sanctuary where families can thrive. <br>
                            <b>2. Residential Excellence:</b><br>
                            Our residential spaces are meticulously designed to offer style, comfort, and affordability. From elegant apartments to spacious farmhouses, we provide a variety of living options tailored to diverse needs. <br>
                            <b>3. Commercial Downtown:</b> <br>
                            Experience urban convenience like never before with our unique commercial downtown area. It's a bustling hub of activity where you can shop, dine, and socialize, all within the confines of Agochs-II.
                            <br>
                            <b>4. Pristine Natural Beauty:</b><br>
                            Nature is at the heart of Agochs-II. Our strategically located lakeside views offer a serene backdrop to daily life, creating an environment where residents can connect with the beauty of the outdoors.
                            <br>
                            <b>5. Modern Amenities:</b><br>
                            We believe in enhancing your lifestyle, which is why Agochs-II is equipped with state-of-the-art amenities. These include a fitness center, swimming pool, landscaped parks, and more, ensuring that every aspect of your life is well catered to. <br>
                            <b>6. Commitment to Integrity:</b>
                            At Agochs-II, our values are rooted in integrity. We conduct our business with honesty and mutual respect, adhering to legal and ethical standards. Your trust in us is paramount.
                            <br>
                            <b>7. Community-Centric Approach:</b><br>
                            We cherish our residents as our greatest assets. Their satisfaction is our measure of success. Agochs-II fosters a sense of community, where neighbors become friends, and every day is an opportunity for connection.
                            <br>
                            <b>8. Investment Potential:</b><br>
                            For those seeking investment opportunities, Agochs-II offers a unique chance to be part of a thriving community with substantial growth potential. It's an investment in the future, both in terms of financial returns and quality of life. <br>
                            In conclusion, Agochs-II's master plan is a testament to our dedication to crafting a living experience that transcends the ordinary. It's a place where urban living seamlessly blends with natural beauty, where convenience meets tranquility, and where your dreams of a perfect lifestyle find their canvas. Welcome to Agochs-II, where the future of elevated living begins.


                        </p>
                    </div>
                </div>
            </div>

            @foreach ($masterplans as $masterplan)
                <!-- gallery-item -->
                <div class="ltn__gallery-item filter_category_3 col-md-4 col-sm-6 col-12">
                    <div class="ltn__gallery-item-inner">
                        <div class="ltn__gallery-item-img">
                            <a href="{{ asset('/backend/masterplan/'.$masterplan->image) }}" data-rel="lightcase:myCollection">
                                <img  style="width: 100% !important; height: 250px !important" src="{{ asset('/backend/masterplan/'.$masterplan->image) }}" alt="Image">
                                <span class="ltn__gallery-action-icon">
                                    <i class="fas fa-search"></i>
                                </span>
                            </a>
                        </div>
                        <div class="ltn__gallery-item-info">
                            <h4><a href="#">{{ $masterplan->title }} </a></h4>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>


     

        <!-- pagination start -->
        
        {{ $masterplans->links('vendor.pagination.custom') }}
       
        <!-- pagination end -->

    </div>
</div>
<!-- Gallery area end -->

@endsection
