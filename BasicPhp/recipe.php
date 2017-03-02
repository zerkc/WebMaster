<?php
/**
 * Created by PhpStorm.
 * User: gustavog
 * Date: 02/03/17
 * Time: 12:18 AM
 */
include_once 'functions.php';
$tmp['name'] = "Pie de Limon";
$tmp['image'] = "lemonpie.jpg";
$tmp['url'] = "lemonpie.php";
$recipe[] = $tmp;

$tmp['name'] = "Brownie de Chocolate";
$tmp['image'] = "brownie.jpg";
$tmp['url'] = "brownie.php";
$recipe[] = $tmp;

$tmp['name'] = "Tequeños";
$tmp['image'] = "tequeno.jpg";
$tmp['url'] = "tequenos.php";
$recipe[] = $tmp;

$tmp['name'] = "Donuts";
$tmp['image'] = "donuts.jpeg";
$tmp['url'] = "donuts.php";
$recipe[] = $tmp;

$tmp['name'] = "Cheese Cake";
$tmp['image'] = "cheesecake.jpg";
$tmp['url'] = "cheese_cake.php";
$recipe[] = $tmp;

foreach($recipe as $dress){
    if($thispage == $dress['url']) continue;
    echo createElement($dress['name'],$dress['url'],$dress['image']);
}