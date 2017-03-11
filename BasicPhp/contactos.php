<?php
$thispage = 'contactos.php';

$name = $_POST['name'];
$lastName = $_POST['last_name'];
$phone = $_POST['tel'];
$mail = $_POST['email'];
$interest = $_POST['interest'];
$gen = $_POST['gen'];
$country = $_POST['pais'];
$coment = $_POST['coment'];
$dat = date("d-m-Y");
if(isset($_POST['date'])) $dat = $_POST['date'];
$error = 8;
$validate = false;
if(isset($_POST['send'])){
    $validate = true;
}
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
            <h1 style="margin: 0 auto">Formulario de Contactos</h1>
            <form class="contacts" method="post" action="contactos.php">
                <div class="row">
                    <div class="col-xs-12 col-sm-2 col-md-1 col-lg-1 col-md-offset-3 col-sm-offset-2">Nombre:</div>
                    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><input name="name" type="text" class="form-control" value="<?php echo $name; ?>">
                        <?php if($validate){
                            if(isEmpty($name)) messageRequired();
                            elseif(!validaAlfaEsp($name)) message("El campo solo permite letras y espacios",2);
                            else $error--;
                        } ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-2 col-md-1 col-lg-1 col-md-offset-3 col-sm-offset-2">Apellido:</div>
                    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><input name="last_name" type="text" class="form-control" value="<?php echo $lastName; ?>">
                        <?php if($validate){
                            if(isEmpty($lastName)) $error--;
                            elseif(!validaAlfaEsp($lastName)) message("El campo solo permite letras y espacios",2);
                            else $error--;
                        } ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-2 col-md-1 col-lg-1 col-md-offset-3 col-sm-offset-2">Email:</div>
                    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><input name="email" type="text" class="form-control" value="<?php echo $mail; ?>">
                        <?php if($validate) {
                            if(isEmpty($mail)) messageRequired();
                            elseif(!validarDirCorreoElec($mail)) message("Debe ingresar una direccion de correo valida",2);
                            else $error--;
                        } ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-2 col-md-1 col-lg-1 col-md-offset-3 col-sm-offset-2">Telefono:</div>
                    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><input name="tel" type="tel" class="form-control" value="<?php echo $phone; ?>">
                        <?php if($validate) {
                            if(isEmpty($phone)) messageRequired();
                            elseif(!validaEntero($phone)) message("Solo se permiten numeros",2);
                            else $error--;
                        } ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-2 col-md-1 col-lg-1 col-md-offset-3 col-sm-offset-2">Fecha del envio:</div>
                    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><input name="date" type="text" class="form-control" readonly value="<?php echo $dat; ?>">
                        <?php if($validate) {
                            if(isEmpty($dat)) messageRequired();
                            else $error--;
                        } ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-2 col-md-1 col-lg-1 col-md-offset-3 col-sm-offset-2">Intereses:</div>
                    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
                        <label>Postres
                            <input type="checkbox" name="interest[]" <?php echo(in_array("P",$interest))?"checked":"" ?> id="postres" value="P"></label>
                        <br>
                        <label>Platillos profesionales
                            <input type="checkbox" name="interest[]" <?php echo(in_array("PP",$interest))?"checked":"" ?> id="pp" value="PP"></label>
                        <br>
                        <label>Platillos Caseros
                            <input type="checkbox" name="interest[]" <?php echo(in_array("PC",$interest))?"checked":"" ?> id="cc" value="PC"></label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-2 col-md-1 col-lg-1 col-md-offset-3 col-sm-offset-2">Sexo:</div>
                    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
                        <label for="sexoh">Hombre
                            <input type="radio" name="gen" <?php echo ($gen=="H")?"checked":""; ?> id="genh" value="H"></label>
                        <label for="sexom">Mujer
                            <input type="radio" name="gen" <?php echo ($gen=="M")?"checked":""; ?> id="genm" value="M"></label>
                        <?php
                        if($validate){
                            if(isEmpty($gen)) messageRequired();
                            else $error--;
                        } ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-2 col-md-1 col-lg-1 col-md-offset-3 col-sm-offset-2">Pais:</div>
                    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
                        <select id="pais" name="pais" class="form-control">
                            <option value="">Seleccione Pais</option>
                            <option <?php echo ($country == "ve")?"selected":""; ?> value="ve">Venezuela</option>
                        </select>
                        <?php
                        if($validate){
                            if(isEmpty($country)) messageRequired();
                            else $error--;
                        } ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-2 col-md-1 col-lg-1 col-md-offset-3 col-sm-offset-2">Comentario:</div>
                    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
                        <textarea class="form-control" name="coment" id="" cols="50" rows="10"><?php echo $coment; ?></textarea>
                        <?php if($validate){
                            if(isEmpty($coment)) messageRequired();
                            else $error--;
                        } ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="text-align: center">
                        <?php if($error <= 0){
                            message("El formulario fue enviado con exito");
                        }else{ ?>
                        <input type="submit" class="btn" name="send" value="Enviar"> <input type="reset" class="btn" value="Limpiar">
                        <?php } ?>
                    </div>
                </div>
            </form>
    </div>
</div>
</body>
</html>
