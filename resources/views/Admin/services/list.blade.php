@extends('Admin.layouts.admin')

@section('title', 'Service List')

@section('content')
<div class="content-wrapper">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Service List</h4>
                <p class="card-description">List of available services.</p>

                <div class="d-flex align-items-center justify-content-md-end">
                    <a href="{{ route('admin.service.create') }}" class="btn btn-info btn-rounded btn-fw">
                        Create Service
                    </a>
                </div>

                <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Barber</th>
                                <th>Price</th>
                                <th>Sheet</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($services as $key => $service)
                            <tr>
                                <td>{{ $services->firstItem() + $key }}</td>
                                <td><img src="{{ asset('storage/' . $service->image) }}" width="50" height="50"></td>
                                <td>{{ $service->name }}</td>
                                <td>{{ $service->category->name }}</td>
                                <td>{{ $service->barber->name }}</td>
                                <td>${{ number_format($service->price, 2) }}</td>
                                <td>{{ $service->sheet }}</td>
                                <td>
                                    <span class="badge {{ $service->status ? 'badge-success' : 'badge-danger' }}">
                                        {{ $service->status ? 'Active' : 'Inactive' }}
                                    </span>
                                </td>
                                <td>
                                    <a class="btn btn-sm btn-primary update-status-btn"
                                        href="{{route('admin.service.edit',$service->id)}}">
                                        Edit
                                    </a>
                                    <form action="{{ route('admin.service.delete', $service->id) }}" method="POST" class="d-inline delete-service-form">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger show-confirm">Delete</button>
                                    </form>

                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="8" class="text-center">No services found.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                {{-- Pagination --}}
                <div class="d-flex justify-content-center mt-3">
                    {{ $services->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
    document.querySelectorAll('.delete-service-form').forEach(form => {
        form.addEventListener('submit', function (e) {
            const confirmed = confirm('Are you sure you want to delete this service?');
            if (!confirmed) {
                e.preventDefault();
            }
        });
    });
</script>
@endpush
