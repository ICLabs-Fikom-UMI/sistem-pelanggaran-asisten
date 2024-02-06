<!-- BAGIAN UBAH DATA ASISTEN -->
<div class="container">
    <form action="<?= BASEURL?>/pelanggaran/prosesUbah" method="post">
    <input type="hidden" value="<?= $data['ubahdata']['ID_Pelanggaran']?>" name="ID_Pelanggaran">
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="ID_Asisten">Nama Asisten</label>
                    <input type="number" name="ID_Asisten" class="form-control" value="<?= $data['ubahdata']['ID_Asisten']?>">
                </div>
                <div class="form-group">
                    <label for="pelanggaran">Detail Pelanggaran</label>
                    <textarea name="pelanggaran" class="form-control" rows="4"><?= $data['ubahdata']['pelanggaran']?></textarea>
                </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" value="<?= $data['ubahdata']['tanggal']?>">
                </div>
                <div class="form-group">
                    <label for="ID_TindakLanjut">Tindak Lanjut</label>
                    <select name="ID_TindakLanjut" class="form-control">
                        <?php
                        foreach ($data['TindakLanjutOptions'] as $tindaklanjut) {
                            $selected = ($tindaklanjut['ID_TindakLanjut'] == $data['ubahdata']['ID_TindakLanjut']) ? 'selected' : '';
                            echo "<option value='{$tindaklanjut['ID_TindakLanjut']}' {$selected}>{$tindaklanjut['tindak_lanjut']}</option>";
                        }
                        ?>
                    </select>
                </div><br>                
                <div class="text-center">
                    <button type="submit" class="btn btn-primary" style="background: #06253A; color: #FFFFFF;">Ubah</button>
                    <button type="button" class="btn btn-primary ml-2" style="background: #06253A; color: #FFFFFF;" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </form>
</div>

