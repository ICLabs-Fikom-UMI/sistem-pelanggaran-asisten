<!-- BAGIAN TAMBAH DATA ASISTEN -->
<div class="container"><br>
<h4><?= $data['title'];?></h4>
<form action="<?= BASEURL?>/Asisten/tambah" method="post" autocomplete="off">
    <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="number">Stambuk</label>
                    <input type="number" name="stambuk" class="form-control" placeholder="Masukkan Stambuk">
                </div>
                <div class="form-group">
                    <label for="number">Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama">
                </div>
                <div class="form-group">
                    <label for="number">Kelas</label>
                    <input type="text" name="kelas" class="form-control" placeholder="Masukkan Kelas">
                </div>
                <div class="form-group">
                    <label for="number">Angkatan</label>
                    <input type="number" name="angkatan" class="form-control" placeholder="Masukkan Angkatan">
                </div>
                <div class="form-group">
                    <label for="text">Jurusan</label>
                    <select name="jurusan" class="form-control">
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Sistem Informasi">Sisten Informasi</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="number">Status</label>
                    <select name="status" class="form-control">
                        <option value="">Pilih Status</option>
                        <option value="Asisten">Asisten</option>
                        <option value="Calon Asisten">Calon Asisten</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="number">Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control">
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="Pria">Pria</option>
                        <option value="Wanita">Wanita</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="number">Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" class="form-control" placeholder="Masukkan Tempat lahir">
                </div>
                <div class="form-group">
                    <label for="number">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" class="form-control">
                </div>
                <div class="form-group">
                    <label for="number">Agama</label>
                    <input type="text" name="agama" class="form-control" placeholder="Masukkan Agama">
                </div>
                <div class="form-group">
                    <label for="number">Alamat</label>
                    <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat">
                </div>
                <div class="form-group">
                    <label for="number">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Masukkan Email">
                </div>
                <div class="form-group">
                    <label for="number">No Telphone</label>
                    <input type="number" name="no_telp" class="form-control" placeholder="Masukkan No Telphone">
                </div>
                <!-- <div class="form-group">
                    <label for="text">ID Login</label>
                    <input type="text" name="ID_Login" class="form-control" placeholder="Masukkan ID Login">
                </div><br> -->
                <!-- tambah_data.php -->
                <div class="form-group">
                    <label for="number">ID Login</label>
                    <select name="ID_Login" class="form-control">
                        <?php foreach ($data['availableUserIDs'] as $userID) : ?>
                            <option value="<?= $userID['ID_Login']; ?>"><?= $userID['ID_Login']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary btn-style" onclick="window.location.href='index.php';">Tambah</button>
            </div>
        </div>
    </form>
</div>