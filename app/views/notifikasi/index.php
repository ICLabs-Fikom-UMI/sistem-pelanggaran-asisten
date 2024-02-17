
<link rel="stylesheet" href="<?=BASEURL;?>/assets/css/style2.css">
<!-- BAGIAN DATA NOTIFIKASI -->
<div class="container"><br>
    <?php if ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'korlab') : ?>
    <!-- <a data-bs-toggle="modal" data-bs-target="#myModal" class="btn btn-dark mb-3 button-style" onclick="tambahDataNotifikasi()">Tambah Data</a> -->
    <a data-bs-toggle="modal" data-bs-target="#myModal" class="btn btn-dark mb-3 button-style" onclick="add('Notifikasi')">Tambah Data</a>
    <?php endif; ?>
    <h3><?= $data['title'];?></h3>
    <div class="overflow-auto" style="max-height: 62vh;">
        <table id="example" class="table" style="width:100%">
            <thead class="table-light">
                <tr class="table-secondary">
                    <th scope="col" style="width:5%;" class="text-center">No</th>
                    <?php if ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'korlab') : ?>
                    <th scope="col">Nama</th>
                    <?php endif; ?>
                    <th scope="col">Desktripsi Pesan</th>
                    <th scope="col">Tanggal</th>
                    <?php if ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'korlab') : ?>
                    <th scope="col"  style="width:10%" class="text-center">Menu</th>
                    <?php endif; ?>
                </tr>
            </thead>
            <tbody>
                <?php $no=0; foreach  ($data['notifikasi'] as $notifikasi) : $no++;?>
                <tr>
                    <td align="center"><?= $no;?></td>
                    <?php if ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'korlab') : ?>
                        <td><?= $notifikasi['nama'];?></td>
                        <?php endif; ?>
                        <td><?= $notifikasi['pesan'];?></td>
                        <td><?= $notifikasi['tanggal'];?></td>
                        <?php if ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'korlab') : ?>
                        <td align="center">
                            <div class="btn-group" role="group" aria-label="Basic outlined example">
                                <a class="btn btn-dark button-style text-center" onclick="change('Notifikasi', '<?= $notifikasi['ID_Notifikasi']; ?>')" role="button" data-bs-toggle="modal" data-bs-target="#myModal"><i class="fa fa-file"></i></a>
                                <!-- <a class="btn btn-dark button-style text-center" onclick="hapusNotifikasi('<?= $notifikasi['ID_Notifikasi']; ?>')" role="button"  data-bs-toggle="modal" data-bs-target="#myModal"><i class="fa fa-trash"></i></a> -->
                                <a class="btn btn-dark button-style text-center" onclick="deleteData('Notifikasi', '<?= $notifikasi['ID_Notifikasi']; ?>')" role="button" data-bs-toggle="modal" data-bs-target="#myModal"><i class="fa fa-trash"></i></a>
                            </div>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
