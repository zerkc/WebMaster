<!-- login.php -->
<?php
$thispage = 'index.php?page=login';
if(isset($_POST['pag'])){
    if(isset($_POST['usuario']) && $_POST['usuario'] == "admin"){
		if(isset($_POST['clave']) && $_POST['clave'] == "admin"){
			$_SESSION['userActive'] = "admin";
			redirect("index.php");
		}else{
			$_SESSION['msg'] = "Contraseña incorrecta";
			redirect($thispage);
		}
    }else{
        $_SESSION['msg'] = "Usuario incorrecto";
        redirect($thispage);
    }
}

?>
<div class="container col-md-12">
	<form action="<?php echo $thispage; ?>" method="post" name="" class="">
		<?php
		if(isset($_SESSION['msg'])){
			message($_SESSION['msg'],3);
			unset($_SESSION['msg']);
		}
		?>
		<input type="hidden" name="pag" value="login">

		<div class="form-group">
			<label for="usuario">Usuario</label>
			<input type="text" class="form-control input-lg" name="usuario" id="usuario" maxlength="100" placeholder="Ingrese el usuario" value="" required>
		
		</div>

		<div class="form-group">
			<label for="clave">Clave</label>
			<input type="password" class="form-control input-lg" name="clave" id="clave" maxlength="100" placeholder="Ingrese la clave" value="" required>
		
		</div>
		
				

		<div class='form-group'>
			<button type='submit' class='btn btn-primary' name='BtnEnviar'>Enviar</button>
		</div>

	</form>
</div>