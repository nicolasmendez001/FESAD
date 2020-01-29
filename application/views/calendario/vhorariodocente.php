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

    <link href="<?= base_url() ?>/resources/plugins/clockpicker/dist/bootstrap-clockpicker.css" rel="stylesheet" />

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
                        <span class="hidden-xs">
                            <img src="<?= base_url() ?>/resources/dashboard/plugins/images/admin-text-dark.png" alt="home" class="light-logo" />
                        </span> </a>
                </div>
                <!-- /Logo -->
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <a href="<?php echo base_url('clogin/cerrarsesion/'); ?>">
                            <button class="btn btn-danger">Cerrar Sesión</button>
                        </a>
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
                        <a href="<?= base_url() ?>csalones" class="waves-effect"><i class="fa fa-building fa-fw" aria-hidden="true"></i>Salones</a>
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
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Panel de Administración Docente</h4>
                    </div>
                    <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                        <div class="form-group">
                            <div>
                                <?php foreach ($consulta->result() as $fila) { ?>
                                    <a href="<?= base_url('cdocentes/reporte/' . $fila->id_docente) ?>"><button class="btn btn-success">Generar Reporte</button></a>
                                    <a href="<?= base_url('cdocentes/notificar/' . $fila->id_docente) ?>"><button class="btn btn-warning">Enviar Reporte</button></a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="<?= base_url() ?>">Inicio</a></li>
                            <li><a href="<?= base_url() ?>cdocentes">Docentes</a></li>
                            <?php foreach ($consulta->result() as $fila) { ?>
                                <li class="active"><?php echo $fila->nombre ?></li>
                            <?php } ?>
                        </ol>
                    </div>
                </div>
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Datos</h3>
                            <div class="mail-contnet">
                                <?php foreach ($consulta->result() as $fila) { ?>
                                    <div class="row">
                                        <div class="col-md-4 col-lg-2 col-sm-12">
                                            <h4>Nombre:</h4>
                                        </div>
                                        <div class="col-md-8 col-lg-10 col-sm-12">
                                            <h4><?php echo $fila->nombre ?></h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-lg-2 col-sm-12">
                                            <h4>Correo:</h4>
                                        </div>
                                        <div class="col-md-8 col-lg-10 col-sm-12">
                                            <h4><?php echo $fila->correo ?></h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-lg-2 col-sm-12">
                                            <h4>Teléfono:</h4>
                                        </div>
                                        <div class="col-md-8 col-lg-10 col-sm-12">
                                            <h4><?php echo $fila->telefono ?></h4>
                                        </div>
                                    </div>
                                <?php } ?>
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-sm-12">
                                        <h4 style="text-align: center">Asignaturas:</h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-lg-4 col-sm-12">
                                        <h4>Nombre:</h4>
                                    </div>
                                    <div class="col-md-8 col-lg-2 col-sm-12">
                                        <h4># Clases</h4>
                                    </div>
                                    <div class="col-md-8 col-lg-2 col-sm-12">
                                        <h4>Semestre</h4>
                                    </div>
                                    <div class="col-md-8 col-lg-3 col-sm-12">
                                        <h4>Programa</h4>
                                    </div>
                                    <div class="col-md-8 col-lg-1 col-sm-12">
                                        <h4></h4>
                                    </div>
                                </div>
                                <?php if ($count) { ?>
                                    <?php foreach ($count->result() as $fila) { ?>
                                        <div class="row">
                                            <div class="col-md-8 col-lg-4 col-sm-12">
                                                <h4><?php echo $fila->asignatura ?></h4>
                                            </div>
                                            <div class="col-md-8 col-lg-2 col-sm-12">
                                                <h4><?php echo $fila->cantidad ?></h4>
                                            </div>
                                            <div class="col-md-8 col-lg-2 col-sm-12">
                                                <h4><?php echo $fila->semestre ?></h4>
                                            </div>
                                            <div class="col-md-8 col-lg-3 col-sm-12">
                                                <h4><?php echo $fila->programa ?></h4>
                                            </div>
                                            <div class="col-md-8 col-lg-1 col-sm-12">
                                                <a href="<?php echo base_url('ccalendarioasignatura/horario/' . $fila->id_asignatura); ?>"><button class="btn btn-warning">Editar</button></a>

                                            </div>
                                        </div>
                                    <?php } ?>
                                <?php } ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title" style="height: 20px;margin-top: -10px"><strong>Clases Asignadas</strong>
                            </h3>
                            <div class="pull-right">
                                <span class="clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body">
                                    <i class="glyphicon glyphicon-filter"></i>
                                </span>
                            </div>
                        </div>
                        <div class="panel-body">
                            <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Filtrar clases asignadas" />
                        </div>
                        <table class="table table-hover" id="dev-table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Asignatura</th>
                                    <th>Semestre</th>
                                    <th>Salon</th>
                                    <th>Descripción</th>
                                    <th>Fecha</th>
                                    <th>Hora</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if ($count) { ?>

                                    <?php $i = 1 ?>
                                    <?php foreach ($clases->result() as $fila) { ?>
                                        <tr>
                                            <td><?php echo $i ?></td>
                                            <td><?php echo $fila->asignatura ?></td>
                                            <td><?php echo $fila->semestre ?></td>
                                            <td><?php echo $fila->salon ?></td>
                                            <td><?php echo $fila->description ?></td>
                                            <?php
                                            $fechaStart = explode(" ", $fila->start);
                                            ?>
                                            <td><?php echo $fechaStart[0] ?></td>
                                            <?php
                                            $fechaEnd = explode(" ", $fila->end);
                                            ?>
                                            <td><?php echo $fechaStart[1] . "-" . $fechaEnd[1] ?></td>
                                        </tr>

                                        <?php $i++ ?>
                                    <?php } ?>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

            <div id='calendar'></div>

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

    <!-- Modal -->
    <div class="modal fade" id="modalCenter" tabindex="-1" role="dialog" aria-labelledby="modalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="row" style="padding: 10px;">
                        <div class="col-lg-9 col-md-4 col-xs-12">
                            <?php foreach ($consulta->result() as $fila) { ?>
                                <h5 class="modal-title" id="modalCenterTitle">Ver Clase - <?php echo $fila->nombre ?></h5>
                            <?php } ?>
                        </div>
                        <div class="col-lg-3 col-md-4 col-xs-12">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div id="modaldescription"></div>
                    <ul class="nav in">
                        <li>
                            <div class="row" style="padding: 10px;">
                                <div class="col-lg-3 col-md-4 col-xs-12">
                                    Asignatura:
                                </div>
                                <div class="col-lg-9 col-md-4 col-xs-12">
                                    <label id="txtAsignatura" />
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row" style="padding: 10px;">
                                <div class="col-lg-3 col-md-4 col-xs-12">
                                    Fecha:
                                </div>
                                <div class="col-lg-9 col-md-4 col-xs-12">
                                    <label id="txtFecha" />
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row" style="padding: 10px;">
                                <div class="col-lg-3 col-md-4 col-xs-12">
                                    Hora Inicio:
                                </div>
                                <div class="col-lg-9 col-md-4 col-xs-12">
                                    <label id="horastart" />
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row" style="padding: 10px;">
                                <div class="col-lg-3 col-md-4 col-xs-12">
                                    Hora Final:
                                </div>
                                <div class="col-lg-9 col-md-4 col-xs-12">
                                    <label id="horaend" />
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row" style="padding: 10px;">
                                <div class="col-lg-3 col-md-4 col-xs-12">
                                    Sitio:
                                </div>
                                <div class="col-lg-9 col-md-4 col-xs-12">
                                    <label id="txtdocente" />

                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row" style="padding: 10px;">
                                <div class="col-lg-3 col-md-4 col-xs-12">
                                    Descripción:
                                </div>
                                <div class="col-lg-9 col-md-4 col-xs-12">
                                    <label id="txtDescripcion" />
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>


    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?= base_url() ?>/resources/dashboard/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url() ?>/resources/plugins/clockpicker/dist/bootstrap-clockpicker.js"></script>

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

    <script src="<?= base_url() ?>/resources/plugins/fullcalendar-3.10.0/lib/jquery-ui.min.js"></script>
    <script src="<?= base_url() ?>/resources/plugins/fullcalendar-3.10.0/lib/moment.min.js"></script>
    <link href="<?= base_url() ?>/resources/plugins/fullcalendar-3.10.0/fullcalendar.min.css" rel="stylesheet">
    <script src="<?= base_url() ?>/resources/plugins/fullcalendar-3.10.0/fullcalendar.min.js"></script>
    <script src="<?= base_url() ?>/resources/plugins/fullcalendar-3.10.0/locale/es.js"></script>


    <script>
        $(document).ready(function() {
            $('#calendar').fullCalendar({
                options: {
                    locale: 'es'

                },
                <?php foreach ($consulta->result() as $fila) { ?>
                    events: '<?= site_url("cdocentes/clases/"); ?>' + <?php echo $fila->id_docente ?>,
                <?php } ?>
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,bsicWeek,  agendaWeek,agendaDay'
                },
                eventClick: function(calEvent, jsEvent, view) {
                    $('#txtAsignatura').text(calEvent.asignatura);
                    $('#txtDescripcion').text(calEvent.description);
                    fechahora = calEvent.start._i.split(" ");
                    $('#txtFecha').text(fechahora[0]);
                    $('#horastart').text(fechahora[1]);
                    fechahora = calEvent.end._i.split(" ");
                    $('#horaend').text(fechahora[1]);
                    $('#txtdocente').text(calEvent.salon);
                    $('#modalCenter').modal();
                }
            });
        });
    </script>

    <script>
        $('.clockpicker').clockpicker();
    </script>


</body>

</html>