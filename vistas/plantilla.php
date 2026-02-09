<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilos.css">
    <title>Universidad de Edifier</title>
</head>

<body>
    <div>
        <header>
            <nav class="botonera_principal">
                <ul>
                    <li> <a href="index.php?ruta=home">Inicio</a></li>
                    <li> <a href="index.php?ruta=carreras">Carreras</a></li>
                    <li> <a href="index.php?ruta=contacto">Contacto</a></li>
                    <li> <a href="index.php?ruta=registro">Inscripcion</a></li>
                    <li> <a href="index.php?ruta=ingreso">Administrador</a>
                    <!--<li> <a href="index.php?ruta=admin"></a>-->
                    <li> <a href="index.php?ruta=salir">Salir</a></li>
                    <img class="logo-header" src="img/ue.jpg" alt="logo">
                </ul>
            </nav>
        </header>

        <hr>

        <section>
            <?php 
            if (isset($_GET["ruta"])){
                if(
                    $_GET["ruta"] == "home" ||
                    $_GET["ruta"] == "carreras" ||
                    $_GET["ruta"] == "contacto" ||
                    $_GET["ruta"] == "registro" ||
                    $_GET["ruta"] == "ingreso" ||
                    $_GET["ruta"] == "admin" ||
                    $_GET["ruta"] == "editar" ||
                    $_GET["ruta"] == "salir"
                ){
                    include "paginas/" . $_GET["ruta"] . ".php";
                } else{
                    include "paginas/error404.php";
                }
            
            } else{
                include "paginas/home.php";
            }
            ?>
        </section>
    </div>

    <hr>

    <footer>
        <img class="logo-footer" src="img/ue.jpg" alt="logo">
        <h3>Universidad de Edifier</h3>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="vistas/js/script.js"></script>

</body>
</html>