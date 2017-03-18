<?php
/**
 * Created by PhpStorm.
 * User: gustavog
 * Date: 02/03/17
 * Time: 12:04 AM
 */
include_once 'functions.php';
$menu['Inicio'] = "./";
$menu['Contactos'] = "contactos.php";
if(!isset($_SESSION['userActive'])){
    $menu['Iniciar Sesion'] = "index.php?page=login";
}else{
    $menu['Desconectar'] = "logout.php";
}
?>

<div class="col-sm-12 col-md-12 col-lg-12 linkbar">
    <ul>
        <?php
            foreach($menu as $title=>$url){
                echo createMenu($url,$title);
            }
         ?>
    </ul>
    <div style="clear: both"></div>
</div>
