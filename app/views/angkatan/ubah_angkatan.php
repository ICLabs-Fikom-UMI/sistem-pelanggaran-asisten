<!-- BAGIAN UBAH DATA ANGKATAN -->
<div class="container">
    <form id="formUbahAngkatan" action="<?= BASEURL?>/Angkatan/prosesUbah" method="post" autocomplete="off">
    <input type="hidden" value="<?= $data['ubahdata']['ID_Angkatan']?>" name="ID_Angkatan">
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="angkatan">Angkatan</label>
                    <input type="number" name="angkatan" class="form-control" value="<?= $data['ubahdata']['angkatan']?>">
                </div><br>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary" style="background: #06253A; color: #FFFFFF;">Ubah</button>
                    <button type="button" class="btn btn-primary ml-2" style="background: #06253A; color: #FFFFFF;" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </form>
</div>

