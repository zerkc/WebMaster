<?php
    $thispage = 'index.php';
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
    <!--Gustavo Adolfo Gonzalez Latorre
    V-23857851-->
</head>
<body>
<div class="container">
    <!--<div class="header">


    </div>-->
    <?php include 'menu.php'; ?>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 body">

        <?php include 'recipe.php'; ?>

        <div style="clear: both"></div>
    </div>
</div>
</body>
</html>