<?php get_header() ?>
<div class='player-container'>
  <div class='player'>
    <video id='video' src='https://perceptum.s3-us-west-2.amazonaws.com/perceptum_video.mp4' crossorigin playsinline
     preload></video>
    <div class='play-btn-big'></div>
    <div class='controls'>
      <!-- <div class="time"><span class="time-current"></span><span class="time-total"></span></div> -->
      <!-- <div class='progress'>
        <div class='progress-filled'></div>
      </div> -->
      <div class='controls-main'>
        <div class='controls-left'>
          <div class='volume'>
            <div class='volume-btn loud'>
              <svg width="26" height="24" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M6.75497 17.6928H2C0.89543 17.6928 0 16.7973 0 15.6928V8.30611C0 7.20152 0.895431 6.30611 2 6.30611H6.75504L13.9555 0.237289C14.6058 -0.310807 15.6 0.151473 15.6 1.00191V22.997C15.6 23.8475 14.6058 24.3098 13.9555 23.7617L6.75497 17.6928Z"
                  transform="translate(0 0.000518799)" fill="white" />
                <path id="volume-low"
                  d="M0 9.87787C2.87188 9.87787 5.2 7.66663 5.2 4.93893C5.2 2.21124 2.87188 0 0 0V2C1.86563 2 3.2 3.41162 3.2 4.93893C3.2 6.46625 1.86563 7.87787 0 7.87787V9.87787Z"
                  transform="translate(17.3333 7.44955)" fill="white" />

                <path id="volume-high"
                  d="M0 16.4631C4.78647 16.4631 8.66667 12.7777 8.66667 8.23157C8.66667 3.68539 4.78647 0 0 0V2C3.78022 2 6.66667 4.88577 6.66667 8.23157C6.66667 11.5773 3.78022 14.4631 0 14.4631V16.4631Z"
                  transform="translate(17.3333 4.15689)" fill="white" />
                <path id="volume-off"
                  d="M1.22565 0L0 1.16412L3.06413 4.0744L0 6.98471L1.22565 8.14883L4.28978 5.23853L7.35391 8.14883L8.57956 6.98471L5.51544 4.0744L8.57956 1.16412L7.35391 0L4.28978 2.91031L1.22565 0Z"
                  transform="translate(17.3769 8.31403)" fill="white" />
              </svg>

            </div>
            <!-- <div class='volume-slider'>
              <div class='volume-filled'></div>
            </div> -->
          </div>
        </div>
        <div class='play-btn paused'></div>
        <div class="controls-right">
          <div class='fullscreen d-flex d-sm-none'>
            <svg width="30" height="22" viewBox="0 0 30 22" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M0 0V-1.5H-1.5V0H0ZM0 18H-1.5V19.5H0V18ZM26 18V19.5H27.5V18H26ZM26 0H27.5V-1.5H26V0ZM1.5 6.54545V0H-1.5V6.54545H1.5ZM0 1.5H10.1111V-1.5H0V1.5ZM-1.5 11.4545V18H1.5V11.4545H-1.5ZM0 19.5H10.1111V16.5H0V19.5ZM24.5 11.4545V18H27.5V11.4545H24.5ZM26 16.5H15.8889V19.5H26V16.5ZM27.5 6.54545V0H24.5V6.54545H27.5ZM26 -1.5H15.8889V1.5H26V-1.5Z"
                transform="translate(2 2)" fill="white" />
            </svg>

            </svg>


          </div>
        </div>
      </div>
    </div>
  </div>
  <canvas id="video-canvas"></canvas>
</div>

