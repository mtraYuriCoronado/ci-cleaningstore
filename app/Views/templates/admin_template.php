<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ILJEGREEN 2024 | <?= $this->renderSection('titulo2'); ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo site_url('plugins/fontawesome-free/css/all.min.css'); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo site_url('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css'); ?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo site_url('plugins/icheck-bootstrap/icheck-bootstrap.min.css'); ?>">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo site_url('plugins/jqvmap/jqvmap.min.css'); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo site_url('dist/css/adminlte.min.css'); ?>">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo site_url('plugins/overlayScrollbars/css/OverlayScrollbars.min.css'); ?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo site_url('plugins/daterangepicker/daterangepicker.css'); ?>">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo site_url('plugins/summernote/summernote-bs4.min.css'); ?>">
  <?= $this->renderSection('css'); ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <?= view('partials/preloader'); ?>

    <!-- Navbar -->
    <?= view('partials/navbar'); ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?= view('partials/sidebar'); ?>
    <!-- ./Main Sidebar Container -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">
                <?= $this->renderSection('titulo'); ?>
              </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <!-- <li class="breadcrumb-item">
                  <a href="#">
                    <?= $this->renderSection('breadcrumb'); ?>
                  </a>
                </li>
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard v1</li> -->
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <?= $this->renderSection('content'); ?>

    </div>
    <!-- /.content-wrapper -->

    <!-- Back to top -->
    <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
      <i class="fas fa-chevron-up"></i>
    </a>

    <!-- Footer content -->
    <?= view('partials/footer'); ?>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="<?php echo site_url('plugins/jquery/jquery.min.js'); ?>"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="<?php echo site_url('plugins/jquery-ui/jquery-ui.min.js'); ?>"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="<?php echo site_url('plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
  <!-- ChartJS -->
  <script src="<?php echo site_url('plugins/chart.js/Chart.min.js'); ?>"></script>
  <!-- Sparkline -->
  <script src="<?php echo site_url('plugins/sparklines/sparkline.js'); ?>"></script>
  <!-- JQVMap -->
  <script src="<?php echo site_url('plugins/jqvmap/jquery.vmap.min.js'); ?>"></script>
  <script src="<?php echo site_url('plugins/jqvmap/maps/jquery.vmap.usa.js'); ?>"></script>
  <!-- jQuery Knob Chart -->
  <script src="<?php echo site_url('plugins/jquery-knob/jquery.knob.min.js'); ?>"></script>
  <!-- daterangepicker -->
  <script src="<?php echo site_url('plugins/moment/moment.min.js'); ?>"></script>
  <script src="<?php echo site_url('plugins/daterangepicker/daterangepicker.js'); ?>"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="<?php echo site_url('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'); ?>"></script>
  <!-- Summernote -->
  <script src="<?php echo site_url('plugins/summernote/summernote-bs4.min.js'); ?>"></script>
  <!-- overlayScrollbars -->
  <script src="<?php echo site_url('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'); ?>"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo site_url('dist/js/adminlte.js'); ?>"></script>
  <!-- AdminLTE for demo purposes -->
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="<?php echo site_url('dist/js/pages/dashboard.js'); ?>"></script>
  <?= $this->renderSection('js'); ?>
</body>

</html>