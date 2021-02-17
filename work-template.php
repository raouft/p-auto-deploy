<?php /* Template Name: Work Page */
get_header();?>
<div class="projects">
  <div class="container">
    <div class="row no-gutters d-flex justify-content-center">
    <?php $args = array(
        'post_type' => 'project',
        'order' => 'ASC',
        'posts_per_page' => 8,
        'paged' => get_query_var( 'paged' )
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
      <?php endwhile; ?>

      <div class="post-nav mt-4">
        <?php previous_posts_link('<svg width="32" height="32" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M-1-1h582v402H-1z"/><g><path fill="#13989e" d="M10.1 22.995a1 1 0 000-1.42l-4.6-4.6h23.54a1 1 0 100-2H5.52l4.58-4.57a1 1 0 000-1.41 1 1 0 00-1.41 0l-6.36 6.36a.88.88 0 000 1.27l6.35 6.37a1 1 0 001.42 0z"/></g></svg>'); ?>
        <?php next_posts_link('<svg width="32" height="32" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M-1-1h582v402H-1z"/><g><path d="M22 9a1 1 0 000 1.42l4.6 4.6H3.06a1 1 0 100 2h23.52L22 21.59A1 1 0 0022 23a1 1 0 001.41 0l6.36-6.36a.88.88 0 000-1.27L23.42 9A1 1 0 0022 9z" fill="#13989e"/></g></svg>', $query->max_num_pages); ?>
      </div>
      <?php else: ?>
        <?php get_template_part( 'content', 'none' ); ?>
          <?php wp_reset_postdata(); ?>
        <?php endif;?>
    </div>
  </div>
</div>

<?php get_template_part('partials/contact-section'); ?>

<?php get_footer(); ?>