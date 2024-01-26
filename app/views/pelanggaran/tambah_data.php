    <!-- BAGIAN TAMBAH DATA ASISTEN -->
    <div class="container"><br>
    <h4><?php $data['title'];?></h4>
        <form action="<?= BASEURL?>/pelanggaran/tambah" method="post" autocomplete="off">
            <div class="row">
                <div class="col-6">
                    <!-- <div class="form-group">
                        <label for="text">Stambuk</label>
                        <input type="text" name="stambuk" class="form-control" placeholder="Masukkan Stambuk">
                    </div>
                    <div class="form-group">
                        <label for="text">Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama ">
                    </div> -->
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
                        <input type="text" name="detail_pelanggaran" class="form-control" placeholder="Masukkan Data Pelanggaran">
                    </div>
                    <div class="form-group">
                        <label for="text">Tanggal</label>
                        <input type="date" name="tanggal" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="number">ID Asisten</label>
                        <input type="number" name="ID_Asisten" class="form-control" placeholder="Masukkan ID Asisten">
                    </div>
                    <div class="form-group">
                        <label for="number">ID Jenis Kelakuan</label>
                        <input type="number" name="ID_jenisKelakuan" class="form-control" placeholder="Masukkan ID Kelakuan">
                    </div>
                    <button type="submit" class="btn btn-primary btn-style" onclick="window.location.href='index.php';">Tambah</button>
                </div>
            </div>
        </form>
    </div>