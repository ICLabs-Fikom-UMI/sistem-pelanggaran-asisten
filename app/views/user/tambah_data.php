<!-- BAGIAN TAMBAH DATA ASISTEN -->
<div class="container">
    <form id="formTambahData" action="<?= BASEURL ?>/User/tambah" method="post" autocomplete="off">
        <div class="row">
            <div class="col-12">
                <div class="form-group mb-3">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama">
                </div>
                <div class="form-group mb-3">
                    <label for="username">Username</label>
                    <input type="email" name="username" class="form-control" placeholder="Masukkan Username">
                </div>
                <div class="form-group mb-3">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Masukkan Password">
                </div>
                <div class="form-group mb-3">
                    <label for="role">Role</label>
                    <input type="text" name="role" class="form-control" placeholder="Masukkan Role">
                </div>
                <div class="form-group mb-3">
                    <label for="photo_path">Foto</label>
                    <input type="file" name="photo_path" class="form-control-file">
                </div>

            </div>
        </div>
    </form>
</div>