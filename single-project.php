<?php get_header();?>
<div class="project">
  <div class="container">
    <div class="row d-flex justify-content-between">
      <div class="col-md-4 d-flex justify-content-center align-items-center">
        <div class="project__info">
          <h3 class="project__info__client">
            <?php the_field( 'client_name' ); ?>
          </h3>
          <hr>
          <h1 class="project__info__name">
            <?php the_field( 'introduction_heading' ); ?>
          </h1>
        </div>
      </div>

      <div class="col-md-7">
        <img src="<?php echo get_template_directory_uri() ?>/img/case_bg.png" alt="" class="w-100">
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-md-6">
        <img src="<?php echo get_template_directory_uri() ?>/img/project/cs-1.jpg" class="w-100">
      </div>
      <div class="col-md-5 pl-5 pr-5">
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie</p>
      </div>
    </div>
  </div>

  <section class="project__navigator">
    <div class="container">
      <div class="row d-flex justify-content-between">
      <?php
        $previous = get_adjacent_post(false, '', true);
        if (!$previous) {
          $previous = new WP_Query('posts_per_page=1&order=DESC&orderby=publish_date&post_type=project');
          $previous->the_post();
        }

        $previousID = $previous->ID
      ?>
        <div class="col-md-5 text-right">
            <a href="<?php echo get_permalink($previous->ID)?>">

            <div class="project__navigator__cover" style="background-image: url('<?php the_field('hero_image', $previous->ID); ?>')"></div>

            <div class="project__navigator__title">
              <h3 class="mt-4 pr-5"><span><?php the_field('client_name', $previous->ID) ?></span> <?php echo get_the_title($previous->ID) ?></h3>
            </div>

            </a>
        </div>
          <?php
            wp_reset_postdata();

            $next = get_adjacent_post(false, '', false);
            if (!$next) {
              $next = new WP_Query('posts_per_page=1&order=ASC&orderby=publish_date&post_type=project');
              $next->the_post();
            }
            $nextID = $next->ID;
          ?>
        <div class="col-md-5 text-left">
          <a href="<?php echo get_permalink($next->ID)?>">
            <div class="project__navigator__cover" style="background-image: url('<?php the_field('hero_image', $next->ID); ?>')"></div>
            <div class="project__navigator__title">
              <h3 class="mt-4 pl-5"><span><?php the_field('client_name', $next->ID) ?></span> <?php echo get_the_title($next->ID) ?></h3>
            </div>
          </a>
        </div>
        <?php wp_reset_postdata(); ?>
        <style>
          .project__navigator {
            background: linear-gradient(
              to right,
              <?php the_field( 'project_color', $previousID ); ?> 0%,
              <?php the_field( 'project_color', $previousID ); ?> 50%,
              <?php the_field( 'project_color', $nextID ); ?> 50%,
              <?php the_field( 'project_color', $nextID ); ?> 100%
            );
          }
        </style>
      </div>
    </div>
  </section>

</div>

<?php get_template_part('partials/contact-section'); ?>

<?php get_footer(); ?>