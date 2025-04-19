@extends('Users.web.layouts.user')

@section('title', 'Radiant Beauty Studio')


@section('content')

<!-- Header Start -->
<div class="jumbotron jumbotron-fluid bg-jumbotron" style="margin-bottom: 90px;">
    <div class="container text-center py-5">
        <h3 class="text-white display-3 mb-4">Portfolio</h3>
    </div>
</div>
<!-- Header End -->
<p class="text-center">Welcome to our salon! We are dedicated to providing exceptional beauty and spa services. Our experienced team ensures you leave feeling relaxed and beautiful.</p>


<!-- Portfolio Start -->
<div class="container-fluid py-5">
    <div class="container pt-5">
        <div class="row justify-content-center text-center">
            <div class="col-lg-6">
                <h6 class="d-inline-block bg-light text-primary text-uppercase py-1 px-2">Spa Specialist</h6>
                <h1 class="mb-5">Spa & Beauty Specialist</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="team position-relative overflow-hidden mb-5">
                    <img class="img-fluid" src="{{ asset('user/web/img/team-1.jpg')}}" alt="">
                    <div class="position-relative text-center">
                        <div class="team-text bg-primary text-white">
                            <h5 class="text-white text-uppercase">Olivia Mia</h5>
                            <p class="m-0">Our Beauty Expert</p>
                        </div>
                        <div class="team-social bg-dark text-center">
                            <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
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
                            <p class="m-0">Our Beauty Expert</p>
                        </div>
                        <div class="team-social bg-dark text-center">
                            <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
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
                            <p class="m-0">Our Beauty Expert</p>
                        </div>
                        <div class="team-social bg-dark text-center">
                            <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
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
                            <p class="m-0">Our Beauty Expert</p>
                        </div>
                        <div class="team-social bg-dark text-center">
                            <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Gallery Section -->
<div id="gallery" class="container py-5">
    <h2 class="section-title text-center">Gallery</h2>
    <div class="row">
        <div class="col-md-2 mb-4"><img src="{{ asset('user/web/img/img_1.jpg')}}" class="img-fluid" alt="Gallery"></div>
        <div class="col-md-2 mb-4"><img src="{{ asset('user/web/img/img_2.jpg')}}" class="img-fluid" alt="Gallery"></div>
        <div class="col-md-2 mb-4"><img src="{{ asset('user/web/img/img_5.jpg')}}" class="img-fluid" alt="Gallery"></div>
        <div class="col-md-2 mb-4"><img src="{{ asset('user/web/img/person_1.jpg')}}" class="img-fluid" alt="Gallery"></div>
        <div class="col-md-2 mb-4"><img src="{{ asset('user/web/img/img_5.jpg')}}" class="img-fluid" alt="Gallery"></div>
        <div class="col-md-2 mb-4"><img src="{{ asset('user/web/img/person_1.jpg')}}" class="img-fluid" alt="Gallery"></div>
    </div>
</div>

<div id="gallery" class="container py-5">
    <h2 class="section-title text-center">Cutting & Styling</h2>
    <div class="row">
        <div class="col-md-2 mb-4"><img src="{{ asset('user/web/img/img_1.jpg')}}" class="img-fluid" alt="Gallery"></div>
        <div class="col-md-2 mb-4"><img src="{{ asset('user/web/img/img_2.jpg')}}" class="img-fluid" alt="Gallery"></div>
        <div class="col-md-2 mb-4"><img src="{{ asset('user/web/img/img_5.jpg')}}" class="img-fluid" alt="Gallery"></div>
        <div class="col-md-2 mb-4"><img src="{{ asset('user/web/img/person_1.jpg')}}" class="img-fluid" alt="Gallery"></div>
        <div class="col-md-2 mb-4"><img src="{{ asset('user/web/img/img_5.jpg')}}" class="img-fluid" alt="Gallery"></div>
        <div class="col-md-2 mb-4"><img src="{{ asset('user/web/img/person_1.jpg')}}" class="img-fluid" alt="Gallery"></div>
    </div>
</div>

<div id="gallery" class="container py-5">
    <h2 class="section-title text-center">Hair Treatments</h2>
    <div class="row">
        <div class="col-md-2 mb-4"><img src="{{ asset('user/web/img/img_1.jpg')}}" class="img-fluid" alt="Gallery"></div>
        <div class="col-md-2 mb-4"><img src="{{ asset('user/web/img/img_2.jpg')}}" class="img-fluid" alt="Gallery"></div>
        <div class="col-md-2 mb-4"><img src="{{ asset('user/web/img/img_5.jpg')}}" class="img-fluid" alt="Gallery"></div>
        <div class="col-md-2 mb-4"><img src="{{ asset('user/web/img/person_1.jpg')}}" class="img-fluid" alt="Gallery"></div>
        <div class="col-md-2 mb-4"><img src="{{ asset('user/web/img/img_5.jpg')}}" class="img-fluid" alt="Gallery"></div>
        <div class="col-md-2 mb-4"><img src="{{ asset('user/web/img/person_1.jpg')}}" class="img-fluid" alt="Gallery"></div>
    </div>
