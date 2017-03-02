<?php
    $thispage = 'tequenos.php';
?><!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-theme.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Actividad uno HTML y CSS Gustavo Gonzalez</title>
</head>
<body>
<div class="container">
    <div class="header">


    </div>
    <?php include 'menu.php'; ?>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 body">
        <div class="visible-xs">
            <div class="row">
                <div class="col-xs-12">
                    <img src="img/tequeno.jpg" class="img-responsive" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <h2>Ingredientes</h2>
                    <h3>PARA LA BASE:</h3>
                    <ul>
                        <li>2 tazas harina de trigo</li>
                        <li>1 cucharadita polvo royal</li>
                        <li>1 huevo</li>
                        <li>1 cucharadita azúcar</li>
                        <li>1 pizca sal</li>
                        <li>1/2 taza agua (puede variar)</li>
                        <li>Tiras queso, jamón o cualquier otro ingrediente con el que se quiera rellenar los tequeños</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <h2>Preparacion</h2>
                    <ul class="step">
                        <li><b>1</b> En un bolw colocar los ingredientes secos.</li>
                        <li><b>2</b> Añadir el huevo e ir incorporándolo a la harina, ir echando al mismo tiempo el agua.</li>
                        <li><b>3</b> Una vez que se logre una masa sin grumos, sacar del bowl a una superficie plana y comenzar a amasar por unos 10 minutos o hasta que la masa esté completamente homogénea y no se pegue a la superficie.</li>
                        <li><b>4</b> Dejar reposar la masa por unos 20 minutos p hasta que doble su tamaño.</li>
                        <li><b>5</b> Extender con la ayuda de un rodillo e ir cortando tiras largas.</li>
                        <li><b>6</b> Enrollar los trozos de queso (o el ingrediente que hayas escogido de relleno) dándole forma alargada.</li>
                        <li><b>7</b> Una vez listos, poner a freír hasta que estén dorados.</li>
                    </ul>
                </div>
            </div>
        </div>
        <table class="hidden-xs" style="width: 100%">
            <tr>
                <td style="width: 100%">
                    <h2>Ingredientes</h2>
                    <h3>PARA LA BASE:</h3>
                    <ul>
                        <li>2 tazas harina de trigo</li>
                        <li>1 cucharadita polvo royal</li>
                        <li>1 huevo</li>
                        <li>1 cucharadita azúcar</li>
                        <li>1 pizca sal</li>
                        <li>1/2 taza agua (puede variar)</li>
                        <li>Tiras queso, jamón o cualquier otro ingrediente con el que se quiera rellenar los tequeños</li>
                    </ul>
                </td>
                <td>
                    <img src="img/tequeno.jpg" class="showItem" alt="">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <h2>Preparacion</h2>
                    <ul class="step">
                        <li><b>1</b> En un bolw colocar los ingredientes secos.</li>
                        <li><b>2</b> Añadir el huevo e ir incorporándolo a la harina, ir echando al mismo tiempo el agua.</li>
                        <li><b>3</b> Una vez que se logre una masa sin grumos, sacar del bowl a una superficie plana y comenzar a amasar por unos 10 minutos o hasta que la masa esté completamente homogénea y no se pegue a la superficie.</li>
                        <li><b>4</b> Dejar reposar la masa por unos 20 minutos p hasta que doble su tamaño.</li>
                        <li><b>5</b> Extender con la ayuda de un rodillo e ir cortando tiras largas.</li>
                        <li><b>6</b> Enrollar los trozos de queso (o el ingrediente que hayas escogido de relleno) dándole forma alargada.</li>
                        <li><b>7</b> Una vez listos, poner a freír hasta que estén dorados.</li>
                    </ul>
                </td>
            </tr>
        </table>

        <hr>
        <h1>Otras recetas</h1>

        <?php include 'recipe.php'; ?>

        <div style="clear: both"></div>
    </div>
</div>
</body>
</html>