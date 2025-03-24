@extends('Users.web.layouts.user')

@section('title', 'Register Users')

@section('content')
<!-- Header Start -->
<!--Book Now-->
<div class="site-section bg-light pt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-5">
                <form action="{{ route('users.web.becomepartner') }}" method="post" class="p-5 bg-white">
                    @csrf
                    <h2 class="mb-4 site-section-heading">Become A Partner Now</h2>
                    @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                    @endif


                    <!-- Full Name -->
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-black" for="name">Full Name</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Your Full Name" value="{{ old('name') }}">
                            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>

                    <!-- Email & Mobile Number -->
                    <div class="row form-group">
                        <div class="col-md-6">
                            <label class="text-black" for="email">Email</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Your Email Address" value="{{ old('email') }}">
                            @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                        <div class="col-md-6">
                            <label class="text-black" for="mobile_number">Mobile Number</label>
                            <input type="text" id="mobile_number" name="mobile_number" class="form-control" placeholder="Your Phone Number" value="{{ old('mobile_number') }}">
                            @error('mobile_number') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>

                    <!-- City & State -->
                    <div class="row form-group">
                        <div class="col-md-6">
                            <label class="text-black" for="city">City</label>
                            <input type="text" id="city" name="city" class="form-control" placeholder="Your City" value="{{ old('city') }}">
                        </div>
                        <div class="col-md-6">
                            <label class="text-black" for="state">State</label>
                            <input type="text" id="state" name="state" class="form-control" placeholder="Your State" value="{{ old('state') }}">
                        </div>
                    </div>

                    <!-- Country -->
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-black" for="country">Country</label>
                            <select id="country" name="country" class="form-control">
                                <option value="">Select Country</option>
                                <option value="India" {{ old('country') == 'India' ? 'selected' : '' }}>India</option>
                            </select>
                            @error('country') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="submit" value="Register" class="btn btn-primary py-2 px-4 text-white">
                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>
</div>

@endsection