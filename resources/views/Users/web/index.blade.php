@extends('Users.web.layouts.user')

@section('title', 'Radiant Beauty Studio')


@section('content')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
@push('styles')
<style>
  .heart-icon {
    color: white;
    transition: all 0.3s ease;
  }

  .heart-icon.clicked {
    color: #e3342f;
    transform: scale(1.3);
    text-shadow: 0 0 8px rgba(255, 0, 0, 0.8);
  }

  .z-10 {
    z-index: 10;
  }
</style>
@endpush


<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5 pb-5">
  <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
      <li data-target="#header-carousel" data-slide-to="1"></li>
      <li data-target="#header-carousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item position-relative active" style="min-height: 100vh;">
        <img class="position-absolute w-100 h-100" src="{{ asset('user/web/Carousel/carousel-1.jpg')}}" style="object-fit: cover;">
        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
          <div class="p-3" style="max-width: 900px;">
            <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown"
              style="letter-spacing: 3px;">Spa & Beauty Center</h6>
            <h3 class="display-3 text-capitalize text-white mb-3">Massage Treatment</h3>
            <p class="mx-md-5 px-5">Lorem rebum magna dolore amet lorem eirmod magna erat diam stet.
              Sadips duo stet amet amet ndiam elitr ipsum labore diam</p>
            <a class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp"
              href="#appointment">Make Appointment</a>
          </div>
        </div>
      </div>
      <div class="carousel-item position-relative" style="min-height: 100vh;">
        <img class="position-absolute w-100 h-100" src="{{ asset('user/web/Carousel/Carousel.jpg')}}" style="object-fit: cover;">
        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
          <div class="p-3" style="max-width: 900px;">
            <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown"
              style="letter-spacing: 3px;">Spa & Beauty Center</h6>
            <h3 class="display-3 text-capitalize text-white mb-3">Facial Treatment</h3>
            <p class="mx-md-5 px-5">Lorem rebum magna dolore amet lorem eirmod magna erat diam stet.
              Sadips duo stet amet amet ndiam elitr ipsum labore diam</p>
            <a class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp"
              href="#appointment">Make Appointment</a>
          </div>
        </div>
      </div>
      <div class="carousel-item position-relative" style="min-height: 100vh;">
        <img class="position-absolute w-100 h-100" src="{{ asset('user/web/img/carousel-3.jpg')}}" style="object-fit: cover;">
        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
          <div class="p-3" style="max-width: 900px;">
            <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown"
              style="letter-spacing: 3px;">Spa & Beauty Center</h6>
            <h3 class="display-3 text-capitalize text-white mb-3">Cellulite Treatment</h3>
            <p class="mx-md-5 px-5">Lorem rebum magna dolore amet lorem eirmod magna erat diam stet.
              Sadips duo stet amet amet ndiam elitr ipsum labore diam</p>
            <a class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp"
              href="#appointment">Make Appointment</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Carousel End -->


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


<!-- Service Start -->
<div class="container-fluid px-0 py-5 my-5">
  <div class="row mx-0 justify-content-center text-center">
    <div class="col-lg-6">
      <h6 class="d-inline-block bg-light text-primary text-uppercase py-1 px-2">Our Services</h6>
      <h1>Your Secret Place Of Beauty</h1>
    </div>
  </div>
  <div class="owl-carousel service-carousel">
    @foreach($services as $service)
    <div class="service-item position-relative" style="overflow: hidden;">
      <form action="{{ route('wishlist.toggle') }}" method="POST" class="position-absolute top-0 end-0 p-2 z-10">
        @csrf
        <input type="hidden" name="service_id" value="{{ $service->id }}">
        <button type="submit" class="border-0 bg-transparent p-0">
          <i class="fas fa-heart heart-icon {{ in_array($service->id, $userWishList) ? 'clicked' : '' }}"
            style="font-size: 1.5rem; cursor: pointer;"></i>
        </button>
      </form>
      {{-- Image --}}
      @if($service->image != null)
      <img class="img-fluid" src="{{ asset('storage/' . $service->image) }}" alt="Service">
      @else
      <img class="img-fluid" src="{{ asset('user/web/img/service-1.jpg') }}" alt="Service">
      @endif

      <div class="service-text text-center">

        <h4 class="text-white font-weight-medium px-3">{{ $service->name }}</h4>
        <p class="text-white px-3 mb-3">{{ substr($service->description, 0, 25) }}</p>
        <div class="w-100 bg-white text-center p-4">
          <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#orderModal">
            Contact Us
          </button>
        </div>
      </div>
    </div>
    @endforeach

  </div>
