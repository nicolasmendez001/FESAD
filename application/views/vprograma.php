<!DOCTYPE html>
<html lang="es">

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
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                    <a class="logo" href="index.html">
                        <span class="hidden-xs">
                            <img src="<?= base_url() ?>/resources/dashboard/plugins/images/admin-text-dark.png" alt="home" class="light-logo" />
                        </span> </a>
                </div>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <a class="profile-pic" href="#"> <img src="<?= base_url() ?>/resources/dashboard/plugins/images/users/varun.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">FESAD</b></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('clogin/cerrarsesion/'); ?>"><button class="btn btn-danger">Cerrar Sesión</button></a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3>
                </div>
                <ul class="nav" id="side-menu">
                    <li style="padding: 70px 0 0;">
                        <a href="<?= base_url() ?>welcome" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Panel Inicial</a>
                    </li>
                    <li>
                        <a href="<?= base_url() ?>cdocentes" class="waves-effect" style="border-left: none"><i class="fa fa-user fa-fw" aria-hidden="true"></i>Docentes</a>
                    </li>
                    <li>
                        <a href="" class="waves-effect"><i class="fa fa-list-alt fa-fw" aria-hidden="true"></i>Programas</a>
                    </li>
                    <li>
                        <a href="<?= base_url() ?>csalones" class="waves-effect" style="border-left: none"><i class="fa fa-building fa-fw" aria-hidden="true"></i>Salones</a>
                    </li>
                    <li>
                        <a href="<?= base_url() ?>casignaturas" class="waves-effect"><i class="fa fa-book fa-fw" aria-hidden="true"></i>Asignaturas</a>
                    </li>
                    <li>
                        <a href="<?= base_url() ?>cperiodos" class="waves-effect" style="border-left: none"><i class="fa fa-calendar fa-fw" aria-hidden="true"></i>Periodos</a>
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
                    <div class="col-lg-5 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Panel de Administración Programas académicos</h4>
                    </div>
                    <div class="col-lg-7 col-md-4 col-sm-4 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="<?= base_url() ?>">Inicio</a></li>
                            <li class="active">Programas</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <!-- ============================================================== -->
                <!-- table -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="col-lg-6 col-md-4 col-sm-4 col-xs-12">
                                <h2 class="text-center"><strong>Lista de Programas académicos</strong></h2>
                            </div>
                            <div class="panel-body">
                                <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Filtrar Docentes" />
                            </div>
                            <table class="table table-hover" id="dev-table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nombre</th>
                                        <th>Semestres</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1 ?>
                                    <?php foreach ($consulta->result() as $fila) { ?>
                                        <tr>
                                            <td><?php echo $i ?></td>
                                            <td><?php echo $fila->nombre ?></td>
                                            <td><?php echo $fila->semestres ?></td>
                                            <td>
                                                <a href="<?php echo base_url('cprograma/editar/' . $fila->id_programa); ?>"><button class="btn btn-warning">Editar</button></a>
                                                <a href="<?php echo base_url('cprograma/eliminar/' . $fila->id_programa); ?>"><button class="btn btn-danger">Eliminar</button></a>
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
                <div class="col-lg-5 col-md-4 col-sm-4 col-xs-12">
                    <h2 class="text-center"><strong>Agregar programa académico</strong></h2>
                </div>
            </div>

            <div class="col-md-12 col-xs-12" id="nuevodocente">
                <div class="white-box">
                    <form class="form-horizontal form-material" action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="col-md-12">Nombre<span style="color: red;">*</span></label>
                            <div class="col-md-12">
                                <input type="text" name="nombre" placeholder="Nombre" class="form-control form-control-line" required></div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Semestres<span style="color: red;">*</span></label>
                            <div class="col-md-12">
                                <select class="form-control pull-right row b-none" name="semestre">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
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
    <script src="<?= base_url() ?>/resources/dashboard/js/dashboard1.js"></script>
    <script src="<?= base_url() ?>/resources/dashboard/plugins/bower_components/toast-master/js/jquery.toast.js"></script>
    <script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.10.11/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>/resources/js/tabla.js"></script>
</body>

</html>