<?= $this->extend("template") ?>

<?= $this->section("content") ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/png" href="/assets/_dist/img/ShuyoSuvey_logo.png"/>
  <title>ShuyoSurvey | Sign Up Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../_dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">
    <center>
<div class="login-box">
    <div class="login-logo">
        <a href="index3.html" class="brand-link">
            <img src="/assets/_dist/img/ShuyoSuvey_logo.png" class="img-circle elevation-2" alt="User Logo" style="width : 150px;heigh : 150px;"> 
            <a href="../../index2.html"><b>Shuyo</b>Survey</a>
        </a>
    </div>

  <div class="card">
    <div class="card-body register-card-body">
      <?php if(!empty(session()->getFlashData("success"))) : ?>
        <div class="alert alert-success"><?= session()->getFlashData("success"); ?></div>
      <?php endif; ?>
      <p class="login-box-msg">Register a new account</p>
      
      <form action="/user/signin" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Full name" name="name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Retype password" name="repeat_password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        

          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Create Account</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      
        <p>- OR -</p>
        <div class="ml-4 mr-4">
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google mr-2"></i> 
          Sign in using Google
        </a>
        </div>

        <div class="social-auth-links text-center mb-3">
            <p class="mb-0" style="text-align:center;">
                <a> Already Have an Account?</a>
                <a href="http://localhost:8080/user" class="text-center">Log In</a>
            </p>
        </div>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../_dist/js/adminlte.min.js"></script>

</body>
</html>
</center>
<?= $this->endSection() ?>