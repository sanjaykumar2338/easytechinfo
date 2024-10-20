<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>EasyTechInfo</h3>
            <p>Providing innovative tech solutions tailored to meet your business needs. From web development to IT consulting, we are your go-to experts.</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#about">About Us</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#services">Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#skills">Our Skills</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              Kangra, India 176208 <br>
              <strong>Phone:</strong> +91 7814976130<br>
              <strong>Email:</strong> info@easytechinfo.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
                <h4>Our Newsletter</h4>
                <p>Stay updated with the latest tech trends and innovations. Subscribe to our newsletter for updates and insights.</p>
                <form action="" method="post">
                    <input type="email" name="email" required><input type="submit" value="Subscribe">
                </form>
          </div>


        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>EasyTechInfo</strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://easytechinfo.com/">EasyTechInfo</a>
      </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

 <!-- Vendor JS Files -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/purecounter_vanilla.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/aos.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/glightbox.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/isotope.pkgd.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/swiper-bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/noframework.waypoints.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/validate.js"></script>

<!-- Template Main JS File -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>

<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function() {
  // Get the current URL, removing any fragment
  var documentUrl = document.location.href.replace(/#.*$/, '')

  // Iterate through all links
  var linkEls = document.getElementsByTagName('A')
  for (var linkIndex = 0; linkIndex < linkEls.length; linkIndex++) {
    var linkEl = linkEls[linkIndex]

    // Ignore links that don't begin with #
    if (!linkEl.getAttribute('href').match(/^#/)) {
      continue;
    }

    // Convert to an absolute URL
    linkEl.setAttribute('href', documentUrl + linkEl.getAttribute('href'))
  }
})    
</script>
