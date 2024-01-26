<link rel="stylesheet" href="<?=BASEURL;?>/assets/css/style2.css">
<!-- BAGIAN DATA PELANGGARAN -->
<div class="container"><br>
    <a href="<?= BASEURL?>/Pelanggaran/modalTambah" class="btn btn-dark mb-3 button-style">Tambah Data</a>
    <h4><?= $data['title'];?></h4>
    <div class="col-12">
        <table class="table table-striped">
        <thead>
            <tr class="table-header" style="background: #EFEDED">
            <th scope="col">No</th>
            <th scope="col">Stambuk</th>
            <th scope="col">Nama</th>
            <th scope="col">Detail Pelanggaran</th>
            <th scope="col">Tanggal</th>
            <?php  if($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'korlab') : ?>
                <th scope="col" colspan="3" class="text-center">Menu</th>
            <?php endif;?>
            </tr>
        </thead>
        <tbody>
            <?php $no=0; foreach  ($data['pelanggaran'] as $pelanggaran) : $no++;?>
            <tr>
                <td><?= $no;?></td>
                <td><?= $pelanggaran['stambuk'];?></td>
                <td><?= $pelanggaran['nama'];?></td>
                <td><?= $pelanggaran['detail_pelanggaran'];?></td>
                <td><?= $pelanggaran['tanggal'];?></td>
                <?php  if($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'korlab') : ?>
                <td align="center">
                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                        <a class="btn btn-dark button-style text-center" onclick="ubahdataPelanggaran('<?= $pelanggaran['ID_Pelanggaran']; ?>')" role="button" data-bs-toggle="modal" data-bs-target="#myModal"><i class="fa fa-file"></i></a>
                        <a class="btn btn-dark button-style text-center" onclick="hapus('<?= $pelanggaran['ID_Pelanggaran']; ?>')" role="button"  data-bs-toggle="modal" data-bs-target="#myModal"><i class="fa fa-trash"></i></a>
                    </div>
                </td>
                <?php endif;?>
            </tr>
            <?php endforeach; ?>
        </tbody>
        </table>
    </div>
</div>

