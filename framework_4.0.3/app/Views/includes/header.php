<header>
  <nav class="light-blue lighten-1" role="navigation">

    <div class="nav-wrapper container">

      <a id="logo-container" href="/" class="brand-logo">
        <img id="nav-logo" src=<?= base_url('assets/img/logo.svg') ?> />
        <p class="ubuntu-titling-bold corp-font">medweb</p>
      </a>

      <ul class="right hide-on-med-and-down">
        <?= $this->include('includes\navs') ?>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <?= $this->include('includes\navs') ?>
      </ul>

      <a href="#" data-target="nav-mobile" class="right sidenav-trigger">
        <i class="material-icons">menu</i>
      </a>

    </div>
  </nav>
</header>
