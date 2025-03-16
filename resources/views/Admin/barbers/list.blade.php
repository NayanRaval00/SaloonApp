@extends('Admin.layouts.admin')

@section('title', 'Barbers List')

@section('content')
<div class="content-wrapper">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">

            <div class="card-body">
                <h4 class="card-title">Barbers List</h4>
                <p class="card-description">List of registered barbers.</p>

                <div class="d-flex align-items-center justify-content-md-end">
                    <div class="pr-1 mb-3 mr-2 mb-xl-0">
                       
                        <a href="{{route('admin.barbers.create')}}" class="btn btn-info btn-rounded btn-fw">Create Barber</a>
                    </div>
                   
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
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($barbers as $key => $barber)
                            <tr>
                                <td>{{ $barbers->firstItem() + $key }}</td>
                                <td>{{ $barber->name }}</td>
                                <td>{{ $barber->email }}</td>
                                <td>{{ $barber->mobile_number ?? 'N/A' }}</td>
                                <td>{{ $barber->city ?? 'N/A' }}</td>
                                <td>{{ $barber->state ?? 'N/A' }}</td>
                                <td>{{ $barber->country ?? 'N/A' }}</td>
                                <td>
                                    <span class="badge {{ $barber->status == 1 ? 'badge-success' : 'badge-danger' }}">
                                        {{ $barber->status == 1 ? 'Active' : 'Inactive' }}
                                    </span>
                                </td>
                                <td>
                                    <button class="btn btn-sm btn-primary update-status-btn"
                                        data-id="{{ $barber->id }}"
                                        data-status="{{ $barber->status }}">
                                        Update Status
                                    </button>
                                    <a href="#" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="9" class="text-center">No barbers found.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                {{-- Pagination --}}
                <div class="d-flex justify-content-center mt-3">
                    {{ $barbers->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Status Update -->
<div class="modal fade" id="statusModal" tabindex="-1" role="dialog" aria-labelledby="statusModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="statusModalLabel">Update Barber Status</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to <span id="statusText"></span> this barber?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" id="confirmStatusUpdate" class="btn btn-primary">Yes, Update</button>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        let barberId;
        let newStatus;

        // Open modal and set data
        $('.update-status-btn').click(function() {
            console.log(123456);

            barberId = $(this).data('id');
            let currentStatus = $(this).data('status');
            newStatus = currentStatus == 1 ? 0 : 1;

            $('#statusText').text(newStatus == 1 ? "activate" : "deactivate");
            $('#statusModal').modal('show');
        });

        // Confirm and send AJAX request
        $('#confirmStatusUpdate').click(function() {
            console.log(123);

            $.ajax({
                url: "{{ route('admin.barbers.updateStatus') }}",
                method: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    id: barberId,
                    status: newStatus
                },
                success: function(response) {
                    if (response.success) {
                        location.reload();
                    }
                },
                error: function(xhr) {
                    console.log(xhr.responseText);
                }
            });
        });
    });
</script>
@endpush