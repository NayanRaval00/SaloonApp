@extends('Users.web.layouts.user')

@section('title', 'Service Listing')


@section('content')
<!-- Bootstrap CSS -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->

<!-- Bootstrap JS (for modal functionality) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<div class="jumbotron jumbotron-fluid bg-jumbotron" style="margin-bottom: 90px;">
    <div class="container text-center py-5">
        <h3 class="text-white display-3 mb-4">Services</h3>

    </div>
</div>


<div class="container" id="">
    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <div class="row">
        @forelse ($services as $service)
        <div class="col-sm-6 mb-4">
            <div class="service-card">
                <img src="{{ asset('storage/' . $service->image) }}" alt="Packages" class="service-image">
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
                    <div class="date">
                        <label for="datetime">Select Date & Time:</label>
                        <input type="datetime-local" name="datetime" class="form-control datetime-picker" required
                            min="{{ now()->format('Y-m-d\TH:i') }}">
                    </div>
                    <div class="button-container">
                        <button class="view-details-btn" data-bs-toggle="modal" data-bs-target="#serviceModal">View Details</button>
                        <button type="submit" class="add-btn">Add To Cart</button>
                </form>
            </div>
        </div>
    </div>


    <div class="modal fade" id="serviceModal" tabindex="-1" aria-labelledby="serviceModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="serviceModalLabel">Service Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <p>{{ $service->description }}.</p>
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
<script>
    $(document).ready(function() {
        $(".time-selector").change(function() {
            let selectedTime = $(this).val();
            let basePrice = $(this).data("price");

            let timeMultiplier = selectedTime == 30 ? 0.5 : parseInt(selectedTime);

            let newPrice = timeMultiplier * basePrice;

            $(this).closest(".card-body").find(".service-price").text(newPrice.toFixed(2));
            $(this).closest("form").find(".total-price").val(newPrice);
        });
    });
</script>
@endpush