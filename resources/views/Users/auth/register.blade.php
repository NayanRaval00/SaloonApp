@extends('Users.layouts.user')

@section('content')
<section id="hero" class="hero section dark-background">
    <img src="{{ asset('user/assets/img/hero-bg.jpg') }}" alt="" data-aos="fade-in">
    <div class="container d-flex flex-column align-items-center">
        <h2 data-aos="fade-up" data-aos-delay="100">Register Here!</h2>

        <div class="col-lg-6">
            <form action="{{ route('users.register.data') }}" method="post">
                @csrf
                <div class="row gy-4">
                    <div class="col-md-12">
                        <input type="text" class="form-control" name="name" placeholder="Full Name" value="{{ old('name') }}">
                        @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="col-md-12">
                        <input type="email" class="form-control" name="email" placeholder="Your Email Address" value="{{ old('email') }}">
                        @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="col-md-12">
                        <input type="text" name="mobile_number" class="form-control" placeholder="Mobile Number" value="{{ old('mobile_number') }}">
                        @error('mobile_number') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="col-md-12">
                        <input type="text" name="city" class="form-control" placeholder="City" value="{{ old('city') }}">
                    </div>

                    <div class="col-md-12">
                        <input type="text" name="state" class="form-control" placeholder="State" value="{{ old('state') }}">
                    </div>

                    <div class="col-md-12">
                        <select name="country" class="form-control">
                            <option value="">Select Country</option>
                            <option value="India" {{ old('country') == 'India' ? 'selected' : '' }}>India</option>
                        </select>
                        @error('country') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="col-md-12">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        @error('password') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="col-md-12">
                        <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
                    </div>

                    <div class="col-md-12 text-center">
                        <button type="submit">Submit</button>
                    </div>
                    <div class="col-md-12 text-center">
                        <p class="mt-2">Already have an account? <a href="{{ route('users.login') }}" class="text-primary">Login</a></p>
                    </div>

                </div>
            </form>
        </div>
    </div>
    </div>
</section>
@endsection