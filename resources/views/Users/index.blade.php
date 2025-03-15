@extends('Users.layouts.user')

@section('title', 'Barber Users')


@section('content')

<main class="main">

  <!-- Hero Section -->
  <section id="hero" class="hero section dark-background">

    <img src="{{ asset('user/assets/img/hero-bg.jpg')}}" alt="" data-aos="fade-in">

    <div class="container d-flex flex-column align-items-center">
      <h2 data-aos="fade-up" data-aos-delay="100">RELAX. REVIVE. RADIATE.</h2>
      <p data-aos="fade-up" data-aos-delay="200">We are a team of beauty experts dedicated to enhancing your natural
        glow.</p>
      <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
        <a href="#about" class="btn-get-started">Get Started</a>
        <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8"
          class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch
            Video</span></a>
      </div>
    </div>

  </section><!-- /Hero Section -->

  <!-- About Section -->
  <section id="about" class="about section">

    <div class="container">

      <div class="row gy-4">
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <h3>Enhance Your Natural Beauty with Our Luxurious Salon Services</h3>
          <img src="{{ asset('user/assets/img/about.jpg')}}" class="img-fluid rounded-4 mb-4" alt="">
          <p>Pamper yourself with our top-notch beauty treatments. From rejuvenating facials to expert hairstyling, we
            bring out the best in you with personalized care and premium products.</p>
          <p>Step into a world of relaxation and elegance. Our skilled professionals ensure a soothing experience,
            offering everything from skin therapy to nail art. Let us help you shine with confidence and grace.</p>
        </div>
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
          <div class="content ps-0 ps-lg-5">
            <p class="fst-italic">
              Indulge in a moment of self-care and experience the ultimate beauty transformation at our salon.
            </p>
            <ul>
              <li><i class="bi bi-check-circle-fill"></i> <span>Expert stylists to craft the perfect look for any
                  occasion.</span></li>
              <li><i class="bi bi-check-circle-fill"></i> <span>Relaxing spa treatments designed to refresh and
                  rejuvenate.</span></li>
              <li><i class="bi bi-check-circle-fill"></i> <span>Premium beauty products and techniques for lasting
                  elegance and confidence.</span></li>
            </ul>
            <p>
              Enjoy a tranquil retreat from your busy life. Whether it's a fresh haircut, a glowing facial, or a
              luxurious manicure, our salon is dedicated to making you feel and look your best.
            </p>

            <div class="position-relative mt-4">
              <img src="{{ asset('user/assets/img/about-2.jpg')}}" class="img-fluid rounded-4" alt="">
              <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section><!-- /About Section -->

  <!-- Stats Section -->
  <section id="stats" class="stats section light-background">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row gy-4">
        <div class="col-lg-3 col-md-6">
          <div class="stats-item d-flex align-items-center w-100 h-100">
            <i class="bi bi-emoji-smile color-blue flex-shrink-0"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="500" data-purecounter-duration="1"
                class="purecounter"></span>
              <p>Happy Clients</p>
            </div>
          </div>
        </div><!-- End Stats Item -->
        <div class="col-lg-3 col-md-6">
          <div class="stats-item d-flex align-items-center w-100 h-100">
            <i class="bi bi-scissors color-orange flex-shrink-0"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="1200" data-purecounter-duration="1"
                class="purecounter"></span>
              <p>Beauty Treatments Completed</p>
            </div>
          </div>
        </div><!-- End Stats Item -->
        <div class="col-lg-3 col-md-6">
          <div class="stats-item d-flex align-items-center w-100 h-100">
            <i class="bi bi-heart color-green flex-shrink-0"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="8000" data-purecounter-duration="1"
                class="purecounter"></span>
              <p>Relaxing Hours Provided</p>
            </div>
          </div>
        </div><!-- End Stats Item -->
        <div class="col-lg-3 col-md-6">
          <div class="stats-item d-flex align-items-center w-100 h-100">
            <i class="bi bi-people color-pink flex-shrink-0"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="25" data-purecounter-duration="1"
                class="purecounter"></span>
              <p>Professional Stylists</p>
            </div>
          </div>
        </div><!-- End Stats Item -->
      </div>
    </div>
  </section>

  <!-- /Stats Section -->

  <!-- Services Section -->
  <section id="services" class="services section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Services</h2>
      <p>Best Offers of the Week<br></p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-5">

        <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
          <div class="service-item">
            <div class="img">
              <img src="{{ asset('user/assets/img/website_photos/service-2.jpg')}}" class="img-fluid" alt="">
            </div>
            <div class="details position-relative">
              <div class="icon">
                <i class="bi bi-stars"></i>
              </div>
              <a href="service-details.html" class="stretched-link">
                <h3>Glow & Glam Package</h3>
              </a>
              <p>Enjoy a rejuvenating facial, eyebrow shaping, and a deluxe manicure at a special discounted price.
              </p>
            </div>
          </div>
        </div><!-- End Service Item -->

        <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
          <div class="service-item">
            <div class="img">
              <img src="./assets/img/website_photos/service-2.jpg" class="img-fluid" alt="">
            </div>
            <div class="details position-relative">
              <div class="icon">
                <i class="bi bi-scissors"></i>
              </div>
              <a href="service-details.html" class="stretched-link">
                <h3>Hair Revival Deal</h3>
              </a>
              <p>Book a haircut and get a deep-conditioning hair spa treatment for free!</p>
            </div>
          </div>
        </div><!-- End Service Item -->

        <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
          <div class="service-item">
            <div class="img">
              <img src="./assets/img/website_photos/service-2.jpg" class="img-fluid" alt="">
            </div>
            <div class="details position-relative">
              <div class="icon">
                <i class="bi bi-gem"></i>
              </div>
              <a href="service-details.html" class="stretched-link">
                <h3>Luxury Pamper Session</h3>
              </a>
              <p>Indulge in a full-body massage, hydrating facial, and spa pedicure at an exclusive discounted price.
              </p>
            </div>
          </div>
        </div><!-- End Service Item -->

      </div>

    </div>

  </section>

  <!-- /Services Section -->

  <!-- Clients Section -->
  <section id="clients" class="clients section light-background">
    <div class="container text-center" data-aos="fade-up">
      <h3 class="mb-3">Trusted by Many</h3>
      <p class="fst-italic">
        Our salon has been the go-to choice for countless clients seeking expert beauty and wellness services.
      </p>
    </div>
  </section>

  <!-- /Clients Section -->

  <!-- Features Section -->
  <section id="features" class="features section">
    <div class="container">
      <ul class="nav nav-tabs row d-flex" data-aos="fade-up" data-aos-delay="100">
        <li class="nav-item col-3">
          <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
            <i class="bi bi-scissors"></i>
            <h4 class="d-none d-lg-block">Luxury Hair Styling</h4>
          </a>
        </li>
        <li class="nav-item col-3">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
            <i class="bi bi-brush"></i>
            <h4 class="d-none d-lg-block">Professional Makeup</h4>
          </a>
        </li>
        <li class="nav-item col-3">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
            <i class="bi bi-droplet"></i>
            <h4 class="d-none d-lg-block">Skincare Treatments</h4>
          </a>
        </li>
        <li class="nav-item col-3">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-4">
            <i class="bi bi-handbag"></i>
            <h4 class="d-none d-lg-block">Nail Extensions & Art</h4>
          </a>
        </li>
      </ul>

      <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

        <!-- Hair Styling -->
        <div class="tab-pane fade active show" id="features-tab-1">
          <div class="row">
            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
              <h3>Transform Your Look with Expert Hair Styling</h3>
              <p class="fst-italic">
                Experience the ultimate hair transformation with our professional stylists.
              </p>
              <ul>
                <li><i class="bi bi-check2-all"></i> Trendy haircuts tailored to your face shape and personality.</li>
                <li><i class="bi bi-check2-all"></i> Stunning hair coloring, balayage, and ombre effects.</li>
                <li><i class="bi bi-check2-all"></i> Specialized treatments including keratin smoothing and deep
                  conditioning.</li>
                <li><i class="bi bi-check2-all"></i> Hair extensions for added volume and length.</li>
              </ul>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 text-center">
              <img src="./assets/img/website_photos/Hair-11.jpg" alt="Luxury Hair Styling" class="img-fluid">
            </div>
          </div>
        </div>

        <!-- Makeup -->
        <div class="tab-pane fade" id="features-tab-2">
          <div class="row">
            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
              <h3>Flawless Makeup for Every Occasion</h3>
              <p class="fst-italic">
                Enhance your natural beauty with our professional makeup services.
              </p>
              <ul>
                <li><i class="bi bi-check2-all"></i> Bridal and party makeup for a glamorous look.</li>
                <li><i class="bi bi-check2-all"></i> High-definition (HD) and airbrush makeup for a flawless finish.
                </li>
                <li><i class="bi bi-check2-all"></i> Customized eye makeup, from natural to bold smokey eyes.</li>
                <li><i class="bi bi-check2-all"></i> Special occasion and everyday makeup consultations.</li>
              </ul>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 text-center">
              <img src="./assets/img/website_photos/opening.jpg" alt="Professional Makeup" class="img-fluid">
            </div>
          </div>
        </div>

        <!-- Skincare -->
        <div class="tab-pane fade" id="features-tab-3">
          <div class="row">
            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
              <h3>Rejuvenating Skincare Treatments</h3>
              <p class="fst-italic">
                Pamper your skin with our customized treatments designed for all skin types.
              </p>
              <ul>
                <li><i class="bi bi-check2-all"></i> Hydrating and anti-aging facials to restore youthfulness.</li>
                <li><i class="bi bi-check2-all"></i> Deep-cleansing and exfoliating treatments for acne-prone skin.
                </li>
                <li><i class="bi bi-check2-all"></i> Organic skincare treatments with natural ingredients.</li>
                <li><i class="bi bi-check2-all"></i> Chemical peels and microdermabrasion for skin renewal.</li>
              </ul>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 text-center">
              <img src="./assets/img/website_photos/skin7.jpg" alt="Skincare Treatments" class="img-fluid">
            </div>
          </div>
        </div>

        <!-- Nail Extensions & Art -->
        <div class="tab-pane fade" id="features-tab-4">
          <div class="row">
            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
              <h3>Stylish Nail Extensions & Creative Art</h3>
              <p class="fst-italic">
                Get stunning nails with our wide range of extension and nail art services.
              </p>
              <ul>
                <li><i class="bi bi-check2-all"></i> Acrylic and gel nail extensions for added length and durability.
                </li>
                <li><i class="bi bi-check2-all"></i> Custom nail art, from classic French tips to intricate designs.
                </li>
                <li><i class="bi bi-check2-all"></i> Manicures and pedicures with high-quality polishes.</li>
                <li><i class="bi bi-check2-all"></i> Nail strengthening treatments for healthier nails.</li>
              </ul>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 text-center">
              <img src="./assets/img/website_photos/Nail-10.jpg" alt="Nail Extensions & Art" class="img-fluid">
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- /Features Section -->

  <!-- Services 2 Section -->
  <section id="services-2" class="services-2 section light-background">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Our Services</h2>
      <p>Indulge in Luxury Beauty & Wellness</p>
    </div><!-- End Section Title -->

    <div class="container">
      <div class="row gy-4">

        <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="service-item d-flex position-relative h-100">
            <i class="bi bi-scissors icon flex-shrink-0"></i>
            <div>
              <h4 class="title">Hair Styling & Treatments</h4>
              <p class="description">
                From precision haircuts to nourishing treatments, we ensure your hair looks and feels its best.
              </p>
            </div>
          </div>
        </div><!-- End Service Item -->

        <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="service-item d-flex position-relative h-100">
            <i class="bi bi-brush icon flex-shrink-0"></i>
            <div>
              <h4 class="title">Professional Makeup</h4>
              <p class="description">
                Whether it's for a wedding, party, or everyday glam, our expert makeup artists enhance your beauty.
              </p>
            </div>
          </div>
        </div><!-- End Service Item -->

        <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="service-item d-flex position-relative h-100">
            <i class="bi bi-droplet icon flex-shrink-0"></i>
            <div>
              <h4 class="title">Skincare & Facials</h4>
              <p class="description">
                Deep cleansing, anti-aging facials, and skin treatments for a radiant and youthful glow.
              </p>
            </div>
          </div>
        </div><!-- End Service Item -->

        <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="service-item d-flex position-relative h-100">
            <i class="bi bi-heart icon flex-shrink-0"></i>
            <div>
              <h4 class="title">Massage & Spa</h4>
              <p class="description">
                Unwind with relaxing massages, aromatherapy, and rejuvenating spa treatments.
              </p>
            </div>
          </div>
        </div><!-- End Service Item -->

        <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
          <div class="service-item d-flex position-relative h-100">
            <i class="bi bi-flower1 icon flex-shrink-0"></i>
            <div>
              <h4 class="title">Nail Art & Extensions</h4>
              <p class="description">
                Stylish nail art, gel extensions, and premium manicures & pedicures for a flawless finish.
              </p>
            </div>
          </div>
        </div><!-- End Service Item -->

        <div class="col-md-6" data-aos="fade-up" data-aos-delay="600">
          <div class="service-item d-flex position-relative h-100">
            <i class="bi bi-body-text icon flex-shrink-0"></i>
            <div>
              <h4 class="title">Waxing & Threading</h4>
              <p class="description">
                Smooth and precise waxing, eyebrow threading, and body hair removal services.
              </p>
            </div>
          </div>
        </div><!-- End Service Item -->

      </div>
    </div>

  </section>

  <!-- /Services 2 Section -->

  <!-- Testimonials Section -->
  <section id="testimonials" class="testimonials section dark-background">

    <img src="assets/img/testimonials-bg.jpg" class="testimonials-bg" alt="">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="swiper init-swiper">
        <script type="application/json" class="swiper-config">
          {
            "loop": true,
            "speed": 600,
            "autoplay": {
              "delay": 5000
            },
            "slidesPerView": "auto",
            "pagination": {
              "el": ".swiper-pagination",
              "type": "bullets",
              "clickable": true
            }
          }
        </script>
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
              <h3>Aryan Mehta</h3>
              <h4>Salon Owner</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                  class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>The best salon experience I've had! The team is highly professional, and their services are
                  top-notch. My go-to place for all beauty needs!</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
              <h3>Priya Sharma</h3>
              <h4>Makeup Artist</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                  class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>Their skincare treatments have completely transformed my skin! The facial therapy left me
                  feeling refreshed and glowing.</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
              <h3>Rohit Verma</h3>
              <h4>Corporate Professional</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                  class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>Excellent hair styling services! The staff is very friendly, and they know exactly what works
                  best for you.</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
              <h3>Sneha Iyer</h3>
              <h4>Event Planner</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                  class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>Absolutely love their bridal makeup! They made my special day even more magical. Highly
                  recommend their services.</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
              <h3>Vikram Patel</h3>
              <h4>Entrepreneur</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                  class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>The best grooming services in town! Their beard styling and hair spa treatments are simply
                  amazing.</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>

  </section>

  <!-- /Testimonials Section -->

  <!-- Portfolio Section -->
  <section id="portfolio" class="portfolio section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Our Work</h2>
      <p>CHECK OUR BEAUTY TRANSFORMATIONS</p>
    </div><!-- End Section Title -->

    <div class="container">
      <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

        <!-- Portfolio Filters -->
        <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-hair">Hair Styling</li>
          <li data-filter=".filter-makeup">Makeup</li>
          <li data-filter=".filter-skincare">Skincare</li>
          <li data-filter=".filter-nailart">Nail Art</li>
          <li data-filter=".filter-bridal">Bridal Looks</li>
        </ul><!-- End Portfolio Filters -->

        <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

          <!-- Hair Styling -->
          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-hair">
            <div class="portfolio-content h-100">
              <img src="./assets/img/website_photos/Hair-3.jpg" class="portfolio-img" alt="Elegant Curls">
              <div class="portfolio-info">
                <h4>Elegant Curls</h4>
                <p>Beautiful, voluminous curls for any occasion.</p>
                <a href="./assets/img/website_photos/Hair-3.jpg" title="Elegant Curls"
                  data-gallery="portfolio-gallery-hair" class="glightbox preview-link">
                  <i class="bi bi-zoom-in"></i>
                </a>
                <a href="portfolio-details.html" title="More Details" class="details-link">
                  <i class="bi bi-link-45deg"></i>
                </a>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <!-- Makeup -->
          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-makeup">
            <div class="portfolio-content h-100">
              <img src="./assets/img/website_photos/opening.jpg" class="portfolio-img" alt="Glam Makeup">
              <div class="portfolio-info">
                <h4>Glam Makeup</h4>
                <p>Perfect blend of shimmer and elegance.</p>
                <a href="./assets/img/website_photos/opening.jpg" title="Glam Makeup"
                  data-gallery="portfolio-gallery-makeup" class="glightbox preview-link">
                  <i class="bi bi-zoom-in"></i>
                </a>
                <a href="portfolio-details.html" title="More Details" class="details-link">
                  <i class="bi bi-link-45deg"></i>
                </a>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <!-- Skincare -->
          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-skincare">
            <div class="portfolio-content h-100">
              <img src="./assets/img/website_photos/skin1.jpg" class="portfolio-img" alt="Luxury Facial">
              <div class="portfolio-info">
                <h4>Luxury Facial</h4>
                <p>Deep hydration for glowing skin.</p>
                <a href="./assets/img/website_photos/skin1.jpg" title="Luxury Facial"
                  data-gallery="portfolio-gallery-skincare" class="glightbox preview-link">
                  <i class="bi bi-zoom-in"></i>
                </a>
                <a href="portfolio-details.html" title="More Details" class="details-link">
                  <i class="bi bi-link-45deg"></i>
                </a>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <!-- Nail Art -->
          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-nailart">
            <div class="portfolio-content h-100">
              <img src="./assets/img/website_photos/Nail-09.jpg" class="portfolio-img" alt="Floral Nail Art">
              <div class="portfolio-info">
                <h4>Floral Nail Art</h4>
                <p>Intricate floral designs for a stylish touch.</p>
                <a href="./assets/img/website_photos/Nail-09.jpg" title="Floral Nail Art"
                  data-gallery="portfolio-gallery-nailart" class="glightbox preview-link">
                  <i class="bi bi-zoom-in"></i>
                </a>
                <a href="portfolio-details.html" title="More Details" class="details-link">
                  <i class="bi bi-link-45deg"></i>
                </a>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <!-- Bridal Looks -->
          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-bridal">
            <div class="portfolio-content h-100">
              <img src="./assets/img/website_photos/bridal_makeup.jpeg" class="portfolio-img" alt="Royal Bridal Look">
              <div class="portfolio-info">
                <h4>Royal Bridal Look</h4>
                <p>Exquisite makeup and styling for the perfect bride.</p>
                <a href="./assets/img/website_photos/bridal_makeup.jpeg" title="Royal Bridal Look"
                  data-gallery="portfolio-gallery-bridal" class="glightbox preview-link">
                  <i class="bi bi-zoom-in"></i>
                </a>
                <a href="portfolio-details.html" title="More Details" class="details-link">
                  <i class="bi bi-link-45deg"></i>
                </a>
              </div>
            </div>
          </div><!-- End Portfolio Item -->
          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-grooming">
            <div class="portfolio-content h-100">
              <img src="./assets/img/team/team-1.jpg" class="portfolio-img" alt="Men's Grooming">
              <div class="portfolio-info">
                <h4>Men's Grooming</h4>
                <p>Professional haircuts, beard trims, and skincare for men.</p>
                <a href="./assets/img/team/team-1.jpg" title="Men's Grooming"
                  data-gallery="portfolio-gallery-grooming" class="glightbox preview-link">
                  <i class="bi bi-zoom-in"></i>
                </a>
                <a href="portfolio-details.html" title="More Details" class="details-link">
                  <i class="bi bi-link-45deg"></i>
                </a>
              </div>
            </div>
          </div>
        </div><!-- End Portfolio Container -->
      </div>
    </div>
  </section>


  <!-- /Portfolio Section -->

  <!-- Team Section -->
  <section id="team" class="team section light-background">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Team</h2>
      <p>MEET OUR EXPERTS</p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row gy-5">

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="member">
            <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Amit Sharma</h4>
              <span>Founder & Chief Stylist</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter-x"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div><!-- End Team Member -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="member">
            <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Priya Kapoor</h4>
              <span>Senior Makeup Artist</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter-x"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div><!-- End Team Member -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="member">
            <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Raj Malhotra</h4>
              <span>Hair & Skincare Specialist</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter-x"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div><!-- End Team Member -->

      </div>

    </div>

  </section>

  <!-- /Team Section -->

  <!-- Contact Section -->
  <section id="contact" class="contact section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Get in Touch</h2>
      <p>Have questions or want to book an appointment? Reach out to us!</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">
        <div class="col-lg-6">
          <div class="row gy-4">

            <div class="col-lg-12">
              <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up"
                data-aos-delay="200">
                <i class="bi bi-geo-alt"></i>
                <h3>Our Salon</h3>
                <p>123 Glam Street, Los Angeles, CA 90001</p>
              </div>
            </div><!-- End Info Item -->

            <div class="col-md-6">
              <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up"
                data-aos-delay="300">
                <i class="bi bi-telephone"></i>
                <h3>Call Us</h3>
                <p>+1 800 123 4567</p>
              </div>
            </div><!-- End Info Item -->

            <div class="col-md-6">
              <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up"
                data-aos-delay="400">
                <i class="bi bi-envelope"></i>
                <h3>Email Us</h3>
                <p>appointments@glamsalon.com</p>
              </div>
            </div><!-- End Info Item -->

          </div>
        </div>

        <div class="col-lg-6">
          <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
            data-aos-delay="500">
            <div class="row gy-4">

              <div class="col-md-6">
                <input type="text" name="name" class="form-control" placeholder="Your Full Name" required="">
              </div>

              <div class="col-md-6">
                <input type="email" class="form-control" name="email" placeholder="Your Email Address">
              </div>

              <div class="col-md-6">
                <input type="text" name="phone" class="form-control" placeholder="Your Phone Number" required="">
              </div>

              <div class="col-md-6">
                <input type="text" name="location" class="form-control" placeholder="Your Location">
              </div>

              <div class="col-md-12">
                <select name="service" class="form-control" required="">
                  <option value="" disabled selected>Select a Service</option>
                  <option value="hair-styling">Hair Styling</option>
                  <option value="makeup">Makeup</option>
                  <option value="skincare">Skincare</option>
                  <option value="nail-art">Nail Art</option>
                  <option value="bridal-makeup">Bridal Makeup</option>
                  <option value="mens-grooming">Men's Grooming</option>
                  <option value="other">Other</option>
                </select>
              </div>

              <div class="col-md-12">
                <textarea class="form-control" name="message" rows="4"
                  placeholder="Tell us how we can help you!"></textarea>
              </div>

              <div class="col-md-12 text-center">
                <div class="loading">Processing...</div>
                <div class="error-message"></div>
                <div class="sent-message">Thank you! We'll get back to you shortly.</div>

                <button type="submit">Submit Enquiry</button>
              </div>

            </div>
          </form>
        </div><!-- End Contact Form -->

      </div>

    </div>

  </section>
  <!-- /Contact Section -->
  <!-- -----popup for contact------ -->
  <div id="popup" class="popup-overlay">
    <div class="popup-content">
      <div class="popup-header">
        <h2>Get in Touch</h2>
        <p>We'd love to hear from you! Fill out the form below and we'll get back to you as soon as possible.</p>
        <span class="close-btn">&times;</span>
      </div>
      <form id="contact-form">
        <div class="row gy-4">
          <div class="col-md-6">
            <input type="text" name="name" class="form-control" placeholder="Your Full Name" required>
          </div>
          <div class="col-md-6">
            <input type="email" class="form-control" name="email" placeholder="Your Email Address">
          </div>
          <div class="col-md-6">
            <input type="text" name="phone" class="form-control" placeholder="Your Phone Number" required>
          </div>
          <div class="col-md-6">
            <input type="text" name="location" class="form-control" placeholder="Your Location">
          </div>
          <div class="col-md-12">
            <select name="service" class="form-control" required>
              <option value="" disabled selected>Select a Service</option>
              <option value="hair-styling">Hair Styling</option>
              <option value="makeup">Makeup</option>
              <option value="skincare">Skincare</option>
              <option value="nail-art">Nail Art</option>
              <option value="bridal-makeup">Bridal Makeup</option>
              <option value="mens-grooming">Men's Grooming</option>
              <option value="other">Other</option>
            </select>
          </div>
          <div class="col-md-12">
            <textarea class="form-control" name="message" rows="4"
              placeholder="Tell us how we can help you!"></textarea>
          </div>
          <div class="col-md-12 text-center">
            <button type="submit">Submit Enquiry</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</main>
@endsection