<div class="contact-wrapper">
  <div class="columns">

    <div class="column contact-form">
      <form method="post" action="<?php echo base_url('contact/send') ?>">
        <div class="input-field col s12">
          <input id="enquirer_full_name" name="enquirer_full_name" type="text" class="validate">
          <label for="enquirer_full_name">Full Name</label>
        </div>
        <div class="input-field col s6">
          <input id="enquirer_email" name="enquirer_email" type="email" class="validate">
          <label for="enquirer_email">Email</label>
          <span class="helper-text" data-error="hmmm... doesn't look quite right" data-success="(we don't store your email anywhere)"></span>
        </div>
        <div class="input-field col s6">
          <input id="enquirer_phone" name="enquirer_phone" type="text" class="validate">
          <label for="enquirer_phone">Phone Number</label>
        </div>
        <div class="input-field col s12">
          <textarea id="textarea1" name="enquirer_message" class="materialize-textarea"></textarea>
          <label for="textarea1">What we can help you with</label>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
      </form>
    </div>

    <div class="column contact-map">
    </div>

  </div>
</div>
