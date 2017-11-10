<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="assets/plugins/morris/morris.css">

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


          <!-- Copiar desde aqui -->

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="">
                        <a href="index.php" class="logo">
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

                            <!-- Top nav left menu -->
                            <ul class="nav navbar-nav hidden-sm hidden-xs top-navbar-items">
                                <li><a href="ayuda.php">Ayuda</a></li>
                            </ul>

                            <!-- Top nav Right menu -->
                            <ul class="nav navbar-nav navbar-right top-navbar-items-right pull-right">
                                <li class="hidden-xs">
                                    <!--<form role="search" class="navbar-left app-search pull-left">
                                         <input type="text" placeholder="Search..." class="form-control">
                                         <a href=""><i class="fa fa-search"></i></a>
                                    </form>-->


                                <li class="dropdown top-menu-item-xs">
                                    <a href="" class="dropdown-toggle menu-right-item profile" data-toggle="dropdown" aria-expanded="true"><img src="perfil.jpg" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="perfil.php"><i class="ti-user m-r-10"></i> Perfil</a></li>
                                        <li><a href="configuracion_perfil.php"><i class="ti-settings m-r-10"></i> Configuración del perfil</a></li>
                                        <li class="divider"></li>
                                        <li><a href="index.php"><i class="ti-power-off m-r-10"></i> Cerrar sesión</a></li>
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
                                    <img src="perfil.jpg" alt="" class="thumb-md img-circle">
                                </div>
                                <div class="user-info">
                                    <a href="perfil.php">David Tovias Alanis</a>
                                    <p class="text-muted m-0">Administrador</p>
                                </div>
                            </div>
                            <!--- End User Detail box -->

                            <!-- Left Menu Start -->
                            <ul class="metisMenu nav" id="side-menu">
                                <li><a href="dashboard.php"><i class="ti-home"></i> Dashboard </a></li>


                                <li>
                                    <a href="javascript: void(0);" aria-expanded="true"><i class="ti-light-bulb"></i> Partidos <span class="fa arrow"></span></a>
                                    <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><a href="partidos_jugados.php">Subir cedula</a></li>
                                        <li><a href="ubicacion.php">Ubicación</a></li>
                                    </ul>
                                </li>


                                <li>
                                    <a href="javascript: void(0);" aria-expanded="true"><i class="ti-menu-alt"></i> Torneo <span class="fa arrow"></span></a>
                                    <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><a href="tabla_goleo.php">Tabla goleo individual</a></li>
                                        <li><a href="tabla_general.php">Tabla general</a></li>
                                        <li><a href="resultados.php">Resultados</a></li>
                                    </ul>
                                </li>


                                <li>
                                    <a href="javascript: void(0);" aria-expanded="true"><i class="ti-files"></i> Estadisticas <span class="fa arrow"></span></a>
                                    <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><a href="topten.php">Top Ten de equipos</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="equipos.php" aria-expanded="true"><i class="ti-files"></i> Equipos </a>
                                </li>


                                <li>
                                    <a href="contactos.php" ><i class="ti-home"></i> Rol de juegos </a>
                                </li>


                                <li>
                                  <a href="nuevo_administrador.php"><i class="ti-light-bulb"></i> Crear nuevo administrador</a>
                                </li>


                            </ul>
                        </div>
                    </div><!--Scrollbar wrapper-->
                </aside>
                <!--left navigation end-->

                <!-- Copiar hasta aqui -->


                <!-- START PAGE CONTENT -->
                <div id="page-right-content">

                    <div class="container">
                        <div class="row">
							<div class="col-sm-12">
								<div class="card-box widget-inline">
									<div class="row">
										<div class="col-lg-3 col-sm-6">
											<div class="widget-inline-box text-center">
												<h3 class="m-t-10"><i class="text-primary mdi mdi-access-point-network"></i> <b data-plugin="counterup">20</b></h3>
												<p class="text-muted">Numero de equipos</p>
											</div>
										</div>							


									</div>
								</div>
							</div>
						</div>
                        <!--end row -->







                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <h4 class="m-t-0">Equipos del torneo</h4>
                                    <div class="table-responsive">
                                        <table class="table table-hover mails m-0 table table-actions-bar">
                                            <thead>
                                                <tr>
                                                    <th style="min-width: 95px;">

                                                        <!--<div class="btn-group dropdown">-->
                                                            <!--<button type="button" class="btn btn-default btn-xs dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false"><i class="caret"></i></button>-->
                                                            <!--<ul class="dropdown-menu" role="menu">-->
                                                                <!--<li><a href="#">Action</a></li>-->
                                                                <!--<li><a href="#">Another action</a></li>-->
                                                                <!--<li><a href="#">Something else here</a></li>-->
                                                                <!--<li class="divider"></li>-->
                                                                <!--<li><a href="#">Separated link</a></li>-->
                                                            <!--</ul>-->
                                                        <!--</div>-->
                                                    </th>
                                                    <th>Nombre</th>

                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td>


                                                        <img src="assets/images/users/avatar-2.jpg" alt="contact-img" title="contact-img" class="img-circle thumb-sm" />
                                                    </td>

                                                    <td>
                                                        Atletico de Madrid
                                                    </td>

                                                </tr>

                                                <tr>
                                                    <td>

                                                        <img src="assets/images/users/avatar-1.jpg" alt="contact-img" title="contact-img" class="img-circle thumb-sm" />
                                                    </td>

                                                    <td>
                                                        Chelsea
                                                    </td>


                                                </tr>

                                                <tr>
                                                    <td>
                                                        <img src="assets/images/users/avatar-3.jpg" alt="contact-img" title="contact-img" class="img-circle thumb-sm" />
                                                    </td>

                                                    <td>
                                                        Real madrid
                                                    </td>

                                                </tr>

                                                <tr>
                                                    <td>
                                                        <img src="assets/images/users/avatar-4.jpg" alt="contact-img" title="contact-img" class="img-circle thumb-sm" />
                                                    </td>

                                                    <td>
                                                        Totenham
                                                    </td>

                                                </tr>

                                                <tr>
                                                    <td>
                                                        <img src="assets/images/users/avatar-5.jpg" alt="contact-img" title="contact-img" class="img-circle thumb-sm" />
                                                    </td>

                                                    <td>
                                                        Barcelona
                                                    </td>

                                                </tr>

                                                <tr>
                                                    <td>
                                                        <img src="assets/images/users/avatar-6.jpg" alt="contact-img" title="contact-img" class="img-circle thumb-sm" />
                                                    </td>

                                                    <td>
                                                        PSG
                                                    </td>
                                                </tr>


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <!-- end container -->

                    <div class="footer">
                        <div class="pull-right hidden-xs">
                            Project Completed <strong class="text-custom">39%</strong>.
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

        <!--Morris Chart-->
		<script src="assets/plugins/morris/morris.min.js"></script>
		<script src="assets/plugins/raphael/raphael-min.js"></script>

        <!-- Dashboard init -->
		<script src="assets/pages/jquery.dashboard.js"></script>

        <!-- App Js -->
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>
