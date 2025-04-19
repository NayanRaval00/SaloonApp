@extends('Users.web.layouts.user')

@section('title', 'Radiant Beauty Studio')


@section('content')


<!-- Header Start -->
<div class="jumbotron jumbotron-fluid bg-jumbotron" style="margin-bottom: 90px;">
    <div class="container text-center py-5">
        <h3 class="text-white display-3 mb-4">Contact</h3>

    </div>
</div>
<!-- Header End -->


<!-- Contact Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="img-fluid w-100" src="{{ asset('user/web/img/about.jpg')}}" alt="Luxury Spa and Salon Center">
                </div>
            </div>
            <div class="col-lg-6 pt-5 pb-lg-5">
                <div class="contact-form bg-light p-4 p-lg-5 my-lg-5">
                    <h6 class="d-inline-block text-white text-uppercase bg-primary py-1 px-2">Contact</h6>
                    <h1 class="mb-4">Contact For Any Query</h1>
                    <div id="success"></div>
                    <form action="{{ route('user.contact.store') }}" method="POST" novalidate="novalidate">
                        @csrf
                        <div class="form-row">
                            <div class="col-sm-6 control-group">
                                <input type="text" class="form-control border-0 p-4" id="name" name="name" placeholder="Your Name"
                                    required="required" data-validation-required-message="Please enter your name" />
                                <p class="help-block text-danger">@error('name') {{ $message }} @enderror</p>
                            </div>
                            <div class="col-sm-6 control-group">
                                <input type="email" class="form-control border-0 p-4" id="email" name="email" placeholder="Your Email"
                                    required="required" data-validation-required-message="Please enter your email" />
                                <p class="help-block text-danger">@error('email') {{ $message }} @enderror</p>
                            </div>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control border-0 p-4" id="subject" name="subject" placeholder="Subject"
                                required="required" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger">@error('subject') {{ $message }} @enderror</p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control border-0 py-3 px-4" rows="3" id="message" name="message" placeholder="Message"
                                required="required" data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger">@error('message') {{ $message }} @enderror</p>
                        </div>
                        <div>
                            <button class="btn btn-primary py-3 px-4" type="submit">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->


@endsection