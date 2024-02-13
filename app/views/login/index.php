<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= BASEURL;?>/assets/css/style2.css">
    <title>Login</title>
    <!-- <title><?php $data['title'];?></title> -->
</head>
<body>
  <div class="Login-Wrap">
    <div class="container-fluid h-100 login-barrier">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="col-md-4">
              <div class="login-logo text-center">
                <img src="<?= BASEURL?>/assets/img/logo-dark.png" alt="" width="100px">
              </div><br>
                <div class="login-container">
                    <form class="login-form" action="<?= BASEURL?>/LogIn/login" method="post" autocomplete="off">
                        <h5><b>LOGIN</b></h5>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username:</label>
                            <input type="email" class="form-control form-login shadow-sm" id="username" name="username" placeholder="Masukkan Username Anda" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password:</label>
                            <input type="password" class="form-control form-login shadow-sm" id="password" name="password" placeholder="Masukkan Password Anda" required>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-dark button-style" style="width: 35%;">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>