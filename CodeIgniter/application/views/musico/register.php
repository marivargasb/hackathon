<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>hackathon/CodeIgniter/plantilla/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>hackathon/CodeIgniter/plantilla/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>hackathon/CodeIgniter/plantilla/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>hackathon/CodeIgniter/plantilla/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>hackathon/CodeIgniter/plantilla/plugins/iCheck/square/blue.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition register-page">
 <div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>Music</b>STORE</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Register a new account</p>

    <form action="/hackathon/CodeIgniter/musico/save" method="post" enctype="multipart/form-data">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="username" placeholder="Username" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="Password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
      <input type="text" class="form-control" name="nombre" placeholder="First Name" required>
      <span class="glyphicon glyphicon-user form-control-feedback"></span>
    </div>
    
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="apellido" placeholder="Last Name" required>
        <span class="glyphicon  glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="direccion" placeholder="Address" required>
        <span class="glyphicon  glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type='file' name='foto' required><b>Profile picture</b>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-offset-8 col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>


    <a href="/hackathon/CodeIgniter/Musico/login" class="text-center">I already have a account</a>
  </div>
  <!-- /.form-box -->
</div>

<!-- /.register-box -->

<!-- jQuery 3 -->
<script src="<?=base_url() ?>hackathon/CodeIgniter/plantilla/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?=base_url() ?>hackathon/CodeIgniter/plantilla//bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?=base_url() ?>hackathon/CodeIgniter/plantilla/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
