<footer class="footer">
  <div style="max-width: 1200px; margin: 0 auto; padding: 0 1rem;">
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 3rem;">
      <!-- About Section -->
      <div>
        <a href="" class="footer-brand">
          <!-- <h1 class="text-white"><span>Shree</span>Radha Beauty</h1> -->
          <img src="{{ asset('user/web/img/logo.jpeg')}}" alt="image" srcset="" class="header_logo">

        </a>
        <p>Experience relaxation and rejuvenation at its finest. Visit us for personalized care and premium
          services designed to elevate your well-being.</p>
        <ul class="contact-list">
          <li><i class="fas fa-phone-alt"></i>+91 9711162310, +91 8076068507</li>
          <li><i class="fas fa-phone-alt"></i>Customer Support Number +91 8860663001, 0120-22030592</li>
          <li><i class="fas fa-map-marker-alt"></i>B-161 First Flower , Shalimar Gardan , Ghaziabad -U.P. ,201005</li>
          <li><i class="fas fa-envelope"></i>customercare.empiregroup@gmail.com, infoempiregroup2@gmail.com</li>
        </ul>
        <div class="social-links">
          <a href="#" class="social-btn"><i class="fab fa-twitter"></i></a>
          <a href="#" class="social-btn"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="social-btn"><i class="fab fa-linkedin-in"></i></a>
          <a href="#" class="social-btn"><i class="fab fa-instagram"></i></a>
        </div>
      </div>

      <!-- Newsletter Section -->
      <div>
        <h5 style="color: white; font-size: 1.1rem; text-transform: uppercase; margin-bottom: 1.5rem;">
          Newsletter</h5>
        <p>Stay updated with the latest news and offers by signing up for our newsletter.</p>
        <form class="newsletter-form">
          <input type="email" class="newsletter-input" placeholder="Your Email Address" required>
          <button type="submit" class="newsletter-btn">Sign Up</button>
        </form>
      </div>

      <!-- Quick Links Section -->
      <div>
        <h5 style="color: white; font-size: 1.1rem; text-transform: uppercase; margin-bottom: 1.5rem;">Quick
          Links</h5>

        <ul class="quick-links">
          <li><a href="{{route('user.web.about')}}"><i class="fas fa-angle-right"></i>About Us</a></li>
          <li><a href="{{route('users.saloons.list')}}"><i class="fas fa-angle-right"></i>Our Services</a></li>
          <li><a href="{{route('user.web.contact-us')}}"><i class="fas fa-angle-right"></i>Contact Us</a></li>
          <li><a href="{{route('user.term-and-condition')}}"><i class="fas fa-angle-right"></i>Terms & Conditions</a></li>
        </ul>
      </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
      <p>&copy; <a href="#">Shree Radha Beauty</a>. All Rights Reserved.</p>
    </div>
  </div>
</footer>