<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>
<body>
    <section class="contacto__box">
        <h1>Complete los datos correspondientes para enviar su consulta</h1>
        <div>
            <form action="" method="post" class="form">
                
                <label for="nombre">Nombre y Apellido</label>
                <input type="text" name="nombreContacto" id="nombre" class="contacto__input">

                <label for="correo">Correo</label>
                <input type="email" name="correoContacto" id="correo" class="contacto__input">

                <label for="telefono">Teléfono</label>
                <input type="number" name="telefonoContacto" id="telefono" class="contacto__input">

                <label for="carrera">Carrera</label>
                <select name="carreraContacto" id="carrera" class="contacto__input">
                    <option value="Abogacia">Abogacía</option>
                    <option value="Diseño Gráfico">Diseño Gráfico</option>
                    <option value="Contador Público">Contador Público</option>
                    <option value="Administración">Lic. en Administración</option>
                    <option value="Psicologia">Lic. en Psicología</option>
                </select>

                <label for="consulta">Consulta</label>
                <textarea name="consultaContacto" id="consulta" cols="30" rows="10" class="contacto__input"></textarea>


                <?php
                $contacto = ControladorFormularios::ctrContacto();
                if($contacto =="ok"){
                    
                    echo '<script> 
                        if (window.history.replaceState){
                        window.history.replaceState(null,null, window.location.href);
                        }
                        </script>';
                        
                    echo '<div class="alerta alerta-exito"> Su consulta ha sido enviada y será respondida a la brevedad </div>';
                    }     
                    if ($contacto == "error"){
                        echo '<script> 
                        if (window.history.replaceState){
                            window.history.replaceState(null,null, window.location.href);
                        }
                        </script>';
                        
                        echo '<div class="alerta alerta-danger"> ERROR: Verifique sus datos e intente nuevamente </div>';
                        }
                
                    ?> 
                <input type="submit" value="Enviar consulta" name="btn_enviar" class="btn_enviar">
                <!-- <button class="" name="enviar" type="submit"> Enviar </button> -->

           
           
            </form>
        </div>
    </section>
</body>
</html>