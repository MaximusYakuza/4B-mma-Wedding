<?php 
    class Conexion{
        static public function conectar(){
            $link = new PDO("mysql:host=localhost;port=3306;dbname=4b-mma-wedding", "soporte4bmma", "soporte4bmma");
    
            $link->exec("set names utf8");
    
            return $link;
        }
    }
    
?>