<?php

include ("validar.php");
include ("conexion.php");
include ("mantenedor.php");

$objCn = new conexion();
$cn = $objCn->conecta();

$objInserta = new mantenedor();

/*Atributos de Rut*/
$numero = $_POST['rut'];
$dv = $_POST['dv'];
/*Otros Atributos Capturados*/
$varNombre1 = $_POST['nombre1'];
$varNombre2 = $_POST['nombre2'];
$varApellido1 = $_POST['apellido1'];
$varApellido2 = $_POST['apellido2'];
$varDireccion = $_POST['direccion'];
$varFono = $_POST['fono'];
$varCorreo = $_POST['correo'];
$varGenero = $_POST['genero'];
$varContrasena = $_POST['contrasena'];


$resultado = preg_replace("/[^0-9]/", "",$numero);
$cantidad = strlen($resultado);
$obj = new validar();
$ver = $obj->valida_rut($resultado, $dv);

$rut = $resultado.'-'.$dv;

echo"<table border='0' align='center'>";
if ($ver == TRUE){
    print "<tr><td>Rut es Correcto</td></tr>"
    . "<tr><td>Rut es: ".$resultado.'-'.$dv.'</td></tr>';
    $resultado2 = $objInserta->insertar($rut, $varNombre1, $varNombre2, $varApellido1, $varApellido2, $varDireccion, $varFono, $varCorreo, $varGenero, $varContrasena, $cn);
    if ($resultado2){ /*Si el resultado es true*/
    print "<tr><td>Registro fue Ingresado</td></tr>"
        . "<tr><td align='center'><a href='iniciar_sesion.html'>Ir a Inicio</a></td></tr>";
    }  else {/*Si el resultado es false*/
    print "<tr><td>Este rut ya esta registrado</td></tr>"
        . "<tr><td align='center'><a href='Registro_Persona.php'>Volver Atras</a></td></tr>";
    }    
}else{
    print '<tr><td><h2>ERROR!</h2></td></tr>';
    print "<tr><td>El Rut no es Correcto</td></tr>";
    print "<tr><td align='center'><a href='Registro_Persona.php'>Volver Atras</a></td></tr>";
}
echo"</table>";