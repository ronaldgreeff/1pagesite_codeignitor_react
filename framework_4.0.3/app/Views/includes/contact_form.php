<div class="container">
  <div class="row">

    <form method="post" action="<?php echo base_url('contact/send') ?>">
      <div class="form-group">
        <label>Your Email</label>
        <input type="text" name="enquirer_email" class="form-control">
      </div>

      <div class="form-group">
        <label>Your Phone Number</label>
        <input type="text" name="enquirer_phone" class="form-control">
      </div>

      <div class="form-group">
        <label>Your Message</label>
        <textarea rows="6" type="text" name="enquirer_message" class="form-control"></textarea>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
      </div>
    </form>

  </div>
</div>
