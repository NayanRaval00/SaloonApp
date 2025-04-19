@extends('Admin.layouts.admin')

@section('title', 'Category List')

@section('content')
<div class="content-wrapper">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Category List</h4>
                <p class="card-description">List of available categories.</p>

                <div class="d-flex align-items-center justify-content-md-end">

                    <a href="{{ route('admin.category.list') }}" class="btn btn-danger btn-rounded btn-fw mr-2">
                        Reset
                    </a>
                    <a href="{{ route('admin.category.create') }}" class="btn btn-info btn-rounded btn-fw">
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
                                    <a class="btn btn-sm btn-primary update-status-btn"
                                        href="{{route('admin.category.edit',$category->id)}}">
                                        Edit
                                    </a>
                                    <form action="{{ route('admin.category.delete', $category->id) }}" method="POST" class="d-inline delete-service-form">
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

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const deleteButtons = document.querySelectorAll('.delete-btn');

        deleteButtons.forEach(button => {
            button.addEventListener('click', function() {
                if (confirm('Are you sure you want to delete this category?')) {
                    this.closest('form.delete-form').submit();
                }
            });
        });
    });
</script>
@endpush

@endsection