<?php
$thispage = 'brownie.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-theme.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Actividad uno HTML y CSS Gustavo Gonzalez</title>
</head>
<body>
<div class="container">
    <!--<div class="header">-->

    
    <!--</div>-->
    <?php include 'menu.php'; ?>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 body">
        <div class="visible-xs">
            <div class="row">
                <div class="col-xs-12">
                    <img src="img/brownie.jpg" class="img-responsive" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <h2>Ingredientes</h2>
                    <ul>
                        <li>4 huevos</li>
                        <li>300 gramos azúcar</li>
                        <li>100 gramos harina leudante</li>
                        <li>150 gramos chocolate semiamargo</li>
                        <li>150 gramos manteca</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <h2>Preparacion</h2>
                    <ul class="step">
                        <li><b>1</b> Poner en baño maría el chocolate junto con la manteca.</li>
                        <li><b>2</b> En un bol poner los huevos, agregar el Azúcar, batir y luego agregar la harina y mezclar.</li>
                        <li><b>3</b> Luego, cuando se derrite el chocolate y la manteca agregarlo a la mezcla.</li>
                        <li><b>4</b> En un molde enmantecar y ponerlo al horno 20 a 25 minutos. Disfrutar.</li>
                    </ul>
                </div>
            </div>
        </div>
        <table class="hidden-xs" style="width: 100%">
            <tr>
                <td style="width: 100%">
                    <h2>Ingredientes</h2>
                    <ul>
                        <li>4 huevos</li>
                        <li>300 gramos azúcar</li>
                        <li>100 gramos harina leudante</li>
                        <li>150 gramos chocolate semiamargo</li>
                        <li>150 gramos manteca</li>
                    </ul>
                </td>
                <td>
                    <img src="img/brownie.jpg" class="showItem" alt="">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <h2>Preparacion</h2>
                    <ul class="step">
                        <li><b>1</b> Poner en baño maría el chocolate junto con la manteca.</li>
                        <li><b>2</b> En un bol poner los huevos, agregar el Azúcar, batir y luego agregar la harina y mezclar.</li>
                        <li><b>3</b> Luego, cuando se derrite el chocolate y la manteca agregarlo a la mezcla.</li>
                        <li><b>4</b> En un molde enmantecar y ponerlo al horno 20 a 25 minutos. Disfrutar.</li>
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