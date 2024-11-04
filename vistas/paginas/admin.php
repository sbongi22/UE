<?php

$usuarios = ControladorFormularios::ctrSeleccionarRegistros(null, null);

?>



<table class="tabla">
	<thead>
		<tr>
			<th>#</th>
			<th>Nombre</th>
			<th>dni</th>
			<th>Email</th>
			<th>Carrera</th>
			<th>Fecha</th>
			<th>Acciones</th>
		</tr>
	</thead>

	<tbody>

	<?php foreach ($usuarios as $key => $value): ?>

		<tr>
			<td><?php echo ($key+1); ?></td>
			<td><?php echo $value["nombre"]; ?></td>
			<td><?php echo $value["dni"]; ?></td>
			<td><?php echo $value["email"]; ?></td>
			<td><?php echo $value["carrera"]; ?></td>
			<td><?php echo $value["fecha"]; ?></td>
			<td>

			<div>		
				<a href="index.php?ruta=editar&id=<?php echo $value["id"]; ?>" class="boton_editar">Editar</a>

				<form method="post">

					<input type="hidden" value="<?php echo $value["id"]; ?>" name="eliminarRegistro">
					
					<button type="submit" class="boton_borrar">Borrar</button>

					<?php

						$eliminar = new ControladorFormularios();
						$eliminar -> ctrEliminarRegistro();

					?>

				</form>			

			</div>
				

			</td>
		</tr>
		
	<?php endforeach ?>	
	
	</tbody>
</table>