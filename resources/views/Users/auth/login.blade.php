@extends('Users.layouts.user')

@section('title', 'Login Users')

@section('content')
<section id="hero" class="hero section dark-background">
    <img src="{{ asset('user/assets/img/hero-bg.jpg')}}" alt="" data-aos="fade-in">

    <div class="container d-flex flex-column align-items-center">
        <h2 data-aos="fade-up" data-aos-delay="100">Login Here!</h2>

        <div class="col-lg-6">
            {{-- Display Session Messages --}}
            @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            <form action="{{ route('users.login.post') }}" method="post" class="">
                @csrf

                <div class="row gy-4">
                    {{-- Email Field --}}
                    <div class="col-md-12">
                        <input type="email" class="form-control" name="email" placeholder="Your Email Address" value="{{ old('email') }}">
                        @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    {{-- Password Field --}}
                    <div class="col-md-12">
                        <input type="password" name="password" class="form-control" placeholder="Your Password" required>
                        @error('password') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    {{-- Submit Button --}}
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>

                    {{-- Register Link --}}
                    <div class="col-md-12 text-center">
                        <p class="mt-2">Don't have an account? <a href="{{ route('users.register') }}" class="text-primary">Register</a></p>
                    </div>

                </div>
            </form>
        </div><!-- End Contact Form -->
    </div>
</section>
@endsection