<link rel="stylesheet" href="<?=BASEURL;?>/assets/css/style2.css">
<!-- BAGIAN DATA PELANGGARAN -->
<div class="container"><br>
    <?php if ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'korlab') : ?>
    <!-- <a href="<?= BASEURL?>/Pelanggaran/modalTambah" class="btn btn-dark mb-3 button-style">Tambah Data</a> -->
    <a data-bs-toggle="modal" data-bs-target="#myModal" class="btn btn-dark mb-3 button-style" onclick="tambahDataPelanggaran()">Tambah Data</a>
    <?php endif;?>
    <h4><?= $data['title'];?></h4>

    <!-- BAGIAN CARI DATA -->
    <div class="my-3">
        <input type="text" class="form-control" id="searchInput" oninput="cari()" placeholder="Cari Data">
    </div>

    <div class="col-12">
        <table class="table table-hover">
        <thead class="table-light">
            <tr class="table-header" style="background: #EFEDED">
            <th scope="col" style="width:5%;" class="text-center">No</th>
            <?php if ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'korlab') : ?>
            <th scope="col">Stambuk</th>
            <th scope="col">Nama</th>
            <?php endif;?>
            <th scope="col">Detail Pelanggaran</th>
            <th scope="col" class="text-center">Tanggal</th>
            <th scope="col" class="text-center">Tindak Lanjut</th>
            <?php  if($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'korlab') : ?>
                <th scope="col" colspan="3" class="text-center">Menu</th>
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
                <td><?= $pelanggaran['jenis_kelakuan'];?></td>
                <td align="center"><?= $pelanggaran['tanggal'];?></td>
                <td align="center"><?= $pelanggaran['tindak_lanjut'];?></td>
                <?php if (!($_SESSION['role'] == 'asisten')) : ?>
                <td align="center">
                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                        <a class="btn btn-dark button-style text-center" onclick="ubahdataPelanggaran('<?= $pelanggaran['ID_Pelanggaran']; ?>')" role="button" data-bs-toggle="modal" data-bs-target="#myModal"><i class="fa fa-file"></i></a>
                        <a class="btn btn-dark button-style text-center" onclick="hapusdataPelanggaran('<?= $pelanggaran['ID_Pelanggaran']; ?>')" role="button"  data-bs-toggle="modal" data-bs-target="#myModal"><i class="fa fa-trash"></i></a>
                    </div>
                </td>
                <?php endif;?>
            </tr>
            <?php endforeach; ?>
        </tbody>
        </table>
    </div>
</div>
