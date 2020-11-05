<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Codeigniter 4 Send Email with SMTP - positronx.io</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    .container {
      max-width: 550px;
    }
  </style>
</head>

<body>
  <div class="container mt-5">

    <form method="post" action="<?php echo base_url('SendMail/send') ?>">
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
</body>

</html>
