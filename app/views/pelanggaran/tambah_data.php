<!-- BAGIAN TAMBAH DATA PELANGGARAN -->
<div class="container"><br>
    <form id="formTambahDataPelanggaran" action="<?= BASEURL?>/pelanggaran/tambah" method="post" autocomplete="off">
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="selectAsisten">Pilih Asisten</label>
                    <select name="selectAsisten" class="form-control">
                        <option>Pilih Asisten</option>
                            <?php foreach ($data['asistenOptions'] as $asisten) : ?>
                                <option value="<?= $asisten['stambuk']; ?>"><?= $asisten['stambuk'] . ' - ' . $asisten['nama']; ?></option>
                            <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="text">Detail Pelanggaran</label>
                    <input type="text" name="pelanggaran" class="form-control" placeholder="Masukkan Data Pelanggaran">
                </div>
                <div class="form-group">
                    <label for="text">Tanggal</label>
                    <?php
                        $tanggalHariIni = date("Y-m-d");
                    ?>
                    <input type="date" name="tanggal" class="form-control" value="<?= $tanggalHariIni ?>" required>
                </div>
                <div class="form-group">
                    <label for="ID_TindakLanjut">Tindak Lanjut</label>
                    <select name="ID_TindakLanjut" class="form-control">
                        <option>Pilih Tindak Lanjut</option>
                        <?php
                        foreach ($data['TindakLanjutOptions'] as $tindakLanjut) {
                            echo "<option value='{$tindakLanjut['ID_TindakLanjut']}'>{$tindakLanjut['tindak_lanjut']}</option>";
                        }
                        ?>
                    </select>
                </div><br>
            </div>
        </div>
    </form>
</div>