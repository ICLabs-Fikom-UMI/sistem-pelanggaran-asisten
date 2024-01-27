<!-- BAGIAN UBAH DATA ASISTEN -->
<div class="container">
    <form action="<?= BASEURL?>/TindakLanjut/prosesUbah" method="post">
    <input type="hidden" value="<?= $data['ubahdata']['ID_TindakLanjut']?>" name="ID_TindakLanjut">
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="tindak_lanjut">Tindak Lanjut</label>
                    <input type="text" name="tindak_lanjut" class="form-control" value="<?= $data['ubahdata']['tindak_lanjut']?>">
                </div><br>
                <button type="submit" class="btn btn-primary">Ubah Data</button>
            </div>
        </div>
    </form>
</div>

