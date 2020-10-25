<?= $this->extend('templates\base_template') ?>

<?= $this->section('content') ?>
  <?= $this->include('includes\home_banner') ?>
  <?= $this->include('contents\home_1') ?>
  <?= $this->include('contents\home_2') ?>
  <?= $this->include('contents\home_3') ?>
  <?= $this->include('components\portfolio') ?>
  <?= $this->include('components\cta') ?>
  <?= $this->include('includes\contact') ?>
<?= $this->endSection() ?>
