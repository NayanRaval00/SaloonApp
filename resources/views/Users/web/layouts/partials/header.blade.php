<div class="container-fluid bg-light d-none d-lg-block">
    <div class="row py-2 px-lg-5">
        <div class="col-lg-6 text-left mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center">
                <small><i class="fa fa-phone-alt mr-2"></i>+012 345 6789</small>
                <small class="px-3">|</small>
                <small><i class="fa fa-envelope mr-2"></i>info@example.com</small>
            </div>
        </div>
        <div class="col-lg-6 text-right">
            <div class="d-inline-flex align-items-center">
                <a class="text-primary px-2" href="">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a class="text-primary px-2" href="">
                    <i class="fab fa-twitter"></i>
                </a>
                <a class="text-primary px-2" href="">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a class="text-primary px-2" href="">
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="text-primary pl-2" href="">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
        <a href="" class="navbar-brand ml-lg-3">
            <h1 class="m-0 text-primary"><span class="text-dark">SPA</span> Center</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
            <div class="navbar-nav m-auto py-0">
                <a href="" class="nav-item nav-link active">Home</a>
                <a href="" class="nav-item nav-link">About</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Services</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <!-- Women's Services Dropdown -->
                        <div class="dropdown-item has-submenu">
                            <a href="#" class="submenu-trigger">Women's Salon & Spa</a>
                            <div class="submenu">
                                <a class="dropdown-item" href="">Salon for Women</a>
                                <a class="dropdown-item" href="">Spa for Women</a>
                                <a class="dropdown-item" href="">Hair Studio for Women</a>
                                <a class="dropdown-item" href="">Makeup & Styling Studio</a>
                            </div>
                        </div>
                        <!-- Men's Services Dropdown -->
                        <div class="dropdown-item has-submenu">
                            <a href="#" class="submenu-trigger">Men's Salon & Massage</a>
                            <div class="submenu">
                                <a class="dropdown-item" href="">Salon for Men</a>
                                <a class="dropdown-item" href="">Massage for Men</a>

                            </div>
                        </div>
                    </div>
                </div>
                <a href="" class="nav-item nav-link">Blogs</a>
                <a href="" class="nav-item nav-link">Portfolio</a>
                <a href="" class="nav-item nav-link">Become A Partner</a>
                <a href="" class="nav-item nav-link">Contact</a>
            </div>
            @if(Auth::guard('web')->user() != null)

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fab fa fa-user"></i> {{ Auth::guard('web')->user()->name }}</a>
                <div class="dropdown-menu rounded-0 m-0">
                    <!-- Women's Services Dropdown -->
                    <div class="dropdown-item has-submenu">
                        <a class="submenu-trigger" href="{{route('orders.list')}}">List Orders</a>
                        <div class="submenu">
                            <a class="submenu-trigger" href="{{route('orders.list')}}">Logout</a>

                        </div>
                    </div>
                </div>
            </div>

            @else
            <a href="{{route('user.web.login')}}" class="btn btn-primary d-none d-lg-block">Login Now</a>
            @endif
        </div>
    </nav>
</div>