<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <div class="d-flex sidebar-profile">
                <div class="sidebar-profile-image">
                    <img src="@if(Auth::guard('barber') && Auth::guard('barber')->user()->profile_image!=null) {{asset('storage/' . Auth::guard('barber')->user()->profile_image)}}@else{{ asset('admin/images/faces/face29.png') }}@endif" alt="image">
                    <span class="sidebar-status-indicator"></span>
                </div>
                <div class="sidebar-profile-name">
                    <p class="sidebar-name">
                        @if(Auth::guard('barber')) {{Auth::guard('barber')->user()->name}}@else{{'-'}}@endif </p>
                    <p class="sidebar-designation">
                        Welcome
                    </p>
                </div>
            </div>
            <div class="nav-search">
            <form action="{{ route('barber.category.list') }}" method="GET">
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
            <a class="nav-link" href="{{route('barber.dashboard')}}">
                <i class="typcn typcn-device-desktop menu-icon"></i>
                <span class="menu-title">Dashboard <span class="badge badge-primary ml-3">New</span></span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('barber.category.list')}}">
                <i class="typcn typcn-th-large-outline menu-icon"></i>
                <span class="menu-title">Category Management
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('barber.service.list')}}">
                <i class=" typcn typcn-spanner menu-icon"></i>
                <span class="menu-title">Service Management
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('barber.order.list')}}">
                <i class="typcn typcn-shopping-cart menu-icon"></i>
                <span class="menu-title">Order Management
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('barber.coupons.index')}}">
                <i class="typcn typcn-document-text menu-icon"></i>
                <span class="menu-title">Coupon Management
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('best-offer-day.index')}}">
                <i class="typcn typcn-document-text menu-icon"></i>
                <span class="menu-title">Best Offers Management
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('barber.list.users')}}">
                <i class="typcn typcn-document-text menu-icon"></i>
                <span class="menu-title">Users Management
            </a>
        </li>

    </ul>
</nav>