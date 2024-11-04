<?php

class ControladorFormularios
{

	/*---------------- Registro inscripcion -------------------	 */

	static public function ctrRegistro()
	{

		if (isset($_POST["registroNombre"])) {
			if(preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["registroNombre"]) &&
			preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["registroEmail"]) &&
			preg_match('/^[0-9a-zA-Z]+$/', $_POST["registroPassword"])){
			$tabla = "registros";
			
			$encriptarPassword = crypt($_POST["registroPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

			$datos = array(
				"nombre" => $_POST["registroNombre"],
				"dni" => $_POST["registroDni"],
				"email" => $_POST["registroEmail"],
				"carrera" => $_POST["registroCarrera"],
				"password" => $encriptarPassword
			);

			$respuesta = ModeloFormularios::mdlRegistro($tabla, $datos);

			return $respuesta;		
		}else{

				$respuesta = "error";

				return $respuesta;

			}
		}
	}

	/*---------------- Registro consulta ------------------- */

	static public function ctrContacto()
	{

		if (isset($_POST["nombreContacto"]))			
		if(preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nombreContacto"]) &&
		preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["correoContacto"]) 
		){
			$tabla = "contactos";
			
			$datos = array(
				"nombre" => $_POST["nombreContacto"],
				"correo" => $_POST["correoContacto"],
				"telefono" => $_POST["telefonoContacto"],
				"carrera" => $_POST["carreraContacto"],
				"consulta" => $_POST["consultaContacto"],
			);

			$respuesta = ModeloFormularios::mdlContacto($tabla, $datos);

			return $respuesta;		
		}else{

				$respuesta = "error";

				return $respuesta;

			}
		}
	


	// Seleccionar registros
	static public function ctrSeleccionarRegistros($item, $valor) {

		$tabla = "registros";

		$respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);

		return $respuesta;
	}

	// Ingreso
	public function ctrIngreso()
	{

		if (isset($_POST["ingresoEmail"])) {

			$tabla = "registros";
			$item = "email";
			$valor = $_POST["ingresoEmail"];

			$respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);

			$encriptarPassword = crypt($_POST["ingresoPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

			if ($respuesta["email"] == $_POST["ingresoEmail"] && $respuesta["password"] == $encriptarPassword) {

				$_SESSION["validarIngreso"] = "ok";

				echo '<script>

					if ( window.history.replaceState ) {

						window.history.replaceState( null, null, window.location.href );

					}

					window.location = "index.php?ruta=admin";

				</script>';
			} else {

				echo '<script>

					if ( window.history.replaceState ) {

						window.history.replaceState( null, null, window.location.href );

					}

				</script>';

				echo '<div class="alert alert-danger">Error al ingresar al sistema, el usuario o la contraseña es incorrecta</div>';
			}
		}
	}


	// Actualizar registro
	static public function ctrActualizarRegistro()
	{

		if (isset($_POST["actualizarNombre"])) {

			if ($_POST["actualizarPassword"] != "") {

				$password = $_POST["actualizarPassword"];
			} else {

				$password = $_POST["passwordActual"];
			}

			$tabla = "registros";

			$datos = array(
				"id" => $_POST["idUsuario"],
				"nombre" => $_POST["actualizarNombre"],
				"dni" => $_POST["actualizarDni"],
				"email" => $_POST["actualizarEmail"],
				"carrera" => $_POST["actualizarCarrera"],
				"password" => $password
			);

			$respuesta = ModeloFormularios::mdlActualizarRegistro($tabla, $datos);

			if ($respuesta == "ok") {

				echo '<script>

					if ( window.history.replaceState ) {

						window.history.replaceState( null, null, window.location.href );

					}

					window.location = "index.php?ruta=admin";

				</script>';
			}
		}
	}

	// Eliminar
	public function ctrEliminarRegistro()
	{

		if (isset($_POST["eliminarRegistro"])) {

			$tabla = "registros";
			$valor = $_POST["eliminarRegistro"];

			$respuesta = ModeloFormularios::mdlEliminarRegistro($tabla, $valor);

			if ($respuesta == "ok") {

				echo '<script>

					if ( window.history.replaceState ) {

						window.history.replaceState( null, null, window.location.href );

					}

					window.location = "index.php?ruta=admin";

				</script>';
			}
		}
	}

}
