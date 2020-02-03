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
    <!-- color CSS -->

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
                        <h4 class="page-title">Panel de Administración De salones</h4>
                    </div>
                    <div class="col-lg-8 col-md-4 col-sm-4 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="<?= base_url() ?>">Inicio</a></li>
                            <li><a href="<?= base_url() ?>csalones">Salones</a></li>
                            <?php foreach ($consulta->result() as $fila) { ?>
                                <li class="active"><?php echo $fila->nombre ?></li>
                            <?php } ?>
                        </ol>
                    </div>
                </div>
                <!-- ============================================================== -->
                <div id='calendar'>

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
                                        Día:
                                    </div>
                                    <div class="col-lg-9 col-md-4 col-xs-12">
                                        <label id="txtDia" />
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
                                        Docente:
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
        <!--<script src="--><? //= base_url() 
                            ?>
        <!--/resources/dashboard/js/dashboard1.js"></script>-->
        <!--<script src="--><? //= base_url() 
                            ?>
        <!--/resources/dashboard/plugins/bower_components/toast-master/js/jquery.toast.js"></script>-->


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
                        events: '<?= site_url("csalones/clases/"); ?>' + <?php echo $fila->id_salon ?>,
                    <?php } ?>
                    header: {
                    left: '',
                    center: '',
                    right: '',
                },
                editable: false,
                defaultDate: '2020-02-01',
                defaultView: 'agendaWeek',
                columnFormat: 'dddd',
                minTime: "06:00",
                maxTime: "24:00",
                    eventClick: function(calEvent, jsEvent, view) {
                        $('#txtAsignatura').text(calEvent.asignatura);
                        $('#txtDescripcion').text(calEvent.description);
                        fechahora = calEvent.start._i.split(" ");
                        $('#txtDia').text(calEvent.dia_semana);
                        $('#horastart').text(fechahora[1]);
                        fechahora = calEvent.end._i.split(" ");
                        $('#horaend').text(fechahora[1]);
                        $('#txtdocente').text(calEvent.title);
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