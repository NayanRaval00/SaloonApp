<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

        <a href="index.html" class="logo d-flex align-items-center me-auto">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <!-- <h1 class="sitename">Shree Radha Beauty</h1> -->
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="#hero" class="active">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#portfolio">Become a Partner</a></li>
                <li><a href="#" id="contact-link">Contact</a></li>
                <li class="dropdown"><a href="#services"><span>Services</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="{{route('users.saloons.list')}}">List Saloons</a></li>
                    </ul>
                </li>
             <!-- Cart Icon -->
             <li class="position-relative">
                    <a href="{{ route('cart.view') }}" class="cart-link position-relative">
                        <i class="bi bi-cart text-dark fs-5"></i>
                        @if(session()->has('cart') && count(session('cart')) > 0)
                        <span class="badge bg-danger rounded-circle position-absolute top-0 start-100 translate-middle px-2">
                            {{ count(session('cart')) }}
                        </span>
                        @endif
                    </a>
                </li>

                <!-- User Auth -->
                @if(Auth::guard('web')->user() != null)
                <li class="ms-3">
                    <span class="text-dark fw-bold">
                        <i class="bi bi-person-circle me-1"></i> {{ Auth::guard('web')->user()->name }}
                    </span>
                </li>
                @else
                <li class="ms-3">
                    <a class="btn btn-outline-primary rounded-pill px-4" href="{{ route('users.login') }}">Login</a>
                </li>
                @endif
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
       
    </div>
</header>