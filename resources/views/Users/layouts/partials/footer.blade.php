<footer id="footer" class="footer dark-background">
    <div class="container footer-top">
      <div class="row gy-4">

        <!-- Salon Name & Contact -->
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="" class="logo d-flex align-items-center">
            <span class="sitename">Shree Radha Beauty</span>
          </a>
          <div class="footer-contact pt-3">
            <p>123 Glam Street, New York, NY 10001</p>
            <p><strong>Phone:</strong> <span>+1 1234 5678 90</span></p>
            <p><strong>Email:</strong> <span>contact@radha-beauty.com</span></p>
          </div>
        </div>

        <!-- Quick Links -->
        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Quick Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#" id="contact-link">Contact</a></li>
          </ul>
        </div>

        <!-- Newsletter -->
        <div class="col-lg-4 col-md-12 footer-newsletter">
          <h4>Subscribe for Beauty Tips</h4>
          <p>Get exclusive beauty tips & special offers delivered to your inbox!</p>
          <form action="forms/newsletter.php" method="post" class="php-email-form">
            <div class="newsletter-form">
              <input type="email" name="email" placeholder="Enter your email">
              <input type="submit" value="Subscribe">
            </div>
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Thank you for subscribing!</div>
          </form>
        </div>

        <!-- Social Media -->
        <div class="col-lg-2 col-md-3 footer-social">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-twitter-x"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container text-center mt-4">
      <p>© {{date('Y')}}<strong>Dewi Beauty Studio</strong> | All Rights Reserved</p>
    </div>
  </footer>
