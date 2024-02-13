<div class="main-container d-flex">
    <div class="sidebar" id="side_nav"><br>
        <ul class="list-unstyled px-2">
            <!-- <?php if ($_SESSION['role'] == 'asisten') : ?>
            <?php endif; ?> -->
            <?php if ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'korlab') : ?>
            <li class="">
                <a href="<?= BASEURL?>" class="text-decoration-none px-3 py-2 d-block">
                    <i class="fa fa-home"></i> Dashboard
                </a>
            </li>
            <?php endif; ?>
            <li class="">
                <a href="<?= BASEURL?>/Pelanggaran" class="text-decoration-none px-3 py-2 d-block">
                    <i class="fa fa-file"></i> Data Pelanggaran
                </a>
            </li>
            <?php if ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'korlab') : ?>
            <?php if ($_SESSION['role'] == 'admin' || !$_SESSION['role'] == 'korlab') : ?>
            <li class="">
                <a href="<?= BASEURL?>/Asisten" class="text-decoration-none px-3 py-2 d-block d-flex justify-content-between">
                    <span><i class="fa fa-database"></i> Data Asisten</span>
                </a>
            </li>            
            <?php endif; ?>
            <li class="">
                <a href="<?= BASEURL?>/tindakLanjut" class="text-decoration-none px-3 py-2 d-block d-flex justify-content-between">
                    <span><i class="fa fa-exclamation-circle"></i> Tindak Lanjut</span>
                </a>
            </li>
            <?php endif?>
            <li class="">
                <a href="<?= BASEURL?>/Notifikasi" class="text-decoration-none px-3 py-2 d-block d-flex justify-content-between">
                    <span><i class="fa fa-bell"></i> Notifikasi</span>
                </a>
            </li>
            <?php if ($_SESSION['role'] == 'admin') : ?>         
            <li class="">
                <a href="<?= BASEURL?>/User" class="text-decoration-none px-3 py-2 d-block d-flex justify-content-between">
                    <span><i class="fa fa-list"></i> Data User</span>
                </a>
            </li>            
            <?php endif; ?>
        </ul><br>
        <!-- <div class="ml-auto text-center">
            <a class="nav-link" href="<?= BASEURL?>" id="logoutLink">
                <i class="fa-solid fa-arrow-right-from-bracket"></i>
            </a>
        </div><br> -->
    </div>

<!-- BAGIAN KONTEN -->
<!-- <div class="content"> -->