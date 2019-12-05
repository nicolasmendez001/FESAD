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

    <link href="<?= base_url() ?>/resources/plugins/clockpicker/dist/bootstrap-clockpicker.css" rel="stylesheet"/>

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
    <link href="<?= base_url() ?>/resources/dashboard/css/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
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
                        <?php foreach($asignatura->result() as $fila) {?>
                        <li><a href="<?php echo base_url('cprograma/asignaturas/'.$fila->fk_programa.'/'.$fila->fk_periodo) ?>">Asignaturas</a></li>
                        <li class="active"><?php echo $fila->nombre?></li>
                        <?php }?>
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
                        <div class="col-lg-10 col-md-4 col-xs-12">
                            <?php foreach($asignatura->result() as $fila) {?>
                                <h5 class="modal-title" id="modalCenterTitle">Agregar Clase - <?php echo $fila->nombre?></h5>
                            <?php }?>
                        </div>
                        <div class="col-lg-2 col-md-4 col-xs-12">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div id="modaldescription"></div>
                    <ul class="nav in" >
                        <?php foreach($asignatura->result() as $fila) {?>
                            <li style="display: none">
                                <input type="text" id="txtAsignatura" name="txtAsignatura" value="<?php echo $fila->id_asignatura?>"/>
                            </li>
                        <?php }?>
                        <li style="display: none">
                            <input type="text" id="txtID" name="txtID" value=""/>
                        </li>
                        <li style="padding: 10px;">
                            Fecha: <input type="text" id="txtFecha" name="txtFecha"/>
                        </li>
                        <li>
                            <div class="row" style="padding: 10px;">
                                <div class="col-lg-2 col-md-4 col-xs-12">
                                    Hora Inicio:
                                </div>
                                <div class="col-lg-10 col-md-4 col-xs-12">
                                    <div class="input-group clockpicker " data-autoclose="true">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-time"></span>
                                        </span>
                                        <input type="text" id="horastart" class="form-control" value="08:30" />
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row" style="padding: 10px;">
                                <div class="col-lg-2 col-md-4 col-xs-12">
                                    Hora Final:
                                </div>
                                <div class="col-lg-10 col-md-4 col-xs-12">
                                    <div class="input-group clockpicker " data-autoclose="true">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-time"></span>
                                        </span>
                                        <input type="text" id="horaend" class="form-control" value="09:30" />
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row" style="padding: 10px;">
                                <div class="col-lg-2 col-md-4 col-xs-12">
                                    Salon:
                                </div>
                                <div class="col-lg-10 col-md-4 col-xs-12">
                                    <select class="form-control form-control-line" id="txtSalon">
                                        <?php foreach($salones->result() as $fila) {?>
                                        <option value="<?php echo $fila->id_salon?>"><?php echo $fila->nombre?></option>
                                        <?php }?>
                                    </select>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row" style="padding: 10px;">
                                <div class="col-lg-2 col-md-4 col-xs-12">
                                    Docente:
                                </div>
                                <div class="col-lg-10 col-md-4 col-xs-12">
                                    <select class="form-control form-control-line" id="txtDocente">
                                        <?php foreach($docentes->result() as $fila) {?>

                                            <option value="<?php echo $fila->id_docente?>"><?php echo $fila->nombre?></option>
                                        <?php }?>
                                    </select>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row" style="padding: 10px;">
                                <div class="col-lg-2 col-md-4 col-xs-12">
                                    Descripción:
                                </div>
                                <div class="col-lg-10 col-md-4 col-xs-12">
                                    <textarea id="txtDescripcion" rows="3"></textarea>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row" style="padding: 10px;">
                                <div class="col-lg-2 col-md-4 col-xs-12">
                                    Color:
                                </div>
                                <div class="col-lg-10 col-md-4 col-xs-12">
                                    <input type="color" id="txtColor" value="#FF0000"/>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row" style="padding: 10px;">
                                <div class="col-lg-2 col-md-4 col-xs-12">
                                    Alertas:
                                </div>
                                <div class="col-lg-10 col-md-4 col-xs-12">
                                    <label id="lblAlerta">Tus Mensajes Aqui</label>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" id="guardar" class="btn btn-primary">Guardar Clase</button>
                    <button type="button" id="modificar" class="btn btn-warning">Modificar Clase</button>
                    <button type="button" id="borrar" class="btn btn-danger">Borrar Clase</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
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
<!--<script src="--><?//= base_url() ?><!--/resources/dashboard/js/dashboard1.js"></script>-->
<!--<script src="--><?//= base_url() ?><!--/resources/dashboard/plugins/bower_components/toast-master/js/jquery.toast.js"></script>-->


