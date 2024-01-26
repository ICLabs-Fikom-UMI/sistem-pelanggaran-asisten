<link rel="stylesheet" href="<?=BASEURL;?>/assets/css/style2.css">
<!-- BAGIAN DATA ASISTEN -->
<div class="container"><br>
<a href="<?= BASEURL?>/Asisten/modalTambah" class="btn btn-dark mb-3 button-style">Tambah Data</a>
    <h4><?= $data['title'];?></h4>
    <table class="table table-striped">
    <thead>
        <tr class="table-header" style="background: #EFEDED">
        <th scope="col">No</th>
        <th scope="col">Stambuk</th>
        <th scope="col">Nama</th>
        <th scope="col">Kelas</th>
        <th scope="col">Angkatan</th>
        <th scope="col">Status</th>
        <th scope="col" colspan="3" class="text-center">Menu</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=0; foreach  ($data['asisten'] as $asisten) : $no++;?>
        <tr>
            <td><?= $no;?></td>
            <td><?= $asisten['stambuk'];?></td>
            <td><?= $asisten['nama'];?></td>
            <td><?= $asisten['kelas'];?></td>
            <td><?= $asisten['angkatan'];?></td>
            <td><?= $asisten['status'];?></td>            
            <td align="center">
                <div class="btn-group" role="group" aria-label="Basic outlined example">
                    <a class="btn btn-dark button-style text-center" onclick="ubahdata('<?= $asisten['ID_Asisten']; ?>')" role="button" data-bs-toggle="modal" data-bs-target="#myModal"><i class="fa fa-file"></i></a>
                    <a class="btn btn-dark button-style text-center" onclick="hapus('<?= $asisten['ID_Asisten']; ?>')" role="button"  data-bs-toggle="modal" data-bs-target="#myModal"><i class="fa fa-trash"></i></a>
                    <a class="btn btn-dark button-style text-center" href="<?= BASEURL?>/Asisten/detailAsisten/<?= $asisten['ID_Asisten'];?>" role="button"><i class="fa fa-list"></i></a>
                </div>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
</div>

