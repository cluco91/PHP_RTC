 <?php

session_start();
print"<table border='1' align='center'>";
if (isset($_SESSION['rut'])) {
    $varRut = $_SESSION['rut'];
    print"<tr><td align='center' colspan='2'><h2>Agendar Hora</h2></td></tr>";
    print"<tr><td align='center' colspan='2'><h3>El rut del usuario es: " . $varRut . '</h3><b/td></tr>';
    $con = mysqli_connect('localhost', 'root', '', 'bd_revtec');
    $fecha = $_POST['fecha'];

    $patente2 = $_POST['patente2'];

    print "<tr><td>Su patente es:</td><td>" . $patente2 . "</td></tr>";

    print "<tr><td>La fecha seleccionada es:</td><td>" . $fecha . "</td></tr>";
    $consulta = "SELECT * FROM tbl_hora WHERE fecha = '$fecha'";

    $resultado = $con->query($consulta);
    $numero_horas = $resultado->num_rows;
    if ($numero_horas == 0) {
        print "<tr><td>No hay horas disponibles para esa fecha</td></tr> ";
    } else {
//Mostramos las horas.
        print '<form name="reserva" method="POST" action="AgendarHora_4.php">';
        while ($fila = $resultado->fetch_assoc()) {
            print"<tr><td>";
            print $fila['fecha'] . "-";
            print $fila['hora'];
             print"</td><td>";
            if ($fila['disponible'] == 0) {
                print '<input type="radio" name="hora" value=' . $fila['id_hora'] . ' disabled>';
                print"</td></tr>";
            } else {
                print'<input type="radio" name="hora" value=' . $fila['id_hora'] . '>';
                print"</td></tr>";
            }
        }
        print '<input type="hidden" value="' . $patente2 . '" name="patente3">';
        print "<tr><td colspan='2' align='center'><input type='submit' value='Agendar'></td></tr> </form>";
    }
} else {
    print "<tr><td>Debe logearse.</td></tr>"
            . "<tr><td align='center' colspan='2'><a href='iniciar_sesion.html'> Ir a Login </a></td></tr>";
}
