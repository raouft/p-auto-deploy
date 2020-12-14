<?php /* Template Name: Careers Page */ 
get_header();?>
<section class="careers-hero" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/careers/careers_bg.jpg);">
  <div class="container">
    <div class="row">
      <div class="col">
        <h1>Careers</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-5">
        <img src="<?php echo get_template_directory_uri() ?>/img/careers/career_1.png" alt="" class="w-100">
      </div>
      <div class="col-md-7 d-flex align-items-center">
        <div class="careers-hero__intro-text">
          <h3 class="mb-4">Working at Perceptum</h3>
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
      <div class="col-md-6">
        <h1 class="about-content__pitch mb-5 text-center text-md-left">
          Job Opportunities
        </h1>
        <div class="position mb-4">
          <input type="file" class="d-none">
          <div class="position__upload-cv">
            <div class="upload-button">
              <img src="<?php echo get_template_directory_uri() ?>/img/careers/upload.svg">
              <p class="mt-3">Upload CV</p>
            </div>
          </div>
          <div class="position__details d-flex justify-content-between align-items-center">
            <div>
              <p class="position__details__dept">Department</p>
              <h4 class="position__details__name">Position</h4>
            </div>
            <div>
              <a href="#" class="btn cta-btn is-light">Apply</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="position mb-4">
          <input type="file" class="d-none">
          <div class="position__upload-cv">
            <div class="upload-button">
              <img src="<?php echo get_template_directory_uri() ?>/img/careers/upload.svg">
              <p class="mt-3">Upload CV</p>
            </div>
          </div>
          <div class="position__details d-flex justify-content-between align-items-center">
            <div>
              <p class="position__details__dept">Department</p>
              <h4 class="position__details__name">Position</h4>
            </div>
            <div>
              <a href="#" class="btn cta-btn is-light">Apply</a>
            </div>
          </div>
        </div>
        <div class="position mb-4">
          <input type="file" class="d-none">
          <div class="position__upload-cv">
            <div class="upload-button">
              <img src="<?php echo get_template_directory_uri() ?>/img/careers/upload.svg">
              <p class="mt-3">Upload CV</p>
            </div>
          </div>
          <div class="position__details d-flex justify-content-between align-items-center">
            <div>
              <p class="position__details__dept">Department</p>
              <h4 class="position__details__name">Position</h4>
            </div>
            <div>
              <a href="#" class="btn cta-btn is-light">Apply</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>