<!DOCTYPE html>
<html lang="es">

<head>
    <title>Ingreso al sistema</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?= base_url() ?>/resources/images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/resources/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/resources/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/resources/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/resources/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/resources/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/resources/css/main.css">
    <!--===============================================================================================-->
    <style>
        #mensaje {
            color: red;
            font-size: 18px;
            line-height: 1.2;
            text-align: center;
            width: 100%;
            display: block;
            padding: 10px 10px 10px 10px;
        }
    </style>
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="<?= base_url() ?>/resources/images/img-01.png" alt="IMG">
                </div>
                <form class="login100-form validate-form " action="" method="POST" enctype="multipart/form-data">
                    <span class="login100-form-title">
                        Ingreso del administrador al sistema
                    </span>
                    <div class="wrap-input100 validate-input" data-validate="Usuario Requerido">
                        <input class="input100" type="text" name="name" placeholder="Usuario">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user " aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Contraseña Requerida">
                        <input class="input100" type="password" name="pass" placeholder="Contraseña">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div id="mensaje">
                        <?php echo $msj ?>
                    </div>
                    <div class="container-login100-form-btn">
                        <input class="login100-form-btn" type="submit" value="Ingresar" name="" />
                    </div>
                </form>
            </div>
        </div>
    </div>




    <!--===============================================================================================-->
    <script src="<?= base_url() ?>/resources/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url() ?>/resources/vendor/bootstrap/js/popper.js"></script>
    <script src="<?= base_url() ?>/resources/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url() ?>/resources/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url() ?>/resources/vendor/tilt/tilt.jquery.min.js"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <!--===============================================================================================-->
    <script src="<?= base_url() ?>/resources/js/main.js"></script>

</body>

</html>