<!-- BAGIAN DETAIL DATA ASISTEN -->
<div class="container"><br>
<div class="col-12">
    <h3><?= $data['title'];?></h3>
    <div class="overflow-auto" style="max-height: 75vh;">
        <table class="table">
            <tr>
                <td width="20%">Stambuk</td>
                <td>: <?= $data['detail_asisten']['stambuk']; ?></td>
                <td class="text-center" rowspan="8"><img src="<?= BASEURL; ?>/<?= $data['detail_asisten']['photo_path'] ?>" alt="Foto" style="max-width: 400px; max-height: 400px;"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>: <?= $data['detail_asisten']['nama']; ?></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>: <?= isset($data['detail_asisten']['ID_Kelas']) ? $this->model('Asisten_model')->getKelasById($data['detail_asisten']['ID_Kelas'])['kelas'] : 'N/A'; ?></td>
            </tr>
            <tr>
                <td>Angkatan</td>
                <td>: <?= isset($data['detail_asisten']['ID_Angkatan']) ? $this->model('Asisten_model')->getAngkatanById($data['detail_asisten']['ID_Angkatan'])['angkatan'] : 'N/A'; ?></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>: <?= isset($data['detail_asisten']['ID_Jurusan']) ? $this->model('Asisten_model')->getJurusanById($data['detail_asisten']['ID_Jurusan'])['jurusan'] : 'N/A'; ?></td>
            </tr>
            <tr>
                <td>Status</td>
                <td>: <?= isset($data['detail_asisten']['ID_Status']) ? $this->model('Asisten_model')->getStatusById($data['detail_asisten']['ID_Status'])['status'] : 'N/A'; ?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>: <?= $data['detail_asisten']['jenis_kelamin']; ?></td>
            </tr>
            <tr>
                <td>No Telphone</td>
                <td>: <?= $data['detail_asisten']['no_telp']; ?></td>
            </tr>
            <tr>
                <td>Username</td>
                <td>: <?= isset($data['detail_asisten']['ID_User']) ? $this->model('Asisten_model')->getUserById($data['detail_asisten']['ID_User'])['username'] : 'N/A'; ?></td>
                <td></td>
            </tr>
        </table>
    </div>
    </div>
</div>