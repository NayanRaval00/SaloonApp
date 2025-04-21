@extends('Barber.layouts.barber')

@section('title', 'Category List')

@section('content')
<div class="content-wrapper">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Category List</h4>
                <p class="card-description">List of available categories.</p>
                <form action="{{ route('barber.category.list') }}" method="get" class="mb-4">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="input-group">
                                <input type="text" name="search" id="search" class="form-control"
                                    placeholder="Search categories..." value="{{ request('search') }}">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-success">
                                        <i class="fas fa-search"></i> Search
                                    </button>
                                    <a href="{{ route('barber.category.list') }}" class="btn btn-danger">
                                        <i class="fas fa-times"></i> Reset
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>



                <div class="d-flex align-items-center justify-content-md-end">
                    <a href="{{ route('barber.category.create') }}" class="btn btn-info btn-rounded btn-fw">
                        Create Category
                    </a>
                </div>

                <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Category Name</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($categories as $key => $category)
                            <tr>
                                <td>{{ $categories->firstItem() + $key }}</td>
                                <td>{{ $category->name }}</td>
                                <td>
                                    <a href="{{route('barber.category.edit',$category->id)}}" class="btn btn-sm btn-primary update-status-btn"
                                        data-id="{{ $category->id }}"
                                        data-name="{{ $category->name }}">
                                        Edit
                                    </a>
                                    <form action="{{ route('barber.category.delete', $category->id) }}" method="POST" class="d-inline delete-service-form">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger show-confirm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="3" class="text-center">No categories found.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                {{-- Pagination --}}
                <div class="d-flex justify-content-center mt-3">
                    {{ $categories->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection