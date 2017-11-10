<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Perfil</title>
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
                                <li><a href="#">Ayuda</a></li>
                            </ul>



                            <!-- Top nav Right menu -->
                            <ul class="nav navbar-nav navbar-right top-navbar-items-right pull-right">

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
                                                        <h5 class="media-heading">Partido vs Canadá</h5>
                                                        <p class="m-0">
                                                            <small>Miércoles 1 Nov 2017 3:00p.m</small>
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
                                        <li><a href="javascript:void(0)"><i class="ti-settings m-r-10"></i> Configuración del perfil</a></li>
                                        <li class="divider"></li>
                                        <li><a href="javascript:void(0)"><i class="ti-power-off m-r-10"></i> Cerrar sesión</a></li>
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
                                    <a href="#">David Tovias Alanis</a>
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
                                        <li><a href="components-alerts.html">Partidos jugados</a></li>
                                        <li><a href="components-alerts.html">Ubicación</a></li>
                                        <li><a href="components-range-slider.html">Ultimo partido</a></li>
                                    </ul>
                                </li>


                                <li>
                                    <a href="javascript: void(0);" aria-expanded="true"><i class="ti-menu-alt"></i> Torneo <span class="fa arrow"></span></a>
                                    <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><a href="tables-basic.html">Tabla goleo individual</a></li>
                                        <li><a href="tables-basic.html">Tabla general</a></li>
                                        <li><a href="tables-advanced.html">Registrar mi equipo</a></li>
                                    </ul>
                                </li>


                                <li>
                                    <a href="javascript: void(0);" aria-expanded="true"><i class="ti-files"></i> Estadisticas <span class="fa arrow"></span></a>
                                    <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><a href="pages-login.html">Top Ten de equipos</a></li>
                                        <li><a href="pages-register.html">Goleo individual de mi equipo</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript: void(0);" ><i class="ti-home"></i> Contactos </a>
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
                            <div class="col-md-12">
                                <div class="p-0 text-center">
                                    <div class="member-card">
                                        <div class="thumb-xl member-thumb m-b-10 center-block">
                                            <img src="assets/images/users/avatar-3.jpg" class="img-circle img-thumbnail" alt="profile-image">
                                            <i class="mdi mdi-star-circle member-star text-success" title="verified user"></i>
                                        </div>

                                        <div class="">
                                            <h4 class="m-b-5">DAVID TOVIAS ALANIS</h4>
                                        </div>

                                        <p class="text-muted m-t-10">
                                            Hola, Soy David Tovias de la carrera de ITI
                                        </p>

                                    </div>

                                </div> <!-- end card-box -->

                            </div> <!-- end col -->
                        </div> <!-- end row -->

                        <div class="m-t-30">
                            <ul class="nav nav-tabs tabs-bordered">
                                <li class="active">
                                    <a href="#home-b1" data-toggle="tab" aria-expanded="true">
                                        Perfil
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#profile-b1" data-toggle="tab" aria-expanded="false">
                                        Configuración
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="home-b1">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <!-- Personal-Information -->
                                            <div class="panel panel-default panel-fill">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">Información personal</h3>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="m-b-20">
                                                        <strong>Nombre(s)</strong>
                                                        <br>
                                                        <p class="text-muted">Johnathan Deo</p>
                                                    </div>
                                                    <div class="m-b-20">
                                                        <strong>Teléfono</strong>
                                                        <br>
                                                        <p class="text-muted">(123) 123 1234</p>
                                                    </div>
                                                    <div class="m-b-20">
                                                        <strong>Email</strong>
                                                        <br>
                                                        <p class="text-muted">1530278@upv.edu.mx</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Personal-Information -->

                                            <!-- Social -->
                                            <div class="panel panel-default panel-fill">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">Social</h3>
                                                </div>
                                                <div class="panel-body">
                                                    <ul class="social-links list-inline m-b-0">
                                                        <li>
                                                            <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Social -->
                                        </div>


                                        <div class="col-md-8">
                                            <!-- Personal-Information -->
                                            <div class="panel panel-default panel-fill">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">Acerca de mí</h3>
                                                </div>
                                                <div class="panel-body">

                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been the industry's standard dummy
                                                        text ever since the 1500s, when an unknown printer took a galley
                                                        of type and scrambled it to make a type specimen book. It has
                                                        survived not only five centuries, but also the leap into
                                                        electronic typesetting, remaining essentially unchanged.</p>

                                                    <p><strong>But also the leap into electronic typesetting, remaining
                                                        essentially unchanged.</strong></p>

                                                    <p>It was popularised in the 1960s with the release of Letraset
                                                        sheets containing Lorem Ipsum passages, and more recently with
                                                        desktop publishing software like Aldus PageMaker including
                                                        versions of Lorem Ipsum.</p>

                                                    <div class="">

                                                        <h5 class="header-title text-uppercase m-t-30 m-b-20">Habilidades</h5>

                                                        <div class="m-b-15">
                                                            <h5>Angular Js <span
                                                                    class="pull-right">60%</span></h5>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-primary"
                                                                     role="progressbar" aria-valuenow="60"
                                                                     aria-valuemin="0" aria-valuemax="100"
                                                                     style="width: 60%">
                                                                    <span class="sr-only">60% Complete</span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="m-b-15">
                                                            <h5>Javascript <span
                                                                    class="pull-right">90%</span></h5>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-primary"
                                                                     role="progressbar" aria-valuenow="90"
                                                                     aria-valuemin="0" aria-valuemax="100"
                                                                     style="width: 90%">
                                                                    <span class="sr-only">90% Complete</span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="m-b-15">
                                                            <h5>Wordpress <span
                                                                    class="pull-right">80%</span></h5>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-primary"
                                                                     role="progressbar" aria-valuenow="80"
                                                                     aria-valuemin="0" aria-valuemax="100"
                                                                     style="width: 80%">
                                                                    <span class="sr-only">80% Complete</span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="m-b-0">
                                                            <h5>HTML5 &amp; CSS3 <span class="pull-right">95%</span>
                                                            </h5>
                                                            <div class="progress m-b-0">
                                                                <div class="progress-bar progress-bar-primary"
                                                                     role="progressbar" aria-valuenow="95"
                                                                     aria-valuemin="0" aria-valuemax="100"
                                                                     style="width: 95%">
                                                                    <span class="sr-only">95% Complete</span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Personal-Information -->

                                        </div>

                                    </div>
                                </div>
                                <div class="tab-pane" id="profile-b1">
                                    <!-- Personal-Information -->
                                    <div class="panel panel-default panel-fill">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Editar perfil</h3>
                                        </div>
                                        <div class="panel-body">
                                            <form role="form">
                                                <div class="form-group">
                                                    <label for="AboutMe">Acerca de mí</label>
                                                    <textarea style="height: 125px" id="AboutMe" class="form-control">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</textarea>
                                                </div>
                                                <button class="btn btn-primary waves-effect waves-light w-md" type="submit">Save</button>
                                            </form>                                            

                                        </div>
                                    </div>
                                    <!-- Personal-Information -->
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

        <!-- App Js -->
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>
