@extends('Admin.layouts.admin')

@section('title', 'Saloons List')

@section('content')
<div class="content-wrapper">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">

            <div class="card-body">
                <h4 class="card-title">Saloons List</h4>
                <p class="card-description">List of registered barbers.</p>

                <div class="d-flex align-items-center justify-content-md-end">
                    <div class="pr-1 mb-3 mr-2 mb-xl-0">

                        <a href="{{route('admin.barbers.create')}}" class="btn btn-info btn-rounded btn-fw">Create Saloon</a>
                    </div>

                </div>

                <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Image</th>
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
                                <td><img src="{{ asset('storage/' . $barber->profile_image) }}" width="50" height="50"></td>
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
                                <td class="text-center">
                                    <div class="btn-group" role="group">
                                        <button title="Show Bank Details" class="btn btn-info btn-xs show-account-details ml-2"
                                            data-name="{{ $barber->name }}"
                                            data-bank-name="{{ $barber->bank_name }}"
                                            data-bank-account-number="{{ $barber->bank_account_number }}"
                                            data-bank-account-holder-name="{{ $barber->bank_account_holder_name }}"
                                            data-bank-address="{{ $barber->bank_address }}"
                                            data-bank-ifsc-code="{{ $barber->bank_ifsc_code }}"
                                            data-toggle="modal" data-target="#accountDetailsModal">
                                            <i class="typcn typcn-home-outline"></i> 
                                        </button>
                                        
                                        <button title="Update Status" class="btn btn-primary btn-xs update-status-btn ml-2"
                                            data-id="{{ $barber->id }}"
                                            data-status="{{ $barber->status }}">
                                            <i class="  typcn typcn-map"></i> 
                                        </button>
                                        <form action="{{ route('admin.barber.destroy', $barber->id) }}" method="POST" class="delete-form">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-sm btn-danger delete-btn">
                                                <i class=" typcn typcn-delete"></i>
                                            </button>
                                        </form>
                                    </div>
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

<!-- Modal for Barber Bank Account Details -->
<div class="modal fade" id="accountDetailsModal" tabindex="-1" role="dialog" aria-labelledby="accountDetailsModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="accountDetailsModalLabel">Bank Account Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p><strong>Name:</strong> <span id="modalBarberName"></span></p>
                <p><strong>Bank Name:</strong> <span id="modalBankName"></span></p>
                <p><strong>Account Number:</strong> <span id="modalBankAccountNumber"></span></p>
                <p><strong>Account Holder Name:</strong> <span id="modalBankAccountHolderName"></span></p>
                <p><strong>Bank Address:</strong> <span id="modalBankAddress"></span></p>
                <p><strong>IFSC Code:</strong> <span id="modalBankIFSCCode"></span></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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

<script>
    $(document).ready(function() {
        $('.show-account-details').on('click', function() {
            $('#modalBarberName').text($(this).data('name'));
            $('#modalBankName').text($(this).data('bank-name') || 'N/A');
            $('#modalBankAccountNumber').text($(this).data('bank-account-number') || 'N/A');
            $('#modalBankAccountHolderName').text($(this).data('bank-account-holder-name') || 'N/A');
            $('#modalBankAddress').text($(this).data('bank-address') || 'N/A');
            $('#modalBankIFSCCode').text($(this).data('bank-ifsc-code') || 'N/A');
        });
    });
</script>



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