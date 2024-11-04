
<div>
	<form class="contacto__box" method="post">

		<div class="">

			<label for="text">Usuario</label>
			<input type="text" class="contacto__input" name="ingresoEmail">
			

			<label for="pwd">Contraseña</label>
			<input type="password" class="contacto__input" name="ingresoPassword">

			</div>

		<?php 

		$ingreso = new ControladorFormularios();
		$ingreso -> ctrIngreso();

		?>
		
		<button type="submit" class="btn_enviar">Ingresar</button>
	</div>
	</form>

</div>
