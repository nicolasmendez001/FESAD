<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/resources/css/dompdf.css">
</head>

<body>
    <header>
        <table>
            <tr>
                <td id="header_logo">
                    <img id="logo" src="./resources/logo.png">
                </td>
                <td id="header_texto">
                    <div>Facultad de Estudios a Distancia.</div>
                    <div>Universidad Pedagógica y Tecnológica de Colombia</div>
                    <div>CREAD-Tunja</div>
                    <div><strong>Reporte Docente</strong></div>
                </td>
                <td id="header_logos">
                    <?php $hoy = getdate(); ?>

                    <div><?php echo "Fecha: " . $hoy['mday'] . "/";
                            echo $hoy['mon'] . "/";
                            echo $hoy['year']; ?></div>
                    <div><?php echo "Hora: " . $hoy['hours'] . ":";
                            echo $hoy['minutes'] . ":";
                            echo $hoy['seconds']; ?></div>

                </td>
            </tr>
        </table>
    </header>
    <footer>
        <div id="footer_texto">FACULTAD DE ESTUDIOS A DISTANCIA. SEDE TUNJA <br> <?php echo $hoy['year'] ?></div>
    </footer>


    <div id='calendar'>
    hello
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
            });
        });
    </script>

</body>

</html>