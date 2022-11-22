<?= $this->extend("template") ?>

<?= $this->section("content") ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1", shrink-to-fit=no>
  <link rel="shortcut icon" type="image/png" href="/assets/_dist/img/ShuyoSuvey_logo.png"/>
  <title>ShuyoSurvey | Log in</title>
  

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../_dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
  <center>
<div class="login-box">
  <div class="login-logo">
  <a class="brand-link">
    <img src="/assets/_dist/img/ShuyoSuvey_logo.png" class="img-circle elevation-2" alt="User Logo" style="width : 150px;height : 150px;"> 
    <a href="../../index2.html"><b>Shuyo</b>Survey</a>
  </div>

  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your survey</p>

      <form action="../../index3.html" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" autocomplete="off">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="ml-2">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember" style="font-size: 85%;">
                Remember Me
              </label>
            </div>
          </div>
      <p class="ml-auto">
        <a href="forgot-password.html" style="font-size: 85%;">forgot password?</a>
      </p>
</div>
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Log In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      
        <p>- OR -</p>
        <div class="mr-4 ml-4">
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google mr-2"></i> Sign in using Google
        </a>
      </div>
      <!-- /.social-auth-links -->
      <div class="social-auth-links text-center mb-3">
      <p class="mb-0" style="text-align:center;">
      <a> Don't Have an Account?</a>
        <a href="http://localhost:8080/user/signin" class="text-center">Sign Up</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../_dist/js/adminlte.min.js"></script>
</center>
</body>
</html>
<?= $this->endSection() ?>