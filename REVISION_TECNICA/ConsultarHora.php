<?php

/* Para que tenga acceso restringido */
session_start();
print"<table border='1' align='center'>";
if (isset($_SESSION['rut'])) {

    
    
    $varRut = $_SESSION['rut'];
    print"<tr><td align='center' colspan='2'><h2>Consultar Hora</h2></td></tr>";
    print"<tr><td align='center' colspan='2'><h3>El rut del usuario es: " . $varRut . '</h3><b/td></tr>';
    
    $con = mysqli_connect('localhost', 'root', '', 'bd_revtec');
    $consultar = "SELECT patente FROM tbl_persona_vehiculo WHERE rut = '$varRut'";
    $cantidad_v = $con->query($consultar);

    $numfilas = $cantidad_v->num_rows;

    if ($numfilas > 0) {
    
   
    $sql = "SELECT patente FROM tbl_persona_vehiculo WHERE rut = '$varRut'";
    $array = $con->query($sql);
    
    

    print '<form name="consultar" method="POST" action="ConsultarHora_2.php">';
    print '<tr><td>Seleccion patente</td><td> <select name="patente_c">';
    while ($fila = mysqli_fetch_assoc($array)) {
        print '<option value =' . $fila['patente'] . '>' . $fila['patente'] . '</option>';
    }
    print '</select></td></tr>';

    print "<tr><td align='center' colspan='2'><input type='submit' value='consultar'></td></tr>";
    print '</form>';
    print "<tr><td align='center' colspan='2'><a href ='Menu_Principal.php'> Volver al Menu </a>";
    print "<tr><td align='center' colspan='2'><a href='logout.php'>Cerrar Sesion </a>";
    }else{
        print "<tr><td colspan='2' align='center'>Debe tener a lo menos un vehiculo registrado</td></tr>";
        print "<tr><td colspan='2' align='center'><a href='Menu_Principal.php'> Volver al Menu </a></td></tr>";
        print "<tr><td colspan='2' align='center'><a href='logout.php'>Cerrar Sesion </a></td></tr>";
    }
} else {
    print "<tr><td align='center'>Debe logearse.</td></tr>"
            . "<tr><td align='center><a href='iniciar_sesion.html'> Ir a Login </a>";
}
print"</table>";
