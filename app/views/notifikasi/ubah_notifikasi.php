<!-- BAGIAN UBAH DATA ASISTEN -->
<div class="container">
    <form action="<?= BASEURL?>/Notifikasi/prosesUbah" method="post" autocomplete="off">
    <input type="hidden" value="<?= $data['ubahdata']['ID_Notifikasi']?>" name="ID_Notifikasi">
        <div class="row">
            <div class="col-12">
                <div class="form-group mb-1">
                    <label for="ID_Asisten" class="form-label">Nama Asisten</label>
                    <select name="ID_Asisten" class="form-control ">
                        <?php
                        foreach ($data['asistenIDOptions'] as $asisten) {
                            $selected = ($asisten['ID_Asisten'] == $data['ubahdata']['ID_Asisten']) ? 'selected' : '';
                            echo "<option value='{$asisten['ID_Asisten']}' {$selected}>{$asisten['nama']}</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group mb-1">
                    <label for="pesan" class="form-label">Pesan</label>
                    <textarea name="pesan" class="form-control " rows="4"><?= $data['ubahdata']['pesan']?></textarea>
                </div>
                <div class="form-group mb-1">
                    <label for="tanggal" class="form-label">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control " value="<?= $data['ubahdata']['tanggal']?>">
                </div><br>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary" style="background: #06253A; color: #FFFFFF;">Ubah</button>
                    <button type="button" class="btn btn-primary ml-2" style="background: #06253A; color: #FFFFFF;" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </form>
</div>

