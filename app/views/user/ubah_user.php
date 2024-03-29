<!-- BAGIAN UBAH DATA USER -->
<div class="container">
    <form id="formUbahUser" action="<?= BASEURL?>/User/prosesUbah" method="post" autocomplete="off" enctype="multipart/form-data">
    <input type="hidden" value="<?= $data['ubahdata']['ID_User']?>" name="ID_User">
        <div class="row">
            <div class="col-12">
                <div class="form-group mb-1">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control " value="<?= $data['ubahdata']['nama']?>">
                </div>
                <div class="form-group mb-1">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control " value="<?= $data['ubahdata']['username']?>">
                </div>
                <div class="form-group mb-1">
                    <label for="password" class="form-label">Password</label>
                    <div class="input-group">
                        <input id="passwordInput" type="password" name="password" class="form-control " value="<?= $data['ubahdata']['password']?>">
                        <div class="input-group-append">
                            <button id="togglePassword" type="button" class="btn btn-outline-secondary"><i class="fa fa-eye"></i></button>
                        </div>
                    </div>
                </div>
                <?php if (($_SESSION['role'] == 'admin')) : ?>
                <div class="form-group mb-1">
                    <label for="role" class="form-label">Role</label>
                    <input type="text" name="role" class="form-control " value="<?= $data['ubahdata']['role']?>">
                </div>
                <?php endif;?>
                <div class="form-group mb-3">
                    <label for="formFile" class="form-label">Masukkan Foto</label>
                    <input class="form-control " type="file" name="photo_path">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary" style="background: #06253A; color: #FFFFFF;">Ubah</button>
                    <button type="button" class="btn btn-primary ml-2" style="background: #06253A; color: #FFFFFF;" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </form>
</div>
<script>
    // PENGATURAN PASSWORD
    document.getElementById('togglePassword').addEventListener('click', function () {
        var passwordInput = document.getElementById('passwordInput');
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
        } else {
            passwordInput.type = 'password';
        }
    });
</script>