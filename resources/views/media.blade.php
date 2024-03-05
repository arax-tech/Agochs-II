@extends('layouts.app')

@section('title', 'Media')
@section('content')



<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image " style="margin-bottom: 60px !important"  data-bs-bg="{{ asset('/assets/img/bg/14.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner">
                    <h1 class="page-title">Media</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="{{ url('/') }}"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                            <li>Media</li>
                        </ul>
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
    

        <!-- Portfolio Wrapper Start -->
        <!-- (ltn__gallery-info-hide) Class for 'ltn__gallery-item-info' not showing -->
        <div class="ltn__gallery-active row ltn__gallery-style-2 ltn__gallery-info-hide---">
            <div class="ltn__gallery-sizer col-1"></div>

            @foreach ($medias as $media)
                <!-- gallery-item -->
                <div class="ltn__gallery-item filter_category_3 col-lg-4 col-sm-6 col-12">
                    <div class="ltn__gallery-item-inner">
                        <div class="ltn__gallery-item-img">
                            <a href="{{ asset('/backend/media/'.$media->image) }}" data-rel="lightcase:myCollection">
                                <img style="width: 100% !important; height: 300px !important" src="{{ asset('/backend/media/'.$media->image) }}" alt="Image">
                                <span class="ltn__gallery-action-icon">
                                    <i class="fas fa-search"></i>
                                </span>
                            </a>
                        </div>
                        <div class="ltn__gallery-item-info">
                            <h4><a href="#">{{ $media->title }} </a></h4>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

      

        <!-- pagination start -->
        
        {{ $medias->links('vendor.pagination.custom') }}
       
        <!-- pagination end -->

    </div>
</div>
<!-- Gallery area end -->


@endsection
