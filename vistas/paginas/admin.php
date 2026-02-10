<?php
$usuarios = ControladorFormularios::ctrSeleccionarRegistros(null, null);
?>

<section class="admin-section">
    <div class="admin-header">
        <h2>Panel de Administración - Listado de Inscriptos</h2>
    </div>

    <div class="tabla-container">
        <table class="tabla">
            <thead>
                <tr>
                    <th><i class="fas fa-hashtag"></i></th>
                    <th>Nombre y Apellido</th>
                    <th>DNI</th>
                    <th>Correo Electrónico</th>
                    <th>Carrera Seleccionada</th>
                    <th>Fecha de Alta</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
            <?php foreach ($usuarios as $key => $value): ?>
                <tr>
                    <td class="col-id"><?php echo ($key+1); ?></td>
                    <td class="col-nombre"><strong><?php echo $value["nombre"]; ?></strong></td>
                    <td><?php echo $value["dni"]; ?></td>
                    <td><?php echo $value["email"]; ?></td>
                    <td><span class="badge-carrera"><?php echo $value["carrera"]; ?></span></td>
                    <td><?php echo $value["fecha"]; ?></td>
                    <td class="col-acciones">
                        <div class="acciones-wrapper">		
                            <a href="index.php?ruta=editar&id=<?php echo $value["id"]; ?>" class="boton_editar" title="Editar">
                                Editar
                            </a>

                            <form method="post" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este registro?');">
                                <input type="hidden" value="<?php echo $value["id"]; ?>" name="eliminarRegistro">
                                <button type="submit" class="boton_borrar" title="Borrar">
                                    Borrar
                                </button>
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
    </div>
</section>