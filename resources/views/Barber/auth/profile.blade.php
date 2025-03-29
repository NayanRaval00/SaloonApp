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

                    <!-- Name -->
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $barber->name) }}" required>
                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <!-- Saloon Name -->
                    <div class="form-group">
                        <label for="saloon_name">Saloon Name</label>
                        <input type="text" id="saloon_name" name="saloon_name" class="form-control" value="{{ old('saloon_name', $barber->saloon_name) }}" required>
                        @error('saloon_name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <!-- Profile Image -->
                    <div class="form-group">
                        <label for="profile_image">Profile Image</label>
                        <input type="file" id="profile_image" name="profile_image" class="form-control">
                        @if($barber->profile_image)
                        <img src="{{ asset('storage/' . $barber->profile_image) }}" alt="Profile Image" width="100" class="mt-2">
                        @endif
                        @error('profile_image') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <!-- Password -->
                    <div class="form-group">
                        <label for="password">New Password (leave blank if not changing)</label>
                        <input type="password" id="password" name="password" class="form-control">
                        @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <!-- Confirm Password -->
                    <div class="form-group">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Update Profile</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection