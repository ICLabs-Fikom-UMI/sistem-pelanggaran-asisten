    <!-- BAGIAN TAMBAH DATA ASISTEN -->
    <div class="container"><br>
        <form action="<?= BASEURL?>/pelanggaran/tambah" method="post" autocomplete="off">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="selectAsisten">Pilih Asisten</label>
                        <select name="selectAsisten" class="form-control">
                            <?php foreach ($data['asistenOptions'] as $asisten) : ?>
                                <option value="<?= $asisten['stambuk']; ?>"><?= $asisten['stambuk'] . ' - ' . $asisten['nama']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="text">Detail Pelanggaran</label>
                        <input type="text" name="pelanggaran" class="form-control" placeholder="Masukkan Data Pelanggaran">
                    </div>
                    <!-- <div class="form-group">
                        <label for="text">Tanggal</label>
                        <input type="date" name="tanggal" class="form-control">
                    </div> -->
                    <div class="form-group">
                        <label for="text">Tanggal</label>
                        <?php
                            // Mendapatkan tanggal hari ini dalam format YYYY-MM-DD
                            $tanggalHariIni = date("Y-m-d");
                        ?>
                        <input type="date" name="tanggal" class="form-control" value="<?= $tanggalHariIni ?>" required>
                    </div>

                    <!-- <div class="form-group">
                        <label for="number">ID Asisten</label>
                        <input type="number" name="ID_Asisten" class="form-control" placeholder="Masukkan ID Asisten">
                    </div>
                    <div class="form-group">
                        <label for="number">ID Jenis Kelakuan</label>
                        <input type="number" name="ID_jenisKelakuan" class="form-control" placeholder="Masukkan ID Kelakuan">
                    </div>
                    <div class="form-group">
                        <label for="number">ID Tindak Lanjut</label>
                        <input type="number" name="ID_TindakLanjut" class="form-control" placeholder="Masukkan ID Kelakuan">
                    </div> -->
                    <div class="form-group">
                        <label for="ID_Asisten">Asisten</label>
                        <select name="ID_Asisten" class="form-control">
                            <option value="">Pilih Asisten</option>
                            <?php
                            foreach ($data['asistenOptions'] as $asisten) {
                                echo "<option value='{$asisten['ID_Asisten']}'>ID {$asisten['stambuk']} - {$asisten['nama']}</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="ID_JenisKelakuan">Jenis Kelakuan</label>
                        <select name="ID_JenisKelakuan" class="form-control">
                            <option value="">Pilih Jenis Kelakuan</option>
                            <?php
                            foreach ($data['jkOptions'] as $jenisKelakuan) {
                                echo "<option value='{$jenisKelakuan['ID_JenisKelakuan']}'>ID {$jenisKelakuan['ID_JenisKelakuan']} - {$jenisKelakuan['jenis_kelakuan']}</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="ID_TindakLanjut">Tindak Lanjut</label>
                        <select name="ID_TindakLanjut" class="form-control">
                            <option value="">Pilih Tindak Lanjut</option>
                            <?php
                            foreach ($data['TindakLanjutOptions'] as $tindakLanjut) {
                                echo "<option value='{$tindakLanjut['ID_TindakLanjut']}'>ID {$tindakLanjut['ID_TindakLanjut']} - {$tindakLanjut['tindak_lanjut']}</option>";
                            }
                            ?>
                        </select>
                    </div><br>

                    <button type="submit" class="btn btn-primary btn-style" onclick="window.location.href='index.php';">Tambah</button>
                </div>
            </div>
        </form>
    </div>