<?php foreach ($content_blocks as $i => $content_block): ?>
  <?php $orientation = ($i % 2 == 0) ? 'left' : 'right'; ?>
  <div class="section full-page-section">
    <div class="container">
      <div class="row">
        <div class="col s12">
          <h1><?= $content_block['title'] ?></h1>
          <img src=<?= $content_block['imgs'].'/main.svg' ?> />
          <p><?= $content_block['desc'] ?></p>
        </div>
      </div>
    </div>
  </div>
<?php endforeach; ?>
