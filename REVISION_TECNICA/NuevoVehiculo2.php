<?php

session_start();
echo "<table border='0' align='center'>";
if (isset($_SESSION['rut'])) {
    $varRut = $_SESSION['rut'];
    include ("conexion.php");
    include ("mantenedor.php");

    $objCn = new conexion();
    $cn = $objCn->conecta();

    $varPatente = $_POST['patente'];
    $varAnno = $_POST['anno'];
    $varKM = $_POST['km'];
    $varModelo = $_POST['modelo'];


    $objInserta = new mantenedor();

    $resultado_v = $objInserta->insertar_v($varPatente, $varAnno, $varKM, $varModelo, $cn);

    
    if ($resultado_v == true) {
        echo "<tr><td>El vehiculo se ha ingresado con exito</td></tr>";
        $resultado_pv = $objInserta->insertar_pv($varRut, $varPatente);
        if ($resultado_pv == true) {
            print "<tr><td>Vehiculo asociado a la persona correctamente</td></tr>";
        } else {
            print "<tr><td>El vehiculo no pudo asociarse a la persona</td></tr>";
        }
        echo "<tr><td><a href='Menu_Principal.php'>Volver a menu principal</a></td></tr>";
    } else {
        print "<tr><td>No ha sido posible ingresar al Vehiculo" . '</td></tr>';
        print '<tr><td><a href="NuevoVehiculo.php">Volver al Menu de Insertar Vehiculos</a></td></tr>';
    }
} else {
    print "<tr><td>Debe logearse." . '</td></tr>'
            . '<tr><td><a href="iniciar_sesion.html"> Ir a Login </a></td></tr>';
}
echo'</table>';


