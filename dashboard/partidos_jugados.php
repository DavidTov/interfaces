<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Partidos jugados</title>
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
                        <a href="index.html" class="logo">
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
                                <li class="dropdown top-menu-item-xs">
                                    <a href="#" data-target="#" class="dropdown-toggle menu-right-item" data-toggle="dropdown" aria-expanded="true">
                                        <i class="mdi mdi-bell"></i> <span class="label label-danger">3</span>
                                    </a>
                                    <ul class="dropdown-menu p-0 dropdown-menu-lg">
                                        <!--<li class="notifi-title"><span class="label label-default pull-right">New 3</span>Notification</li>-->
                                        <li class="list-group notification-list" style="height: 267px;">
                                           <div class="slimscroll">
                                               <!-- list item-->

                                               <!-- list item-->
                                               <a href="javascript:void(0);" class="list-group-item">
                                                  <div class="media">
                                                     <div class="media-left p-r-10">
                                                        <em class="fa fa-diamond bg-primary"></em>
                                                     </div>
                                                     <div class="media-body">
                                                        <h5 class="media-heading">Partido vs Canadá</h5>
                                                        <p class="m-0">
                                                            <small>Viernes 10 Nov 2017 3:00p.m</small>
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
                                    <a href="" class="dropdown-toggle menu-right-item profile" data-toggle="dropdown" aria-expanded="true"><img src="perfil.jpg" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="perfil.php"><i class="ti-user m-r-10"></i> Perfil</a></li>
                                        <li><a href="configuracion_perfil"><i class="ti-settings m-r-10"></i> Configuración del perfil</a></li>
                                        <li class="divider"></li>
                                        <li><a href="login.php"><i class="ti-power-off m-r-10"></i> Cerrar sesión</a></li>
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
                                    <p class="text-muted m-0">Cuenta</p>
                                </div>
                            </div>
                            <!--- End User Detail box -->

                            <!-- Left Menu Start -->
                            <ul class="metisMenu nav" id="side-menu">
                                <li><a href="dashboard.php"><i class="ti-home"></i> Dashboard </a></li>



                                <li>
                                    <a href="javascript: void(0);" aria-expanded="true"><i class="ti-light-bulb"></i> Partidos <span class="fa arrow"></span></a>
                                    <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><a href="partidos_jugados.php">Partidos jugados</a></li>
                                        <li><a href="ubicacion.php">Ubicación</a></li>
                                        <li><a href="ultimo_partido.php">Ultimo partido</a></li>
                                    </ul>
                                </li>


                                <li>
                                    <a href="javascript: void(0);" aria-expanded="true"><i class="ti-menu-alt"></i> Torneo <span class="fa arrow"></span></a>
                                    <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><a href="tabla_goleo.php">Tabla goleo individual</a></li>
                                        <li><a href="tabla_general.php">Tabla general</a></li>
                                        <li><a href="registrar_equipo">Registrar mi equipo</a></li>
                                    </ul>
                                </li>


                                <li>
                                    <a href="javascript: void(0);" aria-expanded="true"><i class="ti-files"></i> Estadisticas <span class="fa arrow"></span></a>
                                    <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><a href="topten.php">Top Ten de equipos</a></li>
                                        <li><a href="goles_equipo.php">Goleo individual de mi equipo</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="contactos.php" ><i class="ti-home"></i> Contactos </a>
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
                                <h4 class="header-title">Histórico de partidos</h4>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="timeline">
                                    <article class="timeline-item alt">
                                        <div class="text-right">
                                            <div class="time-show first">
                                                <a href="#" class="btn btn-custom">Esta semana</a>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="timeline-item alt">
                                        <div class="timeline-desk">
                                            <div class="panel">

                                            </div>
                                        </div>
                                    </article>
                                    <article class="timeline-item ">
                                        <div class="timeline-desk">
                                            <div class="panel">

                                            </div>
                                        </div>
                                    </article>
                                    <article class="timeline-item alt">
                                        <div class="timeline-desk">
                                            <div class="panel">
                                                <div class="timeline-box">
                                                    <span class="arrow-alt"></span>
                                                    <span class="timeline-icon bg-primary"><i class="mdi mdi-checkbox-blank-circle-outline"></i></span>
                                                    <h4 class="text-primary">Hace 22 horas</h4>
                                                    <p class="timeline-date text-muted"><small>03:00 pm</small></p>
                                                    <p>Atletico de Madrid 3 - 1 Totenham </p>
                                                    <!--<div class="album">-->
                                                        <!--<a href="#">-->
                                                            <!--<img alt="" src="assets/images/small/img-1.jpg">-->
                                                        <!--</a>-->
                                                        <!--<a href="#">-->
                                                            <!--<img alt="" src="assets/images/small/img-2.jpg">-->
                                                        <!--</a>-->
                                                        <!--<a href="#">-->
                                                            <!--<img alt="" src="assets/images/small/img-3.jpg">-->
                                                        <!--</a>-->
                                                    <!--</div>-->
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>



                                    <article class="timeline-item alt">
                                        <div class="text-right">
                                            <div class="time-show">
                                                <a href="#" class="btn btn-custom">Semana pasada</a>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="timeline-item">
                                        <div class="timeline-desk">
                                            <div class="panel">
                                                <div class="timeline-box">
                                                    <span class="arrow"></span>
                                                    <span class="timeline-icon bg-warning"><i class="mdi mdi-checkbox-blank-circle-outline"></i></span>
                                                    <h4 class="text-warning">01 Noviembre 2017</h4>
                                                    <p class="timeline-date text-muted"><small>03:25 pm</small></p>
                                                    <p>Atletico de Madrid 2 - 0 Real Madrid</p>

                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="timeline-item alt">
                                        <div class="timeline-desk">
                                            <div class="panel">
                                                <div class="timeline-box">
                                                    <span class="arrow-alt"></span>
                                                    <span class="timeline-icon bg-primary"><i class="mdi mdi-checkbox-blank-circle-outline"></i></span>
                                                    <h4 class="text-primary">31 Octubre 2017</h4>
                                                    <p class="timeline-date text-muted"><small>04:25 pm</small></p>
                                                    <p>Atletico de Madrid 2 - 2 Chelsea</p>
                                                </div>
                                            </div>
                                        </div>
                                    </article>

                                    <article class="timeline-item alt">
                                        <div class="text-right">
                                            <div class="time-show">
                                                <a href="#" class="btn btn-custom">hace un mes</a>
                                            </div>
                                        </div>
                                    </article>

                                    <article class="timeline-item alt">
                                        <div class="timeline-desk">
                                            <div class="panel">
                                                <div class="timeline-box">
                                                    <span class="arrow-alt"></span>
                                                    <span class="timeline-icon"><i class="mdi mdi-checkbox-blank-circle-outline"></i></span>
                                                    <h4 class="text-muted">10 Octubre 2017</h4>
                                                    <p class="timeline-date text-muted"><small>03:00 pm</small></p>
                                                    <p>Atletico de Madrid 1 - 0 PSG</p>
                                                </div>
                                            </div>
                                        </div>
                                    </article>

                                    <article class="timeline-item">
                                        <div class="timeline-desk">
                                            <div class="panel">
                                                <div class="timeline-box">
                                                    <span class="arrow"></span>
                                                    <span class="timeline-icon bg-danger"><i class="mdi mdi-checkbox-blank-circle-outline"></i></span>
                                                    <h4 class="text-danger">09 Octubre 2017</h4>
                                                    <p class="timeline-date text-muted"><small>05:00 pm</small></p>
                                                    <p>Atletico de Madrid 5 - 3 Barcelona</p>
                                                </div>
                                            </div>
                                        </div>
                                    </article>

                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-sm-12">
                                <div class="timeline timeline-left">
                                    <article class="timeline-item alt">
                                        <div class="text-left">
                                            <div class="time-show first">
                                                <a href="#" class="btn btn-custom">Esta semana</a>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="timeline-item">
                                        <div class="timeline-desk">
                                            <div class="panel">
                                                <div class="timeline-box">
                                                    <span class="arrow"></span>
                                                    <span class="timeline-icon"><i class="mdi mdi-checkbox-blank-circle-outline"></i></span>
                                                    <h4 class="">Hace 22 horas</h4>
                                                    <p class="timeline-date text-muted"><small>03:00 pm</small></p>
                                                    <p>Atletico de Madrid 3 - 1 Totenham</p>
                                                </div>
                                            </div>
                                        </div>
                                    </article>

                                </div>
                            </div>
                        </div>
                        <!-- end row -->

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

        <!-- App Js -->
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>
