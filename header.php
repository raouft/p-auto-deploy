<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="icon" href="<?php echo get_template_directory_uri() ?>/img/favicons/cropped-favicon-32x32.png" sizes="32x32" />
  <link rel="icon" href="<?php echo get_template_directory_uri() ?>/img/favicons/cropped-favicon-192x192.png" sizes="192x192" />
  <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri() ?>/img/favicons/cropped-favicon-180x180.png" />
  <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri() ?>/img/favicons/cropped-favicon-270x270.png" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div class="navigation navigation--top">
    <div class="container">
      <div class="row">
        <div class="col">
          <a href="/" class="navigation__logo-dark">
            <img class="w-100" src="<?php echo get_template_directory_uri() ?>/img/logo-white.svg" alt="">
          </a>
          <a href="/" class="navigation__logo-light">
            <img class="w-100" src="<?php echo get_template_directory_uri() ?>/img/logo-color.svg" alt="">
          </a>
        </div>
        <div class="col d-flex justify-content-end align-self-center">
          <button class="hamburger hamburger--collapse" type="button">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
            </span>
          </button>
        </div>
      </div>
    </div>
  </div>
  <div class="overlay">
    <?php get_template_part('partials/overlay-menu'); ?>
  </div>
  <div class="smooth-container">
    <div class="page-content">