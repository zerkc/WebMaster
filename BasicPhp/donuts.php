<?php
    $thispage = 'donuts.php';
?>
<!DOCTYPE html>
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
                    <img src="img/donuts.jpeg" class="img-responsive" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <h2>Ingredientes</h2>
                    <ul>
                        <li>20 gr levadura</li>
                        <li>100 ml agua tibia</li>
                        <li> 290 gr harina</li>
                        <li>1 cda leche</li>
                        <li>30 gr azúcar</li>
                        <li>4 yemas de huevo</li>
                        <li>60 gr mantequilla derretida</li>
                        <li>1 pizca sal</li>
                        <li>aceite vegetal para freir</li>
                    </ul>
                    <h3>Glaseado:</h3>
                    <ul>
                        <li>Azúcar glass</li>
                        <li>Leche (Depende de la cantidad que quieras hacer)</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <h2>Preparacion</h2>
                    <ul class="step">
                        <li><b>1</b> Disolver la levadura en el agua.</li>
                        <li><b>2</b> Mezclar la harina, leche, levadura y las yemas.</li>
                        <li><b>3</b> Añadir la mantequilla, la sal y mezclar hasta que la masa no se pegue al bowl.</li>
                        <li><b>4</b> Tapar y poner en un lugar caliente para que doble su volumen, por aproximadamente 2 horas.</li>
                        <li><b>5</b> Pasadas las 2 horas, estirar la masa y cortar la masa con forma de dona, con un molde de circulo y un circulo mas pequeño.</li>
                        <li><b>6</b> Poner en una bandeja, tapar y dejar reposar por 30 minutos mas.</li>
                        <li><b>7</b> Pasada la media hora, destapar y freír hasta que estén doraditas y dejar enfríar en una bandeja con papel.</li>
                        <li><b>8</b> Dejar enfriar y hacer el glaseado.</li>
                        <li><b>9</b> Glasear y decorar con chispitas o lo que quieras.</li>
                    </ul>
                </div>
            </div>
        </div>
        <table class="hidden-xs" style="width: 100%">
            <tr>
                <td style="width: 100%">
                    <h2>Ingredientes</h2>

                    <ul>
                        <li>20 gr levadura</li>
                        <li>100 ml agua tibia</li>
                        <li> 290 gr harina</li>
                        <li>1 cda leche</li>
                        <li>30 gr azúcar</li>
                        <li>4 yemas de huevo</li>
                        <li>60 gr mantequilla derretida</li>
                        <li>1 pizca sal</li>
                        <li>aceite vegetal para freir</li>
                    </ul>
                    <h3>Glaseado:</h3>
                    <ul>
                        <li>Azúcar glass</li>
                        <li>Leche (Depende de la cantidad que quieras hacer)</li>
                    </ul>
                </td>
                <td>
                    <img src="img/donuts.jpeg" class="showItem" alt="">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                <h2>Preparacion</h2>
                    <ul class="step">
                        <li><b>1</b> Disolver la levadura en el agua.</li>
                        <li><b>2</b> Mezclar la harina, leche, levadura y las yemas.</li>
                        <li><b>3</b> Añadir la mantequilla, la sal y mezclar hasta que la masa no se pegue al bowl.</li>
                        <li><b>4</b> Tapar y poner en un lugar caliente para que doble su volumen, por aproximadamente 2 horas.</li>
                        <li><b>5</b> Pasadas las 2 horas, estirar la masa y cortar la masa con forma de dona, con un molde de circulo y un circulo mas pequeño.</li>
                        <li><b>6</b> Poner en una bandeja, tapar y dejar reposar por 30 minutos mas.</li>
                        <li><b>7</b> Pasada la media hora, destapar y freír hasta que estén doraditas y dejar enfríar en una bandeja con papel.</li>
                        <li><b>8</b> Dejar enfriar y hacer el glaseado.</li>
                        <li><b>9</b> Glasear y decorar con chispitas o lo que quieras.</li>
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