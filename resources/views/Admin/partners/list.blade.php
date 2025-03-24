@extends('Admin.layouts.admin')

@section('title', 'Partner Management')

@section('content')
<div class="content-wrapper">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Partner Management</h4>
                <p class="card-description">List of registered partners.</p>
                
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
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($partners as $key => $partner)
                                <tr>
                                    <td>{{ $partners->firstItem() + $key }}</td>
                                    <td>{{ $partner->name }}</td>
                                    <td>{{ $partner->email }}</td>
                                    <td>{{ $partner->mobile_number ?? 'N/A' }}</td>
                                    <td>{{ $partner->city ?? 'N/A' }}</td>
                                    <td>{{ $partner->state ?? 'N/A' }}</td>
                                    <td>{{ $partner->country ?? 'N/A' }}</td>
                                    <td>
                                        <span class="badge 
                                            {{ $partner->status == 'approved' ? 'badge-success' : ($partner->status == 'rejected' ? 'badge-danger' : 'badge-warning') }}">
                                            {{ ucfirst($partner->status) }}
                                        </span>
                                    </td>
                                    <td>
                                        <button class="btn btn-success btn-sm" onclick="updateStatus({{ $partner->id }}, 'approved')">Approve</button>
                                        <button class="btn btn-danger btn-sm" onclick="updateStatus({{ $partner->id }}, 'rejected')">Reject</button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="9" class="text-center">No partners found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                {{-- Pagination --}}
                <div class="d-flex justify-content-center mt-3">
                    {{ $partners->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function updateStatus(partnerId, status) {
        if (confirm("Are you sure you want to " + status + " this partner?")) {
            $.ajax({
                url: "{{ route('admin.partners.updateStatus') }}",
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    partner_id: partnerId,
                    status: status
                },
                success: function(response) {
                    alert(response.message);
                    location.reload();
                },
                error: function(xhr) {
                    alert("An error occurred. Please try again.");
                }
            });
        }
    }
</script>

@endsection
