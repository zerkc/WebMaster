<?php
    $thispage = 'index.php';
    if(isset($_GET["page"])){
        $page = $_GET["page"];
    }else{
        $page = "inicio";
    }

    $recipe['lemonpie']['name'] = "Pie de Limon";
    $recipe['lemonpie']['image'] = "lemonpie.jpg";
    $recipe['lemonpie']['url'] = "lemonpie";
    $recipe['lemonpie']['ingredients']['PARA LA BASE:'][] = "25 galletas maría";
    $recipe['lemonpie']['ingredients']['PARA LA BASE:'][] = "50 gr mantequilla derretida";
    $recipe['lemonpie']['ingredients']['PARA EL RELLENO:'][] = "2 latas leche condensada (370gr cada una)";
    $recipe['lemonpie']['ingredients']['PARA EL RELLENO:'][] = "4 yemas";
    $recipe['lemonpie']['ingredients']['PARA EL RELLENO:'][] = "1/2 taza jugo de limón";
    $recipe['lemonpie']['ingredients']['PARA EL RELLENO:'][] = "1 cdts grenetina o gelatina neutra en polvo";
    $recipe['lemonpie']['ingredients']['PARA EL RELLENO:'][] = "30 ml de leche";
    $recipe['lemonpie']['ingredients']['PARA EL MERENGUE:'][] = "2 tazas harina de trigo";
    $recipe['lemonpie']['ingredients']['PARA EL MERENGUE:'][] = "1 cucharadita polvo royal";
    $recipe['lemonpie']['ingredients']['PARA EL MERENGUE:'][] = "1 huevo";
    $recipe['lemonpie']['ingredients']['PARA LA BASE:'][] = "4 claras";
    $recipe['lemonpie']['ingredients']['PARA LA BASE:'][] = "4 cdas azúcar glass";
    $recipe['lemonpie']['ingredients']['PARA LA BASE:'][] = "1 cda jugo de limón";
    $recipe['lemonpie']['preparation'][]="Triturar las galletas maría y mezclarlas bien con la mantequilla derretida. Cubrir todo el fondo y las paredes de un plato de cristal para pay y apretar muy bien las galletas con el fondo de un vaso.";
    $recipe['lemonpie']['preparation'][]="Poner a remojar la grenetina en la leche. Revolver bien y calentar en el microondas para que esté tibia.";
    $recipe['lemonpie']['preparation'][]="Poner en la licuadora: la leche condensada, las 4 yemas, el jugo de limón, y la leche con la grenetina. Vaciar la mezcla sobre la base de galletas. Refrigerar.";
    $recipe['lemonpie']['preparation'][]="Batir las claras con una batidora eléctrica hasta que se formen picos firmes. Añadir el azúcar glas poco a poco y la cucharada de jugo de limón. Batir muy bien.";
    $recipe['lemonpie']['preparation'][]="Se extiende el merengue sobre toda la superficie del pie. Se hacen picos con la barriga de una cuchara.";
    $recipe['lemonpie']['preparation'][]="Se pone a dorar en el grill del horno por 1 ó 2 minutos. Solamente tiene que tomar color, tener mucho cuidado de que no se queme. Se dora muy rápido.";
    $recipe['lemonpie']['preparation'][]="Refrigerar al menos 3 horas antes de servir para que esté bien frío y firme. Delicioso! a disfrutar!";
    
    $recipe['brownie']['name'] = "Brownie de Chocolate";
    $recipe['brownie']['image'] = "brownie.jpg";
    $recipe['brownie']['url'] = "brownie";
    $recipe['brownie']['ingredients'][] = "4 huevos";
    $recipe['brownie']['ingredients'][] = "300 gramos azúcar";
    $recipe['brownie']['ingredients'][] = "100 gramos harina leudante";
    $recipe['brownie']['ingredients'][] = "150 gramos chocolate semiamargo";
    $recipe['brownie']['ingredients'][] = "150 gramos manteca";
    $recipe['brownie']['preparation'][]="Poner en baño maría el chocolate junto con la manteca.";
    $recipe['brownie']['preparation'][]="En un bol poner los huevos, agregar el Azúcar, batir y luego agregar la harina y mezclar.";
    $recipe['brownie']['preparation'][]="Luego, cuando se derrite el chocolate y la manteca agregarlo a la mezcla.";
    $recipe['brownie']['preparation'][]="En un molde enmantecar y ponerlo al horno 20 a 25 minutos. Disfrutar.";

    $recipe['tequenos']['name'] = "Tequeños";
    $recipe['tequenos']['image'] = "tequeno.jpg";
    $recipe['tequenos']['url'] = "tequenos";
    $recipe['tequenos']['ingredients']['PARA LA BASE:'][] = "2 tazas harina de trigo";
    $recipe['tequenos']['ingredients']['PARA LA BASE:'][] = "1 cucharadita polvo royal";
    $recipe['tequenos']['ingredients']['PARA LA BASE:'][] = "1 huevo";
    $recipe['tequenos']['ingredients']['PARA LA BASE:'][] = "1 cucharadita azúcar";
    $recipe['tequenos']['ingredients']['PARA LA BASE:'][] = "1 pizca sal";
    $recipe['tequenos']['ingredients']['PARA LA BASE:'][] = "1/2 taza agua (puede variar)";
    $recipe['tequenos']['ingredients']['PARA LA BASE:'][] = "Tiras queso, jamón o cualquier otro ingrediente con el que se quiera rellenar los tequeños";
    $recipe['tequenos']['preparation'][]="En un bolw colocar los ingredientes secos.";
    $recipe['tequenos']['preparation'][]="Añadir el huevo e ir incorporándolo a la harina, ir echando al mismo tiempo el agua.";
    $recipe['tequenos']['preparation'][]="Una vez que se logre una masa sin grumos, sacar del bowl a una superficie plana y comenzar a amasar por unos 10 minutos o hasta que la masa esté completamente homogénea y no se pegue a la superficie.";
    $recipe['tequenos']['preparation'][]="Dejar reposar la masa por unos 20 minutos p hasta que doble su tamaño.";
    $recipe['tequenos']['preparation'][]="Extender con la ayuda de un rodillo e ir cortando tiras largas.";
    $recipe['tequenos']['preparation'][]="Enrollar los trozos de queso (o el ingrediente que hayas escogido de relleno) dándole forma alargada.";

    $recipe['donuts']['name'] = "Donuts";
    $recipe['donuts']['image'] = "donuts.jpeg";
    $recipe['donuts']['url'] = "donuts";
    $recipe['donuts']['ingredients']['PARA LA BASE:'][] = "20 gr levadura";
    $recipe['donuts']['ingredients']['PARA LA BASE:'][] = "100 ml agua tibia";
    $recipe['donuts']['ingredients']['PARA LA BASE:'][] = "290 gr harina";
    $recipe['donuts']['ingredients']['PARA LA BASE:'][] = "1 cda leche";
    $recipe['donuts']['ingredients']['PARA LA BASE:'][] = "30 gr azúcar";
    $recipe['donuts']['ingredients']['PARA LA BASE:'][] = "4 yemas de huevo";
    $recipe['donuts']['ingredients']['PARA LA BASE:'][] = "60 gr mantequilla derretida";
    $recipe['donuts']['ingredients']['PARA LA BASE:'][] = "1 pizca sal";
    $recipe['donuts']['ingredients']['PARA LA BASE:'][] = "aceite vegetal para freir";
    $recipe['donuts']['ingredients']['PARA LA BASE:'][] = "60 gr mantequilla derretida";
    $recipe['donuts']['ingredients']['Glaseado:'][] = "Azúcar glass";
    $recipe['donuts']['ingredients']['Glaseado:'][] = "Leche (Depende de la cantidad que quieras hacer)";
    $recipe['donuts']['preparation'][]="Disolver la levadura en el agua.";
    $recipe['donuts']['preparation'][]="Mezclar la harina, leche, levadura y las yemas.";
    $recipe['donuts']['preparation'][]="Añadir la mantequilla, la sal y mezclar hasta que la masa no se pegue al bowl.";
    $recipe['donuts']['preparation'][]="Tapar y poner en un lugar caliente para que doble su volumen, por aproximadamente 2 horas.";
    $recipe['donuts']['preparation'][]="Pasadas las 2 horas, estirar la masa y cortar la masa con forma de dona, con un molde de circulo y un circulo mas pequeño.";
    $recipe['donuts']['preparation'][]="Poner en una bandeja, tapar y dejar reposar por 30 minutos mas.";
    $recipe['donuts']['preparation'][]="Pasada la media hora, destapar y freír hasta que estén doraditas y dejar enfríar en una bandeja con papel.";
    $recipe['donuts']['preparation'][]="Dejar enfriar y hacer el glaseado.";
    $recipe['donuts']['preparation'][]="Glasear y decorar con chispitas o lo que quieras.";

    $recipe['cheese_cake']['name'] = "Cheese Cake";
    $recipe['cheese_cake']['image'] = "cheesecake.jpg";
    $recipe['cheese_cake']['url'] = "cheese_cake";
    $recipe['cheese_cake']['ingredients'][] = "250 g mermelada de frutilla";
    $recipe['cheese_cake']['ingredients'][] = "5 claras";
    $recipe['cheese_cake']['ingredients'][] = "1 pote queso crema";
    $recipe['cheese_cake']['ingredients'][] = "1/2 taza azúcar";
    $recipe['cheese_cake']['ingredients'][] = "1 paquete galletas maria";
    $recipe['cheese_cake']['ingredients'][] = "1/2 taza manteca";
    $recipe['cheese_cake']['ingredients'][] = "1/2 taza gelatina sin sabor";
    $recipe['cheese_cake']['preparation'][]="Triturar las galletas hasta formar un polvo, a eso agregarle la manteca derretida para formar una pasta";
    $recipe['cheese_cake']['preparation'][]="Esa pasta ponerle en un tortera desmoldable en todo su fondo y llevar al frezzer";
    $recipe['cheese_cake']['preparation'][]="Mezclar las claras a nieve con él azúcar, mientras estamos revolviendo incorporar él queso crema pero nunca dejar de revolver y en forma de lluvia incorporar la gelatina sin sabor ya hidratada";
    $recipe['cheese_cake']['preparation'][]="Mezclar todo por unos 3 minutos";
    $recipe['cheese_cake']['preparation'][]="Sacar la tortera del frezzer y unterle encima la preparación anterior y llevar al frezzer por unos 20 minutos mas";
    $recipe['cheese_cake']['preparation'][]="Sacar y untar la mermelada del sabor que hayas elegido y poner en él frezzer por 5 minutos mas";
    $recipe['cheese_cake']['preparation'][]="Desmontar y comer!";
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

        <?php 
        if(isset($recipe[$page])){
            include "structure.php";
        }elseif(file_exists("{$page}.php")){
            include "{$page}.php";
        }

        include 'recipe.php'; 
        ?>

        <div style="clear: both"></div>
    </div>
</div>
</body>
</html>