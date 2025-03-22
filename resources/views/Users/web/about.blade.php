@extends('Users.web.layouts.user')

@section('title', 'SPA Center - Beauty & Spa')


@section('content')

<!-- Header Start -->
<div class="jumbotron jumbotron-fluid bg-jumbotron" style="margin-bottom: 90px;">
    <div class="container text-center py-5">
        <h3 class="text-white display-3 mb-4">About</h3>
        <div class="d-inline-flex align-items-center text-white">
            <p class="m-0"><a class="text-white" href="">Home</a></p>
            <i class="far fa-circle px-3"></i>
            <p class="m-0">About</p>
        </div>
    </div>
</div>
<!-- Header End -->


<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6 pb-5 pb-lg-0">
                <img class="img-fluid w-100" src="{{ asset('user/web/Carousel/about.jpg')}}" alt="Luxury Spa and Salon Center">
            </div>
            <div class="col-lg-6">
                <h6 class="d-inline-block text-primary text-uppercase bg-light py-1 px-2">About Us</h6>
                <h1 class="mb-4">Where Beauty Meets Wellness – Your Ultimate Spa & Salon Experience</h1>
                <p class="pl-4 border-left border-primary">
                    At Serenity Spa & Salon, we are dedicated to enhancing your beauty and well-being. Our luxurious
                    spa treatments
                    combined with professional salon services are designed to provide a complete pampering
                    experience. Whether you're
                    here for a relaxing massage, rejuvenating facial, or a stunning makeover, our expert team
                    ensures that you leave feeling
                    refreshed, beautiful, and confident.
                </p>
                <div class="row pt-3">
                    <div class="col-6">
                        <div class="bg-light text-center p-4">
                            <i class="fas fa-user fa-lg mr-2 text-primary"></i>
                            <h3 class="display-4 text-primary" data-toggle="counter-up">60</h3>
                            <h6 class="text-uppercase">Certified Stylists</h6>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="bg-light text-center p-4">
                            <i class="fas fa-smile fa-lg mr-2 text-primary"></i>
                            <h3 class="display-4 text-primary" data-toggle="counter-up">1000</h3>
                            <h6 class="text-uppercase">Happy CLients</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- About End -->



<!-- Team Start -->
<div class="container-fluid py-5">
    <div class="container pt-5">
        <div class="row justify-content-center text-center">
            <div class="col-lg-6">
                <h6 class="d-inline-block bg-light text-primary text-uppercase py-1 px-2">Spa Specialist</h6>
                <h1 class="mb-5">Beauty Specialist</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="team position-relative overflow-hidden mb-5">
                    <img class="img-fluid" src="{{ asset('user/web/img/team-1.jpg')}}" alt="">
                    <div class="position-relative text-center">
                        <div class="team-text bg-primary text-white">
                            <h5 class="text-white text-uppercase">Olivia Mia</h5>
                            <p class="m-0">Spa & Beauty Expert</p>
                        </div>
                        <div class="team-social bg-dark text-center">
                            <a class="btn btn-outline-primary btn-square mr-2" href="#"><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-primary btn-square mr-2" href="#"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-primary btn-square mr-2" href="#"><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-primary btn-square" href="#"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team position-relative overflow-hidden mb-5">
                    <img class="img-fluid" src="{{ asset('user/web/img/team-2.jpg')}}" alt="">
                    <div class="position-relative text-center">
                        <div class="team-text bg-primary text-white">
                            <h5 class="text-white text-uppercase">Cory Brown</h5>
                            <p class="m-0">Spa & Beauty Expert</p>
                        </div>
                        <div class="team-social bg-dark text-center">
                            <a class="btn btn-outline-primary btn-square mr-2" href="#"><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-primary btn-square mr-2" href="#"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-primary btn-square mr-2" href="#"><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-primary btn-square" href="#"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team position-relative overflow-hidden mb-5">
                    <img class="img-fluid" src="{{ asset('user/web/img/team-3.jpg')}}" alt="">
                    <div class="position-relative text-center">
                        <div class="team-text bg-primary text-white">
                            <h5 class="text-white text-uppercase">Elizabeth Ross</h5>
                            <p class="m-0">Spa & Beauty Expert</p>
                        </div>
                        <div class="team-social bg-dark text-center">
                            <a class="btn btn-outline-primary btn-square mr-2" href="#"><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-primary btn-square mr-2" href="#"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-primary btn-square mr-2" href="#"><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-primary btn-square" href="#"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team position-relative overflow-hidden mb-5">
                    <img class="img-fluid" src="{{ asset('user/web/img/team-4.jpg')}}" alt="">
                    <div class="position-relative text-center">
                        <div class="team-text bg-primary text-white">
                            <h5 class="text-white text-uppercase">Kelly Walke</h5>
                            <p class="m-0">Spa & Beauty Expert</p>
                        </div>
                        <div class="team-social bg-dark text-center">
                            <a class="btn btn-outline-primary btn-square mr-2" href="#"><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-primary btn-square mr-2" href="#"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-primary btn-square mr-2" href="#"><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-primary btn-square" href="#"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->



@endsection