<?php
class Conexion{

//static public function conectar(){
//         $host = "localhost"; 
//         $dbname = "universidad_db"; 
//         $user = "root"; 
//         $pass = ""; 
        
//         try {
//             $link = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
//             $link->exec("set names utf8");
//             $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//             return $link;
//         } catch(PDOException $e) {
//             die("Error de conexión local: " . $e->getMessage());
//         }
//     }
// }

    static public function conectar(){
        $host = "sql105.infinityfree.com"; // HOST
        $dbname = "if0_41092513_db_universidad"; // BD
        $user = "if0_41092513"; // usuario
        $pass = "NuevaPass2026"; // password
        
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