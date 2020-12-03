<?= $this->extend('templates\base_template') ?>

<?= $this->section('home') ?>

  <section id="intro-section">
    <?= $this->include('includes\intro') ?>
    <?= $this->include('includes\motto') ?>
    <?= $this->include('includes\slider') ?>
  </section>

  <section id="content-section">
    <h2 class="section-title">PORTFOLIO</h2>
    <?= $this->include('includes\portfolio') ?>
  </section>

  <section id="contact-section">
    <?= $this->include('includes\cta') ?>
    <h2 class="section-title">CONTACT</h2>
    <?= $this->include('includes\contact_form') ?>
  </section>

<?= $this->endSection() ?>
