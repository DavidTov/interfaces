<?php

require 'ayudaAlumno.php';

 ?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Registrar equipo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/favicon.ico">

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
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="m-b-20 header-title">Registro de equipo</h4>


                                <div class="row">
                                  <h5>Empieza tu equipo con 6 jugadores. Ingresa también
                                     el nombre de tu equipo</h5>

                                  <br>

                                        <form class="form-horizontal" role="form">
                                          <div class="form-group">
                                            <br>
                                              <label class="col-md-2 control-label">Nombre del equipo: </label>
                                              <div class="col-md-10">
                                                  <input type="text" class="form-control" placeholder="Ingresa el nombre del equipo">
                                              </div>
                                          </div>
                                          <br>
                                            <div class="form-group">
                                              <br>
                                                <label class="col-md-2 control-label">Matricula: </label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" placeholder="Ingresa la matrícula del jugador">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                              <br>
                                                <label class="col-md-2 control-label">Matricula: </label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" placeholder="Ingresa la matrícula del jugador">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                              <br>
                                                <label class="col-md-2 control-label">Matricula: </label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" placeholder="Ingresa la matrícula del jugador">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                              <br>
                                                <label class="col-md-2 control-label">Matricula: </label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" placeholder="Ingresa la matrícula del jugador">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                              <br>
                                                <label class="col-md-2 control-label">Matricula: </label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" placeholder="Ingresa la matrícula del jugador">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                              <br>
                                                <label class="col-md-2 control-label">Matricula: </label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" placeholder="Ingresa la matrícula del jugador">
                                                </div>
                                            </div>
                                        </form>


                                </div>
                                <!-- end row -->

                            </div><!-- end col -->

                          </div>
                                <!-- end row -->

                          <button type="submit" class="btn btn-success">Registrar equipo</button>

                            </div> <!-- end col -->
                            <br>
                            <br>


                            <div class="p-t-50 m-b-20">
                                <div class="button-list">
                                &nbsp;&nbsp;&nbsp;&nbsp;  <button class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#panel-modal">Ayuda</button>
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
                                                    <p><?php registrarEquipo() ?></p>
                                                </div>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->

                            </div>
                            <!-- end Modal section -->

                        </div> <!-- end row -->




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

        <!-- App Js -->
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>
