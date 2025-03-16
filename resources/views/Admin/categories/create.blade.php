@extends('Admin.layouts.admin')

@section('title', 'Create Category')

@section('content')
<div class="content-wrapper">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Create Category</h4>
                <p class="card-description">Enter category details below.</p>

                <form action="{{ route('admin.category.save') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="categoryName">Category Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" 
                               id="categoryName" name="name" placeholder="Enter category name" value="{{ old('name') }}">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Save Category</button>
                    <a href="{{ route('admin.category.list') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
