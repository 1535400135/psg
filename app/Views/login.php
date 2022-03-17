<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dinas Pendidikan | Log in</title>
	<link rel="shortcut icon" href="<?= base_url() ?>/public/LOGO.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?= base_url() ?>/public/LOGO.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= base_url() ?>/public/LOGO.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= base_url() ?>/public/LOGO.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?= base_url() ?>/public/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>/public/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>/public/plugins/toastr/toastr.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>/public/dist/css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <img src="<?= base_url() ?>/public/logo.png" style="width: 140px;">    
    <p><a href="#"><b>Selamat Datang</b><br>Silakan Login</a></p>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <div class="row">
        <div class="col-12">
          <p class="login-box-msg"><b>Dinas Pendidikan Provinsi</b><br><b>Sumatera Selatan</b></p>
          <?php
            if (!empty(session()->getFlashdata('gagal'))) { ?>
            <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <?php echo session()->getFlashdata('gagal'); ?>
            </div>
          <?php } ?>
        </div>
    </div>
      <form action="<?= base_url() ?>/login/cek_login" method="post" >
        <div class="input-group mb-3">
          <input id="nis" name="nis" class="form-control" placeholder="Masukan Username" autofocus >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="Password" id="pass" name="pass" class="form-control" placeholder="Masukan Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Masuk</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?= base_url() ?>/public/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url() ?>/public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>/public/dist/js/adminlte.min.js"></script>
<script src="<?= base_url() ?>/public/plugins/toastr/toastr.min.js"></script>
</body>
</html>
<script type="text/javascript">
  $(function() {
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });
  $('.toastrDefaultSuccess')alert.(function() {
      toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });