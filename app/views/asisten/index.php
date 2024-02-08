<link rel="stylesheet" href="<?=BASEURL;?>/assets/css/style2.css">
<!-- BAGIAN DATA ASISTEN -->
<div class="container"><br>
<!-- <a href="<?= BASEURL?>/asisten/modalTambah" class="btn btn-dark mb-3 button-style">Tambah Data</a> -->
<a data-bs-toggle="modal" data-bs-target="#myModal" class="btn btn-dark mb-3 button-style" onclick="tambahDataAsisten()">Tambah Data</a>
    <h5><?= $data['title'];?></h5>
    <div class="overflow-auto" style="max-height: 62vh;">
        <table id="example" class="table" style="width:100%">
            <thead class="table-light">
                <tr class="table-secondary">
                <th scope="col" class="text-center" style="width:5%;">No</th>
                <th scope="col">Stambuk</th>
                <th scope="col">Nama</th>
                <th scope="col" class="text-center">Kelas</th>
                <th scope="col" class="text-center">Angkatan</th>
                <th scope="col" class="text-center">Status</th>
                <th class="text-center">Menu</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=0; foreach  ($data['asisten'] as $asisten) : $no++;?>
                <tr>
                    <td align="center"><?= $no;?></td>
                    <td><?= $asisten['stambuk'];?></td>
                    <td><?= $asisten['nama'];?></td>
                    <td align="center"><?= $asisten['kelas'];?></td>
                    <td align="center"><?= $asisten['angkatan'];?></td>
                    <td align="center"><?= $asisten['status'];?></td>            
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
</div>

