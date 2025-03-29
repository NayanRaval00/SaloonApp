@extends('Admin.layouts.admin')

@section('title', 'Barbers Create')

@section('content')
<div class="content-wrapper">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Create Barber</h4>
                <p class="card-description">
                    Create Barber
                </p>
                <form method="POST" action="{{ route('admin.barbers.save') }}" enctype="multipart/form-data">
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
                        <input type="file" class="form-control @error('profile_image') is-invalid @enderror"
                            id="profileImage" name="profile_image">
                        @error('profile_image') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        @error('password') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="form-group">
                        <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection