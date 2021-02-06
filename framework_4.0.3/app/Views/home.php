<?= $this->extend('templates\base_template') ?>

<?= $this->section('home') ?>

  <section id="intro-section">
    <?= $this->include('includes\intro') ?>
    <?= $this->include('includes\motto') ?>
    <div class="spacing-5" id="about">
      <?= $this->include('includes\slider') ?>
    </div>
  </section>

  <section id="portfolio">
    <div class="spacing-8">
      <h2 class="section-title">PORTFOLIO</h2>
    </div>
    <?= $this->include('includes\portfolio') ?>
  </section>

  <section id="contact">
    <div class="spacing-8">
      <?= $this->include('includes\cta') ?>
    </div>
    <div class="spacing-8">
      <h2 class="section-title">CONTACT</h2>
    </div>
    <div class="spacing-5">
      <?= $this->include('includes\contact_form') ?>
    </div>
  </section>

<?= $this->endSection() ?>
