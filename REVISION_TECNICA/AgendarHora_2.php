<?php

session_start();
print"<table border='1' align='center'>";
if (isset($_SESSION['rut'])) {
    $varRut = $_SESSION['rut'];
    print"<tr><td align='center' colspan='2'><h2>Agendar Hora</h2</td></tr>";

    print "<tr><td align='center' colspan='2'><h3>El rut del usuario es: " . $varRut . "</h3></td></tr>";
    $con = mysqli_connect('localhost', 'root', '', 'bd_revtec');
    $varPatente = $_POST['patente']; /* Patente capturada del dropdownlist */
    $varSucursal = $_POST['sucursal']; /* Sucursal capturada del dropdownlist */
    $fechaActual = date("d-m-Y");
    $fechadiv = explode("-", $fechaActual);
    $digito = substr($varPatente, -1); //EXTRAE EL ULTIMO DIGITO DE LA PATENTE.

    $diaa = 23; //representa el día una semana antes de inicio del mes que le corresponde.
    $anhio = 2015; //año en curso.

    $mesActualn = date("m"); //mes actual en numeros.
    $mesActuall = date("M"); //mes acutal en letras.
//$sql = "SELECT DAY(fecha) FROM tbl_hora WHERE MONTH(fecha) = '$fechadiv[1]'";   
//$array = $con->query($sql);

    print "<tr><td>Fecha actual es:</td><td>" . $fechaActual . "</td></tr>";
    print "<tr><td>Patente seleccionada es:</td><td>" . $varPatente . "</td></tr>";

    $P = $varPatente;
    /* Validaciones */

    switch ($digito) {

        case 0:
            if ($fechadiv[1] == '02') {
                $sql = "SELECT * FROM tbl_hora WHERE MONTH(fecha) = '02' AND cod_sucursal = '$varSucursal'";
                $array = $con->query($sql);
                print "<tr><td>Le corresponde el mes de:</td> <td>Febrero </td></tr>";
                print '<form name="vp2" method="POST" action="AgendarHora_3.php">';
                print '<tr><td><label id="ag_j">Seleccione una Fecha de este Mes </label></td>';
                print '<td><select name="fecha">';
                while ($fila = mysqli_fetch_assoc($array)) {
                    print '<option value =' . $fila['fecha'] . '>' . $fila['fecha'] . '</option>';
                }
                print '</select></td></tr>';
                print '<input type="hidden" value="' . $varPatente . '" name="patente2">';
                print "<tr><td colspan='2'align='center' ><input type='submit' value='seleccionar'></td></tr>";
                print '</form>';
            } else {
                print "<tr><td>No le corresponde una revision este mes</td></tr>"
                        . "<tr><td><a href='Menu_Principal.php'>Volver al Menu Principal</a></td></tr>";
            }
            break;
        case 1:
            if ($fechadiv[1] == '04') {
                $sql = "SELECT * FROM tbl_hora WHERE MONTH(fecha) = '04' AND cod_sucursal = '$varSucursal'";
                $array = $con->query($sql);
                print "<tr><td>Le corresponde el mes de:</td> <td>Abril </td></tr>";
                print '<form name="vp2" method="POST" action="AgendarHora_3.php">';
                print '<tr><td><label id="ag_j">Seleccione una Fecha de este Mes </label></td>';
                print '<td><select name="fecha">';
                while ($fila = mysqli_fetch_assoc($array)) {
                    print '<option value =' . $fila['fecha'] . '>' . $fila['fecha'] . '</option>';
                }
                print '</select></td></tr>';
                print '<input type="hidden" value="' . $varPatente . '" name="patente2">';
                print "<tr><td colspan='2'align='center' ><input type='submit' value='seleccionar'></td></tr>";
                print '</form>';
            } else {
                print "<tr><td>No le corresponde una revision este mes</td></tr>"
                        . "<tr><td><a href='Menu_Principal.php'>Volver al Menu Principal</a></td></tr>";
            }
            break;

        case 2:
            if ($fechadiv[1] == '05') {
                $sql = "SELECT * FROM tbl_hora WHERE MONTH(fecha) = '05' AND cod_sucursal = '$varSucursal'";
                $array = $con->query($sql);
                print "<tr><td>Le corresponde el mes de:</td> <td>Mayo </td></tr>";
                print '<form name="vp2" method="POST" action="AgendarHora_3.php">';
                print '<tr><td><label id="ag_j">Seleccione una Fecha de este Mes </label></td>';
                print '<td><select name="fecha">';
                while ($fila = mysqli_fetch_assoc($array)) {
                    print '<option value =' . $fila['fecha'] . '>' . $fila['fecha'] . '</option>';
                }
                print '</select></td></tr>';
                print '<input type="hidden" value="' . $varPatente . '" name="patente2">';
                print "<tr><td colspan='2'align='center' ><input type='submit' value='seleccionar'></td></tr>";
                print '</form>';
            } else {
                print "<tr><td>No le corresponde una revision este mes</td></tr>"
                        . "<tr><td><a href='Menu_Principal.php'>Volver al Menu Principal</a></td></tr>";
            }
            break;
        case 3:
            if ($fechadiv[1] == '06') {
                $sql = "SELECT * FROM tbl_hora WHERE MONTH(fecha) = '06' AND cod_sucursal = '$varSucursal'";
                $array = $con->query($sql);
                print "<tr><td>Le corresponde el mes de:</td> <td>Junio </td></tr>";
                print '<form name="vp2" method="POST" action="AgendarHora_3.php">';
                print '<tr><td><label id="ag_j">Seleccione una Fecha de este Mes </label></td>';
                print '<td><select name="fecha">';
                while ($fila = mysqli_fetch_assoc($array)) {
                    print '<option value =' . $fila['fecha'] . '>' . $fila['fecha'] . '</option>';
                }
                print '</select></td></tr>';
                print '<input type="hidden" value="' . $varPatente . '" name="patente2">';
                print "<tr><td colspan='2'align='center' ><input type='submit' value='seleccionar'></td></tr>";
                print '</form>';
            } else {
                print "<tr><td>No le corresponde una revision este mes</td></tr>"
                        . "<tr><td><a href='Menu_Principal.php'>Volver al Menu Principal</a></td></tr>";
            }
            break;
        case 4:
            if ($fechadiv[1] == '07') {
                $sql = "SELECT * FROM tbl_hora WHERE MONTH(fecha) = '07' AND cod_sucursal = '$varSucursal'";
                $array = $con->query($sql);
                print "<tr><td>Le corresponde el mes de:</td> <td>Julio </td></tr>";
                print '<form name="vp2" method="POST" action="AgendarHora_3.php">';
                print '<tr><td><label id="ag_j">Seleccione una Fecha de este Mes </label></td>';
                print '<td><select name="fecha">';
                while ($fila = mysqli_fetch_assoc($array)) {
                    print '<option value =' . $fila['fecha'] . '>' . $fila['fecha'] . '</option>';
                }
                print '</select></td></tr>';
                print '<input type="hidden" value="' . $varPatente . '" name="patente2">';
                print "<tr><td colspan='2'align='center' ><input type='submit' value='seleccionar'></td></tr>";
                print '</form>';
            } else {
                print "<tr><td>No le corresponde una revision este mes</td></tr>"
                        . "<tr><td><a href='Menu_Principal.php'>Volver al Menu Principal</a></td></tr>";
            }
            break;
        case 5:
            if ($fechadiv[1] == '08') {
                $sql = "SELECT * FROM tbl_hora WHERE MONTH(fecha) = '08' AND cod_sucursal = '$varSucursal'";
                $array = $con->query($sql);
                print "<tr><td>Le corresponde el mes de:</td> <td>Agosto </td></tr>";
                print '<form name="vp2" method="POST" action="AgendarHora_3.php">';
                print '<tr><td><label id="ag_j">Seleccione una Fecha de este Mes </label></td>';
                print '<td><select name="fecha">';
                while ($fila = mysqli_fetch_assoc($array)) {
                    print '<option value =' . $fila['fecha'] . '>' . $fila['fecha'] . '</option>';
                }
                print '</select></td></tr>';
                print '<input type="hidden" value="' . $varPatente . '" name="patente2">';
                print "<tr><td colspan='2'align='center' ><input type='submit' value='seleccionar'></td></tr>";
                print '</form>';
            } else {
                print "<tr><td>No le corresponde una revision este mes</td></tr>"
                        . "<tr><td><a href='Menu_Principal.php'>Volver al Menu Principal</a></td></tr>";
            }
            break;

        case 6:
            if ($fechadiv[1] == '09') {
                $sql = "SELECT * FROM tbl_hora WHERE MONTH(fecha) = '09' AND cod_sucursal = '$varSucursal'";
                $array = $con->query($sql);
                print "<tr><td>Le corresponde el mes de:</td> <td>Septiembre </td></tr>";
                print '<form name="vp2" method="POST" action="AgendarHora_3.php">';
                print '<tr><td><label id="ag_j">Seleccione una Fecha de este Mes </label></td>';
                print '<td><select name="fecha">';
                while ($fila = mysqli_fetch_assoc($array)) {
                    print '<option value =' . $fila['fecha'] . '>' . $fila['fecha'] . '</option>';
                }
                print '</select></td></tr>';
                print '<input type="hidden" value="' . $varPatente . '" name="patente2">';
                print "<tr><td colspan='2'align='center' ><input type='submit' value='seleccionar'></td></tr>";
                print '</form>';
            } else {
                print "<tr><td>No le corresponde una revision este mes</td></tr>"
                        . "<tr><td><a href='Menu_Principal.php'>Volver al Menu Principal</a></td></tr>";
            }
            break;
        case 7;
            if ($fechadiv[1] == '10') {
                $sql = "SELECT * FROM tbl_hora WHERE MONTH(fecha) = '10' AND cod_sucursal = '$varSucursal'";
                $array = $con->query($sql);
                print "<tr><td>Le corresponde el mes de:</td> <td>Octubre </td></tr>";
                print '<form name="vp2" method="POST" action="AgendarHora_3.php">';
                print '<tr><td><label id="ag_j">Seleccione una Fecha de este Mes </label></td>';
                print '<td><select name="fecha">';
                while ($fila = mysqli_fetch_assoc($array)) {
                    print '<option value =' . $fila['fecha'] . '>' . $fila['fecha'] . '</option>';
                }
                print '</select></td></tr>';
                print '<input type="hidden" value="' . $varPatente . '" name="patente2">';
                print "<tr><td colspan='2'align='center' ><input type='submit' value='seleccionar'></td></tr>";
                print '</form>';
            } else {
                print "<tr><td>No le corresponde una revision este mes</td></tr>"
                        . "<tr><td><a href='Menu_Principal.php'>Volver al Menu Principal</a></td></tr>";
            }
            break;
        case 8:
            if ($fechadiv[1] == '11') {
                $sql = "SELECT * FROM tbl_hora WHERE MONTH(fecha) = '11' AND cod_sucursal = '$varSucursal'";
                $array = $con->query($sql);
                print "<tr><td>Le corresponde el mes de:</td> <td>Noviembre </td></tr>";
                print '<form name="vp2" method="POST" action="AgendarHora_3.php">';
                print '<tr><td><label id="ag_j">Seleccione una Fecha de este Mes </label></td>';
                print '<td><select name="fecha">';
                while ($fila = mysqli_fetch_assoc($array)) {
                    print '<option value =' . $fila['fecha'] . '>' . $fila['fecha'] . '</option>';
                }
                print '</select></td></tr>';
                print '<input type="hidden" value="' . $varPatente . '" name="patente2">';
                print "<tr><td colspan='2'align='center' ><input type='submit' value='seleccionar'></td></tr>";
                print '</form>';
            } else {
                print "<tr><td>No le corresponde una revision este mes</td></tr>"
                        . "<tr><td><a href='Menu_Principal.php'>Volver al Menu Principal</a></td></tr>";
            }
            break;
        case 9:
            if ($fechadiv[1] == '01') {
                $sql = "SELECT * FROM tbl_hora WHERE MONTH(fecha) = '01' AND cod_sucursal = '$varSucursal'";
                $array = $con->query($sql);
                print "<tr><td>Le corresponde el mes de:</td> <td>Enero </td></tr>";
                print '<form name="vp2" method="POST" action="AgendarHora_3.php">';
                print '<tr><td><label id="ag_j">Seleccione una Fecha de este Mes </label></td>';
                print '<td><select name="fecha">';
                while ($fila = mysqli_fetch_assoc($array)) {
                    print '<option value =' . $fila['fecha'] . '>' . $fila['fecha'] . '</option>';
                }
                print '</select></td></tr>';
                print '<input type="hidden" value="' . $varPatente . '" name="patente2">';
                print "<tr><td colspan='2'align='center' ><input type='submit' value='seleccionar'></td></tr>";
                print '</form>';
            } else {
                print "<tr><td>No le corresponde una revision este mes</td></tr>"
                        . "<tr><td><a href='Menu_Principal.php'>Volver al Menu Principal</a></td></tr>";
            }
            break;
        //default:
        //  break;
    }

    print "<tr><td align='center' colspan='2'><a href = 'Menu_Principal.php'> Volver al Menu </a></td></tr>";
    print "<tr><td align='center' colspan='2'> <a href='logout.php'>Cerrar Sesion </a></td></tr>";
} else {
    print "<tr><td>Debe logearse...</td></tr>"
            . '<tr><td><a href="iniciar_sesion.html"> Ir a Login </a></td></tr>';
}
echo"</table>";
