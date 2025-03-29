@extends('Users.web.layouts.user')

@section('title', 'SPA Center - Beauty & Spa')


@section('content')


<!-- Header Start -->
<div class="jumbotron jumbotron-fluid bg-jumbotron" style="margin-bottom: 90px;">
    <div class="container text-center py-5">
        <h3 class="text-white display-3 mb-4">Blogs</h3>

    </div>
</div>
<!-- Header End -->

<!-- Blogs Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row">
            <!-- Sidebar Start -->
            <div class="col-lg-4 mt-5 mt-lg-0">
                <!-- Search Form -->
                <div class="mb-5">
                    <div class="input-group shadow-sm">
                        <input type="text" class="form-control form-control-lg" placeholder="Search">
                        <div class="input-group-append">
                            <button class="btn btn-primary"><i class="fa fa-search text-white"></i></button>
                        </div>
                    </div>
                </div>
                <!-- Category List -->
                <div class="mb-5 bg-light p-4 shadow-sm">
                    <h4 class="text-uppercase mb-4">Categories</h4>
                    <a class="text-dark d-block mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Spa Treatments</a>
                    <a class="text-dark d-block mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Massage Therapy</a>
                    <a class="text-dark d-block mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Facial Care</a>
                    <a class="text-dark d-block mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Skin Treatment</a>
                    <a class="text-dark d-block" href="#"><i class="fa fa-angle-right mr-2"></i>Body Treatment</a>
                </div>
            </div>
            <!-- Sidebar End -->
            <!-- Blog List Start -->
            <div class="col-lg-8">
                <!-- Blog Item -->
                <div class="row pb-5">
                    <div class="col-md-6 mb-4">
                        <div class="card border-0 shadow-sm mb-4">
                            <img class="card-img-top" src="{{ asset('user/web/img/massage-6-390x344.jpg')}}" alt="Spa Benefits">
                            <div class="card-body bg-light p-4">
                                <h4 class="card-title text-truncate">The Benefits of Regular Spa Treatments</h4>
                                <div class="d-flex mb-3 text-muted">
                                    <small class="mr-2"><i class="fa fa-user"></i> Admin</small>
                                    <small class="mr-2"><i class="fa fa-folder"></i> Spa</small>
                                    <small><i class="fa fa-comments"></i> 15</small>
                                </div>
                                <p>Discover how regular spa treatments can improve your physical and mental well-being...</p>
                                <a class="font-weight-bold btn btn-primary btn-sm" href="">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card border-0 shadow-sm mb-4">
                            <img class="card-img-top" src="{{ asset('user/web/img/single-massage-740x480.jpg')}}" alt="Essential Oils">
                            <div class="card-body bg-light p-4">
                                <h4 class="card-title text-truncate">Essential Oils for Relaxation</h4>
                                <div class="d-flex mb-3 text-muted">
                                    <small class="mr-2"><i class="fa fa-user"></i> Admin</small>
                                    <small class="mr-2"><i class="fa fa-folder"></i> Wellness</small>
                                    <small><i class="fa fa-comments"></i> 12</small>
                                </div>
                                <p>Learn about the best essential oils for relaxation and stress relief...</p>
                                <a class="font-weight-bold btn btn-primary btn-sm" href="">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pagination -->
                <div class="row">
                    <div class="col-12">
                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-center mb-0">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Blog List End -->


        </div>
    </div>
</div>

<!-- Blogs End -->


@endsection