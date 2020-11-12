<?= $this->extend('templates\base_template') ?>

<?= $this->section('content') ?>
  <section>
    <div class="container">
      <p>Why not meet for a coffee</p>
    </div>
    <?= $this->include('includes\contact_form') ?>
  </section>
<?= $this->endSection() ?>
