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
                <td>ID User</td>
                <td>: <?= $data['detail_asisten']['ID_User']; ?> - 
                    <?= isset($data['detail_asisten']['ID_User']) ? $this->model('Asisten_model')->getUserById($data['detail_asisten']['ID_User'])['nama'] : 'N/A'; ?>
                </td>
            </tr>
            <tr>
                <td>Username</td>
                <td>: <?= isset($data['detail_asisten']['ID_User']) ? $this->model('Asisten_model')->getUserById($data['detail_asisten']['ID_User'])['username'] : 'N/A'; ?>
                </td>
            </tr>
            <?php if ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'korlab') : ?>
            <tr>
                <td>Password</td>
                <td>: <?= isset($data['detail_asisten']['ID_User']) ? $this->model('Asisten_model')->getUserById($data['detail_asisten']['ID_User'])['password'] : 'N/A'; ?>
            </td>
            </tr>
            <tr>
                <td>ID Asisten</td>
                <td>: <?= $data['detail_asisten']['ID_Asisten']; ?></td>
            </tr>
            <?php endif;?>
        </table>
    </div>
</div>