<!-- <?php
  session_start();
  $id = $_SESSION['ID_User'];
?> -->
<?php
  session_start();
  $nama_user = isset($_SESSION['ID_User']) ? $_SESSION['nama'] : '';
?>
<!-- BAGIAN TOPBAR -->
<body>
<div class="wrapper">
  <!-- NAVBAR -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-dark">
    <div class="container-fluid">    
      <?php if ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'korlab') : ?>
      <a class="navbar-brand ml-5" href="<?= BASEURL?>">
        <img src="<?= BASEURL ?>/assets/img/logo-dark.png" alt="Logo LGuard" width="50px"> 
      </a>
      <?php endif; ?>
      <?php if ($_SESSION['role'] == 'asisten') : ?>
      <a class="navbar-brand ml-5" href="<?= BASEURL?>/Pelanggaran">
        <img src="<?= BASEURL ?>/assets/img/logo-dark.png" alt="Logo LGuard" width="50px"> 
      </a>
      <?php endif; ?>
      <ul class="navbar-nav ml-auto"> 
        <div style="display: flex; align-items: center;">           
          <div class="info" style="margin-right: 30px;"  data-bs-toggle="modal" data-bs-target="myModal">
              <!-- <a href="<?= BASEURL ?>" class="d-block" style="color: #ffffff; text-decoration:none;"><?= $id ?></a> -->
              <?php if ($_SESSION['role'] == 'admin') : ?>
              <a href="<?= BASEURL ?>" class="d-block" style="color: #ffffff; text-decoration:none;"><?= $nama_user ?></a>
              <?php endif;?>
              <?php if ($_SESSION['role'] == 'asisten' || $_SESSION['role'] == 'korlab') : ?>
                <a href="<?= BASEURL ?>/User" class="d-block" style="color: #ffffff; text-decoration:none;"><?= $nama_user ?></a>
              <?php endif;?>
            </div>
          <div class="image mr-2" style="margin-right: 10px;"> 
              <i class="far fa-user"></i> 
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

