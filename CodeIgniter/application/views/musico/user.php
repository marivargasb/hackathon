<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | User Profile</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>hackathon/CodeIgniter/plantilla/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>hackathon/CodeIgniter/plantilla/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>hackathon/CodeIgniter/plantilla/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>hackathon/CodeIgniter/plantilla/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>hackathon/CodeIgniter/plantilla/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="layout-boxed skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../../index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>M</b>S</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Artist</b>Social</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
  
  </header>

  
  
  
  








  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="col-lg-12 connectedSortable">
      <h1 class="text-center">
      <b class="text-success">Artist</b>Social
      
      </h1>
  
    </section>


  



    <!-- Main content -->
    <section class="content">
   
        <!-- /.col -->
        <div class="col-md-10">

    
          <div class="body">
          <div class="container">
    
          <div class="row">
        <div class="col-md-9">
 
        <?php print_r ($ins); ?>
          <!-- Profile Image -->
          <div class="box box-danger">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url(); ?>hackathon/CodeIgniter/pictures/<?php echo $users['username'].'.png' ?>" alt="User profile picture">

              <h3 class="profile-username text-center"> <?php echo $users['username'] ?> </h3>

              <p class="text-muted text-center"><?php echo $users['nombre']?></p>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <div class=" col-md-12">
          <!-- About Me Box -->
          <div class="col-md-6">
          <div class="box box-primary ">
            <div class="box-header with-border">
              <h3 class="box-title">GENEROS</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Education</strong>

             
              
                         
                            <hr>
              
                            <strong><i class="fa fa-book margin-r-5"></i> Education</strong>
              
                         
                            <hr>
                            <strong><i class="fa fa-book margin-r-5"></i> Education</strong>
              
                         
                            <hr>
                            <strong><i class="fa fa-book margin-r-5"></i> Education</strong>
              
                         
                            <hr>

            </div>
            <!-- /.box-body -->
          </div>
          </div>


        <div class="col-md-6">
          <div class="box box-primary  ">
            <div class="box-header with-border">
              <h3 class="box-title">INSTRUMENTOS</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Education</strong>

           
              <hr>

              <strong><i class="fa fa-book margin-r-5"></i> Education</strong>

           
              <hr>
              <strong><i class="fa fa-book margin-r-5"></i> Education</strong>

           
              <hr>
              <strong><i class="fa fa-book margin-r-5"></i> Education</strong>

           
              <hr>

           

            
            </div>
            <!-- /.box-body -->
          </div>
          </div>

          </div>
          <!-- /.box -->
        </div>
        </div>
      
              
            </div>
          </fieldset>
        </form>
      </div>
    </div>
    
    </div>
          </div>
       
             
             
             
      
        </div>
    </section>
    <!-- /.content -->
  </div>


  <div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel"> INGRESAR</h4>
          </div>
          <div class="modal-body">
          <div class="container">
    
          <div class="row">
        <div class="col-md-9">

          <!-- Profile Image -->
          <div class="box box-danger">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url(); ?>CodeIgniter/plantilla/dist/img/user4-128x128.jpg" alt="User profile picture">

              <h3 class="profile-username text-center">Nina Mcintire</h3>

              <p class="text-muted text-center">Software Engineer</p>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <div class=" col-md-12">
          <!-- About Me Box -->
          <div class="col-md-6">
          <div class="box box-primary ">
            <div class="box-header with-border">
              <h3 class="box-title">GENEROS</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Education</strong>

             
              
              <?php  
              foreach ($ins as $index=>$music) { ?>
      
                            <hr>
              
                            <strong><i class="fa fa-book margin-r-5"></i> <?php echo $music->nombre; ?></strong>
              
                         
                            <hr>
                            
            
                            <?php } ?>

            </div>
            <!-- /.box-body -->
          </div>
          </div>


          <div class="col-md-6">
          <div class="box box-primary ">
            <div class="box-header with-border">
              <h3 class="box-title">GENEROS</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Education</strong>

             
              
                         
                            <hr>
              
                            <strong><i class="fa fa-book margin-r-5"></i> Education</strong>
              
                         
                            <hr>
                            <strong><i class="fa fa-book margin-r-5"></i> Education</strong>
              
                         
                            <hr>
                            <strong><i class="fa fa-book margin-r-5"></i> Education</strong>
              
                         
                            <hr>

            </div>
            <!-- /.box-body -->
          </div>
          </div>
          <!-- /.box -->
        
              
            </div>
          </fieldset>
        </form>
      </div>
    </div>
    
    </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">I Agree</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
  
  
  
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>hackathon/CodeIgniter/plantilla/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>hackathon/CodeIgniter/plantilla/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>hackathon/CodeIgniter/plantilla/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>hackathon/CodeIgniter/plantilla/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>hackathon/CodeIgniter/plantilla/dist/js/demo.js"></script>
</body>
</html>