<!-- BAGIAN UBAH DATA ASISTEN -->
<div class="container">
    <form action="<?= BASEURL?>/pelanggaran/prosesUbah" method="post">
    <input type="number" value="<?= $data['ubahdata']['ID_Pelanggaran']?>" name="ID_Pelanggaran">
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
                    <label for="number">Kelas</label>
                    <input type="text" name="kelas" class="form-control" value="<?= $data['ubahdata']['kelas']?>">
                </div>
                <div class="form-group">
                    <label for="number">Angkatan</label>
                    <input type="number" name="angkatan" class="form-control" value="<?= $data['ubahdata']['angkatan']?>">
                </div>
                <div class="form-group">
                    <label for="number">Jurusan</label>
                    <select name="jurusan" class="form-control">
                        <option value="<?= $data['ubahdata']['jurusan']?>"><?= $data['ubahdata']['jurusan']?></option>
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="number">Status</label>
                    <select name="status" class="form-control">
                        <option value="<?= $data['ubahdata']['status']?>"><?= $data['ubahdata']['status']?></option>
                        <option value="Asisten">Asisten</option>
                        <option value="Calon Asisten">Calon Asisten</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="number">Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control">
                        <option value="<?= $data['ubahdata']['jenis_kelamin']?>"><?= $data['ubahdata']['jenis_kelamin']?></option>
                        <option value="Pria">Pria</option>
                        <option value="Wanita">Wanita</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="number">Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" class="form-control" value="<?= $data['ubahdata']['tempat_lahir']?>">
                </div>
                <div class="form-group">
                    <label for="number">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" class="form-control" value="<?= $data['ubahdata']['tanggal_lahir']?>">
                </div>
                <div class="form-group">
                    <label for="number">Agama</label>
                    <input type="text" name="agama" class="form-control" value="<?= $data['ubahdata']['agama']?>">
                </div>
                <div class="form-group">
                    <label for="number">Alamat</label>
                    <input type="text" name="alamat" class="form-control" value="<?= $data['ubahdata']['alamat']?>">
                </div>
                <div class="form-group">
                    <label for="number">Email</label>
                    <input type="email" name="email" class="form-control" value="<?= $data['ubahdata']['email']?>">
                </div>
                <div class="form-group">
                    <label for="number">No Telphone</label>
                    <input type="number" name="no_telp" class="form-control" value="<?= $data['ubahdata']['no_telp']?>">
                </div>
                <button type="submit" class="btn btn-primary">Ubah Data</button>
            </div>
        </div>
    </form>
</div>

