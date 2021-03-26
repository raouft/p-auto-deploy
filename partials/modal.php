<?php
if(isset($_POST['submitted'])) {
	if(trim($_POST['contactName']) === '') {
		$nameError = 'Please enter your name.';
		$hasError = true;
	} else {
		$name = trim($_POST['contactName']);
	}

	if(trim($_POST['contactEmail']) === '')  {
		$emailError = 'Please enter your email address.';
		$hasError = true;
	} else if (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", trim($_POST['contactEmail']))) {
		$emailError = 'You entered an invalid email address.';
		$hasError = true;
	} else {
		$email = trim($_POST['email']);
	}

	if(trim($_POST['contactMessage']) === '') {
		$commentError = 'Please enter a message.';
		$hasError = true;
	} else {
		if(function_exists('stripslashes')) {
			$comments = stripslashes(trim($_POST['contactMessage']));
		} else {
			$comments = trim($_POST['contactMessage']);
		}
	}

	if(!isset($hasError)) {
		$emailTo = get_option('tz_email');
		if (!isset($emailTo) || ($emailTo == '') ){
			$emailTo = get_option('admin_email');
		}
		$subject = '[PHP Snippets] From '.$name;
		$body = "Name: $name \n\nEmail: $email \n\nComments: $comments";
		$headers = 'From: '.$name.' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

		wp_mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	}

} ?>
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
        <!-- <form id="contact-form" action="<?php the_permalink(); ?>">
          <div class="form-group">
            <input class="form-control" name="contactName" id="contactName" placeholder="Enter your name">
          </div>
          <div class="form-group">
            <input type="email" name="contactEmail" id="contactEmail" class="form-control" placeholder="Enter your email">
          </div>
          <div class="form-group">
            <textarea name="contactMessage" id="contactMessage" class="form-control" placeholder="Enter your message"></textarea>
          </div>
          <button type="submit" class="btn cta-btn is-dark">Submit</button>
        </form> -->
        <?php if ( have_rows( 'forms', 'option' ) ) : ?>
          <?php while ( have_rows( 'forms', 'option' ) ) : the_row(); ?>
            <?php
              $contact_form_id = get_sub_field( 'contact_us_form_id');
              echo do_shortcode('[contact-form-7 id="'.$contact_form_id.'"]');
            ?>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>