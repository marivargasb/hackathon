@ -20,12 +20,6 @@ defined('BASEPATH') OR exit('No direct script access allowed');
  <!-- iCheck -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>hackathon/CodeIgniter/plantilla/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
@ -33,28 +27,23 @@ defined('BASEPATH') OR exit('No direct script access allowed');
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Music</b>STORE</a>
    <a href="login"><b>Music</b>STORE</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="../../index2.html" method="post">
    <form action="/hackathon/CodeIgniter/musico/isRegister" method="post">
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        <input type="text" name="username" class="form-control" placeholder="User">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password">
        <input type="password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
@ -63,18 +52,8 @@ defined('BASEPATH') OR exit('No direct script access allowed');
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
    </div>
    <!-- /.social-auth-links -->

    <a href="#">I forgot my password</a><br>
    <a href="register.html" class="text-center">Register a new membership</a>
    
    <a href="/hackathon/CodeIgniter/Musico/register" class="text-center">Register a new membership</a>

  </div>
  <!-- /.login-box-body -->
@ -82,11 +61,11 @@ defined('BASEPATH') OR exit('No direct script access allowed');
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?=base_url() ?>CodeIgniter/plantilla/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?=base_url() ?>hackathon/CodeIgniter/plantilla/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?=base_url() ?>CodeIgniter/plantilla//bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?=base_url() ?>hackathon/CodeIgniter/plantilla//bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?=base_url() ?>CodeIgniter/plantilla/plugins/iCheck/icheck.min.js"></script>
<script src="<?=base_url() ?>hackathon/CodeIgniter/plantilla/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({