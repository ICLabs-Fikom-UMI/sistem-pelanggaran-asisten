<link rel="stylesheet" href="<?=BASEURL;?>/assets/css/style2.css">
<!-- BAGIAN DATA JENIS KELAKUAN -->
<div class="container"><br>
    <a href="<?= BASEURL?>/JK/modalTambah" class="btn btn-dark mb-3 button-style">Tambah Data</a>
    <h4><?= $data['title'];?></h4>
    <table class="table table-striped">
    <thead>
        <tr class="table-header" style="background: #EFEDED">
        <th scope="col">No</th>
        <th scope="col">Jenis Kelakuan</th>
        <th scope="col" colspan="3" class="text-center">Menu</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=0; foreach  ($data['jenisKelakuan'] as $jenisKelakuan) : $no++;?>
        <tr>
            <td><?= $no;?></td>
            <td><?= $jenisKelakuan['jenis_kelakuan'];?></td>
            <td align="center">
                <div class="btn-group" role="group" aria-label="Basic outlined example">
                    <a class="btn btn-dark button-style text-center" onclick="ubahdataJK('<?= $jenisKelakuan['ID_jenisKelakuan']; ?>')" role="button" data-bs-toggle="modal" data-bs-target="#myModal"><i class="fa fa-file"></i></a>
                    <a class="btn btn-dark button-style text-center" onclick="hapusjk('<?= $jenisKelakuan['ID_jenisKelakuan']; ?>')" role="button"  data-bs-toggle="modal" data-bs-target="#myModal"><i class="fa fa-trash"></i></a>
                </div>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
</div>

