<!-- BAGIAN UBAH DATA KELAS -->
<div class="container">
    <form id="formUbahKelas" action="<?= BASEURL?>/Kelas/prosesUbah" method="post" autocomplete="off">
    <input type="hidden" value="<?= $data['ubahdata']['ID_Kelas']?>" name="ID_Kelas">
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="kelas">Kelas</label>
                    <input type="text" name="kelas" class="form-control" value="<?= $data['ubahdata']['kelas']?>">
                </div><br>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary" style="background: #06253A; color: #FFFFFF;">Ubah</button>
                    <button type="button" class="btn btn-primary ml-2" style="background: #06253A; color: #FFFFFF;" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </form>
</div>

