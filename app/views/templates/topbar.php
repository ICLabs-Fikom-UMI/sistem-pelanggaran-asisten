<?php
  session_start();
  $nama = $_SESSION['ID_User'];
?>
<!-- BAGIAN TOPBAR -->
<body>
<div class="wrapper">
  <!-- NAVBAR -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-dark">
    <div class="container-fluid">    
      <a class="navbar-brand ml-5" href="<?= BASEURL?>">
        <img src="<?= BASEURL ?>/assets/img/logo-dark.png" alt="Logo LGuard" width="50px"> 
        Navbar
      </a>
      <ul class="navbar-nav ml-auto">
        <div style="display: flex; align-items: center;">
          <div class="image mr-2" style="margin-right: 10px;">
              <i class="far fa-user"></i> 
          </div>
          <div class="info" style="margin-right: 30px;"  data-bs-toggle="modal" data-bs-target="myModal">
              <a href="<?= BASEURL ?>" class="d-block" style="color: #ffffff; text-decoration:none;"><?= $nama ?></a>
          </div>
          <div>
              <li class="nav-item mr-2">
                <a class="nav-link" href="<?= BASEURL?>" id="logoutLink">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                </a>
              </li>
          </div>
        </div>
      </ul>
    </div>
  </nav>

