<link rel="stylesheet" href="<?=BASEURL;?>/assets/css/style2.css">
<!-- BAGIAN DATA PELANGGARAN -->
<div class="container"><br>
    <?php if ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'korlab') : ?>
    <a data-bs-toggle="modal" data-bs-target="#myModal" class="btn btn-dark mb-3 button-style" onclick="add('Pelanggaran')">Tambah Data</a>
    <?php endif;?>
    <h3><?= $data['title'];?></h3>
    <?php Flasher::flash();?>
    <div class="overflow-auto" style="height: 68vh;">
        <table id="example" class="table" style="width:100%">
            <thead class="table-light">
                <tr class="table-secondary">
                    <th scope="col" style="width:5%;" class="text-center">No</th>
                    <?php if ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'korlab') : ?>
                        <th scope="col">Stambuk</th>
                        <th scope="col">Nama</th>
                    <?php endif;?>
                    <th scope="col">Deskripsi Pelanggaran</th>
                    <th scope="col" class="text-center">Tanggal</th>
                    <th scope="col" class="text-center">Tindak Lanjut</th>
                    <?php  if($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'korlab') : ?>
                        <th scope="col" class="text-center">Menu</th>
                    <?php endif;?>
                </tr>
            </thead>
            <tbody>
                <?php $no=0; foreach  ($data['pelanggaran'] as $pelanggaran) : $no++;?>
                <tr>
                    <td align="center"><?= $no;?></td>
                    <?php if ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'korlab') : ?>
                    <td><?= $pelanggaran['stambuk'];?></td>
                    <td><?= $pelanggaran['nama'];?></td>
                    <?php endif;?>
                    <td><?= $pelanggaran['pelanggaran'];?></td>
                    <td align="center"><?= $pelanggaran['tanggal'];?></td>
                    <!-- <td align="center"><?= date('d-m-Y H:i:s', strtotime($pelanggaran['tanggal'])); ?></td> -->
                    <td align="center"><?= $pelanggaran['tindak_lanjut'];?></td>
                    <?php if ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'korlab') : ?>
                    <td align="center">
                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                            <a class="btn btn-dark button-style text-center" onclick="change('Pelanggaran', '<?= $pelanggaran['ID_Pelanggaran']; ?>')" role="button" data-bs-toggle="modal" data-bs-target="#myModal"><i class="fa fa-file"></i></a>
                            <a class="btn btn-dark button-style text-center" onclick="deleteData('Pelanggaran', '<?= $pelanggaran['ID_Pelanggaran']; ?>')" role="button" data-bs-toggle="modal" data-bs-target="#myModal"><i class="fa fa-trash"></i></a>
                        </div>
                    </td>
                    <?php endif;?>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>