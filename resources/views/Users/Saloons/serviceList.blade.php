@extends('Users.web.layouts.user')

@section('title', 'Service Listing')

@section('content')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<div class="jumbotron jumbotron-fluid bg-jumbotron" style="margin-bottom: 90px;">
    <div class="container text-center py-5">
        <h3 class="text-white display-3 mb-4">Services</h3>
    </div>
</div>

<div class="container">
    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <div class="row">
        @forelse ($services as $service)
        <div class="col-sm-4 mb-4">
            <div class="service-card">
                <img src="{{ asset('storage/' . $service->image) }}" alt="Service" class="service-image">
                <div class="service-title">{{ $service->name }}</div>
                <div class="rating">⭐ 4.94 (480K reviews)</div>
                <div class="price-duration">
                    <span class="price">₹{{ number_format($service->price, 2) }}</span>
                    <span class="duration">• {{ $service->time }} hrs</span>
                </div>
                <form action="{{ route('users.add.cart') }}" method="POST">
                    @csrf
                    <input type="hidden" name="service_id" value="{{ $service->id }}">
                    <input type="hidden" class="total-price" name="price" value="{{ $service->price }}">

                    <!-- Date Selection -->
                    <div class="date">
                        <label for="datetime">Select Date & Time:</label>
                        <input type="datetime-local" name="datetime" class="form-control datetime-picker" required
                            min="{{ now()->format('Y-m-d\TH:i') }}">
                    </div>

                    <!-- Slot Selection Dropdown -->
                    <div class="form-group mt-2">
                        <label for="slot">Select Time Slot:</label>
                        <select name="slot" class="form-control" required>
                            <option value="">-- Select Slot --</option>
                            @foreach ($service->slots as $slot)
                            <option value="{{ $slot->id }}">{{ $slot->slot_time }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="button-container mt-2">
                        <button type="button" class="view-details-btn" data-bs-toggle="modal"
                            data-bs-target="#serviceModal{{ $service->id }}">View Details</button>
                        <button type="submit" class="add-btn">Add To Cart</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Modal for Each Service -->
        <div class="modal fade" id="serviceModal{{ $service->id }}" tabindex="-1"
            aria-labelledby="serviceModalLabel{{ $service->id }}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="serviceModalLabel{{ $service->id }}">{{ $service->name }} Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="fa fa-times"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>{{ $service->description }}</p>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12">
            <p class="text-center">No services available at the moment.</p>
        </div>
        @endforelse
    </div>

    <div class="d-flex justify-content-center mt-4">
        {{ $services->links('pagination::bootstrap-4') }}
    </div>
</div>
@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
@endpush