@extends('layouts.app')

@section('title', 'Projects')
@section('content')



<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image " style="margin-bottom: 60px !important"  data-bs-bg="{{ asset('/assets/img/bg/14.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner">
                    <h1 class="page-title">Projects</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="{{ url('/') }}"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                            <li>Projects</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- PRODUCT DETAILS AREA START -->
<div class="ltn__product-area ltn__product-gutter mb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__shop-options">
                    <ul class="justify-content-start">
                        <li>
                            <div class="ltn__grid-list-tab-menu ">
                                <div class="nav">
                                    <a class="active show" data-bs-toggle="tab" href="#liton_product_grid"><i class="fas fa-th-large"></i></a>
                                    <a data-bs-toggle="tab" href="#liton_product_list"><i class="fas fa-list"></i></a>
                                </div>
                            </div>
                        </li>
                       
                    </ul>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="liton_product_grid">
                        <div class="ltn__product-tab-content-inner ltn__product-grid-view">
                            <div class="row">
                                @foreach ($projects as $project)
                                    @php
                                        error_reporting(0);
                                        $project_url =  $project->title;
                                    @endphp

                                    <!-- ltn__product-item -->
                                    <div class="col-xl-4 col-sm-6 col-12">
                                        <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                                            <div class="product-img">
                                                <a href="{{ url('/project/'.$project_url) }}"><img style="height: 250px !important; width: :100% !important" src="{{ asset('/backend/project/'.$project->images) }}" alt="#"></a>
                                            </div>
                                            <div class="product-info">
                                                {{-- <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge bg-green">{{ $project->category }}</li>
                                                    </ul>
                                                </div> --}}
                                                <h2 class="product-title"><a href="{{ url('/project/'.$project_url) }}">{{ mb_strimwidth($project->title, 0, 25, "...") }}</a></h2>
                                                <div class="product-description">
                                                    <p class="text-justify">
                                                        {!! mb_strimwidth($project->description, 0, 140, "...") !!}
                                                    </p>
                                                </div>
                                                {{-- <div class="product-img-location">
                                                    <ul>
                                                        <li>
                                                            <a href="locations.html"><i class="flaticon-pin"></i> {{ $project->location }}</a>
                                                        </li>
                                                    </ul>
                                                </div> --}}
                                                
                                            </div>
                                            <div class="product-info-bottom">
                                                <div class="product-price">
                                                    <a href="{{ url('/project/'.$project_url) }}">View Project <i class="flaticon-right-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="liton_product_list">
                        <div class="ltn__product-tab-content-inner ltn__product-list-view">
                            <div class="row">
                                <div class="col-lg-12">
                                    <!-- Search Widget -->
                                    <div class="ltn__search-widget mb-30">
                                        <form action="#">
                                            <input type="text" name="search" placeholder="Search your keyword...">
                                            <button type="submit"><i class="fas fa-search"></i></button>
                                        </form>
                                    </div>
                                </div>

                                @foreach ($projects as $project)
                                    @php
                                        error_reporting(0);
                                        $project_url =  $project->title;
                                    @endphp
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5">
                                            <div class="product-img">
                                                <a href="{{ url('/project/'.$project_url) }}"><img style="height: 250px !important; width: :100% !important" src="{{ asset('/backend/project/'.$project->images) }}" alt="#"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-badge-price">
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge bg-green">{{ date("d M Y",strtotime($project->date)) }}</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-price">
                                                        <a href="{{ url('/project/'.$project_url) }}">View Project <i class="flaticon-right-arrow"></i></a>
                                                    </div>
                                                </div>
                                                <h2 class="product-title"><a href="{{ url('/project/'.$project_url) }}">{{ $project->title }}</a></h2>
                                                <div class="product-img-location">
                                                    <ul>
                                                        <li>
                                                            <a href="{{ url('/project/'.$project_url) }}"><i class="flaticon-pin"></i> {{ $project->location }}</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <p class="text-justify">{!! mb_strimwidth($project->description, 0, 400, "...") !!}</p>
                                            </div>
                                            <div class="product-info-bottom">
                                                
                                                
                                            </div>
                                        </div>
                                    </div>

                                 @endforeach

                           

                            </div>
                        </div>
                    </div>
                </div>
                {{ $projects->links('vendor.pagination.custom') }}
                
            </div>
        </div>
    </div>
</div>
<!-- PRODUCT DETAILS AREA END -->




@endsection
