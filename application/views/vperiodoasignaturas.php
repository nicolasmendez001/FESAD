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
                    <!-- Logo icon image, you can use font-icon also --><b>
                        <!--This is dark logo icon-->
                        <!--                        <img src="--><?//= base_url() ?><!--/resources/dashboard/plugins/images/admin-logo.png" alt="home" class="dark-logo" /><!--This is light logo icon-->
                        <!--                        <img src="-->--><?////= base_url() ?><!--<!--/resources/dashboard/plugins/images/admin-logo-dark.png" alt="home" class="light-logo" />-->-->
                        <!--                    </b>-->
                        <!-- Logo text image you can use text also --><span class="hidden-xs">
                            <img src="<?= base_url() ?>/resources/dashboard/plugins/images/admin-text-dark.png" alt="home" class="light-logo" />
                     </span> </a>
            </div>
            <!-- /Logo -->
            <ul class="nav navbar-top-links navbar-right pull-right">
                <li>
                    <a href="<?php echo base_url('clogin/cerrarsesion/'); ?>"><button class="btn btn-danger">Cerrar Sesión</button></a>
                </li>
                <li>
                    <a class="profile-pic" href="#"> <img src="<?= base_url() ?>/resources/dashboard/plugins/images/users/varun.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">FESAD</b></a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-header -->
        <!-- /.navbar-top-links -->
        <!-- /.navbar-static-side -->
    </nav>
    <!-- End Top Navigation -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav slimscrollsidebar">
            <div class="sidebar-head">
                <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3>
            </div>
            <ul class="nav" id="side-menu">
                <li style="padding: 70px 0 0;">
                    <a href="" class="waves-effect" style="border-left: none"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Panel Inicial</a>
                </li>
                <li>
                    <a href="<?= base_url() ?>cdocentes" class="waves-effect" style="border-left: none"><i class="fa fa-user fa-fw" aria-hidden="true"></i>Docentes</a>
                </li>
                <li>
                    <a href="" class="waves-effect" ><i class="fa fa-list-alt fa-fw" aria-hidden="true"></i>Programas</a>
                </li>
                <li>
                    <a href="<?= base_url() ?>csalones" class="waves-effect" style="border-left: none"><i
                                class="fa fa-building fa-fw" aria-hidden="true"></i>Sitios</a>
                </li>
                <li>
                    <a href="<?= base_url() ?>casignaturas" class="waves-effect"><i class="fa fa-book fa-fw"
                                                                                    aria-hidden="true"></i>Asignaturas</a>
                </li>
                <li>
                    <a href="<?= base_url() ?>cperiodos" class="waves-effect"style="border-left: none"><i class="fa fa-calendar fa-fw"
                                                                                                          aria-hidden="true"></i>Periodos</a>
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
                    <h4 class="page-title">Panel de Administración Asignaturas</h4>
                </div>
                <div class="col-lg-8 col-md-4 col-sm-4 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="<?= base_url() ?>">Inicio</a></li>
                        <li><a href="<?= base_url() ?>cprograma">Programas</a></li>
                        <li><a href="<?= base_url() ?>cprograma">Periodo`</a></li>
                        <li class="active">Asignaturas</li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- table -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Asignatura</strong></h3>
                            <div class="pull-right">
							<span class="clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body">
								<i class="glyphicon glyphicon-filter"></i>
							</span>
                            </div>
                        </div>
                        <div class="panel-body">
                            <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Filtrar Asignaturas" />
                        </div>
                        <table class="table table-hover" id="dev-table">
                            <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Creditos</th>
                                <th>Semestre</th>
                                <th>Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if ($consulta) { ?>

                            <?php $semestre=1?>
                            <?php foreach($consulta->result() as $fila) {?>
                                <?php if ($semestre!=$fila->semestre){?>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><?php echo $fila->semestre?> SEMESTRE</td>
                                    </tr>
                                <?php }?>
                                <?php $semestre=$fila->semestre?>
                                <tr>
                                    <td><?php echo $fila->nombre?></td>
                                    <td><?php echo $fila->creditos?></td>
                                    <td><?php echo $fila->semestre?></td>
                                    <td>
                                        <a href="<?php echo base_url('ccalendarioasignatura/horario/'.$fila->id_asignatura) ?>"><button class="btn btn-warning">Editar Horario</button></a>
<!--                                        <a href="--><?php //echo base_url('ccalendarioasignatura/editar/' . $fila->id_asignatura); ?><!--"><button class="btn btn-warning">Editar Horario</button></a>-->
<!--                                        <a href="--><?php //echo base_url('cdocentes/eliminar/' . $fila->id_docente); ?><!--"><button class="btn btn-danger">Eliminar</button></a>-->
                                    </td>
                                </tr>

                            <?php }?>
                            <?php }?>
                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="form-group">
                    <div style="alignment: center">
                        <!--                        <a href="--><?//= base_url() ?><!--Coperarios/reporte"><button class="btn btn-success">Generar Reporte</button></a>-->
                    </div>
                </div>
            </div>

            <!-- ============================================================== -->
            <!-- chat-listing & recent comments -->
            <!-- ============================================================== -->

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
