<!-- BAGIAN UBAH DATA ASISTEN -->
<div class="container">
    <form action="<?= BASEURL?>/Notifikasi/prosesUbah" method="post">
    <input type="hidden" value="<?= $data['ubahdata']['ID_Notifikasi']?>" name="ID_Notifikasi">
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="ID_Asisten">ID Asisten</label>
                    <input type="number" name="ID_Asisten" class="form-control" value="<?= $data['ubahdata']['ID_Asisten']?>">
                </div>
                <div class="form-group">
                    <label for="pesan">Pesan</label>
                    <textarea name="pesan" class="form-control" rows="4"><?= $data['ubahdata']['pesan']?></textarea>
                </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" value="<?= $data['ubahdata']['tanggal']?>">
                </div><br>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary" style="background: #06253A; color: #FFFFFF;">Ubah</button>
                    <button type="button" class="btn btn-primary ml-2" style="background: #06253A; color: #FFFFFF;" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </form>
</div>

