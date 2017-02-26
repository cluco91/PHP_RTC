<?php

session_start();
echo"<table border='1' align='center'>";
if (isset($_SESSION['rut'])) {
    $varRut = $_SESSION['rut'];
    print "<tr><td colspan='2' align='center'><h1>Agendar Hora.-</h1></td></tr>";
    print "<tr><td colspan='2'align='center'><h3>El rut del usuario es: " . $varRut . '</h3></td></tr>';
    $con = mysqli_connect('localhost', 'root', '', 'bd_revtec');
    
    $consultar = "SELECT patente FROM tbl_persona_vehiculo WHERE rut = '$varRut'";
    $cantidad_v = $con->query($consultar);

    $numfilas = $cantidad_v->num_rows;

    
    if ($numfilas > 0) {
        print "<tr><td colspan='2' align='center'>Usted tiene " . $numfilas . "vehiculos</td><tr>";

        $sql = "SELECT patente FROM tbl_persona_vehiculo WHERE rut = '$varRut'";
        $array = $con->query($sql);
        $sql2 = "SELECT * FROM tbl_sucursal";
        $array2 = $con->query($sql2);


        print '<form name="vp" method="POST" action="AgendarHora_2.php">';
        print "<tr><td>Patente</td>"
        . "<td colspan='2'><select name='patente'>";
        while ($fila = mysqli_fetch_assoc($array)) {
            print '<option value =' . $fila['patente'] . '>' . $fila['patente'] . '</option>';
        }
        print '</select></td><tr>';

        print '<tr><td>Sucursal</td><td><select name="sucursal">';
        while ($fila2 = mysqli_fetch_assoc($array2)) {
            print '<option value =' . $fila2['cod_sucursal'] . '>' . $fila2['nombre_sucursal'] . '</option>';
        }
        print '</select></td></tr>';

        print "<tr><td colspan='2' align='center'><input type='submit' value='verificar'></td></tr>";
        print '</form>';
        print "<tr><td colspan='2' align='center'><a href = 'Menu_Principal.php'> Volver al Menu </a></td></tr>";
        print "<tr><td colspan='2' align='center'><a href='logout.php'>Cerrar Sesion </a></td></tr>";
    } else {
        print "<tr><td colspan='2' align='center'>Debe tener a lo menos un vehiculo registrado</td></tr>";
        print "<tr><td colspan='2' align='center'><a href='Menu_Principal.php'> Volver al Menu </a></td></tr>";
        print "<tr><td colspan='2' align='center'><a href='logout.php'>Cerrar Sesion </a></td></tr>";
    }
} else {
    print "<tr><td>Debe logearse...</td></tr>"
            . '<tr><td><a href="iniciar_sesion.html"> Ir a Login </a></td></tr>';
}
