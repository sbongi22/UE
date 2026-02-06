<?php
class Conexion{
    static public function conectar(){
        // EJEMPLO con datos REALES de InfinityFree
        $host = "universidad-edifier.infinityfreeapp.com"; // TU host real
        $dbname = "if0_41092513_db_universidad"; // TU base de datos
        $user = "if0_41092513"; // TU usuario
        $pass = "I5mwDD7kwI9"; // TU password real
        
        try {
            $link = new PDO("mysql:host=$host;dbname=$dbname", 
                           $user, $pass);
            $link->exec("set names utf8");
            $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $link;
        } catch(PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }
}
?>