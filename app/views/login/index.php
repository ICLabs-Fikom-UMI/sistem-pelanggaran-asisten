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


<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=BASEURL;?>/assets/css/style3.css">
  <title><?= $data['title']?></title>
</head>
<body class="login-page">
<div class="login-box">
  <div class="login-logo">
    <img src="<?= BASEURL?>/assets/img/logo2.png" alt="" width="100px">
  </div>
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Login</p>
      <form action="<?= BASEURL?>/LogIn/login" method="post">
        <div class="input-group mb-3">
          <input type=" " class="form-control" placeholder="Masukkan Username Anda" name="username" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html> -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=BASEURL;?>/assets/css/style.css">
  <title><?= $data['title']?></title>
</head>
<body class="login-page">
  <div class="container-fluid h-100">
    <div class="row h-100 align-items-center justify-content-center">
      <div class="col-md-4">
        <div class="login-box" style="background-color: #CDD3D7; padding: 20px; border-radius: 10px;">
          <div class="login-logo">
            <img src="<?= BASEURL?>/assets/img/logo2.png" alt="" width="100px">
          </div>
          <div class="card">
            <div class="card-body login-card-body">
              <h5 class="login-box-msg">Login</h5>
              <form action="<?= BASEURL?>/LogIn/login" method="post">
                <div class="input-group mb-3">
                  <input type=" " class="form-control" placeholder="Masukkan Username Anda" name="username" required>
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-envelope"></span>
                    </div>
                  </div>
                </div>
                <div class="input-group mb-3">
                  <input type="password" class="form-control" placeholder="Masukkan Password Anda" name="password" required>
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-lock"></span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary btn-block button-style">LOGIN</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html> -->
