<nav class="light-blue lighten-1" role="navigation">

  <div class="nav-wrapper container">

    <a id="logo-container" href="/" class="brand-logo">
      <img id="nav-logo" src=<?= base_url('assets/img/logo.svg') ?> />
      <p class="corp-font">medweb</p>
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

<script>
document.addEventListener('DOMContentLoaded', function() {
  var options = '';
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
  });
</script>

<style>
  .corp-font {
    margin: 0;
    font-size: 5vw;
    font-family: UbuntuTitling-Bold;
  }
  #logo-container {
    display: flex;
    /* align-items: center;
    justify-content: center; */
  }
  #nav-logo {
    width: 50px;
  }
</style>
