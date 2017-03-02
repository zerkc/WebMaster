<?php
$thispage = 'contactos.php';
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
        <?php if(isset($_POST['send']) && $_POST['send'] == "Enviar") {?>
            <h1 style="margin: 0 auto">Se enviaron los siguientes datos</h1>
            <div class="row">
                <div class="col-md-6">
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1">Nombre:</div>
                <div class="col-md-2"><?php echo $_POST['name']; ?></div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1">Apellido:</div>
                <div class="col-md-2"><?php echo $_POST['last_name']; ?></div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1">Email:</div>
                <div class="col-md-2"><?php echo $_POST['email']; ?></div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1">Telefono:</div>
                <div class="col-md-2"><?php echo $_POST['tel']; ?></div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1">Intereses:</div>
                <div class="col-md-2">
                    <?php if(empty($_POST['interest'])){
                        echo "Ningun Interes Fue Seleccionado";
                    }else{
                        echo "<ul>";
                        foreach($_POST['interest'] as $i){
                            echo "<li>$i</li>";
                        }
                        echo "</ul>";
                    } ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1">Genero:</div>
                <div class="col-md-2"><?php echo ($_POST['gen']=="H")?"Hombre":"Mujer"; ?></div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1">Pais:</div>
                <div class="col-md-2"><?php echo $_POST['pais']; ?></div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1">Comentario:</div>
                <div class="col-md-2"><?php echo $_POST['coment']; ?></div>
            </div>
        <?php }else{ ?>
            <h1 style="margin: 0 auto">Formulario de Contactos</h1>
            <form class="contacts" method="post" action="contactos.php">
                <div class="row">
                    <div class="col-xs-12 col-sm-2 col-md-1 col-lg-1 col-md-offset-3 col-sm-offset-2">Nombre:</div>
                    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><input name="name" type="text" pattern="[a-zA-Zá-úÁ-Ú' ]{3,}" class="form-control" required></div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-2 col-md-1 col-lg-1 col-md-offset-3 col-sm-offset-2">Apellido:</div>
                    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><input name="last_name" type="text" pattern="[a-zA-Zá-úÁ-Ú' ]{3,}" class="form-control"></div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-2 col-md-1 col-lg-1 col-md-offset-3 col-sm-offset-2">Email:</div>
                    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><input name="email" type="email" class="form-control" pattern="[a-zA-Z0-9\._\-]{2,}[@][a-zA-Z0-9\-]{2,}([\.][a-zA-Z]{2,}){1,2}" title="example@e.com, e@e.com.ex" required></div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-2 col-md-1 col-lg-1 col-md-offset-3 col-sm-offset-2">Telefono:</div>
                    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><input name="tel" type="tel" class="form-control" pattern="[+][0-9]{9,}" title="+584110000000" required></div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-2 col-md-1 col-lg-1 col-md-offset-3 col-sm-offset-2">Intereses:</div>
                    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
                        <label>Postres
                            <input type="checkbox" name="interest[]" id="postres" value="Postres"></label>
                        <br>
                        <label>Platillos profesionales
                            <input type="checkbox" name="interest[]" id="pp" value="Platillos profesionales"></label>
                        <br>
                        <label>Platillos Caseros
                            <input type="checkbox" name="interest[]" id="cc" value="Platillos Caseros"></label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-2 col-md-1 col-lg-1 col-md-offset-3 col-sm-offset-2">Sexo:</div>
                    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
                        <label for="sexoh">Hombre
                            <input type="radio" name="gen" id="genh" required value="H"></label>
                        <label for="sexom">Mujer
                            <input type="radio" name="gen" id="genm" value="M"></label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-2 col-md-1 col-lg-1 col-md-offset-3 col-sm-offset-2">Pais:</div>
                    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
                        <select id="pais" name="pais" class="form-control" required>
                            <option value="">Seleccione Pais</option>
                            <option value="venezuela">Venezuela</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-2 col-md-1 col-lg-1 col-md-offset-3 col-sm-offset-2">Comentario:</div>
                    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><textarea class="form-control" name="coment" id="" cols="50" rows="10"></textarea></div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="text-align: center">
                        <input type="submit" class="btn" name="send" value="Enviar"> <input type="reset" class="btn" value="Limpiar">
                    </div>
                </div>
            </form>
        <?php } ?>
    </div>
</div>
</body>
</html>
