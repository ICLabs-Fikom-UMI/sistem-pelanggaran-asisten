<!-- BAGIAN UBAH DATA TINDAK LANJUT -->
<div class="container">
    <form id="formUbahTindakLanjut" action="<?= BASEURL?>/TindakLanjut/prosesUbah" method="post" autocomplete="off">
    <input type="hidden" value="<?= $data['ubahdata']['ID_TindakLanjut']?>" name="ID_TindakLanjut">
        <div class="row">
            <div class="col-12">
                <div class="form-group mb-1">
                    <label for="tindak_lanjut" class="form-label">Tindak Lanjut</label>
                    <input type="text" name="tindak_lanjut" class="form-control " value="<?= $data['ubahdata']['tindak_lanjut']?>" >
                </div><br>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary" style="background: #06253A; color: #FFFFFF;">Ubah</button>
                    <button type="button" class="btn btn-primary ml-2" style="background: #06253A; color: #FFFFFF;" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </form>
</div>

