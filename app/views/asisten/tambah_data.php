<!-- BAGIAN TAMBAH DATA ASISTEN -->
<div class="container"><br>
<!-- <h4><?= $data['title'];?></h4> -->
<form action="<?= BASEURL?>/asisten/tambah" method="post" autocomplete="off">
    <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="stambuk">Stambuk</label>
                    <input type="number" name="stambuk" class="form-control" placeholder="Masukkan Stambuk">
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama">
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control">
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="Pria">Pria</option>
                        <option value="Wanita">Wanita</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="no_telp">No Telphone</label>
                    <input type="number" name="no_telp" class="form-control" placeholder="Masukkan No Telphone">
                </div>
                
                <div class="form-group">
                    <label for="ID_Kelas">Kelas</label>
                    <select name="ID_Kelas" class="form-control">
                        <option value="">Pilih ID Kelas</option>
                        <?php
                        foreach ($data['kelasOptions'] as $kelas) {
                            echo "<option value='{$kelas['ID_Kelas']}'>ID {$kelas['ID_Kelas']} - {$kelas['kelas']}</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="ID_Angkatan">Angkatan</label>
                    <select name="ID_Angkatan" class="form-control">
                        <option value="">Pilih ID Angkatan</option>
                        <?php
                        foreach ($data['angkatanOptions'] as $angkatan) {
                            echo "<option value='{$angkatan['ID_Angkatan']}'>ID {$angkatan['ID_Angkatan']} - {$angkatan['angkatan']}</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="ID_Jurusan">Jurusan</label>
                    <select name="ID_Jurusan" class="form-control">
                        <option value="">Pilih ID Jurusan</option>
                        <?php
                        foreach ($data['jurusanOptions'] as $jurusan) {
                            echo "<option value='{$jurusan['ID_Jurusan']}'>ID {$jurusan['ID_Jurusan']} - {$jurusan['jurusan']}</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="ID_Status">Status</label>
                    <select name="ID_Status" class="form-control">
                        <option value="">Pilih ID Status</option>
                        <?php
                        foreach ($data['statusOptions'] as $status) {
                            echo "<option value='{$status['ID_Status']}'>ID {$status['ID_Status']} - {$status['status']}</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="ID_User">User</label>
                    <select name="ID_User" class="form-control">
                        <option value="">Pilih ID User</option>
                        <?php
                        foreach ($data['userOptions'] as $user) {
                            echo "<option value='{$user['ID_User']}'>ID {$user['ID_User']} - {$user['nama']}</option>";
                        }
                        ?>
                    </select>
                </div><br>

                <!-- <div class="form-group">
                    <label for="ID_Kelas">ID Kelas</label>
                    <input type="number" name="ID_Kelas" class="form-control" placeholder="Masukkan ID Kelas">
                </div>
                <div class="form-group">
                    <label for="ID_Angkatan">ID Angkatan</label>
                    <input type="number" name="ID_Angkatan" class="form-control" placeholder="Masukkan ID Angkatan">
                </div>
                <div class="form-group">
                    <label for="ID_Jurusan">ID Jurusan</label>
                    <input type="number" name="ID_Jurusan" class="form-control" placeholder="Masukkan ID Jurusan">
                </div>
                <div class="form-group">
                    <label for="ID_Status">ID Status</label>
                    <input type="number" name="ID_Status" class="form-control" placeholder="Masukkan ID Status">
                </div>
                <div class="form-group">
                    <label for="ID_User">ID User</label>
                    <input type="number" name="ID_User" class="form-control" placeholder="Masukkan ID User">
                </div><br> -->

                <button type="submit" class="btn btn-primary btn-style" onclick="window.location.href='index.php';">Tambah</button>
            </div>
        </div>
    </form>
</div>
<!-- <?php
ob_end_flush();
?> -->