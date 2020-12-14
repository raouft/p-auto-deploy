<?php /* Template Name: Services Page */ 
get_header();?>
<div class="services-hero" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/services_hero_bg.png);">
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <h1>Our Services</h1>
      </div>
    </div>
  </div>
</div>
<div class="services">
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <h2>Marketing. Strategy. Results.</h2>
      </div>
    </div>
    <div class="row d-flex justify-content-center">
      <div class="col-md-4 mb-5">
        <div class="services__service text-center">
          <img src="<?php echo get_template_directory_uri() ?>/img/services/strategy.svg" alt="">
          <h3 class="mt-4 mb-3">Strategy & Planning</h3>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincid</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-5">
        <div class="services__service text-center">
          <img src="<?php echo get_template_directory_uri() ?>/img/services/digital.svg" alt="">
          <h3 class="mt-4 mb-3">Digital</h3>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincid</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-5">
        <div class="services__service text-center">
          <img src="<?php echo get_template_directory_uri() ?>/img/services/social_media.svg" alt="">
          <h3 class="mt-4 mb-3">Social Media</h3>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincid</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-5">
        <div class="services__service text-center">
          <img src="<?php echo get_template_directory_uri() ?>/img/services/events.svg" alt="">
          <h3 class="mt-4 mb-3">In-Store & Events</h3>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincid</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-5">
        <div class="services__service text-center">
          <img src="<?php echo get_template_directory_uri() ?>/img/services/design.svg" alt="">
          <h3 class="mt-4 mb-3">Design</h3>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincid</p>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_template_part('partials/contact-section-dark'); ?>

<?php get_footer(); ?>