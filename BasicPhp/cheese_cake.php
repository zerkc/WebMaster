<?php
$thispage = 'cheese_cake.php';
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
                    <img src="img/cheesecake.jpg" class="img-responsive" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <h2>Ingredientes</h2>
                    <ul>
                        <li>250 g mermelada de frutilla</li>
                        <li>5 claras</li>
                        <li>1 pote queso crema</li>
                        <li>1/2 taza azúcar</li>
                        <li>1 paquete galletas maria</li>
                        <li>1/2 taza manteca</li>
                        <li>1/2 taza gelatina sin sabor</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <h2>Preparacion</h2>
                    <ul class="step">
                        <li><b>1</b> Triturar las galletas hasta formar un polvo, a eso agregarle la manteca derretida para formar una pasta</li>
                        <li><b>2</b> Esa pasta ponerle en un tortera desmoldable en todo su fondo y llevar al frezzer</li>
                        <li><b>3</b> Mezclar las claras a nieve con él azúcar, mientras estamos revolviendo incorporar él queso crema pero nunca dejar de revolver y en forma de lluvia incorporar la gelatina sin sabor ya hidratada</li>
                        <li><b>4</b> Mezclar todo por unos 3 minutos</li>
                        <li><b>5</b> Sacar la tortera del frezzer y unterle encima la preparación anterior y llevar al frezzer por unos 20 minutos mas</li>
                        <li><b>6</b> Sacar y untar la mermelada del sabor que hayas elegido y poner en él frezzer por 5 minutos mas</li>
                        <li><b>7</b> Desmontar y comer!</li>
                    </ul>
                </div>
            </div>
        </div>
        <table class="hidden-xs" style="width: 100%">
            <tr>
                <td style="width: 100%">
                    <h2>Ingredientes</h2>
                    <ul>
                        <li>250 g mermelada de frutilla</li>
                        <li>5 claras</li>
                        <li>1 pote queso crema</li>
                        <li>1/2 taza azúcar</li>
                        <li>1 paquete galletas maria</li>
                        <li>1/2 taza manteca</li>
                        <li>1/2 taza gelatina sin sabor</li>
                    </ul>
                </td>
                <td>
                    <img src="img/cheesecake.jpg" class="showItem" alt="">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                <h2>Preparacion</h2>
                    <ul class="step">
                        <li><b>1</b> Triturar las galletas hasta formar un polvo, a eso agregarle la manteca derretida para formar una pasta</li>
                        <li><b>2</b> Esa pasta ponerle en un tortera desmoldable en todo su fondo y llevar al frezzer</li>
                        <li><b>3</b> Mezclar las claras a nieve con él azúcar, mientras estamos revolviendo incorporar él queso crema pero nunca dejar de revolver y en forma de lluvia incorporar la gelatina sin sabor ya hidratada</li>
                        <li><b>4</b> Mezclar todo por unos 3 minutos</li>
                        <li><b>5</b> Sacar la tortera del frezzer y unterle encima la preparación anterior y llevar al frezzer por unos 20 minutos mas</li>
                        <li><b>6</b> Sacar y untar la mermelada del sabor que hayas elegido y poner en él frezzer por 5 minutos mas</li>
                        <li><b>7</b> Desmontar y comer!</li>
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