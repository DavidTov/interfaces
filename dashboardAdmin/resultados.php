


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>resultados última jornada</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Plugins css-->
        <link href="assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet" />
        <link rel="stylesheet" href="assets/plugins/switchery/switchery.min.css">
        <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
		<link href="assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
		<link href="assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
		<link href="assets/plugins/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">
		<link href="assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
        <!-- Summernote css -->
        <link href="assets/plugins/summernote/summernote.css" rel="stylesheet" />


        <!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- MetisMenu CSS -->
        <link href="assets/css/metisMenu.min.css" rel="stylesheet">
        <!-- Icons CSS -->
        <link href="assets/css/icons.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="assets/css/style.css" rel="stylesheet">

    </head>


    <body>

        <div id="page-wrapper">

          <!-- Top Bar Start -->
          <div class="topbar">

              <!-- LOGO -->
              <div class="topbar-left">
                  <div class="">
                      <a href="#" class="logo">
                          <img src="assets/images/logo.png" alt="logo" class="logo-lg" />
                          <img src="assets/images/logo_sm.png" alt="logo" class="logo-sm hidden" />
                      </a>
                  </div>
              </div>




              <!-- Top navbar -->
              <div class="navbar navbar-default" role="navigation">
                  <div class="container">
                      <div class="">

                          <!-- Mobile menu button -->
                          <div class="pull-left">
                              <button type="button" class="button-menu-mobile visible-xs visible-sm">
                                  <i class="fa fa-bars"></i>
                              </button>
                              <span class="clearfix"></span>
                          </div>



                          <!-- Top nav Right menu -->
                          <ul class="nav navbar-nav navbar-right top-navbar-items-right pull-right">
                              <li class="hidden-xs">
                                  <!--<form role="search" class="navbar-left app-search pull-left">
                                       <input type="text" placeholder="Search..." class="form-control">
                                       <a href=""><i class="fa fa-search"></i></a>
                                  </form>-->


                              <li class="dropdown top-menu-item-xs">
                                  <a href="" class="dropdown-toggle menu-right-item profile" data-toggle="dropdown" aria-expanded="true"><img src="admin.png" alt="user-img" class="img-circle"> </a>
                                  <ul class="dropdown-menu">
                                      <li><a href="../loginAdmin.php"><i class="ti-power-off m-r-10"></i> Cerrar sesión</a></li>
                                  </ul>
                              </li>
                          </ul>
                      </div>
                  </div> <!-- end container -->
              </div> <!-- end navbar -->
          </div>
          <!-- Top Bar End -->


          <!-- Page content start -->
          <div class="page-contentbar">

              <!--left navigation start-->
              <aside class="sidebar-navigation">
                  <div class="scrollbar-wrapper">
                      <div>
                          <button type="button" class="button-menu-mobile btn-mobile-view visible-xs visible-sm">
                              <i class="mdi mdi-close"></i>
                          </button>
                          <!-- User Detail box -->
                          <div class="user-details">
                              <div class="pull-left">
                                  <img src="admin.png" alt="" class="thumb-md img-circle">
                              </div>
                              <div class="user-info">
                                  <a href="#">David Tovias Alanis</a>
                                  <p class="text-muted m-0">Administrador</p>
                              </div>
                          </div>
                          <!--- End User Detail box -->

                          <!-- Left Menu Start -->
                          <ul class="metisMenu nav" id="side-menu">
                              <li><a href="dashboardAdmin.php"><i class="ti-home"></i> Dashboard </a></li>


                              <li>
                                  <a href="javascript: void(0);" aria-expanded="true"><i class="ti-flag-alt-2"></i> Partidos <span class="fa arrow"></span></a>
                                  <ul class="nav-second-level nav" aria-expanded="true">
                                      <li><a href="cedula.php">Subir cedula</a></li>
                                      <li><a href="ubicacionAdmin.php">Ubicación</a></li>
                                  </ul>
                              </li>


                              <li>
                                  <a href="javascript: void(0);" aria-expanded="true"><i class="ti ti-cup"></i> Torneo <span class="fa arrow"></span></a>
                                  <ul class="nav-second-level nav" aria-expanded="true">
                                      <li><a href="tabla_goleo.php">Tabla goleo individual</a></li>
                                      <li><a href="tabla_general.php">Tabla general</a></li>
                                      <li><a href="resultados.php">Resultados</a></li>
                                  </ul>
                              </li>


                              <li>
                                  <a href="javascript: void(0);" aria-expanded="true"><i class="ti-stats-up"></i> Estadisticas <span class="fa arrow"></span></a>
                                  <ul class="nav-second-level nav" aria-expanded="true">
                                      <li><a href="topten.php">Top Ten de equipos</a></li>
                                  </ul>
                              </li>

                              <li>
                                  <a href="baja_equipo.php" aria-expanded="true"><i class="ti ti-arrow-down"></i> Dar de baja un equipo </a>
                              </li>


                              <li>
                                  <a href="rol.php" ><i class="ti-flag"></i> Rol de juegos </a>
                              </li>

                              <li><a href="cambiar_contrasena.php"><i class="ti-settings"></i> Cambiar contraseña </a></li>

                              <li>
                                <a href="nuevo_administrador.php"><i class="ti ti-id-badge"></i> Crear nuevo administrador</a>
                              </li>


                          </ul>
                      </div>
                  </div><!--Scrollbar wrapper-->
              </aside>
              <!--left navigation end-->

                <!-- START PAGE CONTENT -->
                <div id="page-right-content">

                    <div class="container">

                      <div class="col-sm-12">
                          <h3 class="header-title">Resultados Última jornada</h3>

                          <div class="row">
                            <br>

                            <br>
                            <br>
                              <div class="col-lg-6">
                                  <div class="m-b-20">


                                      <table class="table m-0">

                                          <thead>
                                              <tr>
                                                  <th>#</th>
                                                  <th>Local</th>
                                                  <th>Goles</th>
                                                  <th> - </th>
                                                  <th>Goles</th>
                                                  <th>Visitante</th>

                                              </tr>
                                          </thead>
                                          <tbody>
                                              <tr>
                                                  <th scope="row">1</th>
                                                  <td>Atletico de Madrid</td>
                                                  <td>3</td>
                                                  <td> - </td>
                                                  <td>1</td>
                                                  <td>Totenham</td>

                                              </tr>
                                              <tr>
                                                  <th scope="row">2</th>
                                                  <td>Chelsea</td>
                                                  <td>1</td>
                                                  <td> - </td>
                                                  <td>1</td>
                                                  <td>Bayern munich</td>

                                              </tr>
                                              <tr>
                                                  <th scope="row">3</th>
                                                  <td>Arsenal</td>
                                                  <td>1</td>
                                                  <td> - </td>
                                                  <td>2</td>
                                                  <td>Juventus</td>

                                              </tr>
                                              <tr>
                                                  <th scope="row">4</th>
                                                  <td>PSV</td>
                                                  <td>4</td>
                                                  <td> - </td>
                                                  <td>0</td>
                                                  <td>Borussia Dortmund</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">5</th>
                                                  <td>Barcelona</td>
                                                  <td>2</td>
                                                  <td> - </td>
                                                  <td>1</td>
                                                  <td>Real Madrid</td>

                                              </tr>
                                          </tbody>
                                      </table>
                                  </div>

                              </div>


                          </div>
                          <!--- end row -->

                  <br>
                  <br>
              </div>

              <form class="form-horizontal" action="dashboardAdmin.php">
                        &nbsp; &nbsp;&nbsp; <button type="submit" class="btn btn-custom btn-bordered">Ir al dashboard</button>
              </form>

                    </div>
                    <!-- end container -->



                    <div class="footer">
                        <div class="pull-right hidden-xs">
                            Project Completed <strong class="text-custom"></strong>.
                        </div>
                        <div>
                            <strong>Torneo intramuros</strong> - Copyright &copy; 2017
                        </div>
                    </div> <!-- end footer -->

                </div>
                <!-- End #page-right-content -->

            </div>
            <!-- end .page-contentbar -->
        </div>
        <!-- End #page-wrapper -->



        <!-- js placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery-2.1.4.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/jquery.slimscroll.min.js"></script>

        <script src="assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
        <script src="assets/plugins/select2/js/select2.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>
        <script src="assets/plugins/switchery/switchery.min.js"></script>
        <script type="text/javascript" src="assets/plugins/parsleyjs/parsley.min.js"></script>

        <script src="assets/plugins/moment/moment.js"></script>
     	<script src="assets/plugins/timepicker/bootstrap-timepicker.js"></script>
     	<script src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
     	<script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
     	<script src="assets/plugins/clockpicker/js/bootstrap-clockpicker.min.js"></script>
     	<script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
        <script src="assets/plugins/summernote/summernote.min.js"></script>

        <!-- form advanced init js -->
        <script src="assets/pages/jquery.form-advanced.init.js"></script>

        <!-- App Js -->
        <script src="assets/js/jquery.app.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('.form-validation').parsley();
                $('.summernote').summernote({
                    height: 350,                 // set editor height
                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor
                    focus: false                 // set focus to editable area after initializing summernote
                });
            });
        </script>

    </body>
</html>
