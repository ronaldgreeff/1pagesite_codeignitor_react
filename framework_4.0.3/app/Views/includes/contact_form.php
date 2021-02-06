<div class="contact-wrapper">
  <div class="row">
    <div class="col s12 m6 contact-map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.6465039439877!2d-0.14527126632055304!3d51.51970100365854!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761ad5dd953629%3A0xaf4bcc9ff278e20a!2sGreat%20Portland%20St%2C%20London!5e0!3m2!1sen!2suk!4v1612628048380!5m2!1sen!2suk" width="350" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <div class="col s12 m6 contact-form">
      <div class="container">
        <form method="post" action="<?php echo base_url('contact/send') ?>">
          <div class="input-field">
            <input id="enquirer_full_name" name="enquirer_full_name" type="text" class="validate">
            <label for="enquirer_full_name">Full Name</label>
          </div>
          <div class="input-field">
            <input id="enquirer_email" name="enquirer_email" type="email" class="validate">
            <label for="enquirer_email">Email</label>
            <span class="helper-text" data-error="hmmm... doesn't look quite right" data-success="(we don't store your email anywhere)"></span>
          </div>
          <div class="input-field">
            <input id="enquirer_phone" name="enquirer_phone" type="text" class="validate">
            <label for="enquirer_phone">Phone Number</label>
          </div>
          <div class="input-field">
            <textarea id="textarea1" name="enquirer_message" class="materialize-textarea"></textarea>
            <label for="textarea1">What do you want to build?</label>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </form>
      </div>
    </div>

  </div>
</div>
