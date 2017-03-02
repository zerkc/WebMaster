<?php
/**
 * Created by PhpStorm.
 * User: gustavog
 * Date: 02/03/17
 * Time: 12:05 AM
 */

function createMenu($path,$name){
    return "<a href='{$path}'><li>{$name}</li></a>";
}

function createElement($name,$path,$image){
    return "<div class='col-xs-12 col-sm-4 col-md-4 col-lg-3 recipe'>
            <a href='{$path}'>
                <img src='img/{$image}' class='img-responsive' alt=''>
                <h3>{$name}</h3>
            </a>
        </div>";
}