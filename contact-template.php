<?php /* Template Name: Contact Page */ 
get_header();?>

<div class="mt-5">
  <?php get_template_part('partials/contact-section'); ?>
</div>

<div class="contact__cover" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/contact/contact_cover.jpg')"></div>

<section class="contact__info">
  <div class="container">
    <div class="row">
      <div class="col-md-5">
        <h1 class="mb-4">perceptum</h1>
        <p>5-7 Dimitrie Pompeiu Bvd., Hermes Business Campus, Building C, 1st floor</p>
        <hr>
        <p>+40 721 234 567</p>
        <hr>
        <p><a href="mailto:hello@perceptum.ro">hello@perceptum.ro</a></p>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>