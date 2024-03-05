<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <title>Agochs-II - Islamabad Pakistan | @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place favicon.png in the root directory -->
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
    <!-- Font Icons css -->
    <link rel="stylesheet" href="{{ asset('assets/css/font-icons.css') }}">
    <!-- plugins css -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <style type="text/css">
        .tata-title{color: #fff !important};
        .tata .tata-text{color: #fff !important};


    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
           

            /* Style for the buttons */
            .button-container {
                z-index: 100000 !important;

                display: flex;
                text-align: right;
                position: fixed;
                bottom: 20px;
                right: 0px;
                flex-direction: column;
            }

            /* Style for individual buttons */
            .button-container a {
                margin-left: 10px;
                width: 100%;
                margin-bottom: 5px;
                border-radius: 10px 0px 0px 10px;
                padding: 6px;
                background-color: var(--ltn__theme-green);
                color: #fff;
                font-size: 25px;
                border: none;
                cursor: pointer;
            }

            /* Style for the second button */
            .button-container a:last-child {
                background-color: var(--ltn__secondary-color);
            }
        </style>


    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>


<!-- Body main wrapper end -->

    <!-- preloader area start -->
    <div class="preloader show" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->
<div class="body-wrapper">    
    
    <!-- HEADER AREA START -->
        @php
            $url = request()->fullUrl();
        @endphp
        <!-- Header -->
        @if (strpos($url, 'home') !== false)
            @include('layouts.include.header')
        @else
            @include('layouts.include.header1')
        @endif
    <!-- HEADER AREA END -->
    
    @yield('content')

    <!-- <div class="elfsight-app-1bce6d97-7822-4bd8-944e-a63dbf9e7125"></div> -->
    <!-- FOOTER AREA START -->
    @include('layouts.include.footer')
    <!-- FOOTER AREA END -->


</div>


    <!-- All JS Plugins -->
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <!-- <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script> -->





       <!-- Buttons container -->
       <div class="button-container">
           <a target="_blank" class="btn btn-primary" href="https://wa.me/923118555095"><i class="fa fa-whatsapp"></i></a>
           <a class="btn btn-primary" href="tel:923118555095"><i class="fa fa-phone"></i></a>
       </div>
    <script src="{{ asset('/toaster/dist/tata.js') }}"></script>

    @yield('js')
        
    @if (Session::has('flash_message_error'))
        <script>
            tata.error('Opps...', '{!! session('flash_message_error') !!}', {
              position: 'tr',
              duration: 10000000,
              animate: 'slide'
            })
        </script>
    @endif

    @if (Session::has('flash_message_success'))
        <script>
            tata.success('Success...', '{!! session('flash_message_success') !!}', {
              position: 'tr',
              duration: 10000,
              animate: 'slide'
            })

        </script>
    @endif

    @error('email'))
        <script>
            tata.error('Opps...', '{{ $message }}', {
              position: 'tr',
              duration: 10000,
              animate: 'slide'
            })

        </script>
    @enderror

    @error('password')
        <script>
            tata.error('Opps...', '{{ $message }}', {
              position: 'tr',
              duration: 10000,
              animate: 'slide'
            })

        </script>
    @enderror

    @if (session('status'))
        <script>
            tata.success('Success...', '{!! session('status') !!}', {
              position: 'tr',
              duration: 10000,
              animate: 'slide'
            })

        </script>
    @endif


</body>

</html>





