@extends('Users.web.layouts.user')

@section('title', 'Login Users')

@section('content')
<!-- Header Start -->
<div class="jumbotron jumbotron-fluid bg-jumbotron" style="margin-bottom: 90px;">
    <div class="container text-center py-5">
        <h3 class="text-white display-3 mb-4">Login!</h3>

    </div>
</div>
<!-- Header End -->


<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="img-fluid w-100" src="{{ asset('user/web/img/about.jpg')}}" alt="Luxury Spa and Salon Center">
                </div>
            </div>
            <div class="col-lg-6 pt-5 pb-lg-5">
                <div class="contact-form bg-light p-4 p-lg-5 my-lg-5">
                    <h6 class="d-inline-block text-white text-uppercase bg-primary py-1 px-2">Login</h6>
                    <h1 class="mb-4">Login Hear!</h1>
                    <div id="success"></div>
                    @if(session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif

                    <form action="{{ route('users.login.post') }}" method="post" class="">
                        @csrf

                        <div class="form-row">
                            <div class="col-md-12 control-group">
                                <input type="email" class="form-control border-0 p-4" name="email" id="email" placeholder="Your email"
                                    required="required" data-validation-required-message="Please enter your email" value="{{ old('email') }}" />
                                <p class="help-block text-danger">@error('email') {{ $message }} @enderror</p>
                            </div>
                            <div class="col-md-12 control-group">
                                <input type="password" name="password" class="form-control border-0 p-4" id="password" placeholder="Your password"
                                    required="required" data-validation-required-message="Please enter your password" />
                                <p class="help-block text-danger">@error('password') {{ $message }} @enderror</p>
                            </div>
                        </div>
                       

                        <div>
                            <button class="btn btn-primary py-3 px-4" type="submit" id="sendMessageButton">Submit</button>
                        </div>
                        <div class="text-center mt-3">
                            Already Don't have an account? <a href="{{ route('user.web.register') }}" class="text-primary">Register</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection