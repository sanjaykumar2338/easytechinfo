<!DOCTYPE html>
<html lang="en">
   <?php get_header(); ?>
   <body>
      <!-- ======= Header ======= -->
      <header id="header" class="fixed-top d-flex align-items-center header-transparent">
         <div class="container-fluid">
            <div class="row justify-content-center align-items-center">
               <div class="col-xl-11 d-flex align-items-center justify-content-between">
                  <h1 class="logo"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
                  <!-- Uncomment below if you prefer to use an image logo -->
                  <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
                  <nav id="navbar" class="navbar">
                    <ul>
                         <li><a class="nav-link scrollto active" href="<?php echo home_url(); ?>">Home</a></li>
                        <li><a class="nav-link scrollto" href="<?php echo is_front_page() ? '#about' : home_url( '/#about' ); ?>">About</a></li>
                        <li><a class="nav-link scrollto" href="<?php echo is_front_page() ? '#services' : home_url( '/#services' ); ?>">Services</a></li>
                        <li><a class="nav-link scrollto" href="<?php echo is_front_page() ? '#portfolio' : home_url( '/#portfolio' ); ?>">Portfolio</a></li>
                        <li><a class="nav-link scrollto" href="<?php echo is_front_page() ? '#contact' : home_url( '/#contact' ); ?>">Contact</a></li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                    </nav>


                  <!-- .navbar -->
               </div>
            </div>
         </div>
      </header>
      <!-- End Header -->
      <!-- ======= hero Section ======= -->
      <section id="hero">
         <div class="hero-container">
            <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
               <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>
               <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/mobile.webp)">
                     <div class="carousel-container">
                        <div class="container">
                           <h2 class="animate__animated animate__fadeInDown">Mobile App Development</h2>
                           <p class="animate__animated animate__fadeInUp">We create feature-rich mobile apps that deliver an exceptional user experience across iOS and Android platforms.</p>
                           <a href="#services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
                        </div>
                     </div>
                    </div>
                  
                    <div class="carousel-item" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/11.png)">
                     <div class="carousel-container">
                        <div class="container">
                           <h2 class="animate__animated animate__fadeInDown">Innovative IT Solutions</h2>
                           <p class="animate__animated animate__fadeInUp">We provide cutting-edge technology solutions to help businesses grow and thrive in the digital era. Let's innovate together.</p>
                           <a href="#services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Explore Services</a>
                        </div>
                     </div>
                    </div>

                    <div class="carousel-item" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/web.webp)">
                        <div class="carousel-container">
                            <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Customized Web Development</h2>
                            <p class="animate__animated animate__fadeInUp">Our web development services are tailored to meet the unique needs of your business, ensuring a strong online presence.</p>
                            <a href="#services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Learn More</a>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true">
                  <span style="font-size: 3rem;">&lt;</span> <!-- Left angle bracket -->
               </span>
               <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true">
                  <span style="font-size: 3rem;">&gt;</span> <!-- Right angle bracket -->
               </span>
               <span class="visually-hidden">Next</span>
            </a>
         </div>
         </div>
      </section>
      <!-- End Hero Section -->
      <main id="main">
         <!-- ======= Featured Services Section ======= -->
         <section id="featured-services">
            <div class="container">
               <div class="row">
                  <div class="col-lg-4 box">
                     <i class="bi bi-briefcase"></i>
                     <h4 class="title"><a href="">Custom Software Development</a></h4>
                     <p class="description">We provide tailored software solutions designed to streamline your business operations and drive efficiency.</p>
                  </div>
                  <div class="col-lg-4 box box-bg">
                     <i class="bi bi-card-checklist"></i>
                     <h4 class="title"><a href="">Web & Mobile App Development</a></h4>
                     <p class="description">From concept to deployment, we create powerful, user-friendly web and mobile applications that enhance your digital presence.</p>
                  </div>
                  <div class="col-lg-4 box">
                     <i class="bi bi-binoculars"></i>
                     <h4 class="title"><a href="">IT Consulting Services</a></h4>
                     <p class="description">Our experts provide strategic IT consulting to help businesses leverage the latest technology and achieve their goals.</p>
                  </div>
               </div>
            </div>
         </section>
         <!-- End Featured Services Section -->
         <!-- ======= About Us Section ======= -->
         <section id="about">
            <div class="container" data-aos="fade-up">
               <header class="section-header">
                  <h3>About Us</h3>
                  <p>At EasyTechInfo, we are passionate about delivering top-notch IT solutions that transform businesses and drive growth. Our commitment to innovation, quality, and client satisfaction is at the heart of everything we do.</p>
               </header>
               <div class="row about-cols">
                  <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                     <div class="about-col">
                        <div class="img">
                           <img src="assets/img/about-mission.jpg" alt="" class="img-fluid">
                           <div class="icon"><i class="bi bi-bar-chart"></i></div>
                        </div>
                        <h2 class="title"><a href="#">Our Mission</a></h2>
                        <p>
                           Our mission is to empower businesses through tailored technology solutions, ensuring they thrive in the digital era. We strive to bring innovative and efficient IT services that streamline operations and enhance productivity.
                        </p>
                     </div>
                  </div>
                  <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                     <div class="about-col">
                        <div class="img">
                           <img src="assets/img/about-plan.jpg" alt="" class="img-fluid">
                           <div class="icon"><i class="bi bi-brightness-high"></i></div>
                        </div>
                        <h2 class="title"><a href="#">Our Plan</a></h2>
                        <p>
                           We plan to expand our services globally, creating lasting partnerships with businesses looking to innovate. Our team continuously evolves to meet the growing demands of the IT landscape with cutting-edge solutions.
                        </p>
                     </div>
                  </div>
                  <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                     <div class="about-col">
                        <div class="img">
                           <img src="assets/img/about-vision.jpg" alt="" class="img-fluid">
                           <div class="icon"><i class="bi bi-calendar4-week"></i></div>
                        </div>
                        <h2 class="title"><a href="#">Our Vision</a></h2>
                        <p>
                           Our vision is to be the leading IT service provider, known for delivering innovative, reliable, and scalable solutions. We aim to create a future where technology empowers every business to achieve success.
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- End About Us Section -->
         <!-- ======= Services Section ======= -->
         <section id="services">
            <div class="container" data-aos="fade-up">
               <header class="section-header wow fadeInUp">
                  <h3>Services</h3>
                  <p>At EasyTechInfo, we offer a broad spectrum of professional services designed to elevate your business and provide top-notch technological solutions.</p>
               </header>
               <div class="row">
                  <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="100">
                     <div class="icon"><i class="bi bi-briefcase"></i></div>
                     <h4 class="title"><a href="">Web Development</a></h4>
                     <p class="description">We craft modern, responsive, and secure websites that provide excellent user experience and meet your business goals.</p>
                  </div>
                  <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="200">
                     <div class="icon"><i class="bi bi-card-checklist"></i></div>
                     <h4 class="title"><a href="">Mobile App Development</a></h4>
                     <p class="description">Custom mobile app solutions to meet your unique business needs, ensuring high performance across Android and iOS platforms.</p>
                  </div>
                  <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="300">
                     <div class="icon"><i class="bi bi-bar-chart"></i></div>
                     <h4 class="title"><a href="">Database Management</a></h4>
                     <p class="description">Expert database design and management to ensure secure, efficient, and scalable data storage for your applications.</p>
                  </div>
                  <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="200">
                     <div class="icon"><i class="bi bi-binoculars"></i></div>
                     <h4 class="title"><a href="">Custom Software Development</a></h4>
                     <p class="description">From concept to deployment, we create custom software tailored to solve complex challenges specific to your business.</p>
                  </div>
                  <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="300">
                     <div class="icon"><i class="bi bi-brightness-high"></i></div>
                     <h4 class="title"><a href="">IT Consulting</a></h4>
                     <p class="description">Our experienced consultants provide expert guidance to help you optimize your IT infrastructure and improve operational efficiency.</p>
                  </div>
                  <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="400">
                     <div class="icon"><i class="bi bi-calendar4-week"></i></div>
                     <h4 class="title"><a href="">Cloud Solutions</a></h4>
                     <p class="description">We offer robust cloud computing services to securely manage, scale, and transform your business in the cloud environment.</p>
                  </div>
               </div>
            </div>
         </section>
         <!-- End Services Section -->
         <!-- ======= Skills Section ======= -->
         <section id="skills">
            <div class="container" data-aos="fade-up">
               <header class="section-header">
                  <h3>Our Skills</h3>
                  <p>At EasyTechInfo, we offer a wide range of cutting-edge development and IT services. Our team specializes in delivering high-quality solutions tailored to your business needs.</p>
               </header>
               <div class="skills-content">
                  <div class="progress">
                     <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                        <span class="skill">PHP <i class="val">100%</i></span>
                     </div>
                  </div>
                  <div class="progress">
                     <div class="progress-bar bg-info" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                        <span class="skill">HTML <i class="val">95%</i></span>
                     </div>
                  </div>
                  <div class="progress">
                     <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                        <span class="skill">SQL <i class="val">90%</i></span>
                     </div>
                  </div>
                  <div class="progress">
                     <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                        <span class="skill">Python <i class="val">85%</i></span>
                     </div>
                  </div>
                  <div class="progress">
                     <div class="progress-bar bg-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                        <span class="skill">Node.js <i class="val">80%</i></span>
                     </div>
                  </div>
                  <div class="progress">
                     <div class="progress-bar bg-info" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                        <span class="skill">Frontend Development <i class="val">85%</i></span>
                     </div>
                  </div>
                  <div class="progress">
                     <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                        <span class="skill">Mobile App Development <i class="val">70%</i></span>
                     </div>
                  </div>
                  <div class="progress">
                     <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                        <span class="skill">Web App Development <i class="val">100%</i></span>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- End Skills Section -->
         <!-- ======= Portfolio Section ======= -->
         <!-- ======= Portfolio Section ======= -->
         <section id="portfolio" class="section-bg">
            <div class="container" data-aos="fade-up">
               <header class="section-header">
                  <h3 class="section-title">Our Portfolio</h3>
                  <p>We deliver exceptional digital solutions, from web development to custom software, tailored to meet your business needs. Explore our portfolio to see our projects in action.</p>
               </header>
               <div class="row" data-aos="fade-up" data-aos-delay="100">
                  <div class="col-lg-12">
                     <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-web">Web Development</li>
                        <li data-filter=".filter-mobile">Mobile App Development</li>
                        <li data-filter=".filter-software">Custom Software</li>
                     </ul>
                  </div>
               </div>
               <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                  <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                     <div class="portfolio-wrap">
                        <figure>
                           <img src="<?php echo get_template_directory_uri(); ?>/assets/img/app1.jpg" class="img-fluid" alt="">
                           <a href="<?php echo get_template_directory_uri(); ?>/assets/img/app1.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="E-commerce Website"><i class="bi bi-plus"></i></a>
                        </figure>
                        <div class="portfolio-info">
                           <h4><a href="portfolio-details.html">E-commerce Website</a></h4>
                           <p>Web Development</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 portfolio-item filter-mobile">
                     <div class="portfolio-wrap">
                        <figure>
                           <img src="<?php echo get_template_directory_uri(); ?>/assets/img/web3.jpg" class="img-fluid" alt="">
                           <a href="<?php echo get_template_directory_uri(); ?>/assets/img/web3.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Mobile Banking App"><i class="bi bi-plus"></i></a>
                        </figure>
                        <div class="portfolio-info">
                           <h4><a href="portfolio-details.html">Mobile Banking App</a></h4>
                           <p>Mobile App Development</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 portfolio-item filter-software">
                     <div class="portfolio-wrap">
                        <figure>
                           <img src="<?php echo get_template_directory_uri(); ?>/assets/img/app2.jpg" class="img-fluid" alt="">
                           <a href="<?php echo get_template_directory_uri(); ?>/assets/img/app2.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Inventory Management Software"><i class="bi bi-plus"></i></a>
                        </figure>
                        <div class="portfolio-info">
                           <h4><a href="portfolio-details.html">Inventory Management Software</a></h4>
                           <p>Custom Software</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                     <div class="portfolio-wrap">
                        <figure>
                           <img src="<?php echo get_template_directory_uri(); ?>/assets/img/web2.jpg" class="img-fluid" alt="">
                           <a href="<?php echo get_template_directory_uri(); ?>/assets/img/web2.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Corporate Website"><i class="bi bi-plus"></i></a>
                        </figure>
                        <div class="portfolio-info">
                           <h4><a href="portfolio-details.html">Corporate Website</a></h4>
                           <p>Web Development</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 portfolio-item filter-mobile">
                     <div class="portfolio-wrap">
                        <figure>
                           <img src="<?php echo get_template_directory_uri(); ?>/assets/img/app3.jpg" class="img-fluid" alt="">
                           <a href="<?php echo get_template_directory_uri(); ?>/assets/img/app3.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Food Delivery App"><i class="bi bi-plus"></i></a>
                        </figure>
                        <div class="portfolio-info">
                           <h4><a href="portfolio-details.html">Food Delivery App</a></h4>
                           <p>Mobile App Development</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 portfolio-item filter-software">
                     <div class="portfolio-wrap">
                        <figure>
                           <img src="<?php echo get_template_directory_uri(); ?>/assets/img/card2.jpg" class="img-fluid" alt="">
                           <a href="<?php echo get_template_directory_uri(); ?>/assets/img/card2.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="CRM System"><i class="bi bi-plus"></i></a>
                        </figure>
                        <div class="portfolio-info">
                           <h4><a href="portfolio-details.html">CRM System</a></h4>
                           <p>Custom Software</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- End Portfolio Section -->
         <!-- ======= Testimonials Section ======= -->
         <section id="testimonials" class="section-bg">
            <div class="container" data-aos="fade-up">
               <header class="section-header">
                  <h3>Testimonials</h3>
               </header>
               <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                  <div class="swiper-wrapper">
                     <div class="swiper-slide">
                        <div class="testimonial-item text-center">
                           <i class="bi bi-person-circle" style="font-size: 4rem; color: #6c757d;"></i>
                           <h3>David</h3>
                           <h4>Ceo &amp; Founder</h4>
                           <p>
                              <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                              I had the pleasure of working with Sanjay on a Laravel software customization project, and I must say, it was an absolute delight. This was the second time we collaborated on a project, and the experience was as exceptional as the first. Sanjay's exceptional skills as a full-stack developer, particularly in PHP, truly stood out throughout the project. He was incredibly responsive and accommodating to our requests, showcasing a high level of expertise and proficiency in Laravel and its ecosystem.
                              <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                           </p>
                        </div>
                     </div>
                     <!-- End testimonial item -->
                     <div class="swiper-slide">
                        <div class="testimonial-item text-center">
                           <i class="bi bi-person-circle" style="font-size: 4rem; color: #6c757d;"></i>
                           <h3>Daniel</h3>
                           <h4>Designer</h4>
                           <p>
                              <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                              Exceptional Laravel and PHP programmer. Delivered high-quality, efficient code on time. Excellent communication skills. Problem-solving ability is admirable. Highly recommended for complex, detailed-oriented projects. Truly a five-star experience!
                              <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                           </p>
                        </div>
                     </div>
                     <!-- End testimonial item -->
                     <div class="swiper-slide">
                        <div class="testimonial-item text-center">
                           <i class="bi bi-person-circle" style="font-size: 4rem; color: #6c757d;"></i>
                           <h3>Kelly</h3>
                           <h4>Store Owner</h4>
                           <p>
                              <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                              Sanjay was able to quickly resolve the API issues with our our web dashboard. Excellent understanding of complex code and was able to resolve long-standing issue that other developers could not. Thank you!
                              <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                           </p>
                        </div>
                     </div>
                     <!-- End testimonial item -->
                  </div>
                  <div class="swiper-pagination"></div>
               </div>
            </div>
         </section>
         <!-- End Testimonials Section -->
         <!-- ======= Contact Us Section ======= -->
         <section id="contact" class="section-bg">
            <div class="container" data-aos="fade-up">
               <div class="section-header">
                  <h3>Contact Us</h3>
                  <p>If you have any questions or would like to discuss a project, feel free to reach out. We're here to help!</p>
               </div>
               <div class="row contact-info">
                  <div class="col-md-4">
                     <div class="contact-address">
                        <i class="bi bi-geo-alt"></i>
                        <h3>Address</h3>
                        <address>Kangra, Himachal Pradesh, 176208, India</address>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="contact-phone">
                        <i class="bi bi-phone"></i>
                        <h3>Phone Number</h3>
                        <p><a href="tel:+917814976130">+91 78149 76130</a></p>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="contact-email">
                        <i class="bi bi-envelope"></i>
                        <h3>Email</h3>
                        <p><a href="mailto:info@easytechinfo.com">info@easytechinfo.com</a></p>
                     </div>
                  </div>
               </div>
               <div class="form">

                  <form action="" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>


               </div>
            </div>
         </section>
         <!-- End Contact Us Section -->
      </main>
      <!-- End #main -->
      <?php get_footer(); ?>
   </body>
</html>