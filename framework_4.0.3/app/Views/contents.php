<section class="main_content">

  <div class="container" id="content_hero">
    <div class="item">
      <div class="centered-container">
        <img alt="Visit medweb" height="500"
        src="<?= esc($logo); ?>" />
        <h1 id="main-title"><?= esc($title); ?></h1>                
      </div>
    </div>
  </div>

  <div class="container" id="content_0">
    <div class="item">
      <h3><?= esc($content_blocks[0]['title']); ?></h3>

      <div class="">
        <p><?= esc($content_blocks[0]['desc']); ?></p>
      </div>
    </div>
  </div>

  <div class="container" id="contact">
    <div class="item">
      <img alt="Visit medweb" height="50px"
        src="<?= esc($logo); ?>" />
    </div>
  </div>

</section>
