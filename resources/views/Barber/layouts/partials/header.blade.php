<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href=""><img src="{{ asset('user/web/img/logo.jpeg')}}" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href=""><img src="{{ asset('admin/images/logo-mini.svg') }}" alt="logo" /></a>
        <button class="navbar-toggler navbar-toggler align-self-center d-none d-lg-flex" type="button"
            data-toggle="minimize">
            <span class="typcn typcn-th-menu"></span>
        </button>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown d-flex">
                <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                    <i class="typcn typcn-bell mr-0"></i>
                    <span class="count bg-danger">{{ $count }}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                    <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                    @forelse($order_items as $orderItem)
                    <form action="{{route('update-notification-count',$orderItem->id)}}" method="post">
                        @csrf
                        <button type="submit" class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-success">
                                    <i class="typcn typcn-info-large mx-0"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject font-weight-bold">{{$orderItem->service->name}}</h6>
                                <span>{{$orderItem->order->user->name}}</span>
                                <p class="font-weight-light small-text mb-0">
                                    {{date('d-M-Y', strtotime($orderItem->created_at))}}
                                </p>
                            </div>
                        </button>
                        <form>
                            @empty
                            <p class="mb-0 font-weight-normal float-left dropdown-header text-danger">No Notifications found!</p>

                            @endforelse
                </div>
            </li>
            <li class="nav-item nav-profile dropdown">
                <a class="nav-link dropdown-toggle  pl-0 pr-0" href="#" data-toggle="dropdown" id="profileDropdown">
                    <i class="typcn typcn-user-outline mr-0"></i>
                    <span class="nav-profile-name">@if(Auth::guard('barber')) {{Auth::guard('barber')->user()->name}}@else{{'-'}}@endif</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                    <a class="dropdown-item" href="{{route('barber.profile.edit')}}">
                        <i class="typcn typcn-cog text-primary"></i>
                        Settings
                    </a>
                    <form id="logout-form" action="{{ route('barber.logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

                    <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="typcn typcn-power text-primary"></i>
                        Logout
                    </a>
                </div>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
            data-toggle="offcanvas">
            <span class="typcn typcn-th-menu"></span>
        </button>
    </div>
</nav>