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

      <form action="/login" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" autocomplete="off" name="password">
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
      
      <button id="googleConnectButton" type="button" class="btn btn-block btn-danger active">
          <div class="gsuite-inner-div">
            <div class="google-icon-holder">
              <svg height="20" viewBox="0 0 512 512" width="20" xmlns="http://www.w3.org/2000/svg">
                <g fill="none" fill-rule="evenodd">
                  <path d="M482.56 261.36c0-16.73-1.5-32.83-4.29-48.27H256v91.29h127.01c-5.47 29.5-22.1 54.49-47.09 71.23v59.21h76.27c44.63-41.09 70.37-101.59 70.37-173.46z" fill="#4285f4"></path>
                  <path d="M256 492c63.72 0 117.14-21.13 156.19-57.18l-76.27-59.21c-21.13 14.16-48.17 22.53-79.92 22.53-61.47 0-113.49-41.51-132.05-97.3H45.1v61.15c38.83 77.13 118.64 130.01 210.9 130.01z" fill="#34a853"></path>
                  <path d="M123.95 300.84c-4.72-14.16-7.4-29.29-7.4-44.84s2.68-30.68 7.4-44.84V150.01H45.1C29.12 181.87 20 217.92 20 256c0 38.08 9.12 74.13 25.1 105.99l78.85-61.15z" fill="#fbbc05"></path>
                  <path d="M256 113.86c34.65 0 65.76 11.91 90.22 35.29l67.69-67.69C373.03 43.39 319.61 20 256 20c-92.25 0-172.07 52.89-210.9 130.01l78.85 61.15c18.56-55.78 70.59-97.3 132.05-97.3z" fill="#ea4335"></path>
                  <path d="M20 20h472v472H20V20z"></path>
                </g>
              </svg>
                Login with Google
            </div>
          </div> 
      </button>
        
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