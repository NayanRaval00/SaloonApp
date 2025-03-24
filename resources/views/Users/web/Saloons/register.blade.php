@extends('Users.web.layouts.user')

@section('title', 'Register as Barber')

@section('content')
<!-- Barber Registration Section -->
<div class="site-section bg-light pt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-5">
                <form action="{{ route('barber.register.store') }}" method="post" class="p-5 bg-white">
                    @csrf
                    <h2 class="mb-4 site-section-heading">Register as a Barber</h2>

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

                    <!-- Address -->
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-black" for="address">Address</label>
                            <input type="text" id="address" name="address" class="form-control" placeholder="Your Address" value="{{ old('address') }}">
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

                    <!-- Postal Code & Country -->
                    <div class="row form-group">
                        <div class="col-md-6">
                            <label class="text-black" for="postal_code">Postal Code</label>
                            <input type="text" id="postal_code" name="postal_code" class="form-control" placeholder="Postal Code" value="{{ old('postal_code') }}">
                        </div>
                        <div class="col-md-6">
                            <label class="text-black" for="country">Country</label>
                            <select id="country" name="country" class="form-control">
                                <option value="">Select Country</option>
                                <option value="India" {{ old('country') == 'India' ? 'selected' : '' }}>India</option>
                            </select>
                            @error('country') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>

                    <!-- Company Name & Business Type -->
                    <div class="row form-group">
                        <div class="col-md-6">
                            <label class="text-black" for="saloon_name">Company Name</label>
                            <input type="text" id="saloon_name" name="saloon_name" class="form-control" placeholder="Your Salon/Business Name" value="{{ old('saloon_name') }}">
                            @error('saloon_name') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                        <div class="col-md-6">
                            <label class="text-black" for="business_type">Business Type</label>
                            <input type="text" id="business_type" name="business_type" class="form-control" placeholder="Business Type (e.g. Salon, Freelance)" value="{{ old('business_type') }}">
                        </div>
                    </div>

                    <!-- Website & Business Address -->
                    <div class="row form-group">
                        <div class="col-md-6">
                            <label class="text-black" for="website">Website (if any)</label>
                            <input type="text" id="website" name="website" class="form-control" placeholder="Business Website (Optional)" value="{{ old('website') }}">
                        </div>
                        <div class="col-md-6">
                            <label class="text-black" for="business_address">Business Address</label>
                            <input type="text" id="business_address" name="business_address" class="form-control" placeholder="Business Address" value="{{ old('business_address') }}">
                        </div>
                    </div>

                    <!-- How did you hear about us? -->
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-black">How did you hear about us?</label><br>
                            <label><input type="radio" name="how_did_you_hear" value="Website"> Website</label>
                            <label><input type="radio" name="how_did_you_hear" value="Referral"> Referral</label>
                            <label><input type="radio" name="how_did_you_hear" value="Social Media"> Social Media</label>
                            <label><input type="radio" name="how_did_you_hear" value="Advertisement"> Advertisement</label>
                            <label><input type="radio" name="how_did_you_hear" value="Other"> Other</label>
                        </div>
                        @error('how_did_you_hear') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <!-- Terms & Conditions -->
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label>
                                <input type="checkbox" name="agree_terms" required>
                                I agree to the <a href="#">terms and conditions</a>.
                            </label>
                        </div>
                    </div>

                    <!-- Password & Confirm Password -->
                    <div class="row form-group">
                        <div class="col-md-6">
                            <label class="text-black" for="password">Password</label>
                            <input type="password" id="password" name="password" class="form-control" placeholder="Enter Password">
                            @error('password') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                        <div class="col-md-6">
                            <label class="text-black" for="password_confirmation">Confirm Password</label>
                            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Confirm Password">
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="submit" value="Register" class="btn btn-primary py-2 px-4 text-white">
                        </div>
                    </div>

                    <!-- Already have an account? -->
                    <div class="row form-group">
                        <div class="col-md-12 text-center">
                            <!-- <p class="mt-2">Already have an account? <a href="{{ route('barber.login') }}" class="text-primary">Login</a></p> -->
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection