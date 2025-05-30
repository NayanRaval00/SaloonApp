<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <div class="d-flex sidebar-profile">
                <div class="sidebar-profile-image">
                    <img src="{{ asset('admin/images/faces/face29.png') }}" alt="image">
                    <span class="sidebar-status-indicator"></span>
                </div>
                <div class="sidebar-profile-name">
                    <p class="sidebar-name">
                        @if(Auth::guard('admin')) {{Auth::guard('admin')->user()->name}}@else{{'-'}}@endif
                    </p>
                    <p class="sidebar-designation">
                        Welcome
                    </p>
                </div>
            </div>
            <div class="nav-search">
                <form action="{{ route('admin.category.list') }}" method="GET">
                    <div class="input-group">
                        <input type="text" class="form-control" name="search" placeholder="Type to search..." value="{{ request('search') }}">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit">
                                <i class="typcn typcn-zoom"></i>
                            </button>
                        </div>
                    </div>
                </form>

            </div>
            <p class="sidebar-menu-title">Dash menu</p>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.dashboard')}}">
                <i class="typcn typcn-device-desktop menu-icon"></i>
                <span class="menu-title">Dashboard <span class="badge badge-primary ml-3">New</span></span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.user.list')}}">
                <i class="typcn typcn-user-outline menu-icon"></i>
                <span class="menu-title">Users Management
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.barber.list')}}">
                <i class="typcn  typcn typcn-user menu-icon"></i>
                <span class="menu-title">Saloon Management
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.category.list')}}">
                <i class="typcn typcn-th-large-outline menu-icon"></i>
                <span class="menu-title">Category Management
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.service.list')}}">
                <i class=" typcn typcn-spanner menu-icon"></i>
                <span class="menu-title">Service Management
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.order.list')}}">
                <i class="  typcn typcn-shopping-cart menu-icon"></i>
                <span class="menu-title">Order Management
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.partners.list')}}">
                <i class="  typcn typcn-th-list menu-icon"></i>
                <span class="menu-title">Partner's Management
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.contact.list')}}">
                <i class="  typcn typcn-th-list menu-icon"></i>
                <span class="menu-title">Contact Us
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.appointment.list')}}">
                <i class="  typcn typcn-th-list menu-icon"></i>
                <span class="menu-title">Appointments
            </a>
        </li>
        <!-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="typcn typcn-briefcase menu-icon"></i>
                <span class="menu-title">UI Elements</span>
                <i class="typcn typcn-chevron-right menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="">Buttons</a></li>
                    <li class="nav-item"> <a class="nav-link" href="">Dropdowns</a></li>
                    <li class="nav-item"> <a class="nav-link" href="">Typography</a></li>
                </ul>
            </div>
        </li> -->


    </ul>
</nav>