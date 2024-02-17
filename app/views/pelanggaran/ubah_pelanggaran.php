<!-- BAGIAN UBAH DATA PELANGGARAN -->
<div class="container">
    <form action="<?= BASEURL?>/pelanggaran/prosesUbah" method="post" autocomplete="off">
    <input type="hidden" value="<?= $data['ubahdata']['ID_Pelanggaran']?>" name="ID_Pelanggaran">
        <div class="row">
            <div class="col-12">
                <div class="form-group mb-1">
                    <label for="ID_Asisten" class="form-label">Nama Asisten</label>
                    <select name="ID_Asisten" class="form-select form-select-sm">
                        <?php
                        foreach ($data['asistenIDOptions'] as $asisten) {
                            $selected = ($asisten['ID_Asisten'] == $data['ubahdata']['ID_Asisten']) ? 'selected' : '';
                            echo "<option value='{$asisten['ID_Asisten']}' {$selected}>{$asisten['nama']}</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group mb-1">
                    <label for="pelanggaran" class="form-label">Detail Pelanggaran</label>
                    <textarea name="pelanggaran" class="form-control form-control-sm" rows="4"><?= $data['ubahdata']['pelanggaran']?></textarea>
                </div>
                <div class="form-group mb-1">
                    <label for="tanggal" class="form-label">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control form-control-sm" value="<?= $data['ubahdata']['tanggal']?>">
                </div>
                <div class="form-group mb-1">
                    <label for="ID_TindakLanjut" class="form-label">Tindak Lanjut</label>
                    <select name="ID_TindakLanjut" class="form-select form-select-sm">
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

