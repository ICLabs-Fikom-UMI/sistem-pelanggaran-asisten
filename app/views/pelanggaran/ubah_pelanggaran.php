<!-- BAGIAN UBAH DATA ASISTEN -->
<div class="container">
    <form action="<?= BASEURL?>/pelanggaran/prosesUbah" method="post">
    <input type="hidden" value="<?= $data['ubahdata']['ID_Pelanggaran']?>" name="ID_Pelanggaran">
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="pelanggaran">Detail Pelanggaran</label>
                    <input type="text" name="pelanggaran" class="form-control" value="<?= $data['ubahdata']['pelanggaran']?>">
                </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" value="<?= $data['ubahdata']['tanggal']?>">
                </div>
                <div class="form-group">
                    <label for="ID_Asisten">ID Asisten</label>
                    <input type="number" name="ID_Asisten" class="form-control" value="<?= $data['ubahdata']['ID_Asisten']?>">
                </div>
                <div class="form-group">
                    <label for="ID_JenisKelakuan">ID Jenis Kelakuan</label>
                    <input type="number" name="ID_JenisKelakuan" class="form-control" value="<?= $data['ubahdata']['ID_JenisKelakuan']?>">
                </div>
                <div class="form-group">
                    <label for="ID_TindakLanjut">ID Tindak Lanjut</label>
                    <input type="number" name="ID_TindakLanjut" class="form-control" value="<?= $data['ubahdata']['ID_TindakLanjut']?>">
                </div><br>
                
                <button type="submit" class="btn btn-primary">Ubah Data</button>
            </div>
        </div>
    </form>
</div>

