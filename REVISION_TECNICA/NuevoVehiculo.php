<script type="text/javascript" src="valida.js"></script>
<?php
/* Para que tenga acceso restringido */
/* FORMULARIO EMBEBIDO VEHICULO */
session_start();
if (isset($_SESSION['rut'])) {
    $varRut = $_SESSION['rut'];
    $conexion = mysqli_connect("localhost", "root", "", "bd_revtec");
    if (isset($_POST['marca'])) {
        $marca = $_POST['marca'];
        $consulta = "SELECT * FROM tbl_modelo where id_marca = '$marca'";
        $resultado = $conexion->query($consulta);
        print '<form name="form2" method="POST" action="NuevoVehiculo2.php">';
        print '<table border="1" align="center">';
        print"<tr><td colspan='2' align='center'><h2>Registrar Vehiculo</h2></td></tr>";
        print "<tr><td colspan='2' align='center'><h3>El rut del usuario es: " . $varRut . '</h3></td></tr>'
                . '<tr><td>Seleccione Modelo</td>';
        print '<td><select name="modelo">';
        while ($fila = $resultado->fetch_assoc()) {
            print '<option value=' . $fila['id_modelo'] . '> ' . $fila['nombre_modelo'] . ' </option>';
        }
        print '</select></td></tr>';
        print '<tr><td><label id="lpatente">Patente</label></td><td> <input type="text" name="patente"  maxlength="6" id="ptnt" required></td></tr>';
        print '<tr><td><label id="lanno">Anno</label></td><td> <input type="number" name="anno"  id="annou" required></td></tr>';
        print '<tr><td><label id="lkm">Kilometraje</label></td><td> <input type="number" name="km"  id="kms" required></td></tr>';
        print "<tr><td colspan='2' align='center'><input type='submit' value='Registrar'></td></tr>";
        print "<tr><td colspan='2' align='center'><a href='NuevoVehiculo.php'>Seleccionar otra Marca</a></td></tr>";
        print '</table></form>';
    } else {
        $consulta = "SELECT * FROM tbl_marca";
        $resultado = $conexion->query($consulta);
        print '<form name="form1" method="POST" action="NuevoVehiculo.php" onsubmit="return valida()">';
        print '<table border="1" align="center">'
                . '<tr><td colspan="2" align="center"><h2>Registrar Vehiculo</h2></td></tr>';
        print "<tr><td colspan='2' align='centerx'><h3>El rut del usuario es: " . $varRut . '</h3></td></tr>'
                . '<tr><td><label id="smarca">Seleccione Marca</label></td>';
        print '<td><select name="marca" id="marca">';
        print '<option value="0">Seleccione Opcion...</option>';
        while ($fila = $resultado->fetch_assoc()) {
            print '<option value=' . $fila['id_marca'] . '> ' . $fila['nombre_marca'] . ' </option>';
        }
        print '</select></td></tr>';
        print '<tr><td colspan="2" align="center"><input type="submit" value="ver modelos"></td></tr>';
        print '</form>';
    }
    /* ############################################################################ */

    print '<table align="center"><tr><td><a href = "Menu_Principal.php"> Volver al Menu </a></td></tr>';
    print '<tr><td><br> <a href="logout.php">Cerrar Sesion </a></td></tr></table>';
} else {
    print "Debe logearse." . '<br>'
            . '<a href="iniciar_sesion.html"> Ir a Login </a>';
}