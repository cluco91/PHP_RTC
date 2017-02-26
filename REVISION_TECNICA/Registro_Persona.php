<?php
/* Este php es para registrar personas,  y vehiculos */
/* Sera php porque necesito cargar de la base de datos, los dropdownlist */
/* Para llenar el dropdownlist del genero */
$con = mysqli_connect('localhost', 'root', '', 'bd_revtec');
?>
<html>
    <head>
        <title>Registrar Persona</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <script type="text/javascript" src="valida_persona.js"></script>
    </head>
    <body>
        <form name="rp" method="POST" action="Registro_2.php" onsubmit="return validar_persona()">
            <table border="1" align="center">
                <tr><td colspan="2" align="center"><h1> Formulario de Registro.-</h1><br></td></tr>
                <tr><td colspan="2" align="center"><h2> Registro de Usuario.- </h2>
                <tr><td><label id="lrut">RUT</label></td><td colspan="2"><input type="text" name="rut" id="rut" required> - <input type="text" name="dv" maxlength="1" size="1" id="dv" required></td></tr>
                <tr><td><label id="lnombre1"> Primer Nombre </label></td><td colspan="2"> <input type="text" name="nombre1" id="nombre1" required></td></tr>
                <tr><td><label id="lnombre2"> Segundo Nombre </label></td><td colspan="2"> <input type="text" name="nombre2" id="nombre2" required></td></tr>
                <tr><td><label id="lapellido1"> Primer Apellido </label></td><td colspan="2"> <input type="text" name="apellido1" id="apellido1" required></td></tr>
                <tr><td><label id="lapellido2"> Segundo Apellido </label> </td><td colspan="2"><input type="text" name="apellido2" id="apellido2" required></td></tr>
                <tr><td><label id="ldireccion"> Direccion </label></td><td colspan="2"> <input type="text" name="direccion" id="direccion" required></td></tr>
                <tr><td><label id="lfono"> Fono </label></td><td colspan="2"> <input type="number" name="fono" id="fono"  maxlength="7" required></td></tr>
                <tr><td><label id="lcorreo"> Correo </label></td><td colspan="2"> <input type="email" name="correo" id="correo" required></td></tr>         
                <tr><td> <label id="lgenero">Seleccione Genero</label> </td><td>           
                        <select name="genero">

                            <?php
                            $sql = "SELECT * FROM tbl_genero";
                            $array = $con->query($sql);
                            while ($fila = mysqli_fetch_assoc($array)) {
                                print '<option value=' . $fila['id_genero'] . '> ' . $fila['nombre_genero'] . ' </option>';
                            }
                            ?>                
                        </select> </td></tr>                  
                <tr><td><label id="lcontrasena"> Contraseña </label></td><td colspan="2"> <input type="password" name="contrasena" id="contrasena"  maxlength="6" required></td></tr>                        
                <tr><td colspan="3" align="center"><input type="submit" value="Registro"></td></tr>
            </table>
            <table align="center">
                <tr><td>
                        <a href="iniciar_sesion.html">Volver al Login</a>
                    </td></tr>
            </table>
        </form>
    </body>
</html>


