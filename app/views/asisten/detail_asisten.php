<!-- BAGIAN DETAIL DATA ASISTEN -->
<div class="container"><br>
    <div class="col-12">
        <h4><?= $data['title'];?></h4>
        <table class="table">
            <tr>
                <td width="20%">Stambuk</td>
                <td>: <?= $data['detail_asisten']['stambuk']; ?></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>: <?= $data['detail_asisten']['nama']; ?></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>: <?= $data['detail_asisten']['kelas']; ?></td>
            </tr>
            <tr>
                <td>Angkatan</td>
                <td>: <?= $data['detail_asisten']['angkatan']; ?></td>
            </tr>
            <tr>
                <td>Status</td>
                <td>: <?= $data['detail_asisten']['status']; ?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>: <?= $data['detail_asisten']['jenis_kelamin']; ?></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>: <?= $data['detail_asisten']['tempat_lahir']; ?></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>: <?= $data['detail_asisten']['tanggal_lahir']; ?></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>: <?= $data['detail_asisten']['agama']; ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>: <?= $data['detail_asisten']['alamat']; ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>: <?= $data['detail_asisten']['email']; ?></td>
            </tr>
            <tr>
                <td>No Telphone</td>
                <td>: <?= $data['detail_asisten']['no_telp']; ?></td>
            </tr>
        </table>
    </div>
</div>