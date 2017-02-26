<?php

session_start();
print"<table border='1' align='center'>";
if (isset($_SESSION['rut'])) {
    $varRut = $_SESSION['rut'];
    print"<tr><td align='center' colspan='2'><h2>Agendar Hora</h2></td></tr>";
    print"<tr><td align='center' colspan='2'><h3>El rut del usuario es: " . $varRut . '</h3><b/td></tr>';
    $con = mysqli_connect('localhost', 'root', '', 'bd_revtec');
    $idhora = $_POST['hora'];
    $varPatente3 = $_POST['patente3'];

    print "<tr><td align='center'>Su patente es:</td><td>" . $varPatente3 . "</td></tr>";

    $consulta = " UPDATE tbl_hora SET disponible = '0' WHERE id_hora = '$idhora'";
    $consulta2 = "INSERT INTO tbl_agendar_hora (id_hora,patente) VALUES ('" . $idhora . "','" . $varPatente3 . "')";

    $con->query($consulta);
    $con->query($consulta2);

    $hora_agendada = $con->affected_rows;
    $hora_agendada_2 = $con->affected_rows;

    if ($hora_agendada == 1 and $hora_agendada_2 == 1) {
        print "<tr><td align='center' colspan='2'>La hora ha sido reservada con exito</td></tr>";
        print"<tr><td align='center' colspan='2'><a href='Menu_Principal.php'> Ir a Menu principal </a></td></tr>";
    } else {
        print "<tr><td align='center' colspan='2'>ERROR:::::::</td></tr>";
        print"<tr><td align='center' colspan='2'><a href='Menu_Principal.php'> Ir a Menu principal </a></td></tr>";
    }
} else {
    print "<tr><td align='center' colspan='2'>Debe logearse.</td></tr>"
            . "<tr><td align='center' colspan='2'><a href='iniciar_sesion.html'> Ir a Login </a></td></tr>";
}
print"</table>";
