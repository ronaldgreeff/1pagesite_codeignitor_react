<?= $this->extend('templates\base_template') ?>

<?= $this->section('content') ?>
  <?= $this->include('includes\home_banner') ?>
  <?= $this->include('includes\home_content') ?>
  <?= $this->include('includes\portfolio') ?>
  <?= $this->include('includes\cta') ?>
  <?= $this->include('includes\contact_form') ?>
<?= $this->endSection() ?>
