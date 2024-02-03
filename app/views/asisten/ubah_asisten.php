<!-- BAGIAN UBAH DATA ASISTEN -->
<div class="container">
    <form action="<?= BASEURL?>/asisten/prosesUbah" method="post">
    <input type="hidden" value="<?= $data['ubahdata']['ID_Asisten']?>" name="ID_Asisten">
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="number">Stambuk</label>
                    <input type="number" name="stambuk" class="form-control" value="<?= $data['ubahdata']['stambuk']?>">
                </div>
                <div class="form-group">
                    <label for="number">Nama</label>
                    <input type="text" name="nama" class="form-control" value="<?= $data['ubahdata']['nama']?>">
                </div>
                <div class="form-group">
                    <label for="ID_Kelas">Kelas</label>
                    <select name="ID_Kelas" class="form-control">
                        <?php
                        foreach ($data['kelasOptions'] as $kelas) {
                            $selected = ($kelas['ID_Kelas'] == $data['ubahdata']['ID_Kelas']) ? 'selected' : '';
                            echo "<option value='{$kelas['ID_Kelas']}' {$selected}>{$kelas['kelas']}</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="ID_Angkatan">Angkatan</label>
                    <select name="ID_Angkatan" class="form-control">
                        <?php
                        foreach ($data['angkatanOptions'] as $angkatan) {
                            $selected = ($angkatan['ID_Angkatan'] == $data['ubahdata']['ID_Angkatan']) ? 'selected' : '';
                            echo "<option value='{$angkatan['ID_Angkatan']}' {$selected}>{$angkatan['angkatan']}</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="ID_Jurusan">Jurusan</label>
                    <select name="ID_Jurusan" class="form-control">
                        <?php
                        foreach ($data['jurusanOptions'] as $jurusan) {
                            $selected = ($jurusan['ID_Jurusan'] == $data['ubahdata']['ID_Jurusan']) ? 'selected' : '';
                            echo "<option value='{$jurusan['ID_Jurusan']}' {$selected}>{$jurusan['jurusan']}</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="ID_Status">Status</label>
                    <select name="ID_Status" class="form-control">
                        <?php
                        foreach ($data['statusOptions'] as $status) {
                            $selected = ($status['ID_Status'] == $data['ubahdata']['ID_Status']) ? 'selected' : '';
                            echo "<option value='{$status['ID_Status']}' {$selected}>{$status['status']}</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control">
                        <option value="Pria" <?= ($data['ubahdata']['jenis_kelamin'] == 'Pria') ? 'selected' : '' ?>>Pria</option>
                        <option value="Wanita" <?= ($data['ubahdata']['jenis_kelamin'] == 'Wanita') ? 'selected' : '' ?>>Wanita</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="number">No Telphone</label>
                    <input type="number" name="no_telp" class="form-control" value="<?= $data['ubahdata']['no_telp']?>">
                </div>
                <div class="form-group">
                    <label for="ID_User">User</label>
                    <select name="ID_User" class="form-control">
                        <?php
                        foreach ($data['userOptions'] as $user) {
                            $selected = ($user['ID_User'] == $data['ubahdata']['ID_User']) ? 'selected' : '';
                            echo "<option value='{$user['ID_User']}' {$selected}>{$user['username']}</option>";
                        }
                        ?>
                    </select>
                </div><br>                
                <button type="submit" class="btn btn-primary">Ubah Data</button>
            </div>
        </div>
    </form>
</div>

