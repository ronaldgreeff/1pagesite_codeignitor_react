<div class="section no-pad-bot full_page_section home_banner_section flex_align_center" id="index-banner">
  <div class="container home_banner_container">
    <br><br>
    <div class="row center">
      <div class="col s12">
        <img src=<?= base_url('assets/img/logo.svg') ?> class="home_banner_logo" />
      </div>
      <div class="col s12">
        <?php foreach (["medical", "website", "design"] as $v): ?>
          <p class="home_banner_text"><?php echo $v; ?></p>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>

<style>
  .home_banner_section {
    background: grey;
  }
  .home_banner_logo {
    width: 100%;
    align-items: center;
  }
  .home_banner_text {
    line-height: 0.2;
    font-size: 10vh;
    font-family: UbuntuTitling-Bold;
  }
</style>
