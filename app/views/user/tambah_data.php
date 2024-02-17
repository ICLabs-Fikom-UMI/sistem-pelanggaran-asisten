<!-- BAGIAN TAMBAH DATA USER -->
<div class="container">
    <form id="formTambahDataUser" action="<?= BASEURL ?>/User/tambah" method="post" autocomplete="off" enctype="multipart/form-data">
        <div class="row">
            <div class="col-12">
                <div class="form-group mb-1">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control form-control-sm" placeholder="Masukkan Nama">
                </div>
                <div class="form-group mb-1">
                    <label for="username" class="form-label">Username</label>
                    <input type="email" name="username" class="form-control form-control-sm" placeholder="Masukkan Username">
                </div>
                <div class="form-group mb-1">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control form-control-sm" placeholder="Masukkan Password">
                </div>
                <div class="form-group mb-1">
                    <label for="role" class="form-label">Role</label>
                    <input type="text" name="role" class="form-control form-control-sm" placeholder="Masukkan Role">
                </div>
                <div class="form-group mb-3">
                    <label for="formFile" class="form-label">Masukkan Foto</label>
                    <input class="form-control form-control-sm" type="file" name="photo_path">
                </div>
            </div>
        </div>
    </form>
</div>