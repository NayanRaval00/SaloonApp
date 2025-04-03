@extends('Barber.layouts.barber')
@section('title', 'Profile Update')

@section('content')
<div class="content-wrapper">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h2>Update Profile</h2>

                @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <form action="{{ route('barber.profile.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <!-- Left Side: Personal Information -->
                        <div class="col-md-6">
                            <h3 class="text-primary">Personal Details</h3>

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $barber->name) }}" required>
                                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group">
                                <label for="saloon_name">Saloon Name</label>
                                <input type="text" id="saloon_name" name="saloon_name" class="form-control" value="{{ old('saloon_name', $barber->saloon_name) }}" required>
                                @error('saloon_name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group">
                                <label for="profile_image">Profile Image</label>
                                <input type="file" id="profile_image" name="profile_image" class="form-control">
                                @if($barber->profile_image)
                                <img src="{{ asset('storage/' . $barber->profile_image) }}" alt="Profile Image" width="100" class="mt-2">
                                @endif
                                @error('profile_image') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group">
                                <label for="password">New Password (leave blank if not changing)</label>
                                <input type="password" id="password" name="password" class="form-control">
                                @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group">
                                <label for="password_confirmation">Confirm Password</label>
                                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control">
                            </div>
                        </div>

                        <!-- Right Side: Bank Account Details -->
                        <div class="col-md-6">
                            <h3 class="text-primary">Bank Account Details</h3>

                            <div class="form-group">
                                <label for="bank_name">Bank Name</label>
                                <input type="text" id="bank_name" name="bank_name" class="form-control" value="{{ old('bank_name', $barber->bank_name) }}">
                                @error('bank_name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group">
                                <label for="bank_account_number">Bank Account Number</label>
                                <input type="text" id="bank_account_number" name="bank_account_number" class="form-control" value="{{ old('bank_account_number', $barber->bank_account_number) }}">
                                @error('bank_account_number') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group">
                                <label for="bank_account_holder_name">Account Holder Name</label>
                                <input type="text" id="bank_account_holder_name" name="bank_account_holder_name" class="form-control" value="{{ old('bank_account_holder_name', $barber->bank_account_holder_name) }}">
                                @error('bank_account_holder_name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group">
                                <label for="bank_address">Bank Address</label>
                                <input type="text" id="bank_address" name="bank_address" class="form-control" value="{{ old('bank_address', $barber->bank_address) }}">
                                @error('bank_address') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group">
                                <label for="bank_ifsc_code">IFSC Code</label>
                                <input type="text" id="bank_ifsc_code" name="bank_ifsc_code" class="form-control" value="{{ old('bank_ifsc_code', $barber->bank_ifsc_code) }}">
                                @error('bank_ifsc_code') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Update Profile</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection