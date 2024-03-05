@extends('layouts.app')

@section('title', 'Contact Us')
@section('content')



<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image " style="margin-bottom: 60px !important"  data-bs-bg="{{ asset('/assets/img/bg/14.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner">
                    <h1 class="page-title">Contact Us</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="{{ url('/') }}"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->



<!-- CONTACT ADDRESS AREA START -->
<div class="ltn__contact-address-area mb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                    <div class="ltn__contact-address-icon">
                        <img src="{{ asset('/assets/img/icons/10.png') }}" alt="Icon Image">
                    </div>
                    <h3>Email Address</h3>
                    <p>info@agochs-ii.com</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                    <div class="ltn__contact-address-icon">
                        <img src="{{ asset('/assets/img/icons/11.png') }}" alt="Icon Image">
                    </div>
                    <h3>Phone Number</h3>
                    <p>+92-51-8319304 <br> <b>WhatsApp</b> +92-311-8555095</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                    <div class="ltn__contact-address-icon">
                        <img src="{{ asset('/assets/img/icons/12.png') }}" alt="Icon Image">
                    </div>
                    <h3>Agochs Offices</h3>
                    <b>Head Office</b> <br>
                    <p>Al Rehamn Plaza 3rd Floor G-11 Markaz, Islamabad, 44000, Pakistan <br>
                    <b>Site Office</b>
                        <br>
                        Opp DHA-Phase 2 Gate No 4 Main GT Road , Islamabad, 44000, Pakistan.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CONTACT ADDRESS AREA END -->




<!-- GOOGLE MAP AREA START -->
<div class="google-map mb-120">
   
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1660.2722525614563!2d72.99771035823417!3d33.66896242745964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38df95f8df82781b%3A0x56a2ee1905fc4fa7!2sAl%20Rehman%20Plaza!5e0!3m2!1sen!2s!4v1657026133797!5m2!1sen!2s" width="100%" height="100%" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

</div>
<!-- GOOGLE MAP AREA END -->



@endsection