<div class="case-studies">
  <div class="hero-carousel">
  <?php $args = array(
        'post_type' => 'project',
        'posts_per_page' => 3,
        'meta_key'		=> 'display_in_home_carousel',
	      'meta_value'	=> '1',
        'orderby' => 'title',
        'order' => 'ASC',
      );
      $query = new WP_Query( $args );
      ?>
      <?php if ( $query->have_posts() ) :
              while ( $query->have_posts() ) : $query->the_post();?>
    <div class="hero-carousel__slide"
      style="background-image: url('<?php the_field( 'hero_image' ); ?>')">
      <div class="container h-100">
        <div class="row h-100">
          <div class="col d-flex align-items-center">
            <div class="hero-carousel__text">
              <h1>Study case <br> no <?php echo $query->current_post+1 ?></h1>
              <a href="#" class="btn cta-btn is-light">See Work</a>
              <div class="hero-carousel__navigation d-sm-none d-block">
                <img id="prev" src="<?php echo get_template_directory_uri() ?>/img/left_arrow.svg">
                <img id="next" src="<?php echo get_template_directory_uri() ?>/img/right_arrow.svg">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endwhile; endif; wp_reset_postdata();?>
  </div>
  <section class="news">
    <div class="container">
      <div class="row">
        <div class="col text-sm-center">
          <h1 class="animate-heading">News</h1>
        </div>
      </div>
      <div class="row">
        <div class="col text-sm-center">
          <p class="news__subheading">
            <b>Learn more about what Perceptum and its clients have been up to.</b>
          </p>
        </div>
      </div>
    </div>
    <div class="news__articles">
    <?php $args = array(
        'post_type' => 'post',
        'posts_per_page' => 4,
        'tag' => 'featured'
      );
      $query = new WP_Query( $args );
      ?>
      <?php if ( $query->have_posts() ) :
              while ( $query->have_posts() ) : $query->the_post();?>
            <article data-scroll <?php echo $query->current_post%2 == 0 ? "data-scroll-speed='1'" : "data-scroll-speed='2'"; ?> class="news-item">
              <a href="#" class="d-block w-100 overflow-hidden">
                <picture class="w-100 h-100 position-relative overflow-hidden">
                  <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="h-100">
                </picture>
              </a>
              <div class="mt-4 pl-3 pr-3">
                <p class="news-item__info"><?php echo get_the_date(); ?> | Bucharest</p>
                <p class="news-item__excerpt"><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>" class="news-item__read-more">Read More ></a>
              </div>
            </article>
            <?php endwhile; endif; wp_reset_postdata();?>
    </div>
  </section>

  <section class="wisdom">
    <div class="container h-100">
      <div class="row h-100 d-flex align-items-center">
        <div class="col text-sm-center">
          <h1 class="quote text-left">“Insight is not a light bulb that goes off inside our heads. It is a flickering
            candle that can easily be snuffed out.”</h1>
          <h6 class="author text-right mt-4">&#8211; Malcolm Gladwell</h6>
        </div>
      </div>
    </div>
  </section>

  <section class="brands">
    <div class="container">
      <div class="row">
        <div class="col text-sm-center">
          <h1 class="animate-heading">Our Brands</h1>
        </div>
      </div>
      <div class="row d-flex justify-content-center">
        <div class="col-md-5 text-sm-center">
          <p class="brands__subheading">
            <b>For the last 7 years, we have used creativity to drive growth for tens of clients around the country—all
              by tapping into the power of human emotion.</b>
          </p>
        </div>
      </div>

      <div class="logos mt-4">
        <div class="row">
          <div class="col-sm-6 col-md-3 mt-3 mb-3 text-center">
            <div class="brand-logo-wrapper">
              <a href="#">
                <span class="brand-logo">
                  <img src="https://borgholm.qodeinteractive.com/wp-content/uploads/2020/07/h9-client-img-1.png" alt="">
                </span>
                <span class="brand-logo-hover">
                  <img src="https://borgholm.qodeinteractive.com/wp-content/uploads/2020/07/h9-client-img-1.png" alt="">
                </span>
              </a>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 mt-3 mb-3 text-center">
            <div class="brand-logo-wrapper">
              <a href="#">
                <span class="brand-logo">
                  <img src="https://borgholm.qodeinteractive.com/wp-content/uploads/2020/07/h9-client-img-3.png" alt="">
                </span>
                <span class="brand-logo-hover">
                  <img src="https://borgholm.qodeinteractive.com/wp-content/uploads/2020/07/h9-client-img-3.png" alt="">
                </span>
              </a>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 mt-3 mb-3 text-center">
            <div class="brand-logo-wrapper">
              <a href="#">
                <span class="brand-logo">
                  <img src="https://borgholm.qodeinteractive.com/wp-content/uploads/2020/07/h9-client-img-5.png" alt="">
                </span>
                <span class="brand-logo-hover">
                  <img src="https://borgholm.qodeinteractive.com/wp-content/uploads/2020/07/h9-client-img-5.png" alt="">
                </span>
              </a>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 mt-3 mb-3 text-center">
            <div class="brand-logo-wrapper">
              <a href="#">
                <span class="brand-logo">
                  <img src="https://borgholm.qodeinteractive.com/wp-content/uploads/2020/07/h9-client-img-1.png" alt="">
                </span>
                <span class="brand-logo-hover">
                  <img src="https://borgholm.qodeinteractive.com/wp-content/uploads/2020/07/h9-client-img-1.png" alt="">
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="row d-none d-md-flex">
          <div class="col-md-3 mt-3 mb-3 text-center">
            <div class="brand-logo-wrapper">
              <a href="#">
                <span class="brand-logo">
                  <img src="https://borgholm.qodeinteractive.com/wp-content/uploads/2020/07/h9-client-img-4.png" alt="">
                </span>
                <span class="brand-logo-hover">
                  <img src="https://borgholm.qodeinteractive.com/wp-content/uploads/2020/07/h9-client-img-4.png" alt="">
                </span>
              </a>
            </div>
          </div>
          <div class="col-md-3 mt-3 mb-3 text-center">
            <div class="brand-logo-wrapper">
              <a href="#">
                <span class="brand-logo">
                  <img src="https://borgholm.qodeinteractive.com/wp-content/uploads/2020/07/h9-client-img-2.png" alt="">
                </span>
                <span class="brand-logo-hover">
                  <img src="https://borgholm.qodeinteractive.com/wp-content/uploads/2020/07/h9-client-img-2.png" alt="">
                </span>
              </a>
            </div>
          </div>
          <div class="col-md-3 mt-3 mb-3 text-center">
            <div class="brand-logo-wrapper">
              <a href="#">
                <span class="brand-logo">
                  <img src="https://borgholm.qodeinteractive.com/wp-content/uploads/2020/07/h9-client-img-1.png" alt="">
                </span>
                <span class="brand-logo-hover">
                  <img src="https://borgholm.qodeinteractive.com/wp-content/uploads/2020/07/h9-client-img-1.png" alt="">
                </span>
              </a>
            </div>
          </div>
          <div class="col-md-3 mt-3 mb-3 text-center">
            <div class="brand-logo-wrapper">
              <a href="#">
                <span class="brand-logo">
                  <img src="https://borgholm.qodeinteractive.com/wp-content/uploads/2020/07/h9-client-img-3.png" alt="">
                </span>
                <span class="brand-logo-hover">
                  <img src="https://borgholm.qodeinteractive.com/wp-content/uploads/2020/07/h9-client-img-3.png" alt="">
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<?php get_template_part('partials/contact-section'); ?>

<?php get_footer() ?>