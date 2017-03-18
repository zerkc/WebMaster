<?php
/**
 * Created by PhpStorm.
 * User: gustavog
 * Date: 02/03/17
 * Time: 12:18 AM
 */
include_once 'functions.php';


foreach($recipe as $dress){
    if($thispage == $dress['url']) continue;
    if(!isset($_SESSION['userActive']) && !$dress['access']) continue;
    echo createElement($dress['name'],$dress['url'],$dress['image']);
}