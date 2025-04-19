@extends('Admin.layouts.admin')

@section('title', 'Edit Service')

@section('content')
<div class="content-wrapper">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Service</h4>
                <p class="card-description">Enter service details below.</p>

                <form action="{{ route('admin.service.update', $service) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="serviceName">Service Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                            id="serviceName" name="name" placeholder="Enter service name" value="{{ $service->name }}">
                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="serviceImage">Service Image</label>
                        <input type="file" class="form-control @error('image') is-invalid @enderror"
                            id="serviceImage" name="image">
                        @if($service->image)
                        <div class="form-group">
                            <label>Current Image</label><br>
                            <img src="{{ asset('storage/' . $service->image) }}" width="100" alt="Service Image">
                        </div>
                        @endif

                        @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="serviceBarber">Barber</label>
                        <select class="form-control @error('barber_id') is-invalid @enderror" id="serviceBarber" name="barber_id">
                            <option value="">Select Barber</option>
                            @foreach($barbers as $barber)
                            <option value="{{ $barber->id }}" {{ old('barber_id', $service->barber_id) == $barber->id ? 'selected' : '' }}>{{ $barber->name }}</option>
                            @endforeach
                        </select>
                        @error('barber_id') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="serviceDescription">Description</label>
                        <textarea class="form-control @error('description') is-invalid @enderror"
                            id="serviceDescription" name="description" rows="3">{{ old('description', $service->description) }}</textarea>

                        @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="serviceCategory">Category</label>
                        <select class="form-control @error('category_id') is-invalid @enderror" id="serviceCategory" name="category_id">
                            <option value="">Select Category</option>
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id', $service->category_id) == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                            @endforeach
                        </select>
                        @error('category_id') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="servicePrice">Price</label>
                        <input class="form-control" type="number" name="price" value="{{ old('price', $service->price) }}">
                        @error('price') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="serviceTime">Sheet</label>
                        <input class="form-control" type="sheet" name="sheet" value="{{ old('sheet', $service->sheet) }}">
                        @error('sheet') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="serviceSlot">Select Time Slots</label>
                        <select class="form-control @error('slot') is-invalid @enderror" id="serviceSlot" name="slot[]" multiple>
                            @php
                            $selectedSlots = $service->slots->pluck('id')->toArray();
                            @endphp
                            @foreach($serviceSlots as $slot)
                            <option value="{{ $slot->id }}" {{ in_array($slot->id, old('slot', $selectedSlots)) ? 'selected' : '' }}>
                                {{ $slot->slot_time }}
                            </option>
                            @endforeach
                        </select>
                        @error('slot') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" name="status">
                            <option value="1" {{ old('status', $service->status) == 1 ? 'selected' : '' }}>Active</option>
                            <option value="0" {{ old('status', $service->status) == 0 ? 'selected' : '' }}>Inactive</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Update Service</button>
                    <a href="{{ route('admin.service.list') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection