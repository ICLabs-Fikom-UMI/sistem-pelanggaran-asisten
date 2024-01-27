<!-- BAGIAN UBAH DATA JENIS KELAKUAN -->
<div class="container">
    <form action="<?= BASEURL?>/jk/prosesUbah" method="post">
    <input type="hidden" value="<?= $data['ubahdataJK']['ID_JenisKelakuan']?>" name="ID_JenisKelakuan">
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="text">Jenis Kelakuan</label>
                    <input type="text" name="jenis_kelakuan" class="form-control" value="<?= $data['ubahdataJK']['jenis_kelakuan']?>">
                </div><br>
                <button type="submit" class="btn btn-primary">Ubah Data</button>
            </div>
        </div>
    </form>
</div>

