<?php

/* Para que tenga acceso restringido */
session_start();

print"<table border='1' align='center'>";
if (isset($_SESSION['rut'])) {
    $varRut = $_SESSION['rut'];
    print"<tr><td align='center' colspan='2'><h2>Consultar Hora</h2></td></tr>";
    print"<tr><td align='center' colspan='2'><h3>El rut del usuario es: " . $varRut . '</h3><b/td></tr>';

    $varPatente_c = $_POST['patente_c'];
    print "<tr><td>La patente es:</td><td> " . $varPatente_c . "</td></tr>";

    $con = mysqli_connect('localhost', 'root', '', 'bd_revtec');
    $consulta = "SELECT * FROM tbl_agendar_hora WHERE patente = '$varPatente_c'";

    $resultado = $con->query($consulta);
    $numero_horas = $resultado->num_rows;
    if ($numero_horas == 0) {
        print "<tr><td align='center' colspan='2'>No hay horas disponibles para esa Patente </td></tr>";
    } else {
        print '<form name="borrar" method="POST" action="ConsultarHora_3.php">';
        print"<tr><td colspan='2' align='center'>Borrar una hora?</td></tr>";
        while ($fila = $resultado->fetch_assoc()) {
            print "<tr><td>ID Hora registrada: </td><td>";
            print $fila['id_hora'];
            print '<input type="radio" name="hora" value=' . $fila['id_hora'] . '>';
            print '</td>';
        }
        print '<input type="hidden" value="' . $varPatente_c . '" name="patent_c">';

        print "<tr><td align='center' colspan='2'><input type='submit' value='Borrar'></td></tr>";
        print '</form>';
    }

    print "<tr><td align='center' colspan='2'><a href ='Menu_Principal.php'> Volver al Menu </a>";
    print "<tr><td align='center' colspan='2'><a href='logout.php'>Cerrar Sesion </a>";
} else {
    print "<tr><td align='center'>Debe logearse.</td></tr>"
            . "<tr><td align='center><a href='iniciar_sesion.html'> Ir a Login </a>";
}
print"</table>";
