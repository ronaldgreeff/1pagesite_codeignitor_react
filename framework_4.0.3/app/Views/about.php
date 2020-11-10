<?= $this->extend('templates\base_template') ?>

<?= $this->section('content') ?>

  <section>

    <div class="section no-pad-bot flex-middle-center">
      <div class="container">
        <h1>About</h1>
        <br><br>

        <?= $this->include('includes\quote');
        makeQuote(
          $content = 'well hee haw',
          $sub_content = 'gee',
          $button_link = 'test/',
          $button_text = 'test',
        ); ?>

        </div>
      </div>
    </div>

  </section>
<?= $this->endSection() ?>
