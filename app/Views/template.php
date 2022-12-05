<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/assets/_dist/css/adminlte.min.css">

  <link rel="stylesheet" href="/assets/plugins/daterangepicker/daterangepicker.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav" style="font-family:serif;">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <?php if (session()->get('isloggedin')) : ?>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="http://localhost:8080/dashboard" class="nav-link">
          <i class="ml-1 fas fa-tachometer-alt"></i>Dashboard</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="http://localhost:8080/mysurvey" class="nav-link">
        <i class="ml-1 fas fa-newspaper"></i>My Surveys</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="http://localhost:8080/resultsurvey" class="nav-link">
        <i class="ml-1 fas fa-chart-bar"></i>Result Surveys</a>
      </li>
      <?php endif; ?>
    </ul>

    <!-- Right navbar links -->
    <?php if (session()->get('isloggedin')) : ?>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button" >
          <i class="fas fa-square fa-stack-2x" ></i>
          <i class="fas fa-user-alt fa-lg fa-stack-1x fa-inverse"></i>
        </a>
      </li>
    </ul>
    <?php endif; ?>
  </nav>
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a class="brand-link">
      <img src="/assets/_dist/img/ShuyoSuvey_logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">ShuyoSurvey</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
  

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <?php if (session()->get('isloggedin')) : ?> 
               <li class="nav-item menu-open border-0">
                  <a href="http://localhost:8080/" class="nav-link active">
                    <i class="nav-icon fas fa-home"></i>
                    <p>
                      Home
                    </p>
                  </a>
                </li>
                <?php endif; ?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <!-- /.col -->
          <div class="col-sm-12">
            
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <?= $this->renderSection("content") ?>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar " style="width: 200px;height: 100px;">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <a href="/logout" class="btn btn-block btn-outline-dark btn-sm">
        Log Out
      </a>
    </div>
  </aside>
  <!-- /.control-sidebar -->

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/assets/_dist/js/adminlte.min.js"></script>
<script src="/assets/plugins/moment/moment.min.js"></script>
<script src="/assets/plugins/daterangepicker/daterangepicker.js"></script>
<script>
  $('#daterange-btn').daterangepicker(

{

  ranges   : {

    'Today'       : [moment(), moment()],

    'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],

    'Last 7 Days' : [moment().subtract(6, 'days'), moment()],

    'Last 30 Days': [moment().subtract(29, 'days'), moment()],

    'This Month'  : [moment().startOf('month'), moment().endOf('month')],

    'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]

  },

  startDate: moment().subtract(29, 'days'),

  endDate  : moment()

},

function (start, end) {

  $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))

}

)
</script>
    
<script>
    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
</script>
</body>
</html>
