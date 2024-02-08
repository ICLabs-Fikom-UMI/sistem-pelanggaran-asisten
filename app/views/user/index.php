<link rel="stylesheet" href="<?=BASEURL;?>/assets/css/style2.css">
<!-- BAGIAN DATA USER -->
<div class="container"><br>
<?php if (($_SESSION['role'] == 'admin')) : ?>
    <?php if (($_SESSION['role'] == 'admin')) : ?>
    <a data-bs-toggle="modal" data-bs-target="#myModal" class="btn btn-dark mb-3 button-style" onclick="tambahDataUser()">Tambah Data</a>
    <?php endif;?>
    <h5><?= $data['title'];?></h5>
    <div class="overflow-x-hidden" style="max-height: 62vh;">
    <table id="example" class="table" style="width:100%">
    <thead class="table-light">
        <tr class="table-secondary">
            <th scope="col" style="width:5%;" class="text-center">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Username</th>
            <th scope="col">Password</th>
            <th scope="col">Role</th>
            <th scope="col"  style="width:10%" class="text-center">Menu</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=0; foreach  ($data['user'] as $user) : $no++;?>
        <tr>
            <td align="center"><?= $no;?></td>
            <td><?= $user['nama'];?></td>
            <td><?= $user['username'];?></td>
            <td><?= str_repeat('*', strlen($user['password'])); ?></td>
            <td><?= $user['role'];?></td>
            <td align="center">
                <div class="btn-group" role="group" aria-label="Basic outlined example">
                    <a class="btn btn-dark button-style text-center" onclick="ubahdataUser('<?= $user['ID_User']; ?>')" role="button" data-bs-toggle="modal" data-bs-target="#myModal"><i class="fa fa-file"></i></a>
                    <a class="btn btn-dark button-style text-center" onclick="hapusUser('<?= $user['ID_User']; ?>')" role="button"  data-bs-toggle="modal" data-bs-target="#myModal"><i class="fa fa-trash"></i></a>
                </div>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
</div>
<?php endif;?>
<!-- BAGIAN DATA USER -->
<?php if (($_SESSION['role'] == 'asisten')) : ?>
<h5><?= $data['title'];?></h5>
    <?php foreach  ($data['user'] as $user) :?>
    <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="<?= BASEURL;?>/assets/img/profile.png" class="img-fluid rounded-start" alt="Foto Profile">
            <!-- <img src="#" class="img-fluid rounded-start" alt="Foto Profile"> -->
            </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title"><?= $user['nama'];?></h5>
                <h6 class="card-subtitle mb-2 text-body-secondary"><?= $user['username'];?></h6>
                <a onclick="ubahdataUser('<?= $user['ID_User']; ?>')" role="button" data-bs-toggle="modal" data-bs-target="#myModal" style="text-align: right;">UBAH DATA</a>
            </div>
        </div>
    </div>
    </div>
    <!-- <a class="btn btn-dark button-style text-center" onclick="ubahdataUser('<?= $user['ID_User']; ?>')" role="button" data-bs-toggle="modal" data-bs-target="#myModal"><i class="fa fa-file"></i></a> -->
    <?php endforeach; ?>
<?php endif;?>
</div>