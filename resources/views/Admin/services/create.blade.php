@extends('Admin.layouts.admin')

@section('title', 'Create Service')

@section('content')
<div class="content-wrapper">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Create Service</h4>
                <p class="card-description">Enter service details below.</p>

                <form action="{{ route('admin.service.save') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="serviceName">Service Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                            id="serviceName" name="name" placeholder="Enter service name" value="{{ old('name') }}">
                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="serviceImage">Service Image</label>
                        <input type="file" class="form-control @error('image') is-invalid @enderror"
                            id="serviceImage" name="image">
                        @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="serviceDescription">Description</label>
                        <textarea class="form-control @error('description') is-invalid @enderror"
                            id="serviceDescription" name="description" rows="3">{{ old('description') }}</textarea>
                        @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="serviceCategory">Category</label>
                        <select class="form-control @error('category_id') is-invalid @enderror" id="serviceCategory" name="category_id">
                            <option value="">Select Category</option>
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category_id') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="serviceBarber">Barber</label>
                        <select class="form-control @error('barber_id') is-invalid @enderror" id="serviceBarber" name="barber_id">
                            <option value="">Select Barber</option>
                            @foreach($categories as $Barber)
                            <option value="{{ $Barber->id }}">{{ $Barber->name }}</option>
                            @endforeach
                        </select>
                        @error('barber_id') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="servicePrice">Price</label>
                        <input type="number" class="form-control @error('price') is-invalid @enderror"
                            id="servicePrice" name="price" value="{{ old('price') }}">
                        @error('price') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="serviceTime">Time</label>
                        <input type="time" class="form-control @error('time') is-invalid @enderror"
                            id="servicetime" name="time" value="{{ old('time') }}">
                        @error('time') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" name="status">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Save Service</button>
                    <a href="{{ route('admin.service.list') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection