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
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu" data-widget="tree">
                        <li class="header">MAIN NAVIGATION</li>

                        <li class="treeview">
          <a href="#">
            <i class="fa fa-home"></i>
            <span>HOME</span>
          </a>
        
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-sign-out"></i>
            <span>LOGOUT</span>
          </a>
        
        </li>

                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>


            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="col-lg-12 connectedSortable">
                    <h1 class="text-center">
                        <b class="text-success">Artist</b>Social

                    </h1>

                </section>


                <div class="row">
                    <section class="col-lg-12 connectedSortable">
                        <div class="box-body">
                            <div class="container">
                                <section class="busqueda col-lg-12">
                                    <nav class="navbar navbar-default">
                                        <div class="conteiner-fluid ">
                                            <div class="navbar-header">
                                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-1"> <span class="sr-only"> Menu</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                                                <a href="#" class="navbar-brand"> <b>BUSCADOR</b></a>
                                            </div>
                                            <div class="collapse navbar-collapse" id="navbar-1">
                                                <form id="myform" action="/hackathon/CodeIgniter/musico/search" method="get">
                                                    <ul class="nav navbar-nav">

                                                        <li class="dropdown" style="display:none;"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"> Categoria
                                      <span class="caret"></span>
                                      
                                      </a>
                                                            <ul class="dropdown-menu">
                                                                <form>
                                                                    <div class="checkbox">
                                                                        <label>
                                                              <input id="pepdro" type="checkbox" value="">Hotel</label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label>
                                                              <input type="checkbox" value="">Restaurante</label>
                                                                    </div>

                                                                </form>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Generos
                                                        <span class="caret"></span></a>
                                                            <ul class="dropdown-menu">
                                                                <form>
                                                                <?php foreach ($generos as $index=>$genero) { ?>
                                                                   
                                                                    <div class="checkbox">
                                                                        <label><input type="checkbox" name="generos[]" form="myform"  value="<?php echo "'".$genero->nombre."'"; ?>"><?php echo $genero->nombre; ?></label>
                                                                    </div>
                                                                    <?php }?>


                                                                </form>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Instrumentos
                                      <span class="caret"></span>
                                      
                                      </a>
                                                            <ul class="dropdown-menu">
                                                            <form>
                                                            <?php foreach ($instrumentos as $index=>$instrumento) { ?>
                                                               
                                                                <div class="checkbox">
                                                                    <label><input type="checkbox" form="myform" name="instrumentos[]" value="<?php echo "'".$instrumento->nombre."'";?>"><?php echo $instrumento->nombre; ?></label>
                                                                </div>
                                                                <?php }?>


                                                            </form>
                                                            </ul>
                                                        </li>
                                                    </ul> 
                                                    <div class="form-group">
                                                    <button type="submit" form="myform" class="btn btn-success">BUSCAR</button>         
                                                    </div>
                                                        
                                                       
                                                    
                                                </form>
                                            </div>
                                        </div>
                                    </nav>
                                </section>
                            </div>


                        </div>

                    </section>

                </div>



                <!-- Main content -->
                <section class="content">
                    <!-- /.col -->
                    <div class="col-md-9">

                        <div class="nav-tabs-custom">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#activity" data-toggle="tab">Activity</a></li>
                                <li><a href="#settings" data-toggle="tab">Settings</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="active tab-pane" id="activity">
                                    <?php foreach ($musico as $index=>$music) { ?>

                                    <!-- user-block -->
                                    <div class="block">
                                        <div class="box box-primary   col-sm-10 ">
                                            <div class="box-body box-profile">
                                                <div class="col-lg-3">
                                                    <img class=" img-responsive img-circle" src="<?php echo base_url(); ?>hackathon/CodeIgniter/pictures/<?php echo $music->username.'.png' ?>" alt="User profile picture">
                                                    <a href="/hackathon/CodeIgniter/musico/users?user=<?php echo $music->username; ?>">
                                                        <h3 class="profile-username text-left">
                                                            <?php echo $music->username; ?>
                                                        </h3>
                                                    </a>
                                                </div>
                                                <br>
                                                <ul class="list-group list-group-unbordered  col-lg-9">
                                                    <li class="list-group-item">
                                                        <b>Nombre</b> <a class="pull-right"><?php echo $music->nombre; ?> <?php echo $music->apellido; ?></a>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <b>Direccion</b> <a class="pull-right"><?php echo $music->direccion; ?></a>
                                                    </li>
                                                </ul>

                                            </div>
                                            <!-- /.box-body -->
                                        </div>
                                    </div>

                                    <!-- /.post -->


                                    <?php } ?>
                                    <!-- /.box-body -->

                                </div>

                                <div class="tab-pane" id="settings">
                                <div class="user-info">
                                <div class="box box-primary  col-lg-12">
                                     <h1 class="text-center">
                           GENEROS
                        </h1>
                                  <form action="/hackathon/CodeIgniter/musico/savegenero?id=2" method="post" class="form-horizontal">
                                  
                                  <div class="form-group  ">
                              
                                              <div class="col-sm-12 ">
                                              <select class="form-control" name="id_genero" id="categoria">

                                              <?php foreach ($generos as $index=>$genero) { ?>
                                                <option value="<?php echo $genero->id_genero; ?>"><?php echo $genero->nombre; ?></option>
                                                <?php }?>
                                
                                              </select>
                                            </div>
                                            </div>
                                         
                  
                                    <div class="form-group">
                                      <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-danger">Submit</button>
                                      </div>
                                    </div>
                                  </form>
                                  </div>
                                  </div>
                                  <div class="box box-info col-lg-12">
                                  <div class="user-info">
                  
                                  <h1 class="text-center">
                               INSTRUMENTO
                                     </h1>
                                  <form action="/hackathon/CodeIgniter/musico/saveinstrumento?id=2" method="post" class="form-horizontal">
                                  
                                  <div class="form-group">
                                  
                                              <div class="col-sm-12 ">
                                              <select class="form-control" name="id_instrumento" id="categoria">
                  
                            
                                              <?php foreach ($instrumentos as $index=>$instrumento) { ?>
                                                <option value="<?php echo $instrumento->id_instrumento; ?>"><?php echo $instrumento->nombre; ?></option>
                                                <?php }?>
                             
                                              </select>
                                            </div>
                                            </div>
                                          
                  
                                    <div class="form-group">
                                      <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-danger">Submit</button>
                                      </div>
                                    </div>
                                  </form>
                                  </div>
                                  </div>
                  
                                </div>
                                <!-- /.tab-pane -->
                              </div>
                              <!-- /.tab-content -->
                            </div>
                            <!-- /.nav-tabs-custom -->
                          </div>
                    <!-- /.col -->

                    <!-- /.row -->


                    <div class="row">
                        <div class="col-md-3">

                            <!-- Profile Image -->
                            <div class="box box-danger">
                                <div class="box-body box-profile">
                                    <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url(); ?>hackathon/CodeIgniter/plantilla/dist/img/user4-128x128.jpg" alt="User profile picture">

                                    <h3 class="profile-username text-center">
                                        <?php echo $music->username; ?>
                                    </h3>



                                    <ul class="list-group list-group-unbordered">
                                        <li class="list-group-item">
                                            <b>Direccion</b> <a class="pull-right"><?php echo $music->direccion; ?></a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>nombre</b> <a class="pull-right"><?php echo $music->nombre; ?></a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>apellido</b> <a class="pull-right"><?php echo $music->apellido; ?></a>
                                        </li>
                                    </ul>

                                    <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->

                            <!-- About Me Box -->
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <h3 class="box-title">About Me</h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <strong><i class="fa fa-book margin-r-5"></i> Education</strong>

                                    <p class="text-muted">
                                        B.S. in Computer Science from the University of Tennessee at Knoxville
                                    </p>

                                    <hr>

                                    <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

                                    <p class="text-muted">Malibu, California</p>

                                    <hr>

                                    <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>

                                    <p>
                                        <span class="label label-danger">UI Design</span>
                                        <span class="label label-success">Coding</span>
                                        <span class="label label-info">Javascript</span>
                                        <span class="label label-warning">PHP</span>
                                        <span class="label label-primary">Node.js</span>
                                    </p>

                                    <hr>

                                    <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                    </div>


                </section>
                <!-- /.content -->
            </div>

            <!-- /.content-wrapper -->
            <footer class="main-footer">
              
             
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