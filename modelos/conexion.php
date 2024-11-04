
<?php
class Conexion{
    static public function conectar(){
        $link = new PDO("mysql:host=localhost;dbname=id22110272_php_avanzado", 
                            "id22110272_php_avanzado",
                            "Phpavanzado.123"); 
        $link->exec("set names utf8");

        return $link;
    }
}
