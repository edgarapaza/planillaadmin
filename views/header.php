<!doctype html>
<html class="no-js" lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo constant('COMPANY'); ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- FOUNDATION CSS-PRINCIPAL Y NECESARIO -->
    <link rel="stylesheet" href="<?php echo constant('URL') . 'public/css/foundation.css' ?>">
    <!-- FOUNDATION FLOAT -->
    <link rel="stylesheet" href="<?php echo constant('URL') . 'public/css/foundation-float.css' ?>">
    <!-- Foundation prototipe-algunas interesantes opciones a utilizar-->
    <link rel="stylesheet" href="<?php echo constant('URL') . 'public/css/foundation-prototype.css' ?>">

    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/css/header.css">

    <script src="<?php echo constant('URL'); ?>public/js/jquery.js"></script>
    <script language="JavaScript" type="text/javascript" src="<?php echo constant('URL') ?>public/Assets/js/jpaginate.js"></script>


</head>

<body>
    <div class="grid-x header-z">
        <div class="cell large-3">
            <div class="img-t">
                <img class="logo-t" src="<?php echo constant('URL') ?>public/img/mtc.png" alt="">
            </div>
        </div>
        <div class="cell large-6">
            <div class="grid-x margin-top-1">
                <div class="cell large-4 text-center">
                    <p class="lead underline-animate">
                        <a href="<?php echo constant('URL') ?>registro/render">Registrar Usuarios</a>
                    </p>
                </div>
                <div class="cell large-4 text-center">
                    <p class="lead underline-animate">
                        <a href="<?php echo constant('URL') ?>personal/render">Registrar Personal</a>
                    </p>
                </div>
                <div class="cell large-4 text-center">
                    <p class="lead underline-animate">
                        <a href="<?php echo constant('URL') ?>tablas/render">Ver Tablas</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="cell large-3 margin-top-1">
            <div class="grid-x">
                <div class="cell large-8 welcome">
                    <p class="name-z wordwrap">Bienvenido: <?php echo $_SESSION['username']; ?></p>
                </div>
                <div class="cell large-4 text-center">
                    <a href="<?php echo constant('URL'); ?>login/logout" class="button salir">SALIR</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /Navigation -->