<script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.11/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>/resources/js/tabla.js"></script>

<script src="<?= base_url() ?>/resources/plugins/fullcalendar-3.10.0/lib/jquery-ui.min.js"></script>
<script src="<?= base_url() ?>/resources/plugins/fullcalendar-3.10.0/lib/moment.min.js"></script>
<link href="<?= base_url() ?>/resources/plugins/fullcalendar-3.10.0/fullcalendar.min.css" rel="stylesheet">
<script src="<?= base_url() ?>/resources/plugins/fullcalendar-3.10.0/fullcalendar.min.js"></script>
<script src="<?= base_url() ?>/resources/plugins/fullcalendar-3.10.0/locale/es.js"></script>


    <script>
        $(document).ready(function () {
            $('#calendar').fullCalendar({
                options: {
                    locale: 'es'

                },
                <?php foreach($asignatura->result() as $fila) {?>
                events: '<?= site_url("ccalendarioasignatura/clases/"); ?>'+<?php echo $fila->id_asignatura?>,
                <?php }?>
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,bsicWeek, basicDay, agendaWeek,agendaDay'
                },
                dayClick: function (date, jsEvent, view) {
                    $('#guardar').toggle(true);
                    $('#modificar').toggle(false);
                    $('#borrar').toggle(false);
                    $('#txtFecha').val(date.format());
                    $('#modalCenter').modal();


                },
                eventClick: function(calEvent, jsEvent, view) {
                    $('#guardar').toggle(false);
                    $('#modificar').toggle(true);
                    $('#borrar').toggle(true);
                    $('#txtColor').val(calEvent.color);
                    $('#txtDescripcion').val(calEvent.description);
                    fechahora=calEvent.start._i.split(" ");
                    $('#txtFecha').val(fechahora[0]);
                    $('#horastart').val(fechahora[1]);
                    fechahora=calEvent.end._i.split(" ");
                    $('#horaend').val(fechahora[1]);
                    $('#txtDocente').val(calEvent.fk_docente);
                    $('#txtSalon').val(calEvent.fk_salon);
                    $('#txtID').val(calEvent.id_clase);

                    //$.ajax({
                    //    type   : "POST",
                    //    url    : "<?//= site_url("ccalendarioasignatura/asignatura"); ?>//",
                    //    async  : false,
                    //    dataType : 'json',
                    //    success: function(response)
                    //    {
                    //        $('#txtDocente').val(response.data.docente);
                    //        console.log(response.data.docente);
                    //    }
                    //});

                    $('#modalCenter').modal();
                },
                editable:true,
                eventDrop:function (calEvent) {
                    $('#txtColor').val(calEvent.color);
                    $('#txtDescripcion').val(calEvent.description);
                    fechahora=calEvent.start.format().split("T");
                    $('#txtFecha').val(fechahora[0]);
                    $('#horastart').val(fechahora[1]);
                    fechahora=calEvent.end.format().split("T");
                    $('#horaend').val(fechahora[1]);
                    $('#txtDocente').val(calEvent.fk_docente);
                    $('#txtSalon').val(calEvent.fk_salon);
                    $('#txtID').val(calEvent.id_clase);
                    datosGUI();
                    enviarDatos('modificar',nuevaClase,true);
                }
            });
        });
    </script>

    <script>

        function getSelectedText(elementId) {
            var elt = document.getElementById(elementId);
            if (elt.selectedIndex == -1)
                return null;
            return elt.options[elt.selectedIndex].text;
        }

        $('#guardar').click(function () {
            datosGUI();
            enviarDatos('guardar',nuevaClase);
            // $('#calendar').fullCalendar('renderEvent', nuevaClase);
            // $('#modalCenter').modal('toggle');
        });
        $('#borrar').click(function () {
            datosGUI();
            enviarDatos('eliminar',nuevaClase);
        });
        $('#modificar').click(function () {
            datosGUI();
            enviarDatos('modificar',nuevaClase);
        });
        function datosGUI() {
            nuevaClase = {
                id_clase:$('#txtID').val(),
                fk_asignatura:$('#txtAsignatura').val(),
                fk_salon:$('#txtSalon').val(),
                fk_docente:$('#txtDocente').val(),
                title:getSelectedText('txtDocente'),
                description:$('#txtDescripcion').val(),
                color:$('#txtColor').val(),
                textColor:"#FFFFFF",
                start:$('#txtFecha').val()+" "+$('#horastart').val(),
                end:$('#txtFecha').val()+" "+$('#horaend').val()
            };
        }
        function enviarDatos(opcion,objClase,modal) {
            $.ajax({
                type   : "POST",
                url    : "<?= base_url() ?>"+"ccalendarioasignatura/clase/"+opcion,
                data   : objClase,
                success: function(response)
                {
                    $('#calendar').fullCalendar('refetchEvents');
                    if (!modal){
                        $('#modalCenter').modal('toggle');
                    }
                },error:function () {
                    alert("Error al Guardar");
                }
            });
        }

        $('.clockpicker').clockpicker();

        function limpiarFormulario() {
            $('#txtDescripcion').val('');
            $('#horastart').val('08:30');
            $('#horaend').val('09:30');
            $('#txtDocente').val('');
            $('#txtSalon').val('');

        }
    </script>

    <script>
        $('#horastart').click(function () {
            // console.log('True');
            validarHora();
        });
        $('#horaend').click(function () {
            // console.log('True');
            validarHora();
        });
        function validarHora() {
            if ($('#horastart').val()>$('#horaend').val()){
                $('#lblAlerta').text('La hora final debe ser posterior a la hora inicial');
            }else{
                $('#lblAlerta').text('');
            }
        }
        $('#txtSalon').click(function () {
            datos('salon');
            // console.log(claseTemp);
            $.ajax({
                type   : "POST",
                url    : "<?= site_url("ccalendarioasignatura/validarSalon"); ?>",
                data   : claseTemp,
                dataType : 'json',
                success: function(response)
                {
                    if (response!=null){
                        $('#lblAlerta').text(response);
                        console.log(response);
                        $('#guardar').prop("disabled",true);
                    }else{
                        $('#lblAlerta').text('');
                        $('#guardar').prop("disabled",false);
                    }

                },error:function () {
                    alert("Error salon");
                }
            });

        });
        $('#txtDocente').click(function () {
            datos('salon');
            // console.log(claseTemp);
            $.ajax({
                type   : "POST",
                url    : "<?= site_url("ccalendarioasignatura/validarDocente"); ?>",
                data   : claseTemp,
                dataType : 'json',
                success: function(response)
                {
                    if (response!=null){
                        $('#lblAlerta').text(response);
                        console.log(response);
                        $('#guardar').prop("disabled",true);
                    }else{
                        $('#lblAlerta').text('');
                        $('#guardar').prop("disabled",false);
                    }

                },error:function () {
                    alert("Error salon");
                }
            });

        });
        function datos($tipo) {
            switch ($tipo){
                case 'salon':
                    claseTemp = {
                        fk_salon:$('#txtSalon').val(),
                        start:$('#txtFecha').val()+" "+$('#horastart').val(),
                        end:$('#txtFecha').val()+" "+$('#horaend').val(),
                        fk_docente:$('#txtDocente').val()

                    };
                    break;
            }

        }

    </script>


</body>

</html>
