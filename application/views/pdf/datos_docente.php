<html>
<head>
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
                <div>CREAD-Sogamoso</div>
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

<div class="white-box">
    <h4 style="text-align: center">Datos Generales:</h4>

    <div class="mail-contnet">

        <table border="1" id="table_info">
            <thead>
            <tr>
                <th>Nombre:</th>
                <th>Correo:</th>
                <th>Teléfono:</th>
            </tr>
            </thead>
            <tbody>
            <?php if ($consulta) { ?>
                <?php foreach ($consulta->result() as $fila) { ?>
                    <tr>
                        <td><?php echo $fila->nombre ?></td>
                        <td><?php echo $fila->correo ?></td>
                        <td><?php echo $fila->telefono ?></td>
                    </tr>
                <?php } ?>
            <?php } ?>
            </tbody>
        </table>




        <h4 style="text-align: center">Asignaturas:</h4>

        <table border="1" id="table_info">
            <thead>
            <tr>
                <th>Asignatura</th>
                <th># Clases</th>
                <th>Semestre</th>
                <th>Programa</th>
            </tr>
            </thead>
            <tbody>
            <?php if ($count) { ?>
                <?php foreach ($count->result() as $fila) { ?>
                    <tr>
                        <td><?php echo $fila->asignatura ?></td>
                        <td><?php echo $fila->cantidad ?></td>
                        <td><?php echo $fila->semestre ?></td>
                        <td><?php echo $fila->programa ?></td>
                    </tr>
                <?php } ?>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<h4 style="text-align: center">Horario:</h4>


<table border="1" id="table_info">
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
    <?php if ($clases) { ?>

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


</body>
</html>
