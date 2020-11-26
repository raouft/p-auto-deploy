<?php /* Template Name: About Page */ 
get_header();?>
<section class="about-hero" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/about/about_bg.jpg);">
  <div class="container">
    <div class="row">
      <div class="col">
        <h1>About Us</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-5">
        <img src="<?php echo get_template_directory_uri() ?>/img/about/about_1.jpg" alt="" class="w-100">
      </div>
      <div class="col-md-7 d-flex align-items-center">
        <p class="about-hero__intro-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo</p>
      </div>
    </div>
  </div>
  <div class="about-hero__overlay"></div>
</section>

<section class="about-content">
  <div class="container">
    <div class="row d-flex justify-content-between">
      <div class="col-md-5">
        <h1 class="about-content__pitch">
          We grow businesses by giving them an emotional advantage.
        </h1>
      </div>
      <div class="col-md-6">
        <p class="about-content__description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla</p>
      </div>
    </div>

    <div class="about-content__logos">
      <div class="row">
        <div class="col mt-3 mb-3 text-center"><h1 style="color: #333; font-size: 3em;">logo</h1></div>
        <div class="col mt-3 mb-3 text-center"><h1 style="color: #333; font-size: 3em;">logo</h1></div>
        <div class="col mt-3 mb-3 text-center"><h1 style="color: #333; font-size: 3em;">logo</h1></div>
        <div class="col mt-3 mb-3 text-center"><h1 style="color: #333; font-size: 3em;">logo</h1></div>
      </div>
      <div class="row">
        <div class="col mt-3 mb-3 text-center"><h1 style="color: #333; font-size: 3em;">logo</h1></div>
        <div class="col mt-3 mb-3 text-center"><h1 style="color: #333; font-size: 3em;">logo</h1></div>
        <div class="col mt-3 mb-3 text-center"><h1 style="color: #333; font-size: 3em;">logo</h1></div>
        <div class="col mt-3 mb-3 text-center"><h1 style="color: #333; font-size: 3em;">logo</h1></div>
      </div>
      <div class="row">
        <div class="col mt-3 mb-3 text-center"><h1 style="color: #333; font-size: 3em;">logo</h1></div>
        <div class="col mt-3 mb-3 text-center"><h1 style="color: #333; font-size: 3em;">logo</h1></div>
        <div class="col mt-3 mb-3 text-center"><h1 style="color: #333; font-size: 3em;">logo</h1></div>
        <div class="col mt-3 mb-3 text-center"><h1 style="color: #333; font-size: 3em;">logo</h1></div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>