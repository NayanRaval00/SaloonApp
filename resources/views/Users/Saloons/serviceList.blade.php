@extends('Users.layouts.user')

@section('title', 'Service Listing')


@section('content')

<main class="main">
    <!-- Services Section -->
    <section id="services" class="services section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Services</h2>
            <p>Best Services List<br></p>
        </div><!-- End Section Title -->


        <div class="container" data-aos="fade-up" data-aos-delay="100">
            @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <div class="row gy-5">
                @forelse ($services as $service)
                <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                    <div class="card shadow-sm border-0 rounded service-item">
                        <div class="img position-relative">
                            <img src="{{ asset('storage/' . $service->image) }}" class="card-img-top rounded-top" alt="{{ $service->name }}">
                            <span class="badge badge-primary position-absolute top-0 start-0 m-2 px-3 py-1 bg-dark text-white">{{ $service->category->name ?? 'General' }}</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-primary">{{ $service->name }}</h5>
                            <h6 class="text-muted">{{ $service->barber->saloon_name }}</h6>
                            <p class="card-text small text-secondary">
                                <i class="bi bi-geo-alt"></i> {{ $service->barber->city }}, {{ $service->barber->state }}, {{ $service->barber->country }}
                            </p>
                            <!-- <p class="text-muted"><i class="bi bi-phone"></i> {{ $service->barber->mobile_number }}</p> -->
                            <p class="fw-bold text-dark"><i class="bi bi-clock"></i> Duration: <span class="service-time">{{ $service->time }}</span> mins</p>
                            <h5 class="text-success fw-bold"><i class="bi bi-currency-dollar"></i> <span class="service-price">{{ number_format($service->price, 2) }}</span></h5>

                            <form action="{{ route('users.add.cart') }}" method="POST">
                                @csrf
                                <input type="hidden" name="service_id" value="{{ $service->id }}">
                                <input type="hidden" class="total-price" name="price" value="{{ $service->price }}">

                                <label for="datetime">Select Date & Time:</label>
                                <input type="datetime-local" name="datetime" class="form-control datetime-picker" required
                                    min="{{ now()->format('Y-m-d\TH:i') }}">

                                <!-- Duration Selection -->
                                <label for="time">Select Duration:</label>
                                <select name="duration" id="timeSelect{{ $service->id }}" class="form-control time-selector" data-price="{{ $service->price }}">
                                    <option value="">Select Time</option>
                                    <option value="30">30 Minutes</option>
                                    <option value="1">1 Hour</option>
                                    <option value="2">2 Hours</option>
                                    <option value="3">3 Hours</option>
                                    <option value="4">4 Hours</option>
                                </select>

                                <!-- Price Display -->
                                <h5 class="text-success fw-bold mt-2">Total Price: <span class="service-price">{{ number_format($service->price, 2) }}</span></h5>

                                <!-- Add to Cart Button -->
                                <button type="submit" class="btn btn-primary w-100 mt-3">Add To Cart</button>
                            </form>

                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12">
                    <p class="text-center">No services available at the moment.</p>
                </div>
                @endforelse
            </div>
        </div>

        <div class="d-flex justify-content-center mt-4">
            {{ $services->links('pagination::bootstrap-4') }}
        </div>

    </section>


</main>
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