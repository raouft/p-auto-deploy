<?php /* Template Name: Case Studies Page */ 
get_header(); ?>
<div class="case-studies">
  <div class="hero-carousel">
    <div class="hero-carousel__slide"
      style="background-image: url('<?php echo get_template_directory_uri() ?>/img/case_bg.png')">
      <div class="container h-100">
        <div class="row h-100">
          <div class="col d-flex align-items-center">
            <div class="hero-carousel__text">
              <h1>Study case <br> no 1</h1>
              <a href="#" class="btn cta-btn is-light">See Work</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="hero-carousel__slide"
      style="background-image: url('<?php echo get_template_directory_uri() ?>/img/case_bg.png')">
      <div class="container h-100">
        <div class="row h-100">
          <div class="col d-flex align-items-center">
            <div class="hero-carousel__text">
              <h1>Study case <br> no 1</h1>
              <a href="#" class="btn cta-btn is-light">See Work</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="hero-carousel__slide"
      style="background-image: url('<?php echo get_template_directory_uri() ?>/img/case_bg.png')">
      <div class="container h-100">
        <div class="row h-100">
          <div class="col d-flex align-items-center">
            <div class="hero-carousel__text">
              <h1>Study case <br> no 1</h1>
              <a href="#" class="btn cta-btn is-light">See Work</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php //get_template_part('partials/cursor'); ?>
  <section class="news">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <h1>News</h1>
        </div>
      </div>
      <div class="row">
        <div class="col text-center">
          <p>
            <b>Learn more about what Perceptum and its clients have been up to.</b>
          </p>
        </div>
      </div>
  
      <div class="row mt-5">
        <div class="col-md-6">
          <article data-scroll data-scroll-speed="1" class="news-item">
            <a href="#" class="d-block w-100 overflow-hidden">
              <picture class="w-100 h-100 position-relative overflow-hidden">
                <img
                  src="<?php echo get_template_directory_uri() ?>/img/news_1.jpg"
                  class="w-100 h-100">
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
                <img
                  src="<?php echo get_template_directory_uri() ?>/img/news_2.png"
                  class="w-100 h-100">
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
                <img
                  src="<?php echo get_template_directory_uri() ?>/img/news_1.jpg"
                  class="w-100 h-100">
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
                <img
                  src="<?php echo get_template_directory_uri() ?>/img/news_2.png"
                  class="w-100 h-100">
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
  
  <section class="wisdom">
    <div class="container h-100">
      <div class="row h-100 d-flex align-items-center">
        <div class="col text-center">
          <h1 class="quote text-left">“Insight is not a light bulb that goes off inside our heads. It is a flickering candle that can easily be snuffed out.”</h1>
          <h6 class="author text-right mt-4">&#8211; Malcolm Gladwell</h6>
        </div>
      </div>
    </div>
  </section>
  
  <section class="brands">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <h1>Our Brands</h1>
        </div>
      </div>
      <div class="row d-flex justify-content-center">
        <div class="col-md-5 text-center">
          <p>
            <b>For the last 7 years, we have used creativity to drive growth for tens of clients around the country—all by tapping into the power of human emotion.</b>
          </p>
        </div>
      </div>
      
      <div class="logos">
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
</div>

<?php get_template_part('partials/contact-section'); ?>

<?php get_footer(); ?>