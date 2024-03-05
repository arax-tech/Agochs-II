<header class="ltn__header-area ltn__header-5 ltn__header-logo-and-mobile-menu-in-mobile ltn__header-logo-and-mobile-menu ltn__header-transparent gradient-color-4---">
    <!-- ltn__header-top-area start -->
    <div class="ltn__header-top-area top-area-color-white">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="ltn__top-bar-menu">
                        <ul>
                            <li class="mt-1"><a href="mailto:info@agochs-ii.com"><i class="icon-mail"></i> info@agochs-ii.com</a></li>
                            {{-- <li><a href="locations.html"><i class="icon-placeholder"></i> Opp DHA-Phase 2 Gate No 4 Main GT Road , Islamabad, 44000, Pakistan.</a></li> --}}
                        </ul>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="top-bar-right text-end">
                        <div class="ltn__top-bar-menu">
                            <ul>
                                

                                <li>
                                    <!-- ltn__social-media -->
                                    <div class="ltn__social-media">
                                        <ul>
                                            <li><a target="_blank" href="https://www.facebook.com/AgochsIIislamabad" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a target="_blank" href="https://www.youtube.com/@Agochs-II" title="YouTube"><i class="fab fa-youtube"></i></a></li>
                                            <li><a target="_blank" href="https://twitter.com/AgochsII" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                            <li><a target="_blank" href="https://www.instagram.com/agochsii/" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                            <li><a target="_blank" href="https://www.pinterest.com/agochsii/" title="pinterest"><i class="fab fa-pinterest"></i></a></li>
                                            <li><a target="_blank" href="https://www.tiktok.com/@agochsii?lang=en" title="tiktok"><i class="fab fa-tiktok"></i></a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ltn__header-top-area end -->
    
    <!-- ltn__header-middle-area start -->
    <div class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-black">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="site-logo-wrap">
                        <div class="site-logo">
                            <a href="{{ url('/') }}"><img style="width: 100px !important" src="{{ asset('assets/logo-white.png') }}" alt="Logo"></a>
                        </div>
                        <div class="get-support clearfix d-none">
                            <div class="get-support-icon">
                                <i class="icon-call"></i>
                            </div>
                            <div class="get-support-info">
                                <h6>Get Support</h6>
                                <h4><a href="tel:+92 51-8319304">UAN: +92 51-8319304</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col header-menu-column menu-color-white">
                    <div class="header-menu d-none d-xl-block">
                        <nav>
                            <div class="ltn__main-menu">
                                <ul>
                                    
                                    <li><a class="{{ (strpos(url()->full() , '/about')) ? 'navactive' : ''  }}" href="{{ url('/about') }}">About</a></li>
                                    <li><a class="{{ (strpos(url()->full() , '/projects')) ? 'navactive' : ''  }}" href="{{ url('/projects') }}">Projects</a></li>
                                    <li><a class="{{ (strpos(url()->full() , '/masterplan')) ? 'navactive' : ''  }}" href="{{ url('/masterplan') }}">MasterPlan</a></li>
                                    <li><a class="{{ (strpos(url()->full() , '/facilities')) ? 'navactive' : ''  }}" href="{{ url('/facilities') }}">Facilities</a></li>
                                    <li><a class="{{ (strpos(url()->full() , '/faqs')) ? 'navactive' : ''  }}" href="{{ url('/faqs') }}">FAQs</a></li>
                                    <li><a class="{{ (strpos(url()->full() , '/media')) ? 'navactive' : ''  }}" href="{{ url('/media') }}">Media</a></li>
                                    <li><a class="{{ (strpos(url()->full() , '/blogs')) ? 'navactive' : ''  }}" href="{{ url('/blogs') }}">Blogs</a></li>
                                    <li><a class="{{ (strpos(url()->full() , '/contact')) ? 'navactive' : ''  }}" href="{{ url('/contact') }}">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="col--- ltn__header-options ltn__header-options-2 ">
                    <!-- Mobile Menu Button -->
                    <div class="mobile-menu-toggle d-xl-none">
                        <a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle">
                            <svg viewBox="0 0 800 600">
                                <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                                <path d="M300,320 L540,320" id="middle"></path>
                                <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ltn__header-middle-area end -->
</header>

<!-- Utilize Mobile Menu Start -->
<div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
    <div class="ltn__utilize-menu-inner ltn__scrollbar">
        <div class="ltn__utilize-menu-head">
            <div class="site-logo">
                <a href="{{ url('/') }}"><img src="{{ asset('assets/img/logo.png') }}" alt="Logo"></a>
            </div>
            <button class="ltn__utilize-close">×</button>
        </div>
       

        <div class="ltn__utilize-menu">
            <ul>
                <li><a class="{{ (strpos(url()->full() , '/about')) ? 'navactive' : ''  }}" href="{{ url('/about') }}">About</a></li>
                <li><a class="{{ (strpos(url()->full() , '/projects')) ? 'navactive' : ''  }}" href="{{ url('/projects') }}">Projects</a></li>
                <li><a class="{{ (strpos(url()->full() , '/masterplan')) ? 'navactive' : ''  }}" href="{{ url('/masterplan') }}">MasterPlan</a></li>
                <li><a class="{{ (strpos(url()->full() , '/facilities')) ? 'navactive' : ''  }}" href="{{ url('/facilities') }}">Facilities</a></li>
                <li><a class="{{ (strpos(url()->full() , '/faqs')) ? 'navactive' : ''  }}" href="{{ url('/faqs') }}">FAQs</a></li>
                <li><a class="{{ (strpos(url()->full() , '/media')) ? 'navactive' : ''  }}" href="{{ url('/media') }}">Media</a></li>
                <li><a class="{{ (strpos(url()->full() , '/blogs')) ? 'navactive' : ''  }}" href="{{ url('/blogs') }}">Blogs</a></li>
                <li><a class="{{ (strpos(url()->full() , '/contact')) ? 'navactive' : ''  }}" href="{{ url('/contact') }}">Contact</a></li>
            </ul>
        </div>
        <div class="ltn__social-media-2">
            <ul>
                <li><a target="_blank" href="https://www.facebook.com/AgochsIIislamabad" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                <li><a target="_blank" href="https://www.youtube.com/@Agochs-II" title="YouTube"><i class="fab fa-youtube"></i></a></li>
                <li><a target="_blank" href="https://twitter.com/AgochsII" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                <li><a target="_blank" href="https://www.instagram.com/agochsii/" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                <li><a target="_blank" href="https://www.pinterest.com/agochsii/" title="pinterest"><i class="fab fa-pinterest"></i></a></li>
                <li><a target="_blank" href="https://www.tiktok.com/@agochsii?lang=en" title="tiktok"><i class="fab fa-tiktok"></i></a></li>
            </ul>
        </div>
    </div>
</div>
<!-- Utilize Mobile Menu End -->

<div class="ltn__utilize-overlay"></div>