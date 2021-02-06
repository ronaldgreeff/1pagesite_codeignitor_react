<header>
  <nav class="lighten-1" role="navigation">

    <div id="nav-menu" class="nav-wrapper container">

      <a id="logo-container" href="/" class="brand-logo flex-middle-center">
        <img id="nav-logo" class="" src=<?= base_url('assets/img/text_logo.svg') ?> />
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