</div>

<div id="gallery" class="container py-5">
    <h2 class="section-title text-center">Hair Colouring</h2>
    <div class="row">
        <div class="col-md-2 mb-4"><img src="{{ asset('user/web/img/img_1.jpg')}}" class="img-fluid" alt="Gallery"></div>
        <div class="col-md-2 mb-4"><img src="{{ asset('user/web/img/img_2.jpg')}}" class="img-fluid" alt="Gallery"></div>
        <div class="col-md-2 mb-4"><img src="{{ asset('user/web/img/img_5.jpg')}}" class="img-fluid" alt="Gallery"></div>
        <div class="col-md-2 mb-4"><img src="{{ asset('user/web/img/person_1.jpg')}}" class="img-fluid" alt="Gallery"></div>
        <div class="col-md-2 mb-4"><img src="{{ asset('user/web/img/img_5.jpg')}}" class="img-fluid" alt="Gallery"></div>
        <div class="col-md-2 mb-4"><img src="{{ asset('user/web/img/person_1.jpg')}}" class="img-fluid" alt="Gallery"></div>
    </div>
</div>

<div id="gallery" class="container py-5">
    <h2 class="section-title text-center">Body Waxing</h2>
    <div class="row">
        <div class="col-md-2 mb-4"><img src="{{ asset('user/web/img/img_1.jpg')}}" class="img-fluid" alt="Gallery"></div>
        <div class="col-md-2 mb-4"><img src="{{ asset('user/web/img/img_2.jpg')}}" class="img-fluid" alt="Gallery"></div>
        <div class="col-md-2 mb-4"><img src="{{ asset('user/web/img/img_5.jpg')}}" class="img-fluid" alt="Gallery"></div>
        <div class="col-md-2 mb-4"><img src="{{ asset('user/web/img/person_1.jpg')}}" class="img-fluid" alt="Gallery"></div>
        <div class="col-md-2 mb-4"><img src="{{ asset('user/web/img/img_5.jpg')}}" class="img-fluid" alt="Gallery"></div>
        <div class="col-md-2 mb-4"><img src="{{ asset('user/web/img/person_1.jpg')}}" class="img-fluid" alt="Gallery"></div>
    </div>
</div>

<div id="gallery" class="container py-5">
    <h2 class="section-title text-center">Makeup & Eyebrows</h2>
    <div class="row">
        <div class="col-md-2 mb-4"><img src="{{ asset('user/web/img/img_1.jpg')}}" class="img-fluid" alt="Gallery"></div>
        <div class="col-md-2 mb-4"><img src="{{ asset('user/web/img/img_2.jpg')}}" class="img-fluid" alt="Gallery"></div>
        <div class="col-md-2 mb-4"><img src="{{ asset('user/web/img/img_5.jpg')}}" class="img-fluid" alt="Gallery"></div>
        <div class="col-md-2 mb-4"><img src="{{ asset('user/web/img/person_1.jpg')}}" class="img-fluid" alt="Gallery"></div>
        <div class="col-md-2 mb-4"><img src="{{ asset('user/web/img/img_5.jpg')}}" class="img-fluid" alt="Gallery"></div>
        <div class="col-md-2 mb-4"><img src="{{ asset('user/web/img/person_1.jpg')}}" class="img-fluid" alt="Gallery"></div>
    </div>
</div>

<div id="gallery" class="container py-5">
    <h2 class="section-title text-center">Hands & Feet</h2>
    <div class="row">
        <div class="col-md-2 mb-4"><img src="{{ asset('user/web/img/img_1.jpg')}}" class="img-fluid" alt="Gallery"></div>
        <div class="col-md-2 mb-4"><img src="{{ asset('user/web/img/img_2.jpg')}}" class="img-fluid" alt="Gallery"></div>
        <div class="col-md-2 mb-4"><img src="{{ asset('user/web/img/img_5.jpg')}}" class="img-fluid" alt="Gallery"></div>
        <div class="col-md-2 mb-4"><img src="{{ asset('user/web/img/person_1.jpg')}}" class="img-fluid" alt="Gallery"></div>
        <div class="col-md-2 mb-4"><img src="{{ asset('user/web/img/img_5.jpg')}}" class="img-fluid" alt="Gallery"></div>
        <div class="col-md-2 mb-4"><img src="{{ asset('user/web/img/person_1.jpg')}}" class="img-fluid" alt="Gallery"></div>
    </div>
</div>


@endsection