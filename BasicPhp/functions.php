<?php
/**
 * Created by PhpStorm.
 * User: gustavog
 * Date: 02/03/17
 * Time: 12:05 AM
 */

if(!isset($_SESSION)){
    session_start();
}

/*
 * revice las funcione del final profesor
 */
function createMenu($path,$name){
    return "<a href='{$path}'><li>{$name}</li></a>";
}

function createElement($name,$path,$image){
    return "<div class='col-xs-12 col-sm-4 col-md-4 col-lg-3 recipe'>
            <a href='?page={$path}'>
                <img src='img/{$image}' class='img-responsive' alt=''>
                <h3>{$name}</h3>
            </a>
        </div>";
}
function messageRequired(){
    (message("El campo es requerido",3));
}
function message($msg,$type=0){
    switch($type){
        case 1:
            $class = "info";
            break;
        case 2:
            $class = "warning";
            break;
        case 3:
            $class = "danger";
            break;
        default:
            $class = "success";

    }
    echo "<div class='alert alert-{$class}'>
            {$msg}
            </div>";
}
function redirect($url){
    header("Location: $url");
    die();
}

function isEmpty($val){
    return empty($val) || str_replace(" ","",$val) == "";
}

// funcion para validad un numero de punto flotante
function validarFlotante ($Cad) {
    // prueba si la entrada es un numero de punto flotante, con un signo opcional
    // preg_match realiza búsquedas en cadenas de texto mediante expresiones regulares. Devolverá el valor booleano.
    return preg_match("/^-?([0-9])+([\.]([0-9])*)?$/", $Cad );
}


// funcion para validad cadenas alfabeticas
function validaAlfa ($Cad) {
    // prueba si la entrada son cadenas alfabeticas
    return preg_match("/^[a-zñÑáéíóúÁÉÍÓÚ]*$/i", $Cad );
}

// funcion para validad cadenas alfabeticas con espacio
function validaAlfaEsp ($Cad) {
    // prueba si la entrada son cadenas alfabeticas con espacio
    return preg_match("/^[a-zñÑáéíóúÁÉÍÓÚ ]*$/i", $Cad );
}

// funcion para validad cadenas alfabeticas con espacio especiales
function validaAlfaEspecial ($Cad) {
    // prueba si la entrada es una cadena alfanumerica con .
    return preg_match("/^[a-zñÑáéíóúÁÉÍÓÚ \.\,]*$/i", $Cad );
}

// funcion para validad una cadena alfanumerica
function validaAlfaNum ($Cad) {
    // prueba si la entrada es una cadena alfanumerica
    return preg_match("/^[a-zñÑ0-9]*$/i", $Cad );
}

// funcion para validad un entero
function validaEntero ($texto) {
    // prueba si la entrada es un entero, sin signo
    return preg_match("/^[0-9]+$/", $texto );
}

function validarFecha($f){
    return preg_match("/^[0-9]{1,2}[\/][0-9]{1,2}[\/][0-9]{4}$/", $f );
}

// funcion para validad un entero con signo opcional
function validaEnteroConSigno ($Cad) {
    // prueba si la entrada es un entero, con un signo opcional
    return preg_match("/^-?([0-9])+$/", $Cad );
}

// Funcion para validar una direccion de correo electronico
function validarDirCorreoElec ($Cad) {
    // prueba si la entrada coincide con los patrones de correo electronico
    return preg_match ("/^[a-zA-Z0-9\._\-]{2,}[@][a-zA-Z0-9\-]{2,}([\.][a-zA-Z]{2,}){1,2}$/", $Cad);
}











// funcion para validar una fecha ingresada
function datecheck($input,$format="")
{
    $separator_type= array(
        //con  "/",
        //con  "-",
        //o con  "."
        "-"
    );
    foreach ($separator_type as $separator) {
        $find= stripos($input,$separator);
        if($find<>false){
            $separator_used= $separator;
        }
    }
    $input_array= explode($separator_used,$input);
    if ($format=="mdY") {
        return checkdate($input_array[0],$input_array[1],$input_array[2]);
    } elseif ($format=="Ymd") {
        return checkdate($input_array[1],$input_array[2],$input_array[0]);
    } else {
        return checkdate($input_array[1],$input_array[0],$input_array[2]);
    }
    $input_array=array();
}


//Cambiar la fecha al formato año-mes-día
function cambiarfecha($fecha){
    list($year,$mes,$dia)=explode("-",$fecha);
    $fecha="$dia-$mes-$year";
    return $fecha;
}

//Cambiar la fecha al formato día-mes-año
function cambiarfechadeBD($fecha){
    //formato fecha americana
    $fecha=date("d-m-Y",strtotime($fecha));
    //El nuevo valor de la variable: $fecha2="dd-mm-aaaa"
    return $fecha;
}



//Funcion para Verificar el Rango de Años de una Fecha
function verificaryears($fecha,$yearsmin,$yearsmax) {

    list($d,$m,$a) = explode("-",$fecha);


    if ( $a >= date("Y")-$yearsmin and $a <= date("Y")+$yearsmax )
    {
        $year = true; // Rango correcto
    }else
    {
        $year = false; // Rango incorreto
    }
    return $year;
}


//Funcion para calcular la edad a partir de la fecha de nacimiento
//Recibe parametro $nacimiento (debe ser en formato yyyy-mm-dd)
//Devuelve la edad calculada

function Calcularedad($nacimiento) {
    list($ano, $mes, $dia) = explode("-", $nacimiento);
    $anodif = date("Y") - $ano;
    $mesdif = date("m") - $mes;
    $diadif = date("d") - $dia;

    if (($diadif < 0) or ($mesdif < 0)) {
        $anodif = $anodif - 1;
    }

    if ($nacimiento == '') { $anodif = ''; }

    return $anodif;

}


//Funcion para restar años a la fecha actual
//Salida bajo el formato yyyy-mm-dd
function subtractyearsBD($years) {

    return date('Y-m-d', strtotime("-{$years} years"));
    // antigua funcion
    /*
    date("d-m-Y");
    $Y=date("Y")-$years;
    $fecha=date($Y."-m-d");

    return $fecha;
    */
}


//Funcion para restar años a la fecha actual
//Salida bajo el formato yyyy-mm-dd
function subtractyears($years) {

    return date('d-m-Y', strtotime("-{$years} years"));
     // antigua funcion
    /*
    date("d-m-Y");
    $Y=date("Y")-$years;
    $fecha=date("d-m-".$Y);

    return $fecha;
    */
}
