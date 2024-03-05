@php
    error_reporting(0);
@endphp

<!--**********************************
    Nav header start
***********************************-->
<div class="nav-header">
    <a href="{{ url(strtolower(auth::user()->role).'/dashboard' ) }}" class="brand-logo">
        <img style="width: 45%" src="{{ asset('/assets/logos.png') }}">
    </a>
    <div class="nav-control">
        <div class="hamburger">
            <span class="line"></span><span class="line"></span><span class="line"></span>
        </div>
    </div>
</div>
<!--**********************************
    Nav header end
***********************************-->

    
<!--**********************************
    Header start
***********************************-->
<div class="header border-bottom">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
                <div class="header-left">
                    <div class="dashboard_bar">
                        Dashboard
                    </div>
                </div>
                <ul class="navbar-nav header-right">
                    
                  
                    <li class="nav-item dropdown notification_dropdown">
                      
                    

                    <li class="nav-item dropdown  header-profile">
                        <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                            @if (!empty(auth::user()->image))
                                <img width="56" src="{{ asset('backend/profile/'.auth::user()->image) }}" />
                            @else
                                <img width="56" src="{{ asset('backend/placeholder.jpg') }}" />
                            @endif
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="{{ url(strtolower(auth::user()->role).'/profile' ) }}" class="dropdown-item ai-icon">
                                <i class="text-primary fas fa-user" style="font-size: 15px"></i>
                                <span class="ms-2">Profile </span>
                            </a>
                            <a href="{{ url(strtolower(auth::user()->role).'/password' ) }}" class="dropdown-item ai-icon">
                                <i class="text-primary fas fa-lock" style="font-size: 15px"></i>
                                <span class="ms-2">Password </span>
                            </a>
                            <a href="{{ url(strtolower(auth::user()->role).'/logout' ) }}" class="dropdown-item ai-icon">
                                <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                <span class="ms-2">Logout </span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<!--**********************************
    Header end ti-comment-alt
***********************************-->