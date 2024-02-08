<!-- BAGIAN UBAH DATA JURUSAN -->
<div class="container">
    <form id="formUbahJurusan" action="<?= BASEURL?>/Jurusan/prosesUbah" method="post" autocomplete="off">
    <input type="hidden" value="<?= $data['ubahdata']['ID_Jurusan']?>" name="ID_Jurusan">
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" name="jurusan" class="form-control" value="<?= $data['ubahdata']['jurusan']?>">
                </div><br>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary" style="background: #06253A; color: #FFFFFF;">Ubah</button>
                    <button type="button" class="btn btn-primary ml-2" style="background: #06253A; color: #FFFFFF;" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </form>
</div>

