<div class="section no-pad-bot full_height_section home_banner_section" id="index-banner">
  <div class="container home_banner_container">
    <br><br>
    <div class="row center">
      <img src=<?= base_url('assets/img/logo.svg') ?> class="home_banner_logo" />
        <?php foreach (["medical", "website", "design"] as $v): ?>
          <p class="home_banner_text"><?php echo $v; ?></p>
        <?php endforeach; ?>
    </div>
  </div>
</div>

<style>
  .home_banner_section {
    background: grey;
    display: flex;
    align-items: center;
  }
  .home_banner_logo {
    width: 80vw;
    align-items: center;
  }
  .home_banner_text {
    line-height: 0.2;
    font-size: 10vh;
    font-family: UbuntuTitling-Bold;
  }
</style>
