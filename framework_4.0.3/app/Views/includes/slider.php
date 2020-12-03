<div class="carousel carousel-slider center">
  <?php foreach ($content_blocks as $i => $content_block): ?>
    <div class="carousel-item">
      <div class="container">
        <h3 class="content-block-title"><?= $content_block['title'] ?></h3>
        <img class="content-block-img " src=<?= $content_block['imgs'].'/main.svg' ?> />
        <h5><?= $content_block['desc'] ?></h5>
      </div>
    </div>
  <?php endforeach; ?>
</div>
