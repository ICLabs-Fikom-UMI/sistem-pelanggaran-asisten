<!-- BAGIAN UBAH DATA STATUS -->
<div class="container">
    <form id="formUbahStatus" action="<?= BASEURL?>/Status/prosesUbah" method="post" autocomplete="off">
    <input type="hidden" value="<?= $data['ubahdata']['ID_Status']?>" name="ID_Status">
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="status">Status</label>
                    <input type="text" name="status" class="form-control" value="<?= $data['ubahdata']['status']?>">
                </div><br>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary" style="background: #06253A; color: #FFFFFF;">Ubah</button>
                    <button type="button" class="btn btn-primary ml-2" style="background: #06253A; color: #FFFFFF;" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </form>
</div>

