<?php /* Template Name: Work Page */ 
get_header();?>
<div class="projects">
  <div class="container">
    <div class="row no-gutters d-flex justify-content-center">
      <div class="col-md-6">
        <a href="#">
          <div class="projects__project text-center"
            style="background-image: url('<?php echo get_template_directory_uri() ?>/img/work/case_1.jpg')">
            <div class="project__overlay">
              <div class="project__overlay__bg" style="background-color: #6F2180;"></div>
              <h2>Client | Project Title</h2>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-6">
        <a href="#">
          <div class="projects__project text-center"
            style="background-image: url('<?php echo get_template_directory_uri() ?>/img/work/case_2.jpg')">
            <div class="project__overlay">
              <div class="project__overlay__bg" style="background-color: #D3C813;"></div>
              <h2>Client | Project Title</h2>
            </div>
          </div>
        </a>
      </div>
    </div>
    <div class="row no-gutters d-flex justify-content-center">
      <div class="col-md-6">
        <a href="#">
          <div class="projects__project text-center"
            style="background-image: url('<?php echo get_template_directory_uri() ?>/img/work/case_3.jpg')">
            <div class="project__overlay">
              <div class="project__overlay__bg" style="background-color: #C92B2B;"></div>
              <h2>Client | Project Title</h2>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-6">
        <a href="#">
          <div class="projects__project text-center"
            style="background-image: url('<?php echo get_template_directory_uri() ?>/img/work/case_4.png')">
            <div class="project__overlay">
              <div class="project__overlay__bg" style="background-color: #14969C;"></div>
              <h2>Client | Project Title</h2>
            </div>
          </div>
        </a>
      </div>
    </div>
    <div class="row no-gutters d-flex justify-content-center">
      <div class="col-md-6">
        <a href="#">
          <div class="projects__project text-center"
            style="background-image: url('<?php echo get_template_directory_uri() ?>/img/work/case_5.jpg')">
            <div class="project__overlay">
              <div class="project__overlay__bg" style="background-color: #0A72B5;"></div>
              <h2>Client | Project Title</h2>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-6">
        <a href="#">
          <div class="projects__project text-center"
            style="background-image: url('<?php echo get_template_directory_uri() ?>/img/work/case_6.jpg')">
            <div class="project__overlay">
              <div class="project__overlay__bg" style="background-color: #80A20B;"></div>
              <h2>Client | Project Title</h2>
            </div>
          </div>
        </a>
      </div>
    </div>
    <div class="row no-gutters d-flex justify-content-center">
      <div class="col-md-6">
        <a href="#">
          <div class="projects__project text-center"
            style="background-image: url('<?php echo get_template_directory_uri() ?>/img/work/case_7.jpg')">
            <div class="project__overlay">
              <div class="project__overlay__bg" style="background-color: #14969C;"></div>
              <h2>Client | Project Title</h2>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-6">
        <a href="#">
          <div class="projects__project text-center"
            style="background-image: url('<?php echo get_template_directory_uri() ?>/img/work/case_8.jpg')">
            <div class="project__overlay">
              <div class="project__overlay__bg" style="background-color: #6F2180;"></div>
              <h2>Client | Project Title</h2>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>

<?php get_template_part('partials/contact-section'); ?>

<?php get_footer(); ?>