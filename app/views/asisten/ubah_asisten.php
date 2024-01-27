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
                    <label for="number">Kelas</label>
                    <input type="text" name="ID_Kelas" class="form-control" value="<?= $data['ubahdata']['ID_Kelas']?>">
                </div>
                <div class="form-group">
                    <label for="number">Angkatan</label>
                    <input type="number" name="ID_Angkatan" class="form-control" value="<?= $data['ubahdata']['ID_Angkatan']?>">
                </div>
                <div class="form-group">
                    <label for="number">Jurusan</label>
                    <input type="number" name="ID_Jurusan" class="form-control" value="<?= $data['ubahdata']['ID_Jurusan']?>">
                </div>
                <div class="form-group">
                    <label for="number">Status</label>
                    <input type="number" name="ID_Status" class="form-control" value="<?= $data['ubahdata']['ID_Status']?>">
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <input type="text" name="jenis_kelamin" class="form-control" value="<?= $data['ubahdata']['jenis_kelamin']?>">
                </div>
                <div class="form-group">
                    <label for="number">No Telphone</label>
                    <input type="number" name="no_telp" class="form-control" value="<?= $data['ubahdata']['no_telp']?>">
                </div>
                <div class="form-group">
                    <label for="number">User</label>
                    <input type="number" name="ID_User" class="form-control" value="<?= $data['ubahdata']['ID_User']?>">
                </div><br>                
                <button type="submit" class="btn btn-primary">Ubah Data</button>
            </div>
        </div>
    </form>
</div>

