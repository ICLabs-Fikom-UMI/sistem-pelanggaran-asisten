<!-- BAGIAN TAMBAH DATA PELANGGARAN -->
<div class="container">
    <form id="formTambahDataPelanggaran" action="<?= BASEURL ?>/pelanggaran/tambah" method="post" autocomplete="off">
        <div class="row">
            <div class="col-12">
                <div class="form-group mb-1">
                    <label for="selectAsisten" class="form-label">Pilih Asisten</label>
                    <select name="selectAsisten" class="form-select ">
                        <option>Pilih Asisten</option>
                            <?php foreach ($data['asistenOptions'] as $asisten) : ?>
                                <option value="<?= $asisten['stambuk']; ?>"><?= $asisten['nama']; ?></option>
                            <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group mb-1">
                    <label for="text" class="form-label">Masukkan Detail Pelanggaran</label>
                    <textarea name="pelanggaran" class="form-control " placeholder="Masukkan Detail Pelanggaran" rows="4"></textarea>
                </div>

                <div class="form-group mb-1">
                    <label for="text" class="form-label">Pilih Tanggal</label>
                    <?php
                        $tanggalHariIni = date("Y-m-d");
                    ?>
                    <input type="date" name="tanggal" class="form-control " value="<?= $tanggalHariIni ?>" required>
                </div>
                <div class="form-group mb-1">
                    <label for="ID_TindakLanjut" class="form-label">Pilih Tindak Lanjut</label>
                    <select name="ID_TindakLanjut" class="form-select ">
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