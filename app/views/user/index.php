<link rel="stylesheet" href="<?=BASEURL;?>/assets/css/style2.css">
<!-- BAGIAN DATA USER -->
<div class="container"><br>
<?php if (($_SESSION['role'] == 'admin')) : ?>
    <?php if (($_SESSION['role'] == 'admin')) : ?>
    <!-- <a data-bs-toggle="modal" data-bs-target="#myModal" class="btn btn-dark mb-3 button-style" onclick="tambahDataUser()">Tambah Data</a> -->
    <a data-bs-toggle="modal" data-bs-target="#myModal" class="btn btn-dark mb-3 button-style" onclick="add('User')">Tambah Data</a>
    <?php endif;?>
    <h3><?= $data['title'];?></h3>
    <?php Flasher::flash();?>
    <div class="overflow-x-hidden" style="height: 68vh;">
    <table id="example" class="table" style="width:100%">
    <thead class="table-light">
        <tr class="table-secondary">
            <th scope="col" style="width:5%;" class="text-center">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Username</th>
            <th scope="col">Password</th>
            <th scope="col">Role</th>
            <th scope="col" class="text-center">Foto</th>
            <th scope="col"  style="width:10%" class="text-center">Menu</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=0; foreach  ($data['user'] as $user) : $no++;?>
        <tr>
            <td align="center"><?= $no;?></td>
            <td><?= $user['nama'];?></td>
            <td><?= $user['username'];?></td>
            <td>********</td>
            <td><?= $user['role'];?></td>
            <td class="text-center"><img src="<?= BASEURL; ?>/<?= $user['photo_path'] ?>" alt="Foto" style="max-width: 100px; max-height: 100px;"></td>
            <!-- <td>
                <img src="<?= BASEURL; ?>/<?= $user['photo_path'] ?>" 
                    alt="User Photo" 
                    onerror="this.onerror=null; this.src='<?= BASEURL; ?>/assets/img/Icon User.png';" 
                    style="max-width: 100px;">
            </td> -->
            <td align="center">
                <div class="btn-group" role="group" aria-label="Basic outlined example">
                    <a class="btn btn-dark button-style text-center" onclick="change('User', '<?= $user['ID_User']; ?>')" role="button" data-bs-toggle="modal" data-bs-target="#myModal"><i class="fa fa-file"></i></a>
                    <!-- <a class="btn btn-dark button-style text-center" onclick="hapusUser('<?= $user['ID_User']; ?>')" role="button"  data-bs-toggle="modal" data-bs-target="#myModal"><i class="fa fa-trash"></i></a> -->
                    <a class="btn btn-dark button-style text-center" onclick="deleteData('User', '<?= $user['ID_User']; ?>')" role="button" data-bs-toggle="modal" data-bs-target="#myModal"><i class="fa fa-trash"></i></a>
                </div>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
</div>
<?php endif;?>
<!-- BAGIAN DATA USER -->
<?php if ($_SESSION['role'] == 'asisten' || $_SESSION['role'] == 'korlab') : ?>
<h3><?= $data['title'];?></h3>
    <div class="col-6">
        <?php Flasher::flash();?>
    </div>
    <?php foreach  ($data['user'] as $user) :?>
    <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="<?= BASEURL; ?>/<?= $user['photo_path'] ?>" alt="Foto" class="img-fluid">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h3 class="card-title"><?= $user['nama'];?></h3>
                <h6 class="card-subtitle mb-2 text-body-secondary"><?= $user['username'];?></h6>
                <!-- <a onclick="ubahdataUser('<?= $user['ID_User']; ?>')" role="button" data-bs-toggle="modal" data-bs-target="#myModal" style="text-align: right;">UBAH DATA</a> -->
                <a onclick="change('User', '<?= $user['ID_User']; ?>')" role="button" data-bs-toggle="modal" data-bs-target="#myModal" style="text-align: right;">UBAH DATA</a>
            </div>
        </div>
    </div>
    </div>
    <?php endforeach; ?>
<?php endif;?>
</div>