</div>

<!-- Modal for "Make Order" -->
<div class="modal fade" id="orderModal" tabindex="-1" aria-labelledby="orderModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="orderModalLabel">Contact Us</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
      </div>
      <div class="modal-body">
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
<div class="row justify-content-center bg-appointment mx-0" id="appointment">
  <div class="col-lg-6 py-5">
    <div class="p-5 my-5" style="background: rgba(33, 30, 28, 0.7);">
      <h1 class="text-white text-center mb-4">Make Appointment</h1>
      <form method="POST" action="{{ route('appointments.store') }}">
        @csrf
        <div class="form-row">
          <div class="col-sm-6 control-group">
            <input type="text" class="form-control border-1 bg-transparent p-4" name="name" id="name" placeholder="Your Name"
              required="required" data-validation-required-message="Please enter your name" />
            <p class="help-block text-danger"></p>
          </div>
          <div class="col-sm-6 control-group">
            <input type="email" name="email" class="form-control border-1 bg-transparent p-4" id="email" placeholder="Your Email"
              required="required" data-validation-required-message="Please enter your email" />
            <p class="help-block text-danger"></p>
          </div>
        </div>
        <div class="control-group">
          <input type="text" name="subject" class="form-control bg-transparent border-1 p-4" id="subject" placeholder="Subject"
            required="required" data-validation-required-message="Please enter a subject" />
          <p class="help-block text-danger"></p>
        </div>
        <div class="form-group">
          <div class="time" id="time" data-target-input="nearest">
            <input type="date" name="appointment_time" class="form-control bg-transparent p-4"
              placeholder="Select Time" />
          </div>
        </div>
        <div class="control-group">
          <div class="form-group">
            <select name="salon" class="custom-select bg-transparent px-4" style="height: 47px;">
              <option selected>Select A Saloon</option>
              @foreach($salons as $salon)
              <option value="{{$salon->id}}">{{$salon->name}} - {{$salon->city}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="form-group">
          <input name="location" type="text" class="form-control bg-transparent border-1 p-4" id="location" placeholder="location"
            required="required" data-validation-required-message="Please enter a location" />
        </div>
        <div class="control-group">
          <textarea name="message" class="form-control border-1 py-3 px-4 bg-transparent" rows="3" id="message" placeholder="Message"
            required="required"
            data-validation-required-message="Please enter your message"></textarea>
          <p class="help-block text-danger"></p>
        </div>
        <div>
          <button class="btn btn-primary py-3 px-4" type="submit">
            Make Appointment
          </button>
      </form>
    </div>
  </div>
</div>

</div>
<!-- Service End -->


<!-- Open Hours Start -->
<div class="container-fluid py-5">
  <div class="container py-5">
    <div class="row">
      <!-- Left Column with Image -->
      <div class="col-lg-6" style="min-height: 500px;">
        <div class="position-relative h-100">
          <img class="position-absolute w-100 h-100" src="{{ asset('user/web/img/opening.jpg')}}" style="object-fit: cover;">
        </div>
      </div>
      <!-- Right Column with Open Hours and Radio Buttons -->
      <div class="col-lg-6 pt-5 pb-lg-5">
        <div class="hours-text bg-light p-4 p-lg-5 my-lg-5">
          <h6 class="d-inline-block text-white text-uppercase bg-primary py-1 px-2">Open Hours</h6>
          <h1 class="mb-4">Relax, Rejuvenate, and Revive</h1>
          <p>Welcome to our premium spa, your haven of tranquility and rejuvenation. Experience the
            ultimate relaxation with our tailored treatments, including soothing massages, refreshing
            facials, and holistic therapies designed to restore your body and mind. Let our expert
            therapists pamper you in a serene environment, leaving you refreshed and renewed. Discover
            the art of self-care today!</p>

          <!-- List of Open Hours with Radio Buttons -->
          <ul class="list-inline">
            <li class="h6 py-1">
              <input type="radio" id="mon-fri" name="schedule" value="Mon – Fri : 9:00 AM - 7:00 PM">
              <label for="mon-fri">Mon – Fri : 9:00 AM - 7:00 PM</label>
            </li>
            <li class="h6 py-1">
              <input type="radio" id="saturday" name="schedule" value="Saturday : 9:00 AM - 6:00 PM">
              <label for="saturday">Saturday : 9:00 AM - 6:00 PM</label>
            </li>
            <li class="h6 py-1">
              <input type="radio" id="sunday" name="schedule" value="Sunday : Closed">
              <label for="sunday">Sunday : Closed</label>
            </li>
          </ul>

          <!-- Date and Time Picker (Hidden Initially) -->
          <div id="date-time-picker" style="display: none;">
            <div class="form-group">
              <label for="booking-date" class="font-weight-bold">Select Booking Date:</label>
              <input type="date" id="booking-date" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="booking-time" class="font-weight-bold">Select Booking Time:</label>
              <input type="time" id="booking-time" class="form-control" required>
            </div>
            <button class="btn btn-primary mt-2" id="confirm-booking">Confirm Booking</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Open Hours End -->


<!-- offers Start -->
<div class="container-fluid bg-pricing" style="margin: 90px 0;">
  <div class="container">
    <div class="row">
      <div class="col-lg-5" style="min-height: 500px;">
        <div class="position-relative h-100">
          <img class="position-absolute w-100 h-100" src="{{ asset('user/web/img/pricing.jpg')}}" style="object-fit: cover;">
        </div>
      </div>
      <div class="col-lg-7 pt-5 pb-lg-5">
        <div class="pricing-text bg-light p-4 p-lg-5 my-lg-5">
          <div class="owl-carousel pricing-carousel">
            <!-- Basic Plan -->
            <div class="bg-white">
              <div
                class="d-flex align-items-center justify-content-between border-bottom border-primary p-4">
                <h1 class="display-4 mb-0">
                  <small class="align-top text-muted font-weight-medium"
                    style="font-size: 22px; line-height: 45px;">$</small>49
                  <small class="align-bottom text-muted font-weight-medium"
                    style="font-size: 16px; line-height: 40px;">/Mo</small>
                </h1>
                <h5 class="text-primary text-uppercase m-0">Basic Plan</h5>
              </div>
              <div class="p-4">
                <p><i class="fa fa-check text-success mr-2"></i>Full Body Massage</p>
                <p><i class="fa fa-check text-success mr-2"></i>Deep Tissue Massage</p>
                <p><i class="fa fa-check text-success mr-2"></i>Hot Stone Massage</p>
                <p><i class="fa fa-check text-success mr-2"></i>Tissue Body Polish</p>
                <p><i class="fa fa-check text-success mr-2"></i>Foot & Nail Care</p>
                <p><i class="fa fa-gift text-warning mr-2"></i>1 Free Coffee Voucher</p>
                <p><i class="fa fa-tags text-info mr-2"></i>10% Off Next Visit</p>
                <a href="" class="btn btn-primary my-2">Order Now</a>
              </div>
            </div>
            <!-- Family Plan -->
            <div class="bg-white">
              <div
                class="d-flex align-items-center justify-content-between border-bottom border-primary p-4">
                <h1 class="display-4 mb-0">
                  <small class="align-top text-muted font-weight-medium"
                    style="font-size: 22px; line-height: 45px;">$</small>99
                  <small class="align-bottom text-muted font-weight-medium"
                    style="font-size: 16px; line-height: 40px;">/Mo</small>
                </h1>
                <h5 class="text-primary text-uppercase m-0">Family Plan</h5>
              </div>
              <div class="p-4">
                <p><i class="fa fa-check text-success mr-2"></i>Full Body Massage</p>
                <p><i class="fa fa-check text-success mr-2"></i>Deep Tissue Massage</p>
                <p><i class="fa fa-check text-success mr-2"></i>Hot Stone Massage</p>
                <p><i class="fa fa-check text-success mr-2"></i>Tissue Body Polish</p>
                <p><i class="fa fa-check text-success mr-2"></i>Foot & Nail Care</p>
                <p><i class="fa fa-gift text-warning mr-2"></i>2 Free Coffee Vouchers</p>
                <p><i class="fa fa-star text-info mr-2"></i>Exclusive Weekly Offer</p>
                <a href="" class="btn btn-primary my-2">Order Now</a>
              </div>
            </div>
            <!-- VIP Plan -->
            <div class="bg-white">
              <div
                class="d-flex align-items-center justify-content-between border-bottom border-primary p-4">
                <h1 class="display-4 mb-0">
                  <small class="align-top text-muted font-weight-medium"
                    style="font-size: 22px; line-height: 45px;">$</small>149
                  <small class="align-bottom text-muted font-weight-medium"
                    style="font-size: 16px; line-height: 40px;">/Mo</small>
                </h1>
                <h5 class="text-primary text-uppercase m-0">VIP Plan</h5>
              </div>
              <div class="p-4">
                <p><i class="fa fa-check text-success mr-2"></i>Full Body Massage</p>
                <p><i class="fa fa-check text-success mr-2"></i>Deep Tissue Massage</p>
                <p><i class="fa fa-check text-success mr-2"></i>Hot Stone Massage</p>
                <p><i class="fa fa-check text-success mr-2"></i>Tissue Body Polish</p>
                <p><i class="fa fa-check text-success mr-2"></i>Foot & Nail Care</p>
                <p><i class="fa fa-gift text-warning mr-2"></i>3 Free Coffee Vouchers</p>
                <p><i class="fa fa-gift text-warning mr-2"></i>Complimentary Spa Session</p>
                <p><i class="fa fa-star text-info mr-2"></i>Exclusive Weekly Offer</p>
                <a href="" class="btn btn-primary my-2">Order Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- offers End -->


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


<!-- Testimonial Start -->
<div class="container-fluid py-5">
  <div class="container py-5">
    <div class="row align-items-center">
      <div class="col-lg-6 pb-5 pb-lg-0">
        <img class="img-fluid w-100" src="{{ asset('user/web/img/testimonial.jpg')}}" alt="">
      </div>
      <div class="col-lg-6">
        <h6 class="d-inline-block text-primary text-uppercase bg-light py-1 px-2">Testimonial</h6>
        <h1 class="mb-4">What Our Clients Say!</h1>
        <div class="owl-carousel testimonial-carousel">
          <div class="position-relative">
            <i class="fa fa-3x fa-quote-right text-primary position-absolute"
              style="top: -6px; right: 0;"></i>
            <div class="d-flex align-items-center mb-3">
              <img class="img-fluid rounded-circle" src="{{ asset('user/web/img/testimonial-1.jpg')}}"
                style="width: 60px; height: 60px;" alt="">
              <div class="ml-3">
                <h6 class="text-uppercase">Client Name</h6>
                <span>Profession</span>
              </div>
            </div>
            <p class="m-0">Aliquyam sed elitr elitr erat sed diam ipsum eirmod eos lorem nonumy. Tempor
              sea ipsum diam sed clita dolore eos dolores magna erat dolore sed stet justo et dolor.
            </p>
          </div>
          <div class="position-relative">
            <i class="fa fa-3x fa-quote-right text-primary position-absolute"
              style="top: -6px; right: 0;"></i>
            <div class="d-flex align-items-center mb-3">
              <img class="img-fluid rounded-circle" src="{{ asset('user/web/img/testimonial-2.jpg')}}"
                style="width: 60px; height: 60px;" alt="">
              <div class="ml-3">
                <h6 class="text-uppercase">Client Name</h6>
                <span>Profession</span>
              </div>
            </div>
            <p class="m-0">Aliquyam sed elitr elitr erat sed diam ipsum eirmod eos lorem nonumy. Tempor
              sea ipsum diam sed clita dolore eos dolores magna erat dolore sed stet justo et dolor.
            </p>
          </div>
          <div class="position-relative">
            <i class="fa fa-3x fa-quote-right text-primary position-absolute"
              style="top: -6px; right: 0;"></i>
            <div class="d-flex align-items-center mb-3">
              <img class="img-fluid rounded-circle" src="{{ asset('user/web/img/testimonial-3.jpg')}}"
                style="width: 60px; height: 60px;" alt="">
              <div class="ml-3">
                <h6 class="text-uppercase">Client Name</h6>
                <span>Profession</span>
              </div>
            </div>
            <p class="m-0">Aliquyam sed elitr elitr erat sed diam ipsum eirmod eos lorem nonumy. Tempor
              sea ipsum diam sed clita dolore eos dolores magna erat dolore sed stet justo et dolor.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Testimonial End -->

@endsection
@push('scripts')
<script>
  document.querySelectorAll('.heart-icon').forEach(icon => {
    icon.addEventListener('click', function() {
      this.classList.toggle('clicked');
    });
  });
</script>
@endpush