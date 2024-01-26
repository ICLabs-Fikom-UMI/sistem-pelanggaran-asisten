<!-- BAGIAN SIDEBAR -->


<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- LOGO WEB LGuard -->
    <a href="<?= BASEURL?>" class="brand-link">
      <img src="<?= BASEURL?>/assets/img/logo.png" alt="Logo LGuard" class="brand-image img-circle elevation-3" style="opacity: .8" width="100px">
      <h6 class="brand-text font-weight-light">LGuard</h6>
    </a>
    <!-- BAGIAN SIDEBAR -->
    <div class="sidebar">
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>
      <!-- MENU DARI SIDEBAR -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item menu-open">
            <a href="<?= BASEURL?>" class="nav-link ">
              <p>Dashboard</p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= BASEURL?>/Asisten" class="nav-link">
                  <p>Data Asisten</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </aside>

<!-- BAGIAN KONTEN SEBELAH KANAN -->
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div>
        </div>
      </div>
    </div>

<!-- BAGIAN KONTEN -->
<div class="content">