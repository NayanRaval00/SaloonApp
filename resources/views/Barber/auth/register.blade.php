<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title', 'Barber Register')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('admin/images/favicon.png') }}" />

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('admin/vendors/typicons.font/font/typicons.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/vertical-layout-light/style.css') }}">

    @stack('styles')
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo">
                                <img src="{{ asset('user/web/img/logo.jpeg')}}" alt="logo">

                            </div>
                            <h4>New here?</h4>
                            <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
                            <form method="POST" action="{{ route('barber.register') }}">
                                @csrf

                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Full Name" value="{{ old('name') }}">
                                    @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>

                                <div class="form-group">
                                    <input type="text" name="saloon_name" class="form-control" placeholder="Saloon Name" value="{{ old('saloon_name') }}">
                                    @error('saloon_name') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>

                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                                    @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>

                                <div class="form-group">
                                    <input type="text" name="mobile_number" class="form-control" placeholder="Mobile Number" value="{{ old('mobile_number') }}">
                                    @error('mobile_number') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>

                                <div class="form-group">
                                    <input type="text" name="city" class="form-control" placeholder="City" value="{{ old('city') }}">
                                </div>

                                <div class="form-group">
                                    <input type="text" name="state" class="form-control" placeholder="State" value="{{ old('state') }}">
                                </div>

                                <div class="form-group">
                                    <select name="country" class="form-control">
                                        <option value="">Select Country</option>
                                        <option value="India">India</option>
                                    </select>
                                    @error('country') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>

                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                    @error('password') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>

                                <div class="form-group">
                                    <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
                                </div>

                                <div class="form-check">
                                    <input type="checkbox" name="terms" class="form-check-input">
                                    <label class="form-check-label">I agree to the Terms & Conditions</label>
                                    @error('terms') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>

                                <div class="mt-3">
                                    <button type="submit" class="btn btn-block btn-primary">Sign Up</button>
                                </div>

                                <div class="text-center mt-3">
                                    Already have an account? <a href="{{ route('barber.login') }}" class="text-primary">Login</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- Scripts -->
    <script src="{{ asset('admin/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('admin/js/off-canvas.js') }}"></script>
    <script src="{{ asset('admin/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('admin/js/template.js') }}"></script>
    <script src="{{ asset('admin/js/settings.js') }}"></script>
    <script src="{{ asset('admin/js/todolist.js') }}"></script>

    @stack('scripts')
</body>

</html>