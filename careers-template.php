<?php /* Template Name: Careers Page */
get_header();?>
<section class="careers-hero" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/careers/careers_bg.jpg);">
  <div class="container">
    <div class="row">
      <div class="col">
        <h1>Careers</h1>
      </div>
    </div>
    <div class="row d-flex">
      <div class="col-md-5 order-2 order-md-1">
        <img src="<?php echo get_template_directory_uri() ?>/img/careers/career_1.png" alt="" class="w-100">
      </div>
      <div class="col-md-7 d-flex align-items-center order-1 order-md-2">
        <div class="careers-hero__intro-text">
          <h3 class="mb-4 d-none d-md-block">Working at Perceptum</h3>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper</p>
        </div>
      </div>
    </div>
  </div>
  <div class="about-hero__overlay"></div>
</section>

<section class="about-content">
  <div class="container">
    <div class="row d-flex justify-content-between">
    <?php $args = array(
        'post_type' => 'career',
      );
      $query = new WP_Query( $args );
      ?>
      <div class="col-md-6">
      <?php if ( $query->have_posts() ) :
              while ( $query->have_posts() ) : $query->the_post();?>
      <?php if ($query->current_post%2 == 1): ?>
        <?php if ($query->current_post == 1): ?>
          <h1 class="about-content__pitch mb-5 text-center text-md-left">
            Job Opportunities
          </h1>
        <?php endif; ?>
        <?php get_template_part('partials/career-block'); ?>
        <?php endif; endwhile; endif; ?>
      </div>
      <div class="col-md-6">
      <?php if ( $query->have_posts() ) :
              while ( $query->have_posts() ) : $query->the_post();?>
      <?php if ($query->current_post%2 == 0): ?>
        <?php get_template_part('partials/career-block'); ?>
      <?php endif; endwhile; endif; wp_reset_postdata();?>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>