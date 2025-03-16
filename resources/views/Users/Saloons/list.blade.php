@extends('Users.layouts.user')

@section('title', 'Best Saloons Listing')


@section('content')

<main class="main">
    <!-- Services Section -->
    <section id="services" class="services section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Saloons</h2>
            <p>Best Saloons List<br></p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-5">
                @forelse ($saloons as $saloon)
                <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                    <div class="service-item">
                        <div class="img">
                            <img src="{{ asset('user/assets/img/website_photos/service-2.jpg')}}" class="img-fluid" alt="Saloon Image">
                        </div>
                        <div class="details position-relative">
                            <div class="icon">
                                <i class="bi bi-scissors"></i>
                            </div>
                            <a href="{{route('users.service.list',$saloon->id)}}" class="stretched-link">
                                <h3>{{ $saloon->saloon_name }}</h3>
                            </a>
                            <p>Located in {{ $saloon->city }}, {{ $saloon->state }}, {{ $saloon->country }}</p>
                            <p>Contact: {{ $saloon->mobile_number }}</p>
                        </div>
                    </div>
                </div>
                @empty
                <p class="text-center">No saloons available at the moment.</p>
                @endforelse
            </div>
        </div>

        <div class="d-flex justify-content-center mt-4">
            {{ $saloons->links('pagination::bootstrap-4') }}
        </div>



    </section>


</main>
@endsection