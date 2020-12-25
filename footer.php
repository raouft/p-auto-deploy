<footer class="footer">
  <div class="container">
    <div class="row">
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
          <p><a href="mailto:">hello@perceptum.ro</p>
          <p><a href="tel:40721234567">Tel: +40 721 234 567</a></p>
        </div>
        <div class="mt-3">
          <p>&copy; <?php echo date('Y'); ?> Perceptum Concept</p>
        </div>
      </div>
    </div>
  </div>
</footer>
</div>
</div>
<div class="modal fade" id="contact-modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <h1 class="mb-4 text-center">Get in Touch</h1>
        <form id="contact-form">
          <div class="form-group">
            <input class="form-control" id="name_input" placeholder="Enter your name">
          </div>
          <div class="form-group">
            <input id="email_input" type="email" class="form-control" placeholder="Enter your email">
          </div>
          <div class="form-group">
            <textarea id="message_input" class="form-control" placeholder="Enter your message"></textarea>
          </div>
          <button type="submit" class="btn cta-btn is-dark">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php wp_footer(); ?>
<?php get_template_part('partials/cursor'); ?>
</body>

</html>