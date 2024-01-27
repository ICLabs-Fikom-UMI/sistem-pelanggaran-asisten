<link rel="stylesheet" href="<?=BASEURL;?>/assets/css/style2.css">
<!-- BAGIAN DATA JENIS KELAKUAN -->
<div class="container"><br>
    <a href="<?= BASEURL?>/JK/modalTambah" class="btn btn-dark mb-3 button-style">Tambah Data</a>
    <h4><?= $data['title'];?></h4>
    <table class="table table-hover">
    <thead class="table-light">
        <tr class="table-header" style="background: #EFEDED">
        <th scope="col" class="text-center" style="width:5%;">No</th>
        <th scope="col">Jenis Kelakuan</th>
        <th scope="col" colspan="3" class="text-center" style="width:10%;">Menu</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=0; foreach  ($data['jenisKelakuan'] as $jenisKelakuan) : $no++;?>
        <tr>
            <td align="center"><?= $no;?></td>
            <td><?= $jenisKelakuan['jenis_kelakuan'];?></td>
            <td align="center">
                <div class="btn-group" role="group" aria-label="Basic outlined example">
                    <a class="btn btn-dark button-style text-center" onclick="ubahdataJK('<?= $jenisKelakuan['ID_JenisKelakuan']; ?>')" role="button" data-bs-toggle="modal" data-bs-target="#myModal"><i class="fa fa-file"></i></a>
                    <a class="btn btn-dark button-style text-center" onclick="hapusJK('<?= $jenisKelakuan['ID_JenisKelakuan']; ?>')" role="button"  data-bs-toggle="modal" data-bs-target="#myModal"><i class="fa fa-trash"></i></a>
                </div>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
</div>

