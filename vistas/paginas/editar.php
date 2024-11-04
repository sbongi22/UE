<?php

if(isset($_GET["id"])){

	$item = "id";
	$valor = $_GET["id"];

	$usuario = ControladorFormularios::ctrSeleccionarRegistros($item, $valor);

}

?>

<section class="contacto__box">
<div>

	<form method="post" class="form">
				
				<h1>Edite los datos deseados</h1>

				<input type="text" value="<?php echo $usuario["nombre"]; ?>" placeholder="Nombre" id="nombre" name="actualizarNombre" class="contacto__input">
				<input type="number" value="<?php echo $usuario["dni"]; ?>" placeholder="DNI" id="dni" name="actualizarDni" class="contacto__input">
				<input type="email" value="<?php echo $usuario["email"]; ?>" placeholder="Email" id="email" name="actualizarEmail" class="contacto__input">
				<input type="text" value="<?php echo $usuario["carrera"]; ?>" placeholder="Carrera" id="carrera" name="actualizarCarrera" class="contacto__input">						
				<input type="password" placeholder="Contraseña" id="pwd" name="actualizarPassword" class="contacto__input">
				<input type="hidden" name="passwordActual" value="<?php echo $usuario["password"]; ?>">
				<input type="hidden" name="idUsuario" value="<?php echo $usuario["id"]; ?>">


		<?php

		$actualizar = ControladorFormularios::ctrActualizarRegistro();

		if($actualizar == "ok"){

			echo '<script>

			if ( window.history.replaceState ) {

				window.history.replaceState( null, null, window.location.href );

			}

			</script>';

			echo '<div class="alerta alerta-actulizar">El usuario ha sido actualizado</div>


			<script>

				setTimeout(function(){
				
					window.location = "index.php?pagina=admin";

				},3000);

			</script>

			';

		}

		?>
		
		<button type="submit" class="btn_enviar">Actualizar</button>

	</form>

</div>
</section>