<!-- BAGIAN TAMBAH DATA ASISTEN -->
<div class="container"><br>
<!-- <h4><?= $data['title'];?></h4> -->
    <form id="formTambahDataNotifikasi" action="<?= BASEURL?>/Notifikasi/tambah" method="post" autocomplete="off">
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="selectAsisten">Pilih Asisten</label>
                    <select name="selectAsisten" class="form-control">
                        <option>Pilih Asisten</option>
                            <?php foreach ($data['asistenOptions'] as $asisten) : ?>
                                <option value="<?= $asisten['nama']; ?>"><?= $asisten['nama']; ?></option>
                            <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="pesan">Pesan</label>
                    <textarea name="pesan" class="form-control" rows="4"></textarea>
                </div>
                <div class="form-group">
                    <label for="text">Tanggal</label>
                    <?php $tanggalHariIni = date("Y-m-d"); ?>
                    <input type="date" name="tanggal" class="form-control" value="<?= $tanggalHariIni ?>" required>
                </div><br>
            </div>
        </div>
    </form>
</div>