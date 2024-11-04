<section class="contacto__box">
        <h1>Complete los datos para cargar inscripción</h1>
        <div>
            <form method="post" class="form">
                
                <label for="nombre">Nombre y Apellido</label>
                <input type="text" class="contacto__input" id="nombre" name="registroNombre">

                <label for="dni">DNI</label>
                <input type="number" class="contacto__input" id="dni" name="registroDni">

                <label for="email">Correo</label>
                <input type="email" class="contacto__input" id="email" name="registroEmail">

                <label for="carrera">Carrera</label>
                <select name="registroCarrera" id="carrera" class="contacto__input">
                    <option value="Abogacia">Abogacía</option>
                    <option value="Diseño Gráfico">Diseño Gráfico</option>
                    <option value="Contador Público">Contador Público</option>
                    <option value="Administración">Lic. en Administración</option>
                    <option value="Psicologia">Lic. en Psicología</option>
                </select>

                <label for="pwd">Contraseña para Campus Virtual</label>
                <input type="password" class="contacto__input" id="pwd" name="registroPassword">                

              <?php
                $registro = ControladorFormularios::ctrRegistro();
                if($registro =="ok"){
                    
                    echo '<script> 
                        if (window.history.replaceState){
                        window.history.replaceState(null,null, window.location.href);
                        }
                        </script>';
                        
                    echo '<div class="alerta alerta-exito"> Su inscripción se ha registrado con exito </div>';
                    }
                    if ($registro == "error"){
                    echo '<script> 
                    if (window.history.replaceState){
                        window.history.replaceState(null,null, window.location.href);
                    }
                    </script>';
                    
                    echo '<div class="alerta alerta-danger"> ERROR: No se permiten caracteres especiales </div>';
                    }
                
                    ?> 
                    <input type="submit" value="Enviar incripción" class="btn_enviar">
                <!-- <button class="" name="enviar" type="submit"> Enviar </button> -->

            </div>
        </form>
</section>

