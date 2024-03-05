@php
    $array = auth::user()->permissions;
    $permission = explode(",", $array);
@endphp


<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">



            <li>
                <a href="{{ url('/admin/dashboard') }}" class="{{ (strpos(url()->full() , '/dashboard')) ? 'active' : ''  }}" aria-expanded="false">
                    <i class="fas fa-home"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>

            <li>
                <a href="{{ url('/admin/slider') }}" class="{{ (strpos(url()->full() , '/slider')) ? 'active' : ''  }}" aria-expanded="false">
                    <i class="fas fa-crown"></i>
                    <span class="nav-text">Sliders</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/admin/project') }}" class="{{ (strpos(url()->full() , '/projects')) ? 'active' : ''  }}" aria-expanded="false">
                    <i class="fas fa-bullhorn"></i>
                    <span class="nav-text">Projects</span>
                </a>
            </li>
            
            <li>
                <a href="{{ url('/admin/masterplan') }}" class="{{ (strpos(url()->full() , '/masterplan')) ? 'active' : ''  }}" aria-expanded="false">
                    <i class="fas fa-paper-plane"></i>
                    <span class="nav-text">Master Plan</span>
                </a>
            </li>
            
            <li>
                <a href="{{ url('/admin/facilitie') }}" class="{{ (strpos(url()->full() , '/facilitie')) ? 'active' : ''  }}" aria-expanded="false">
                    <i class="fas fa-building"></i>
                    <span class="nav-text">Facilities</span>
                </a>
            </li>
            
            <li>
                <a href="{{ url('/admin/media') }}" class="{{ (strpos(url()->full() , '/media')) ? 'active' : ''  }}" aria-expanded="false">
                    <i class="fas fa-video"></i>
                    <span class="nav-text">Media</span>
                </a>
            </li>
            
            <li>
                <a href="{{ url('/admin/blog') }}" class="{{ (strpos(url()->full() , '/blog')) ? 'active' : ''  }}" aria-expanded="false">
                    <i class="fas fa-flag"></i>
                    <span class="nav-text">Blogs</span>
                </a>
            </li>
            
            <li>
                <a href="{{ url('/admin/profile') }}" class="{{ (strpos(url()->full() , '/profile')) ? 'active' : ''  }}" aria-expanded="false">
                    <i class="fas fa-user"></i>
                    <span class="nav-text">Profile</span>
                </a>
            </li>
            
            <li>
                <a href="{{ url('/admin/password') }}" class="{{ (strpos(url()->full() , '/password')) ? 'active' : ''  }}" aria-expanded="false">
                    <i class="fas fa-lock"></i>
                    <span class="nav-text">Password</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/admin/logout') }}">
                    <i class="fas fa-sign-out-alt"></i>
                    <span class="nav-text">Logout</span>
                </a>
            </li>


            


       
       
            


        </ul>
        
        <div class="copyright">
            <p><strong>Agochs-II</strong> © {{ date('Y') }} All Rights Reserved</p>
            <p class="fs-12">Developed by Growmoregoc</p>
        </div>
    </div>
</div>
<!--**********************************
    Sidebar end
***********************************