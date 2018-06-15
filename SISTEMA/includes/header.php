<!-- Função Menu -->
<?php

function _m($m){
  if (MENU == $m){
    echo ' class = "nav-item active"';
  }
}
function __m($m){
  if (MENU == $m){
    echo 'active';
  }
}
?>
<!-- Função Menu -->

<!-- Barra de navegação -->
<meta name="msapplication-navbutton-color" content="#d55532">
<meta name="apple-mobile-web-app-status-bar-style" content="#d55532">
<meta name="theme-color" content="#d55532">
<!-- Barra de navegação -->

<!-- VERSÃO BOOTSTRAP 4.1 -->
<!-- Reboot -->
<link rel="stylesheet" href="<?=U?>assets/css/bootstrap-reboot.min.css">
<link rel="stylesheet" href="<?=U?>assets/css/bootstrap.min.css">
<!-- Jquery -->
<script src="https://code.jquery.com/jquery-3.0.0.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="<?=U?>assets/js/bootstrap.min.js"></script>
<!-- Mask JS-->
<script src="<?=U?>assets/js/jquery.mask.min.js"></script>
<!-- VERSÃO BOOTSTRAP 4.1 -->

<!-- VERSÃO WILLIAN ADDONS -->
<!-- CSS Principal -->
<link rel="stylesheet" href="<?=U?>assets/css/custom.css">
<!-- LightBox -->
<link rel="stylesheet" href="<?=U?>assets/css/ekko-lightbox.css">
<!-- FontAwesone -->
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<!-- VERSÃO WILLIAN ADDONS -->

<head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">
    logo
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navBarPrincipal" aria-controls="navBarPrincipal" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navBarPrincipal">
    <ul class="navbar-nav mr-auto">
      <li <?=_m(0)?> class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
