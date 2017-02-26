<?php

class conexion {
    
    
    public function conecta(){
     
        $host = 'localhost';
        $user = 'root';
        $password = '';
        $database = 'bd_revtec'; //Nombre de la base de datos
       $con = mysqli_connect($host, $user, $password, $database);     
       return($con);
    }
    
}