<!-- BAGIAN TAMBAH DATA JENIS KELAKUAN -->
<div class="container"><br>
<!-- <h4><?= $data['title'];?></h4> -->
    <form action="<?= BASEURL?>/jk/tambah" method="post" autocomplete="off">
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="text">Jenis Kelakuan</label>
                    <input type="text" name="jenis_kelakuan" class="form-control" placeholder="Masukkan Jenis Kelakuan">
                </div>
                <button type="submit" class="btn btn-primary btn-style" onclick="window.location.href='index.php';">Tambah</button>
            </div>
        </div>
    </form>
</div>