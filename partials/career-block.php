<div class="position mb-4">
  <div class="position__upload-cv">
    <div class="upload-button">
      <img src="<?php echo get_template_directory_uri() ?>/img/careers/upload.svg">
      <p class="mt-3 file-name">Upload CV</p>
    </div>
  </div>
  <?php if ( have_rows( 'forms', 'option' ) ) : ?>
    <?php while ( have_rows( 'forms', 'option' ) ) : the_row(); ?>
      <?php
      $career_form_id = get_sub_field( 'career_form_id');
      echo do_shortcode('[contact-form-7 id="'.$career_form_id.'" career="'.get_the_title().'"]');
      ?>
    <?php endwhile; ?>
  <?php endif; ?>
  <div class="position__details d-flex justify-content-between align-items-center">
    <div>
      <p class="position__details__dept"><?php the_field( 'department' ); ?></p>
      <h4 class="position__details__name"><?php the_title(); ?></h4>
    </div>
    <div>
      <button class="btn cta-btn is-light career-submit">Submit</button>
    </div>
  </div>
  </form>
</div>