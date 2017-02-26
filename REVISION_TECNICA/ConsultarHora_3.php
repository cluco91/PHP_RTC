<?php

/* Para que tenga acceso restringido */
session_start();

print"<table border='1' align='center'>";
if (isset($_SESSION['rut'])) {
    $varRut = $_SESSION['rut'];
    print"<tr><td align='center' colspan='2'><h2>Consultar Hora</h2></td></tr>";
    print"<tr><td align='center' colspan='2'><h3>El rut del usuario es: " . $varRut . '</h3><b/td></tr>';

//$varPatente_c = $_POST['patente_c'];
//print "Su patente es: ".$varPatente_c;
    $varpatent_c = $_POST['patent_c'];
    print "<tr><td>Su patente es:</td><td> " . $varpatent_c . "</td></tr>";
    $var_idhora = $_POST['hora'];
    print "<tr><td>El ID de la hora es:</td><td> " . $var_idhora . "</td></tr>";
    $con = mysqli_connect('localhost', 'root', '', 'bd_revtec');

    $consulta = " UPDATE tbl_hora SET disponible = '1' WHERE id_hora = '$var_idhora'";
    $consulta2 = "DELETE FROM tbl_agendar_hora WHERE id_hora = '$var_idhora'";

    $con->query($consulta);
    $hora_borrada = $con->affected_rows;
    $con->query($consulta2);
    $hora_borrada_2 = $con->affected_rows;

    if ($hora_borrada == 1 and $hora_borrada_2 == 1) {
        print "<tr><td align='center' colspan='2'>La hora ha sido borrada con exito</td></tr>";
    } else {
        print "<tr><td align='center' colspan='2'>ERROR:::::::</td></tr>";
    }

################################################################ */

    print "<tr><td align='center' colspan='2'><a href = 'Menu_Principal.php'> Volver al Menu </a></td></tr>";
    print "<tr><td align='center' colspan='2'> <a href='logout.php'>Cerrar Sesion </a></td></tr>";
} else {
    print "<tr><td align='center'>Debe logearse.</td></tr>"
            . "<tr><td align='center'><a href='iniciar_sesion.html'> Ir a Login </a></td></tr>";
}