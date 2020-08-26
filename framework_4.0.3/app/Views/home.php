<?php foreach ($content_blocks as $i): ?>

<section class="content_section" id=<?= 'content_'.esc($i['u']); ?>>
  <div class="">
    <h3><?= esc($i['s']); ?></h3>
    <div class="">
      <p><?= esc($i['t']); ?></p>
    </div>
  </div>
</section>

<?php endforeach; ?>
