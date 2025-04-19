@extends('Users.web.layouts.user')

@section('title', 'Best Saloons Wishlist Listing')


@section('content')


<div class="jumbotron jumbotron-fluid bg-jumbotron" style="margin-bottom: 90px;">
    <div class="container text-center py-5">
        <h3 class="text-white display-3 mb-4"> Saloons Wishlist List</h3>

    </div>
</div>
<!-- Header End -->


<main class="main">
    <!-- Services Section -->
    <section id="services" class="services section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Saloons</h2>
            <p>Best Saloons Wishlist List<br></p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-5">
                @forelse ($wishlists as $saloon)
                <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                    <div class="service-item">
                        <div class="img">
                            <img src="{{ asset('user/assets/img/website_photos/service-2.jpg')}}" class="img-fluid" alt="Saloon Image">
                        </div>
                        <div class="details position-relative">
                            <div class="icon">
                                <i class="bi bi-scissors"></i>
                            </div>
                            <a href="{{route('users.service.list',$saloon->saloon->id)}}" class="stretched-link">
                                <h3>{{ $saloon->saloon->saloon_name }}</h3>
                            </a>
                            <p>Located in {{ $saloon->saloon->city }}, {{ $saloon->saloon->state }}, {{ $saloon->saloon->country }}</p>
                            <p>Contact: {{ $saloon->saloon->mobile_number }}</p>

                        </div>
                    </div>
                </div>
                @empty
                <p class="text-center">No saloons available at the moment.</p>
                @endforelse
            </div>
        </div>


        <div class="d-flex justify-content-center mt-4">
            {{ $wishlists->links('pagination::bootstrap-4') }}
        </div>



    </section>


</main>
@endsection