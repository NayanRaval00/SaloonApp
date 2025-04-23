@extends('Users.web.layouts.user')

@section('title', 'Best Saloons Listing')


@section('content')

@push('styles')

<style>
    .wishlist-container {
        position: absolute;
        top: 15px;
        right: 15px;
        z-index: 10;
    }

    .wishlist-btn {
        background: transparent;
        border: none;
        cursor: pointer;
        font-size: 24px;
        color: #ff5a5a;
        transition: all 0.3s ease;
        padding: 5px;
        z-index: 100;
        position: relative;
    }

    .wishlist-btn:hover i {
        transform: scale(1.2);
    }

    .wishlist-btn.active i {
        color: #ff0000;
    }

    /* Animation for heart when clicked */
    @keyframes heartBeat {
        0% {
            transform: scale(1);
        }

        25% {
            transform: scale(1.3);
        }

        50% {
            transform: scale(1);
        }

        75% {
            transform: scale(1.3);
        }

        100% {
            transform: scale(1);
        }
    }

    .wishlist-btn.animating i {
        animation: heartBeat 0.8s ease;
    }

    /* Fix for stretched-link interaction */
    .details .stretched-link::after {
        z-index: 1;
    }
</style>
@endpush

<div class="jumbotron jumbotron-fluid bg-jumbotron" style="margin-bottom: 90px;">
    <div class="container text-center py-5">
        <h3 class="text-white display-3 mb-4">Saloons</h3>

    </div>
</div>
<!-- Header End -->


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
                            @if($saloon->profile_image == null)
                            <img src="{{ asset('user/assets/img/website_photos/service-2.jpg')}}" class="img-fluid" alt="Saloon Image">
                            @else
                            <img src="{{ asset('storage/' . $saloon->profile_image) }}" class="img-fluid" alt="Saloon Image">
                            @endif
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

                            <!-- Wishlist Heart Button -->
                            <div class="wishlist-container">
                                <form action="{{ route('wishlist.store') }}" method="POST" class="wishlist-form">
                                    @csrf
                                    <input type="hidden" name="saloon_id" value="{{ $saloon->id }}">
                                    <button type="submit" class="wishlist-btn {{ in_array($saloon->id, $userWishlist ?? []) ? 'active' : '' }}">
                                        <i class="fa fa-heart{{ in_array($saloon->id, $userWishlist ?? []) ? '-fill' : '' }}"></i>
                                    </button>
                                </form>
                            </div>
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

@push('scripts')

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const wishlistForms = document.querySelectorAll('.wishlist-form');
        button.classList.add('animating');
        button.classList.toggle('active');
    });
</script>
@endpush