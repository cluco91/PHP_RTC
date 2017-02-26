<?php

/* Para que tenga acceso restringido */
session_start();

if (isset($_SESSION['rut'])) {
    $varRut = $_SESSION['rut'];

    print "<table border='1' align='center'>"
            . '<tr><td><h1>Bienvenido al Menu Principal</h1></td></tr>' .
            '<tr><td align="center"><h2>El rut del usuario es:' . $varRut . '</h2></td></tr>'
            . '<tr><td align="center"><a href="AgendarHora.php"> Agendar Hora </a></td></tr>'
            . '<tr><td align="center"><a href="ConsultarHora.php"> Consultar Hora </a></td></tr>'
            . '<tr><td align="center"><a href="NuevoVehiculo.php"> Agregar otro Vehiculo</a></td></tr>'
            . '<tr><td align="center"> <a href="logout.php">Cerrar Sesion </a>'
            . '</td></tr></table>';
} else {
    print "Debe logearse." . '<br>'
            . '<a href="iniciar_sesion.html"> Ir a Login </a>';
}
