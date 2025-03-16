@extends('Barber.layouts.barber')

@section('title', 'Category List')

@section('content')
<div class="content-wrapper">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Category List</h4>
                <p class="card-description">List of available categories.</p>

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
                                    <button class="btn btn-sm btn-primary update-status-btn"
                                        data-id="{{ $category->id }}"
                                        data-name="{{ $category->name }}">
                                        Edit
                                    </button>
                                    <a href="#" class="btn btn-sm btn-danger">Delete</a>
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
