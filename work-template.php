<?php /* Template Name: Work Page */
get_header();?>
<div class="projects">
  <div class="container">
    <div class="row no-gutters d-flex justify-content-center">
    <?php $args = array(
        'post_type' => 'project',
        'order' => 'ASC',
        'posts_per_page' => -1
      );
      $query = new WP_Query( $args );
      ?>
      <?php if ( $query->have_posts() ) :
              while ( $query->have_posts() ) : $query->the_post();?>
      <div class="col-md-6">
        <a href="<?php the_permalink(); ?>">
          <div class="projects__project text-center"
            style="background-image: url('<?php the_field( 'hero_image' ); ?>')">
            <div class="project__overlay d-none d-sm-block">
              <div class="project__overlay__bg" style="background-color: <?php the_field( 'project_color' ); ?>;"></div>
              <h2><?php the_field( 'client_name' ); ?> | <?php the_title(); ?></h2>
            </div>
          </div>
          <div class="project__details--mobile d-block d-sm-none">
            <h4 class="mt-4 mb-5"><b><?php the_field( 'client_name' ); ?></b> | <?php the_title(); ?></h4>
          </div>
        </a>
      </div>
      <?php endwhile; else: ?>
        <?php get_template_part( 'content', 'none' ); ?>
          <?php wp_reset_postdata(); ?>
        <?php endif;?>
    </div>
  </div>
</div>

<?php get_template_part('partials/contact-section'); ?>

<?php get_footer(); ?>