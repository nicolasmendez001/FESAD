<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>/resources/dashboard/plugins/images/favicon.png">
    <title>Panel de Administración Software Sistema de Gestión de Asiganación Academica FESAD</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url() ?>/resources/dashboard/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="<?= base_url() ?>/resources/dashboard/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- toast CSS -->
    <link href="<?= base_url() ?>/resources/dashboard/plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="<?= base_url() ?>/resources/dashboard/plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="<?= base_url() ?>/resources/dashboard/plugins/bower_components/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/resources/dashboard/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="<?= base_url() ?>/resources/dashboard/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?= base_url() ?>/resources/dashboard/css/style.css" rel="stylesheet">
</head>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                    <!-- Logo -->
                    <a class="logo" href="index.html">
                        <span class="hidden-xs">
                            <img src="<?= base_url() ?>/resources/dashboard/plugins/images/admin-text-dark.png" alt="home" class="light-logo" />
                        </span>
                    </a>
                </div>
                <!-- /Logo -->
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <a class="profile-pic" href="#"> <img src="<?= base_url() ?>/resources/dashboard/plugins/images/users/varun.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">FESAD</b></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('clogin/cerrarsesion/'); ?>">
                            <button class="btn btn-danger">Cerrar Sesión</button>
                        </a>

                    </li>
                </ul>
            </div>
        </nav>
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span>
                    </h3>
                </div>
                <ul class="nav" id="side-menu">
                <li style="padding: 70px 0 0;">
                        <a href="<?= base_url() ?>welcome" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Panel Inicial</a>
                    </li>
                    <li>
                        <a href="<?= base_url() ?>cdocentes" class="waves-effect" style="border-left: none"><i class="fa fa-user fa-fw" aria-hidden="true"></i>Docentes</a>
                    </li>
                    <li>
                        <a href="<?= base_url() ?>cprograma" class="waves-effect" style="border-left: none"><i class="fa fa-list-alt fa-fw" aria-hidden="true"></i>Programas</a>
                    </li>
                    <li>
                        <a href="<?= base_url() ?>csalones" class="waves-effect" style="border-left: none"><i class="fa fa-building fa-fw" aria-hidden="true"></i>Salones</a>
                    </li>
                    <li>
                        <a href="<?= base_url() ?>casignaturas" class="waves-effect" style="border-left: none"><i class="fa fa-book fa-fw" aria-hidden="true"></i>Asignaturas</a>
                    </li>
                    <li>
                        <a href="<?= base_url() ?>cperiodos" class="waves-effect"><i class="fa fa-calendar fa-fw" aria-hidden="true"></i>Periodos</a>
                    </li>

                </ul>

            </div>

        </div>
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Panel de Administración Periodo</h4>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <a href="#nuevodocente">
                            <button class="btn btn-success">Agregar Periodo</button>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Todos los Periodos</h3>
                            <div class="panel-body">
                                <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#example" placeholder="Filtrar Periodo" />
                            </div>
                            <div class="table-responsive">
                                <table id="example" class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Año</th>
                                            <th>Semestre</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1 ?>
                                        <?php foreach ($periodos->result() as $fila) { ?>
                                            <tr>
                                                <td><?php echo $i ?></td>
                                                <td><?php echo $fila->anio ?></td>
                                                <td><?php echo $fila->semestre ?></td>
                                                <td>
                                                    <a href="<?php echo base_url('cperiodos/eliminar/' . $fila->id_periodo); ?>"><button class="btn btn-danger">Eliminar</button></a>
                                                </td>
                                            </tr>
                                            <?php $i++ ?>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- chat-listing & recent comments -->
                <!-- ============================================================== -->
                <div class="row bg-title">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Agregar Periodo</h4>
                    </div>

                    <!-- /.col-lg-12 -->
                </div>

                <div class="col-md-12 col-xs-12" id="nuevodocente">
                    <div class="white-box">
                        <form class="form-horizontal form-material" action="" method="POST" enctype="multipart/form-data">

                            <div class="form-group">
                                <label class="col-md-12">Año</label>
                                <div class="col-md-12">
                                    <select class="form-control pull-right row b-none" name="anio">
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                        <option value="2025">2025</option>
                                        <option value="2026">2026</option>
                                        <option value="2027">2027</option>
                                        <option value="2028">2028</option>
                                        <option value="2029">2029</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Semestre</label>
                                <div class="col-md-12">
                                    <select class="form-control pull-right row b-none" name="semestre">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input class="btn btn-success" type="submit" value="Guardar" name="" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2019 &copy; FACULTAD DE ESTUDIOS A DISTANCIA. SEDE TUNJA </footer>
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?= base_url() ?>/resources/dashboard/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?= base_url() ?>/resources/dashboard/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="<?= base_url() ?>/resources/dashboard/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="<?= base_url() ?>/resources/dashboard/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?= base_url() ?>/resources/dashboard/js/waves.js"></script>
    <!--Counter js -->
    <script src="<?= base_url() ?>/resources/dashboard/plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
    <script src="<?= base_url() ?>/resources/dashboard/plugins/bower_components/counterup/jquery.counterup.min.js"></script>
    <!-- chartist chart -->
    <script src="<?= base_url() ?>/resources/dashboard/plugins/bower_components/chartist-js/dist/chartist.min.js"></script>
    <script src="<?= base_url() ?>/resources/dashboard/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="<?= base_url() ?>/resources/dashboard/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?= base_url() ?>/resources/dashboard/js/custom.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.10.11/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>/resources/js/tabla.js"></script>


</body>

</html>