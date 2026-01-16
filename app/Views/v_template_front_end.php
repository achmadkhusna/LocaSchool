<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>LocaSchool | <?= $judul ?></title>

  <link rel="icon" type="image/png" href="<?= base_url('logo/logo.png') ?>" />
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/dist/css/adminlte.min.css">
  <!-- Leaflet -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" crossorigin="" />
  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" crossorigin=""></script>

</head>
<body class="hold-transition sidebar-collapse layout-top-nav">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-indigo navbar-dark">
    <div class="container-fluid" style="padding-left: 25px; padding-right: 25px;">
      <a href="<?= base_url('Home') ?>" class="navbar-brand">
        <img src="<?= base_url() ?>/logo/logo.png" class="me-2" height="45px">
      </a>
      <h5><b><?= $web['nama_web'] ?></b></h5>
      
      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item d-none d-md-block">
            <a href="<?= base_url('Home') ?>" class="nav-link">Home</a>
          </li>
          
          <li class="nav-item dropdown d-none d-md-block">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Wilayah</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              <?php foreach ($wilayah as $value) { ?>
                <li><a href="<?= base_url('Home/Wilayah/' . $value['id_wilayah']) ?>" class="dropdown-item"> <?= $value['nama_wilayah'] ?> </a></li>
              <?php } ?>
            </ul>
          </li>
          
          <li class="nav-item dropdown d-none d-md-block">
            <a id="dropdownSubMenu2" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Jenjang</a>
            <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
              <?php foreach ($jenjang as $value) { ?>
                <li><a href="<?= base_url('Home/Jenjang/' . $value['id_jenjang']) ?>" class="dropdown-item"> <?= $value['jenjang'] ?> </a></li>
              <?php } ?>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- /.navbar -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">

  <!-- Hero Section -->
  <div class="hero-section" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 4rem 0; text-align: center;">
    <div class="container">
      <h1 class="display-4 font-weight-bold mb-4" style="font-family: 'Arial', sans-serif; text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">LocaSchool</h1>
      <p class="lead mb-4" style="font-size: 1.25rem; line-height: 1.6;">
        Temukan lokasi sekolah di sekitar Anda dengan mudah dan cepat menggunakan peta interaktif kami. LocaSchool membantu Anda untuk menjelajahi sekolah-sekolah berdasarkan wilayah dan jenjang pendidikan. Tunggu apa lagi, mulai pencarian Anda sekarang!
      </p>
      <a href="<?= base_url('Auth/Login') ?>" class="btn btn-light btn-lg px-5 py-3" style="border-radius: 50px; font-weight: bold; box-shadow: 0 4px 8px rgba(0,0,0,0.2);">
        <i class="fas fa-sign-in-alt"></i> Login
      </a>
    </div>
  </div>

  <!-- Main content -->
  <div class="content" style="padding: 6rem 0;">
    <div class="row">
      <!-- Isi konten -->
      <?php 
      if ($page) {
        echo view($page);
      }
      ?>
      <!-- /End isi konten -->
    </div>
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Main Footer -->
<footer class="main-footer navbar-dark" style="background-color: #7320f8; color:white;">
  <div class="float-right d-none d-sm-inline">
    LocaSchool v1.0
  </div>
  <strong>Copyright &copy; <?= date('Y') ?> <a href="<?= base_url() ?>" style="color: white;"><?= $web['nama_web'] ?></a>.</strong> All rights reserved.
</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?= base_url('AdminLTE') ?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('AdminLTE') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('AdminLTE') ?>/dist/js/adminlte.min.js"></script>

</body>
</html>
