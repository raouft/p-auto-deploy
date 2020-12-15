<section class="contact contact-dark">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-md-3">
        <h1>Get in Touch</h1>
      </div>
      <div class="col-md-5">
        <h5>We collaborate with ambitious brands and people. We’d love to build something great with you.</h5>
      </div>
    </div>
    <div class="row d-flex justify-content-center mt-4">
      <div class="col-md-8 text-right">
        <form id="contact-modal-trigger">
          <div class="form-group">
            <input type="text" placeholder="Enter your name" id="placeholder_name_input">
          </div>
          <button class="btn cta-btn is-light" type="submit">Next</button>
        </form>
      </div>
    </div>
  </div>
</section>

<div class="modal fade" id="contact-modal" tabindex="-1" role="dialog"
  aria-hidden="true">
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