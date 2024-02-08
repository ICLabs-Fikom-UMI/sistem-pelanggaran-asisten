<link rel="stylesheet" href="<?=BASEURL;?>/assets/css/style2.css">
<!-- BAGIAN DATA ANGKATAN -->
<div class="container"><br>
    <a data-bs-toggle="modal" data-bs-target="#myModal" class="btn btn-dark mb-3 button-style" onclick="tambahDataAngkatan()">Tambah Data</a>
    <h5><?= $data['title'];?></h5>
    <div class="overflow-x-hidden" style="max-height: 62vh;">
        <table id="example" class="table" style="width:100%">
            <thead class="table-light">
                <tr class="table-secondary">
                    <th scope="col" style="width:5%;" class="text-center">No</th>
                    <th scope="col">Angkatan</th>
                    <th scope="col"  style="width:10%" class="text-center">Menu</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=0; foreach  ($data['angkatan'] as $angkatan) : $no++;?>
                <tr>
                    <td align="center"><?= $no;?></td>
                    <td><?= $angkatan['angkatan'];?></td>
                    <td align="center">
                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                            <a class="btn btn-dark button-style text-center" onclick="ubahdataAngkatan('<?= $angkatan['ID_Angkatan']; ?>')" role="button" data-bs-toggle="modal" data-bs-target="#myModal"><i class="fa fa-file"></i></a>
                            <a class="btn btn-dark button-style text-center" onclick="hapusAngkatan('<?= $angkatan['ID_Angkatan']; ?>')" role="button"  data-bs-toggle="modal" data-bs-target="#myModal"><i class="fa fa-trash"></i></a>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
