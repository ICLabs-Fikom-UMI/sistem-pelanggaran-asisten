<!-- BAGIAN TAMBAH DATA ASISTEN -->
<div class="container"><br>
<h4><?= $data['title'];?></h4>
    <form action="<?= BASEURL?>/TindakLanjut/tambah" method="post">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="tindak_lanjut">Tindak Lanjut</label>
                    <input type="text" name="tindak_lanjut" class="form-control" placeholder="Masukkan Tindak Lanjut">
                </div><br>
                <button type="submit" class="btn btn-primary btn-style" onclick="window.location.href='index.php';">Tambah</button>
            </div>
        </div>
    </form>
</div>