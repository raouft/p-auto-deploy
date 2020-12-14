<?php /* Template Name: Case Study Page */ 
get_header();?>
<div class="case-study">
  <div class="container">
    <div class="row d-flex justify-content-between">
      <div class="col-md-4 d-flex justify-content-center align-items-center">
        <div class="case-study__info">
          <h3 class="case-study__info__client">
            Client
          </h3>
          <hr>
          <h1 class="case-study__info__name">
            Project Introduction
          </h1>
        </div>
      </div>

      <div class="col-md-7">
        <img src="<?php echo get_template_directory_uri() ?>/img/case_bg.png" alt="" class="w-100">
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-md-6">
        <img src="<?php echo get_template_directory_uri() ?>/img/case-study/cs-1.jpg" class="w-100">
      </div>
      <div class="col-md-5 pl-5 pr-5">
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie</p>
      </div>
    </div>
  </div>

  <section class="case-study__navigator">
    <div class="container">
      <div class="row d-flex justify-content-between">
        <div class="col-md-5 text-right">
          <a href="#">
            <div class="case-study__navigator__cover" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/case-study/prev-cs.jpg')"></div>
            <div class="case-study__navigator__title">
              <h3 class="mt-4 pr-5"><span>Client</span> Project Title</h3>
            </div>
          </a>
        </div>
        <div class="col-md-5 text-left">
          <a href="#">
            <div class="case-study__navigator__cover" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/case-study/next-cs.jpg')"></div>
            <div class="case-study__navigator__title">
              <h3 class="mt-4 pl-5"><span>Client</span> Project Title</h3>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

</div>

<?php get_template_part('partials/contact-section'); ?>

<?php get_footer(); ?>