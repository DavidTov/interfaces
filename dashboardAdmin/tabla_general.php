<?php

  require 'ayudaAdmin.php';

 ?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Tabla General</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- DataTables -->
        <link href="assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/datatables/dataTables.colVis.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/datatables/fixedColumns.dataTables.min.css" rel="stylesheet" type="text/css"/>

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
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="m-t-0 header-title">Tabla general del torneo</h4>

                                <br>
                                <br>
                            </div>


                            <h5> &nbsp;&nbsp;&nbsp;Cantidad de equipos <span class="badge">  6  </span></h5>
                        </div>


                        <div class="row p-t-50">
                            <div class="col-sm-12">
                                <div class="m-b-20 table-responsive">
                                    <table id="datatable-buttons" class="table table-striped table-bordered">
                                      <thead>
                                      <tr>
                                          <th>Posición</th>
                                          <th>Equipos</th>
                                          <th>PJ</th>
                                          <th>V</th>
                                          <th>E</th>
                                          <th>D</th>
                                          <th>GF</th>
                                          <th>GC</th>
                                          <th>DG</th>
                                          <th>PTS</th>
                                      </tr>
                                      </thead>


                                        <tbody>

                                          <tr>
                                              <td>1</td>
                                              <td>Real Madrid</td>
                                              <td>10</td>
                                              <td>9</td>
                                              <td>0</td>
                                              <td>1</td>
                                              <td>13</td>
                                              <td>3</td>
                                              <td>10</td>
                                              <td>27</td>
                                          </tr>
                                          <tr>
                                            <th>2</th>
                                            <td>Turquía</td>
                                            <td>10</td>
                                            <td>8</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>10</td>
                                            <td>2</td>
                                            <td>8</td>
                                            <td>25</td>
                                          </tr>
                                          <tr>
                                            <th>3</th>
                                            <td>Querétaro</td>
                                            <td>10</td>
                                            <td>8</td>
                                            <td>0</td>
                                            <td>2</td>
                                            <td>11</td>
                                            <td>4</td>
                                            <td>7</td>
                                            <td>24</td>
                                          </tr>
                                          <tr>
                                            <th>4</th>
                                            <td>Barcelona</td>
                                            <td>10</td>
                                            <td>7</td>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>10</td>
                                            <td>4</td>
                                            <td>6</td>
                                            <td>22</td>
                                          </tr>
                                          <tr>
                                            <th>5</th>
                                            <td>Leones negros</td>
                                            <td>10</td>
                                            <td>7</td>
                                            <td>0</td>
                                            <td>3</td>
                                            <td>10</td>
                                            <td>4</td>
                                            <td>6</td>
                                            <td>21</td>
                                          </tr>
                                          <tr>
                                            <th>6</th>
                                            <td>Canada</td>
                                            <td>10</td>
                                            <td>6</td>
                                            <td>1</td>
                                            <td>3</td>
                                            <td>9</td>
                                            <td>4</td>
                                            <td>5</td>
                                            <td>19</td>
                                          </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

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
                                                <p><?php tablaGeneral() ?></p>
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
                            <strong>Simple Admin</strong> - Copyright &copy; 2017
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

        <!-- Datatable js -->
        <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.bootstrap.js"></script>
        <script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="assets/plugins/datatables/buttons.bootstrap.min.js"></script>
        <script src="assets/plugins/datatables/jszip.min.js"></script>
        <script src="assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="assets/plugins/datatables/buttons.print.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.keyTable.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="assets/plugins/datatables/responsive.bootstrap.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.scroller.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.colVis.js"></script>
        <script src="assets/plugins/datatables/dataTables.fixedColumns.min.js"></script>

        <!-- init -->
        <script src="assets/pages/jquery.datatables.init.js"></script>

        <!-- App Js -->
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>
