<nav class="light-blue lighten-1" role="navigation">

  <div class="nav-wrapper container">

    <a id="logo-container" href="#" class="brand-logo">
      <img src=<?= base_url('assets/img/logo.svg') ?> />
    </a>

    <ul class="right hide-on-med-and-down">
      <?= $this->include('includes\navs') ?>
    </ul>

    <ul id="nav-mobile" class="sidenav">
      <?= $this->include('includes\navs') ?>
    </ul>

    <a href="#" data-target="nav-mobile" class="right sidenav-trigger"><i class="material-icons">menu</i></a>

  </div>
</nav>
