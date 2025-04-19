@extends('Admin.layouts.admin')

@section('title', 'Users List')

@section('content')
<div class="content-wrapper">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Users List</h4>
                <p class="card-description">
                    List of registered users.
                </p>
                <div class="d-flex align-items-center justify-content-md-end">

                    <a href="{{ route('admin.users.download') }}" title="Download Users" class="btn btn-success btn-rounded btn-fw mr-2">
                        Download 
                    </a>
                 

                </div>
                <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile Number</th>
                                <th>City</th>
                                <th>State</th>
                                <th>Country</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $key => $user)
                            <tr>
                                <td>{{ $users->firstItem() + $key }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->mobile_number ?? 'N/A' }}</td>
                                <td>{{ $user->city ?? 'N/A' }}</td>
                                <td>{{ $user->state ?? 'N/A' }}</td>
                                <td>{{ $user->country ?? 'N/A' }}</td>
                                <td>
                                    <!-- <a href="#" class="btn btn-sm btn-primary">Edit</a> -->
                                    <form action="{{ route('admin.user.destroy', $user->id) }}" method="POST" class="delete-form">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-sm btn-danger delete-btn">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="8" class="text-center">No users found.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                {{-- Pagination --}}
                <div class="d-flex justify-content-center mt-3">
                    {{ $users->links('pagination::bootstrap-4') }}
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
                if (confirm('Are you sure you want to delete this appointment message?')) {
                    this.closest('form.delete-form').submit();
                }
            });
        });
    });
</script>
@endpush
@endsection