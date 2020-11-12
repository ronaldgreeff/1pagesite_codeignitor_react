<?= $this->extend('templates\base_template') ?>

<?= $this->section('home') ?>
  <section> <?= $this->include('includes\home_banner') ?> </section>
  <section> <?= $this->include('includes\intro') ?> </section>
  <section> <?= $this->include('includes\home_content') ?> </section>
  <section> <?= $this->include('includes\portfolio') ?> </section>
  <section> <?= $this->include('includes\cta') ?> </section>
  <section> <?= $this->include('includes\contact_form') ?> </section>
<?= $this->endSection() ?>
