<div class="main-container d-flex">
    <div class="sidebar" id="side_nav"><br>
        <ul class="list-unstyled px-2">
            <li class="">
                <a href="<?= BASEURL?>" class="text-decoration-none px-3 py-2 d-block">
                    <i class="fa fa-home"></i> Dashboard
                </a>
            </li>
            <li class="">
                <a href="<?= BASEURL?>/Pelanggaran" class="text-decoration-none px-3 py-2 d-block">
                    <i class="fa fa-file"></i> Data Pelanggaran
                </a>
            </li>
            <?php if ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'korlab') : ?>
                <?php if ($_SESSION['role'] == 'admin' || !$_SESSION['role'] == 'korlab') : ?>
                <li class="">
                    <a href="<?= BASEURL?>/Asisten" class="text-decoration-none px-3 py-2 d-block d-flex justify-content-between">
                        <!-- <i class="fa fa-data"></i> Data Pelanggaran -->
                        <span><i class="fa fa-list"></i> Data Asisten</span>
                    </a>
                </li>            
                    <?php endif; ?>
            <li class="">
                <a href="<?= BASEURL?>/jk" class="text-decoration-none px-3 py-2 d-block d-flex justify-content-between">
                    <!-- <i class="fa fa-data"></i> Data Pelanggaran -->
                    <span><i class="fa fa-list"></i> Jenis Kelakuan</span>
                </a>
            </li>
            <li class="">
                <a href="<?= BASEURL?>/tindakLanjut" class="text-decoration-none px-3 py-2 d-block d-flex justify-content-between">
                    <!-- <i class="fa fa-data"></i> Data Pelanggaran -->
                    <span><i class="fa fa-list"></i> Tindak Lanjut</span>
                </a>
            </li>
            <?php endif?>
        </ul>
    </div>

<!-- BAGIAN KONTEN -->
<!-- <div class="content"> -->