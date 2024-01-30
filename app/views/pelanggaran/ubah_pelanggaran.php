<!-- BAGIAN UBAH DATA ASISTEN -->
<div class="container">
    <form action="<?= BASEURL?>/pelanggaran/prosesUbah" method="post">
    <input type="hidden" value="<?= $data['ubahdata']['ID_Pelanggaran']?>" name="ID_Pelanggaran">
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="pelanggaran">Detail Pelanggaran</label>
                    <input type="text" name="pelanggaran" class="form-control" value="<?= $data['ubahdata']['pelanggaran']?>">
                </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" value="<?= $data['ubahdata']['tanggal']?>">
                </div>
                <div class="form-group">
                    <label for="ID_Asisten">ID Asisten</label>
                    <input type="number" name="ID_Asisten" class="form-control" value="<?= $data['ubahdata']['ID_Asisten']?>">
                </div>
                <div class="form-group">
                    <label for="ID_JenisKelakuan">Jenis Kelakuan</label>
                    <select name="ID_JenisKelakuan" class="form-control">
                        <option value="">Pilih Jenis Kelakuan</option>
                        <?php
                        foreach ($data['jkOptions'] as $jeniskelakuan) {
                            $selected = ($jeniskelakuan['ID_JenisKelakuan'] == $data['ubahdata']['ID_JenisKelakuan']) ? 'selected' : '';
                            echo "<option value='{$jeniskelakuan['ID_JenisKelakuan']}' {$selected}>ID {$jeniskelakuan['ID_JenisKelakuan']} - {$jeniskelakuan['jenis_kelakuan']}</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="ID_TindakLanjut">Tindak Lanjut</label>
                    <select name="ID_TindakLanjut" class="form-control">
                        <option value="">Pilih Tindak Lanjut</option>
                        <?php
                        foreach ($data['TindakLanjutOptions'] as $tindaklanjut) {
                            $selected = ($tindaklanjut['ID_TindakLanjut'] == $data['ubahdata']['ID_TindakLanjut']) ? 'selected' : '';
                            echo "<option value='{$tindaklanjut['ID_TindakLanjut']}' {$selected}>ID {$tindaklanjut['ID_TindakLanjut']} - {$tindaklanjut['tindak_lanjut']}</option>";
                        }
                        ?>
                    </select>
                </div>                
                <button type="submit" class="btn btn-primary">Ubah Data</button>
            </div>
        </div>
    </form>
</div>

