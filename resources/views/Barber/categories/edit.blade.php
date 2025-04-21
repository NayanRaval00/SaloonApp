@extends('Barber.layouts.barber')

@section('title', 'Edit Category')

@section('content')
<div class="content-wrapper">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Category</h4>
                <p class="card-description">Enter category details below.</p>

                <form action="{{ route('barber.category.update') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="categoryName">Category Name</label>
                        <input type="hidden" name="id" value="{{$category->id}}">
                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                            id="categoryName" name="name" placeholder="Enter category name" value="{{ $category->name }}">
                        @error('name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Update Category</button>
                    <a href="{{ route('barber.category.list') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection