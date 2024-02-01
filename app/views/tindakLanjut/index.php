<link rel="stylesheet" href="<?=BASEURL;?>/assets/css/style2.css">
<!-- BAGIAN DATA TINDAK LANJUT -->
<div class="container"><br>
    <!-- <a href="<?= BASEURL?>/TindakLanjut/modalTambah" class="btn btn-dark mb-3 button-style">Tambah Data</a> -->
    <a data-bs-toggle="modal" data-bs-target="#myModal" class="btn btn-dark mb-3 button-style" onclick="tambahDataTL()">Tambah Data</a>
    <h4><?= $data['title'];?></h4>

    <!-- BAGIAN CARI DATA -->
    <div class="my-3">
        <input type="text" class="form-control" id="searchInput" oninput="cari()" placeholder="Cari Data">
    </div>

    <table class="table table-hover">
    <thead class="table-light">
        <tr>
        <th scope="col" style="width:5%;" class="text-center">No</th>
        <th scope="col">Tindak Lanjut</th>
        <th scope="col" colspan="3" style="width:10%" class="text-center">Menu</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=0; foreach  ($data['tindakLanjut'] as $tindakLanjut) : $no++;?>
        <tr>
            <td align="center"><?= $no;?></td>
            <td><?= $tindakLanjut['tindak_lanjut'];?></td>
            <td align="center">
                <div class="btn-group" role="group" aria-label="Basic outlined example">
                    <a class="btn btn-dark button-style text-center" onclick="ubahdataTL('<?= $tindakLanjut['ID_TindakLanjut']; ?>')" role="button" data-bs-toggle="modal" data-bs-target="#myModal"><i class="fa fa-file"></i></a>
                    <a class="btn btn-dark button-style text-center" onclick="hapusTL('<?= $tindakLanjut['ID_TindakLanjut']; ?>')" role="button"  data-bs-toggle="modal" data-bs-target="#myModal"><i class="fa fa-trash"></i></a>
                </div>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
</div>

