<?php

require 'ayudaAlumno.php';

 ?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>SimpleAdmin - Responsive Admin Dashboard Template</title>
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
                              </li>
                              <li class="dropdown top-menu-item-xs">
                                  <a href="#" data-target="#" class="dropdown-toggle menu-right-item" data-toggle="dropdown" aria-expanded="true">
                                      <i class="mdi mdi-bell"></i> <span class="label label-danger">1</span>
                                  </a>
                                  <ul class="dropdown-menu p-0 dropdown-menu-lg">
                                      <!--<li class="notifi-title"><span class="label label-default pull-right">New 3</span>Notification</li>-->
                                      <li class="list-group notification-list" style="height: 267px;">
                                         <div class="slimscroll">
                                             <!-- list item-->
                                             <a href="javascript:void(0);" class="list-group-item">
                                                <div class="media">
                                                   <div class="media-left p-r-10">
                                                      <em class="fa fa-diamond bg-primary"></em>
                                                   </div>
                                                   <div class="media-body">
                                                      <h5 class="media-heading">Atletico de Madrid vs AS Roma</h5>
                                                      <p class="m-0">
                                                          <small>Martes 14 Noviembre 2017 3:00p.m</small>
                                                      </p>
                                                   </div>
                                                </div>
                                             </a>

                                         </div>
                                      </li>
                                      <!--<li>-->
                                          <!--<a href="javascript:void(0);" class="list-group-item text-right">-->
                                              <!--<small class="font-600">See all notifications</small>-->
                                          <!--</a>-->
                                      <!--</li>-->
                                  </ul>
                              </li>

                              <li class="dropdown top-menu-item-xs">
                                  <a href="" class="dropdown-toggle menu-right-item profile" data-toggle="dropdown" aria-expanded="true"><img src="usuario.png" alt="user-img" class="img-circle"> </a>
                                  <ul class="dropdown-menu">
                                      <li><a href="perfil.php"><i class="ti-user m-r-10"></i> Perfil</a></li>
                                      <li><a href="configuracion_perfil.php"><i class="ti-settings m-r-10"></i> Configuración del perfil</a></li>
                                      <li class="divider"></li>
                                      <li><a href="../index.php"><i class="ti-power-off m-r-10"></i> Cerrar sesión</a></li>
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
                                  <img src="usuario.png" alt="" class="thumb-md img-circle">
                              </div>
                              <div class="user-info">
                                  <a href="perfil.php">David Tovias Alanis</a>
                                  <p class="text-muted m-0">Cuenta - jugador</p>
                              </div>
                          </div>
                          <!--- End User Detail box -->

                          <!-- Left Menu Start -->
                          <ul class="metisMenu nav" id="side-menu">
                              <li><a href="dashboard.php"><i class="ti-home"></i> Dashboard </a></li>



                              <li>
                                  <a href="javascript: void(0);" aria-expanded="true"><i class="ti-flag-alt-2"></i> Partidos <span class="fa arrow"></span></a>
                                  <ul class="nav-second-level nav" aria-expanded="true">
                                      <li><a href="partidos_jugados.php">Partidos jugados</a></li>
                                      <li><a href="ubicacion.php">Ubicación</a></li>
                                      <li><a href="ultimo_partido.php">Ultimo partido</a></li>
                                  </ul>
                              </li>

                              <li>
                                  <a href="javascript: void(0);" aria-expanded="true"><i class="ti ti-basketball"></i> Mi equipo <span class="fa arrow"></span></a>
                                  <ul class="nav-second-level nav" aria-expanded="true">
                                      <li><a href="goles_equipo.php">Goleo individual</a></li>
                                      <li><a href="graficas.php">Gráficas</a></li>
                                      <li><a href="alta_alumno.php">Agregar jugador</a></li>
                                      <li><a href="baja_alumno.php">Dar de baja jugador</a></li>
                                  </ul>
                              </li>


                              <li>
                                  <a href="javascript: void(0);" aria-expanded="true"><i class="ti-cup"></i> Torneo <span class="fa arrow"></span></a>
                                  <ul class="nav-second-level nav" aria-expanded="true">
                                      <li><a href="tabla_goleo.php">Tabla goleo individual</a></li>
                                      <li><a href="tabla_general.php">Tabla general</a></li>
                                      <li><a href="resultados.php">Resultados última jornada</a></li>
                                  </ul>
                              </li>


                              <li>
                                  <a href="javascript: void(0);" aria-expanded="true"><i class="ti-stats-up"></i> Estadisticas <span class="fa arrow"></span></a>
                                  <ul class="nav-second-level nav" aria-expanded="true">
                                      <li><a href="topten.php">Top Ten de equipos</a></li>
                                  </ul>
                              </li>

                              <li>
                                  <a href="contactos.php" ><i class="ti ti-face-smile"></i> Contactos </a>
                              </li>


                              <li>
                                <a href="registrar_equipo.php"><i class="ti ti-thumb-up"></i> Registrar mi equipo</a>
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
                          <h3 class="header-title">Último partido</h3>

                          <div class="row">
                            <br>
                            <h4>&nbsp; Marcador: Atletico de Madrid 3 - 1 Totenham </h4>
                            <h4>&nbsp; Arbitro: Achita </h4>
                            <br>
                            <br>
                              <div class="col-lg-6">
                                  <div class="m-b-20">
                                      <h5>Atletico de Madrid</h5>

                                      <table class="table m-0">

                                          <thead>
                                              <tr>
                                                  <th>#</th>
                                                  <th>Jugador</th>
                                                  <th># playera</th>

                                              </tr>
                                          </thead>
                                          <tbody>
                                              <tr>
                                                  <th scope="row">1</th>
                                                  <td>David</td>
                                                  <td>21</td>

                                              </tr>
                                              <tr>
                                                  <th scope="row">2</th>
                                                  <td>Armando</td>
                                                  <td>10</td>

                                              </tr>
                                              <tr>
                                                  <th scope="row">3</th>
                                                  <td>Marcelo</td>
                                                  <td>11</td>
                                              </tr>
                                          </tbody>
                                      </table>
                                  </div>

                              </div>

                              <div class="col-lg-6">

                                  <div class="m-b-20">
                                      <h5>Goles</h5>

                                      <table class="table table-striped m-0">
                                          <thead>
                                              <tr>
                                                  <th>#</th>
                                                  <th>Jugador</th>
                                                  <th>#goles</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              <tr>
                                                  <th scope="row">1</th>
                                                  <td>David</td>
                                                  <td>1</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">2</th>
                                                  <td>Armando</td>
                                                  <td>2</td>
                                              </tr>
                                          </tbody>
                                      </table>
                                  </div>

                              </div>
                          </div>
                          <!--- end row -->


                          <div class="row"> <!--- start row -->
                              <div class="col-sm-12">
                                  <div class="row">
                                    <br>
                                    <br>
                                      <div class="col-lg-6">
                                          <div class="m-b-20">
                                              <h5>Totenham</h5>

                                              <table class="table m-0">

                                                  <thead>
                                                      <tr>
                                                          <th>#</th>
                                                          <th>Jugador</th>
                                                          <th># playera</th>
                                                      </tr>
                                                  </thead>
                                                  <tbody>
                                                      <tr>
                                                          <th scope="row">1</th>
                                                          <td>Pepe</td>
                                                          <td>12</td>

                                                      </tr>
                                                      <tr>
                                                          <th scope="row">2</th>
                                                          <td>Juan</td>
                                                          <td>9</td>

                                                      </tr>
                                                      <tr>
                                                          <th scope="row">3</th>
                                                          <td>Marcelino</td>
                                                          <td>13</td>
                                                      </tr>
                                                  </tbody>
                                              </table>
                                          </div>

                                      </div>

                                      <div class="col-lg-6">

                                          <div class="m-b-20">
                                              <h5>Goles</h5>

                                              <table class="table table-striped m-0">
                                                  <thead>
                                                      <tr>
                                                          <th>#</th>
                                                          <th>Jugador</th>
                                                          <th>#goles</th>
                                                      </tr>
                                                  </thead>
                                                  <tbody>
                                                      <tr>
                                                          <th scope="row">1</th>
                                                          <td>Juan</td>
                                                          <td>1</td>
                                                      </tr>
                                                  </tbody>
                                              </table>
                                          </div>

                                      </div>
                                  </div>
                                  <!--- end row -->




                      </div> <!-- end col -->
                  </div> <!-- end row -->



                  <br>
                  <br>
              </div>


           <div class="row">
							<div class="col-sm-12">
								<div class="p-20 m-b-20">
									<h4 class="m-b-30 m-t-0 header-title">Hacer un comentario o queja del partido</h4>
									<div class="summernote">
										<h4>Comentarios, quejas o reclamaciones</h4>
                      <ul>
                          <li>
                              Poner aquí todas las inquietudes y desacuerdos que se tengan respecto al partido
                          </li>
                          <li>
                              Sugerencias para el torneo, etc.
                          </li>
                      </ul>
									</div>
								</div>
							</div>
						</div>
                        <!-- end row -->



                      <button type="button" class="btn btn-custom btn-rounded">Enviar comentario</button>

                      <div class="p-t-50 m-b-20">
                          <div class="button-list">
                            <button class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#panel-modal">Ayuda</button>
                          </div>


                          <div id="panel-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                              <div class="modal-dialog">
                                  <div class="modal-content p-0 b-0">
                                      <div class="panel panel-color panel-primary">
                                          <div class="panel-heading">
                                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                              <h3 class="panel-title">Ayuda</h3>
                                          </div>
                                          <div class="panel-body">
                                              <p><?php ultimoPartido(); ?></p>
                                          </div>
                                      </div>
                                  </div><!-- /.modal-content -->
                              </div><!-- /.modal-dialog -->
                          </div><!-- /.modal -->

                      </div>
                      <!-- end Modal section -->



                    </div>
                    <!-- end container -->

                    <div class="footer">
                        <div class="pull-right hidden-xs">
                            Project Completed <strong class="text-custom"></strong>.
                        </div>
                        <div>
                            <strong>Torneo Intramuros</strong> - Copyright &copy; 2017
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
