<!-- BAGIAN TAMBAH DATA ASISTEN -->
<div class="container">
    <form id="formTambahDataNotifikasi" action="<?= BASEURL ?>/Notifikasi/tambah" method="post" autocomplete="off">
        <div class="row">
            <div class="col-12">
                <div class="form-group mb-1">
                    <label for="selectAsisten" class="form-label">Asisten</label>
                    <select name="selectAsisten" class="form-select " required>
                        <option>Pilih Asisten</option>
                            <?php foreach ($data['asistenOptions'] as $asisten) : ?>
                                <option value="<?= $asisten['nama']; ?>"><?= $asisten['nama']; ?></option>
                            <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group mb-1">
                    <label for="pesan" class="form-label">Pesan</label>
                    <textarea name="pesan" class="form-control " rows="4" required></textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="text" class="form-label">Tanggal</label>
                    <?php $tanggalSekarang = date("Y-m-d"); ?>
                    <input type="date" name="tanggal" class="form-control" value="<?= $tanggalSekarang ?>" required>
                </div>
            </div>
        </div>
    </form>
</div>