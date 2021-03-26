<footer class="footer d-none d-md-block">
  <div class="container">
    <div class="row d-flex">
      <div class="col">
        <p>Bd. Dimitrie Pompeiu, nr. 5-7, Hermes</p>
        <p>Business Campus, Clădirea C, Etaj 1, </p>
        <p>Sector 2, București</p>
        <hr>
        <p><b><a href="#">Map</a></b></p>
      </div>
      <div class="col d-flex justify-content-center">
        <?php
        wp_nav_menu(array('theme_location' => 'footer_menu_1'));
        ?>
      </div>
      <div class="col d-flex justify-content-center">
        <?php
        wp_nav_menu(array('theme_location' => 'footer_menu_2'));
        ?>
      </div>
      <div class="col text-right">
        <div class="social-icons d-flex justify-content-between">
          <a href="#">
            <img src="<?php echo get_template_directory_uri() ?>/img/facebook.svg" alt="">
          </a>
          <a href="#">
            <img src="<?php echo get_template_directory_uri() ?>/img/linkedin.svg" alt="">
          </a>
          <a href="#">
            <img src="<?php echo get_template_directory_uri() ?>/img/instagram.svg" alt="">
          </a>
        </div>
        <div class="mt-3">
          <p><a href="mailto:">hello@perceptum.ro<a/></p>
          <p><a href="tel:40721234567">Tel: +40 721 234 567</a></p>
        </div>
        <div class="mt-3">
          <p>&copy; <?php echo date('Y'); ?> Perceptum Concept</p>
        </div>
      </div>
    </div>
  </div>
</footer>
<footer class="footer-mobile d-block d-md-none">
  <div class="container">
    <div class="row">
      <div class="col-10">
        <div class="row">
          <div class="col">
            <?php
              wp_nav_menu(array('theme_location' => 'footer_menu_1'));
              ?>
          </div>
          <div class="col">
            <?php
              wp_nav_menu(array('theme_location' => 'footer_menu_2'));
              ?>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <p>Bd. Dimitrie Pompeiu, nr. 5-7, Hermes</p>
            <p>Business Campus, Clădirea C, Etaj 1, </p>
            <p>Sector 2, București</p>
            <hr>
            <p><b><a href="#">Map</a></b></p>
            <div class="mt-3">
              <p><a href="mailto:">hello@perceptum.ro<a/></p>
              <p><a href="tel:40721234567">Tel: +40 721 234 567</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-2 text-right">
        <div class="social-icons d-flex flex-column">
          <a href="#">
            <img src="<?php echo get_template_directory_uri() ?>/img/facebook.svg" alt="Facebook Icon">
          </a>
          <a href="#">
            <img src="<?php echo get_template_directory_uri() ?>/img/linkedin.svg" alt="LinkedIn Icon">
          </a>
          <a href="#">
            <img src="<?php echo get_template_directory_uri() ?>/img/instagram.svg" alt="Instagram Icon">
          </a>
        </div>
      </div>
    </div>
    <div class="row copy">
      <div class="mt-3">
        <p>&copy; <?php echo date('Y'); ?> Perceptum Concept</p>
      </div>
    </div>
  </div>
</footer>
</div>
</div>
<?php get_template_part('partials/modal'); ?>
<?php wp_footer(); ?>
<?php get_template_part('partials/cursor'); ?>
</body>

</html>