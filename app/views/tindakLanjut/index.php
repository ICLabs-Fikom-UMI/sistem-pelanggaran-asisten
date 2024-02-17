<link rel="stylesheet" href="<?=BASEURL;?>/assets/css/style2.css">
<!-- BAGIAN DATA TINDAK LANJUT -->
<div class="container"><br>
    <a data-bs-toggle="modal" data-bs-target="#myModal" class="btn btn-dark mb-3 button-style" onclick="add('TindakLanjut')">Tambah Data</a>
    <h3><?= $data['title'];?></h3>
    <div class="overflow-x-hidden" style="height: 68vh;">
        <table id="example" class="table" style="width:100%">
            <thead class="table-light">
                <tr class="table-secondary">
                    <th scope="col" style="width:5%;" class="text-center">No</th>
                    <th scope="col">Tindak Lanjut</th>
                    <th scope="col"  style="width:10%" class="text-center">Menu</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=0; foreach  ($data['tindakLanjut'] as $tindakLanjut) : $no++;?>
                <tr>
                    <td align="center"><?= $no;?></td>
                    <td><?= $tindakLanjut['tindak_lanjut'];?></td>
                    <td align="center">
                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                            <a class="btn btn-dark button-style text-center" onclick="change('TindakLanjut', '<?= $tindakLanjut['ID_TindakLanjut']; ?>')" role="button" data-bs-toggle="modal" data-bs-target="#myModal"><i class="fa fa-file"></i></a>
                            <!-- <a class="btn btn-dark button-style text-center" onclick="hapusTL('<?= $tindakLanjut['ID_TindakLanjut']; ?>')" role="button"  data-bs-toggle="modal" data-bs-target="#myModal"><i class="fa fa-trash"></i></a> -->
                            <a class="btn btn-dark button-style text-center" onclick="deleteData('TindakLanjut', '<?= $tindakLanjut['ID_TindakLanjut']; ?>')" role="button" data-bs-toggle="modal" data-bs-target="#myModal"><i class="fa fa-trash"></i></a>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
