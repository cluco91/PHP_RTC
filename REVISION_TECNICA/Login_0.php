<?php

$varRut = $_POST['rut'].'-'.$_POST['dv'];
$varContrasena = $_POST['pass'];
$conexion = mysqli_connect('localhost', 'root', '', 'bd_revtec');
$varRutC ="";
$varContrasenaC="";

$sql = "SELECT * FROM tbl_persona";
$array = $conexion->query($sql);
    
while ($fila = mysqli_fetch_assoc($array)){
    if ($fila['contrasena'] == $varContrasena and $fila['rut'] == $varRut){
        $varRutC = $fila['rut'];
        $varContrasenaC = $fila['contrasena'];
    }
}    
if ($varRut == $varRutC and $varContrasena == $varContrasenaC){
    session_start(); /*se pueden crear varias variables de tipo sesion*/
    /*Esto es para crear variables de usuario*/
    $_SESSION['rut'] = $varRut; /*Esta es una variable del sistema porque es $_*/
    print "<table border='0' align='center'>"
    . "<tr><td align='center'><h3>Has iniciado sesion correctamente</h3></td></tr>";
    print "<tr><td  align='center'> Bienvenido Usuario de Rut: ".$varRut.'</td></tr>';
    print "<tr><td  align='center'><a href='Menu_Principal.php'>Haz Click Aqui para Comenzar</a></td></tr>";
    echo"</table>";
}else{
    print "<table border='0' align='center'>";
    print "<tr><td align='center'>Usuario y/o contrasena no validas</td></tr>";
    print "<tr><td align='center'><a href='iniciar_sesion.html'> Volver a Login </a></td></tr>";
    echo"</table>";
}
//echo"</table>";