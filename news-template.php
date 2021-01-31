<?php /* Template Name: News Page */
get_header();?>
<div class="news-hero">
  <div class="container">
    <div class="row">
      <div class="col">
        <h1 class="mb-4 mb-md-0">News</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-10">
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
          dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
          suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit</p>
      </div>
    </div>
  </div>
</div>

<section class="news news--dark">
  <div class="container">
    <div class="row mt-5">
      <div class="col-md-6">
        <article data-scroll data-scroll-speed="1" class="news-item">
          <a href="#" class="d-block w-100 overflow-hidden">
            <picture class="w-100 h-100 position-relative overflow-hidden">
              <img src="<?php echo get_template_directory_uri() ?>/img/news_1.jpg" class="w-100 h-100">
            </picture>
          </a>
          <div class="mt-4 pl-3 pr-3">
            <p class="news-item__info">December 10, 2019 | Bucharest</p>
            <p class="news-item__excerpt">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam</p>
            <a href="#" class="news-item__read-more">Read More ></a>
          </div>
        </article>
      </div>
      <div class="col-md-6 mt-5">
        <article data-scroll data-scroll-speed="2" class="news-item">
          <a href="#" class="d-block w-100 overflow-hidden">
            <picture class="w-100 h-100 position-relative overflow-hidden">
              <img src="<?php echo get_template_directory_uri() ?>/img/news_2.png" class="w-100 h-100">
            </picture>
          </a>
          <div class="mt-4 pl-3 pr-3">
            <p class="news-item__info">December 10, 2019 | Bucharest</p>
            <p class="news-item__excerpt">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam</p>
            <a href="#" class="news-item__read-more">Read More ></a>
          </div>
        </article>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <article data-scroll data-scroll-speed="1" class="news-item">
          <a href="#" class="d-block w-100 overflow-hidden">
            <picture class="w-100 h-100 position-relative overflow-hidden">
              <img src="<?php echo get_template_directory_uri() ?>/img/news_1.jpg" class="w-100 h-100">
            </picture>
          </a>
          <div class="mt-4 pl-3 pr-3">
            <p class="news-item__info">December 10, 2019 | Bucharest</p>
            <p class="news-item__excerpt">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam</p>
            <a href="#" class="news-item__read-more">Read More ></a>
          </div>
        </article>
      </div>
      <div class="col-md-6 mt-5">
        <article data-scroll data-scroll-speed="2" class="news-item">
          <a href="#" class="d-block w-100 overflow-hidden">
            <picture class="w-100 h-100 position-relative overflow-hidden">
              <img src="<?php echo get_template_directory_uri() ?>/img/news_2.png" class="w-100 h-100">
            </picture>
          </a>
          <div class="mt-4 pl-3 pr-3">
            <p class="news-item__info">December 10, 2019 | Bucharest</p>
            <p class="news-item__excerpt">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam</p>
            <a href="#" class="news-item__read-more">Read More ></a>
          </div>
        </article>
      </div>
    </div>
  </div>
</section>

<?php get_template_part('partials/contact-section-dark'); ?>

<?php get_footer(); ?>