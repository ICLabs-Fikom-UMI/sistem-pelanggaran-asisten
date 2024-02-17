<!-- BAGIAN TAMBAH DATA ASISTEN -->
<div class="container">
<form id="formTambahDataAsisten" action="<?= BASEURL ?>/asisten/tambah" method="post" autocomplete="off">
    <div class="row">
            <div class="col-12 ">
                <div class="form-group mb-1">
                    <label for="stambuk" class="form-label">Stambuk</label>
                    <input type="number" name="stambuk" class="form-control " placeholder="Masukkan Stambuk">
                </div>
                <div class="form-group mb-1">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control " placeholder="Masukkan Nama">
                </div>                
                <div class="form-group mb-1">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control ">
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="Pria">Pria</option>
                        <option value="Wanita">Wanita</option>
                    </select>
                </div>
                <div class="form-group mb-1">
                    <label for="no_telp" class="form-label">No Telphone</label>
                    <input type="number" name="no_telp" class="form-control " placeholder="Masukkan No Telphone">
                </div>
                
                <div class="form-group mb-1">
                    <label for="ID_Kelas" class="form-label">Kelas</label>
                    <select name="ID_Kelas" class="form-control ">
                        <option value="">Pilih Kelas</option>
                        <?php
                        foreach ($data['kelasOptions'] as $kelas) {
                            echo "<option value='{$kelas['ID_Kelas']}'>{$kelas['kelas']}</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group mb-1">
                    <label for="ID_Angkatan" class="form-label">Angkatan</label>
                    <select name="ID_Angkatan" class="form-control ">
                        <option value="">Pilih Angkatan</option>
                        <?php
                        foreach ($data['angkatanOptions'] as $angkatan) {
                            echo "<option value='{$angkatan['ID_Angkatan']}'>{$angkatan['angkatan']}</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group mb-1">
                    <label for="ID_Jurusan" class="form-label">Jurusan</label>
                    <select name="ID_Jurusan" class="form-control ">
                        <option value="">Pilih Jurusan</option>
                        <?php
                        foreach ($data['jurusanOptions'] as $jurusan) {
                            echo "<option value='{$jurusan['ID_Jurusan']}'>{$jurusan['jurusan']}</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group mb-1">
                    <label for="ID_Status" class="form-label">Status</label>
                    <select name="ID_Status" class="form-control ">
                        <option value="">Pilih Status</option>
                        <?php
                        foreach ($data['statusOptions'] as $status) {
                            echo "<option value='{$status['ID_Status']}'>{$status['status']}</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group mb-1">
                    <label for="ID_User" class="form-label">User</label>
                    <select name="ID_User" class="form-control ">
                        <option value="">Pilih User</option>
                        <?php
                        foreach ($data['userOptions'] as $user) {
                            echo "<option value='{$user['ID_User']}'>{$user['username']}</option>";
                        }
                        ?>
                    </select>
                </div><br>
            </div>
        </div>
    </form>
</div>