<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
    <a href="" class="navbar-brand p-0">
        <img src="{{asset('/img/logoagrc.png')}}" alt="Logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="{{ route('home') }}" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>
            <a href="{{ route('about') }}" class="nav-item nav-link {{ Request::is('about') ? 'active' : '' }}">About</a>
            <a href="{{ route('member') }}" class="nav-item nav-link {{ Request::is('member') ? 'active' : '' }}">Member</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{ Request::is('gallery*') || Request::is('register*') ? 'active' : '' }}" data-bs-toggle="dropdown">
                    Pages
                </a>
                <div class="dropdown-menu m-0">
                    <a href="{{ route('gallery') }}" class="dropdown-item {{ Request::is('gallery*') ? 'active' : '' }}">Gallery</a>
                    <a href="{{ route('register') }}" class="dropdown-item {{ Request::is('register*') ? 'active' : '' }}">Register Now</a>
                    
                </div>
            </div>
            <a href="{{ route('contact') }}" class="nav-item nav-link {{ Request::is('contact') ? 'active' : '' }}">Contact</a>
        </div>
        <!-- <a href="#" class="btn btn-primary rounded-pill py-2 px-4 my-3 my-lg-0 flex-shrink-0">Get Started</a> -->
    </div>
</nav>
