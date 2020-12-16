<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="navigation navigation--top">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <a href="/" class="navigation__logo-dark">
              <img src="<?php echo get_template_directory_uri() ?>/img/logo-white.svg" alt="">
            </a>
            <a href="/" class="navigation__logo-light">
              <img src="<?php echo get_template_directory_uri() ?>/img/logo-color.svg" alt="">
            </a>
          </div>
          <div class="col-md-6 d-flex justify-content-end">
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