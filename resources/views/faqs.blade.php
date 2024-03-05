@extends('layouts.app')

@section('title', 'FAQs')
@section('content')



<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image " style="margin-bottom: 60px !important"  data-bs-bg="{{ asset('/assets/img/bg/14.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner">
                    <h1 class="page-title">Frequently asked questions</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="{{ url('/') }}"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                            <li>FAQs</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->


<!-- FAQ AREA START (faq-2) (ID > accordion_2) -->
<div class="ltn__faq-area mb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__faq-inner ltn__faq-inner-2">
                    <div id="accordion_2">
                        <!-- card -->
                        <div class="card">
                            <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse" data-bs-target="#question1" aria-expanded="true">
                                1. What is the official name of the project?
                            </h6>
                            <div id="question1" class="collapse show" data-bs-parent="#accordion_2">
                                <div class="card-body">
                                    <p>The official name of the project is Agochs-II.</p>
                                </div>
                            </div>
                        </div>
                        <!-- card -->
                        <div class="card">
                            <h6 class="ltn__card-title" data-bs-toggle="collapse" data-bs-target="#question2" aria-expanded="false"> 
                                2. Does Agochs-II have access to motorway?
                            </h6>
                            <div id="question2" class="collapse" data-bs-parent="#accordion_2">
                                <div class="card-body">
                                   
                                    <p>
                                        Agochs-II has access from CPECH North corridor (m2) via 4 interchanges namely, M2 Islamabad,Chakri,Balkasar. Due to this motorway the traveling time from Islamabad to Agochs-II has reduced from 6 hours to 3 hours approximately.
                                    </p>
                                </div>
                            </div>
                        </div> 
                        <!-- card -->
                        <div class="card">
                            <h6 class="ltn__card-title" data-bs-toggle="collapse" data-bs-target="#question3" aria-expanded="false"> 
                                3. Why is it called a Agochs-II?
                            </h6>
                            <div id="question3" class="collapse" data-bs-parent="#accordion_2">
                                <div class="card-body">
                                   
                                    <p>
                                        The old Dera Ismail Khan city traces its history back to the 15th century and has witnessed many eras including the Mughal and Sikh. Agochs-II has undergone lot of evolution over the years which have resulted in overcrowding and the current infrastructure of Agochs-II does not support the current population of the city and cannot cater for the increasing demand of southern districts of Khyber Pakhtunkhwa. Agochs-II on the other hand is a modern development which has been planned on international standards with modern facilities which are not available anywhere else in the region. It will not only cater to the people of Agochs-II and southern districts but also accommodate the population of surrounding areas including Peshawar, Multan, Zhob and Islamabad.
                                    </p>
                                </div>
                            </div>
                        </div> 
                        <!-- card -->
                        <div class="card">
                            <h6 class="ltn__card-title" data-bs-toggle="collapse" data-bs-target="#question4" aria-expanded="false"> 
                                4. What is Irshad Associates (Pvt.) Ltd.?
                            </h6>
                            <div id="question4" class="collapse" data-bs-parent="#accordion_2">
                                <div class="card-body">
                                   
                                    <p>
                                        Irshad Associates (Pvt.) Ltd, is a fast-growing real estate development company of the Irshad Associates (Pvt.) Ltd, a highly reputable and well admired business house with a long history of delivering successful projects all across the country. The sponsors of the Irshad Associates (Pvt.) Ltd. have their roots from the Islamabad . Through advanced design principles and by following highest standards, we are working ambitiously to uplift the lifestyles of hundreds of thousands of people. Agochs-II is one of a kind in the region.
                                    </p>
                                </div>
                            </div>
                        </div> 
                        <!-- card -->
                        <div class="card">
                            <h6 class="ltn__card-title" data-bs-toggle="collapse" data-bs-target="#question5" aria-expanded="false"> 
                                5. What are sizes of roads in the project?
                            </h6>
                            <div id="question5" class="collapse" data-bs-parent="#accordion_2">
                                <div class="card-body">
                                   
                                    <p>
                                        Agochs-II has minimum street size of 40 feet width. We have avenues which are180, 100 and 80 feet wide.
                                    </p>
                                </div>
                            </div>
                        </div> 
                        <!-- card -->
                        <div class="card">
                            <h6 class="ltn__card-title" data-bs-toggle="collapse" data-bs-target="#question6" aria-expanded="false"> 
                                6. What is the timeline for complete development of the project?
                            </h6>
                            <div id="question6" class="collapse" data-bs-parent="#accordion_2">
                                <div class="card-body">
                                   
                                    <p>
                                        The project has been launched in March 2021 with the completion time of 3 years’. A mosque, medical center, primary school, parks and some grocery shops will be available when the residents will start moving in their houses.
                                    </p>
                                </div>
                            </div>
                        </div> 
                        <!-- card -->
                        <div class="card">
                            <h6 class="ltn__card-title" data-bs-toggle="collapse" data-bs-target="#question7" aria-expanded="false"> 
                                7. What are payment modes for booking/installments for Pakistani residents?
                            </h6>
                            <div id="question7" class="collapse" data-bs-parent="#accordion_2">
                                <div class="card-body">
                                   
                                    <p>
                                        Customers can pay through Cash/Cheque/PO/Funds Transfer or any other suitable mode in company’s bank account.
                                    </p>
                                </div>
                            </div>
                        </div> 
                        <!-- card -->
                        <div class="card">
                            <h6 class="ltn__card-title" data-bs-toggle="collapse" data-bs-target="#question8" aria-expanded="false"> 
                                8.  Is there any surcharge applicable on late payment of dues /installments? 
                            </h6>
                            <div id="question8" class="collapse" data-bs-parent="#accordion_2">
                                <div class="card-body">
                                   
                                    <p>
                                        Yes, All late payments (dues/installments) are subject to imposition of surcharge as decided by the management from time to time, as per the agreed upon terms and conditions mentioned on the plot application form.
                                    </p>
                                </div>
                            </div>
                        </div> 
                        <!-- card -->
                        <div class="card">
                            <h6 class="ltn__card-title" data-bs-toggle="collapse" data-bs-target="#question9" aria-expanded="false"> 
                                9. How to share payment evidence?
                            </h6>
                            <div id="question9" class="collapse" data-bs-parent="#accordion_2">
                                <div class="card-body">
                                   
                                    <p>
                                        You can share the payment evidence with our Collections Department via E-mail info@agochs-ii.com, WhatsApp (+92-311-8555095), Courier/postal mail, or in person at our offices.


                                    </p>
                                </div>
                            </div>
                        </div> 
                        <!-- card -->
                        <div class="card">
                            <h6 class="ltn__card-title" data-bs-toggle="collapse" data-bs-target="#question10" aria-expanded="false"> 
                                10. How and when to apply for possession of a Plot?
                            </h6>
                            <div id="question10" class="collapse" data-bs-parent="#accordion_2">
                                <div class="card-body">
                                   
                                    <p>
                                        Possession of the plots for the first phase is planned to be made available by March 2024. You are eligible for possession if you have cleared all the installments and pending dues (if any). After all of these conditions are met, an application for possession can be made.
                                    </p>
                                </div>
                            </div>
                        </div> 
                        <!-- card -->
                        <div class="card">
                            <h6 class="ltn__card-title" data-bs-toggle="collapse" data-bs-target="#question11" aria-expanded="false"> 
                                11. How to verify your payment after depositing?
                            </h6>
                            <div id="question11" class="collapse" data-bs-parent="#accordion_2">
                                <div class="card-body">
                                   
                                    <p>
                                        Whenever you make any payment and it is received by the company, you will automatically receive a confirmation SMS and an email in addition to the receipt or bank deposit slip. Moreover is you want to verify any payment deposited, you can call our help-line+92-311-8555095 or write us an email at info@agochs-ii.com or visit our offices.
                                    </p>
                                </div>
                            </div>
                        </div> 
                        <!-- card -->
                        <div class="card">
                            <h6 class="ltn__card-title" data-bs-toggle="collapse" data-bs-target="#question12" aria-expanded="false"> 
                                12. What are the different plot sizes available in this project?
                            </h6>
                            <div id="question12" class="collapse" data-bs-parent="#accordion_2">
                                <div class="card-body">
                                   
                                    <p>
                                        Agochs-II offers 5 Marla (25×45), 10 Marla (35×70) and 1 Kanal (50×90) residential plots in first phase (Residencia).
                                    </p>
                                </div>
                            </div>
                        </div> 
                        <!-- card -->
                        <div class="card">
                            <h6 class="ltn__card-title" data-bs-toggle="collapse" data-bs-target="#question13" aria-expanded="false"> 
                                13. What are the security features?
                            </h6>
                            <div id="question13" class="collapse" data-bs-parent="#accordion_2">
                                <div class="card-body">
                                   
                                    <p>
                                        Agochs-II is a gated community. Round-the-clock security is ensured through patrolling of Quick Response Force and monitoring by CCTV cameras.
                                    </p>
                                </div>
                            </div>
                        </div> 
                        <!-- card -->
                        <div class="card">
                            <h6 class="ltn__card-title" data-bs-toggle="collapse" data-bs-target="#question14" aria-expanded="false"> 
                                14. How can you Transfer your plot?
                            </h6>
                            <div id="question14" class="collapse" data-bs-parent="#accordion_2">
                                <div class="card-body">
                                   
                                    <p>
                                        The transfer of the plot can be made at any of our offices at different stations. The buyer and seller have to come to the office in person and complete the requisite formalities.
                                    </p>
                                </div>
                            </div>
                        </div> 
                        <!-- card -->
                        <div class="card">
                            <h6 class="ltn__card-title" data-bs-toggle="collapse" data-bs-target="#question15" aria-expanded="false"> 
                                15. What are the Cancellation criteria?
                            </h6>
                            <div id="question15" class="collapse" data-bs-parent="#accordion_2">
                                <div class="card-body">
                                   
                                    <p>
                                        In case any allottee fail to pay two consecutive installments within the prescribed period, the allotment is liable to be cancelled without notice. In the event of cancellation of the plot, due to non-payment, or by Agochs-II on details specified by them, or any reason whatsoever, then the payment already submitted will be refunded with 25% deduction and surcharges, without any profit, interest or markup; however the processing/registration/membership fee already paid is non-refundable.
                                    </p>
                                </div>
                            </div>
                        </div> 

                    </div>
                    <div class="need-support text-center mt-100">
                        <h2>Still need help? Reach out to support 24/7:</h2>
                        <div class="btn-wrapper mb-30">
                            <a href="contact.html" class="theme-btn-1 btn">Contact Us</a>
                        </div>
                        <h3><i class="fas fa-phone"></i> +92 51-8319304</h3>
                    </div>
                </div>
            </div>
            {{-- <div class="col-lg-4">
                <aside class="sidebar-area ltn__right-sidebar">
                    <!-- Newsletter Widget -->
                    <div class="widget ltn__search-widget ltn__newsletter-widget">                            
                        <h6 class="ltn__widget-sub-title">// subscribe</h6>
                        <h4 class="ltn__widget-title">Get Newsletter</h4>
                        <form>
                            <input type="text" name="search" placeholder="Search">
                            <button type="button"><i class="fas fa-search"></i></button>
                        </form>
                        <div class="ltn__newsletter-bg-icon">
                            <i class="fas fa-envelope-open-text"></i>
                        </div>
                    </div>
                    <!-- Banner Widget -->
                    <div class="widget ltn__banner-widget">
                        <a href="shop.html"><img src="{{ asset('/assets/img/banner/banner-3.jpg') }}" alt="Banner Image"></a>
                    </div>

                </aside>
            </div> --}}
        </div>
    </div>
</div>
<!-- FAQ AREA START -->

@endsection
