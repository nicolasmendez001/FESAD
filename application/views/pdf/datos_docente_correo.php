<html>

<head>
    <style>
        body {
            font-family: Helvetica;
            font-size: 12px;
        }

        @page {
            margin-top: 100px;
            margin-left: 25px;
            margin-right: 25px;
            margin-bottom: 80px;
        }

        header {
            position: fixed;
            top: -90px;
            left: 0px;
            right: 0px;
            height: 70px;
            width: 100%;
            border-top: 3px solid #333;
            border-bottom: 3px solid #333;
        }

        footer {
            position: fixed;
            bottom: -60px;
            left: 0px;
            right: 0px;
            border-top: 3px solid #333;
            background-color: #ECBE00;
            height: 50px;
        }

        #header_logo {
            background: white;
            width: 150px;
            text-align: center;
        }

        #logo {
            width: 150px;
            background: #ECBE00;

        }

        #header_texto {
            text-align: center;
            color: white;
            font-size: 10;
            background: #ECBE00;
            width: 450px;
        }

        #header_logos {
            color: white;
            font-size: 10;
            background: #ECBE00;
            text-align: center;
            width: 150px;
        }

        #logo1,
        #logo2 {
            width: 50px;
        }

        #footer_texto {
            text-align: center;
            font-size: 15px;
            font-weight: bold;
            color: white;
        }

        #texto_main {
            margin-top: 25px;
            text-align: justify;
        }

        #table_info {
            width: 100%;
        }
    </style>
</head>

<body>

    <header>
        <table>
            <tr>
                <td id="header_logo">
                    <img id="logo" src="https://scontent-bog1-1.xx.fbcdn.net/v/t1.0-9/84338939_2611778668919727_5077426976310951936_n.jpg?_nc_cat=109&_nc_ohc=yGjbm0lH41YAX8IkXUz&_nc_ht=scontent-bog1-1.xx&oh=9af012006cdf14d144cb339cfd73d1d4&oe=5E9566E0">
                </td>
                <td id="header_texto">
                    <div>Facultad de Estudios a Distancia</div>
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
                        <td><?php echo $fila->dia_semana ?></td>
                        <td><?php echo $fila->start . "-" . $fila->end ?></td>
                    </tr>
                    <?php $i++ ?>
                <?php } ?>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>