<?php
/* Template Name: Custom Template */
?>

<!DOCTYPE html>
<html lang="en">
   <?php get_header(); ?>
   <body>
      <!-- ======= Header ======= -->
      <header id="header" class="fixed-top d-flex align-items-center header-transparent">
         <div class="container-fluid">
            <div class="row justify-content-center align-items-center">
               <div class="col-xl-11 d-flex align-items-center justify-content-between">
                  <h1 class="logo"><a href="./"><?php bloginfo('name'); ?></a></h1>
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

      <section id="hero" style="height: 9vh;">
         <div class="hero-container">
            <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
               
         </div>
         </div>
      </section>
     
      <section id="services" style="height: 100vh;">
            <div class="container" data-aos="fade-up">
               <header class="section-header wow fadeInUp">
                  <h3><?php the_title(); ?></h3>
               </header>
               <div class="row text-center">
                    <?php
                        // Start the WordPress Loop to retrieve the page content
                        if (have_posts()) :
                            while (have_posts()) : the_post();
                                the_content();
                            endwhile;
                        endif;
                    ?>
               </div>
            </div>
         </section>
      <!-- End #main -->
      <?php get_footer(); ?>
   </body>
</html>