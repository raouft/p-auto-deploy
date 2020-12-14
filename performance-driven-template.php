<?php /* Template Name: Performance Driven Page */ 
get_header();?>
<div class="pd-hero">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h1>Performance Driven</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-10">
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo</p>
      </div>
    </div>
  </div>
</div>

<section class="pd-content my-5">
  <div class="container">
    <div class="row">
      <div class="col-md-6 text-center p-5">
        <img src="<?php echo get_template_directory_uri() ?>/img/pd/objectives.svg" alt="">
        <h4>Objectives</h4>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincid</p>
      </div>
      <div class="col-md-6 text-center p-5">
        <img src="<?php echo get_template_directory_uri() ?>/img/pd/mission.svg" alt="">
        <h4>Mission</h4>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincid</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 text-center p-5">
        <img src="<?php echo get_template_directory_uri() ?>/img/pd/vision.svg" alt="">
        <h4>Vision</h4>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincid</p>
      </div>
      <div class="col-md-6 text-center p-5">
        <img src="<?php echo get_template_directory_uri() ?>/img/pd/strength.svg" alt="">
        <h4>Strength</h4>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincid</p>
      </div>
    </div>
  </div>
</section>

<?php get_template_part('partials/contact-section-dark'); ?>

<?php get_footer(); ?>