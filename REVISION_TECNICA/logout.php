<?php

session_start();
print"<table border='1' align='center'>";

if (isset($_SESSION['rut'])) {
    /* Si la sesion viene definida, destruir la sesion */
    print "<tr><td>Su sesion ha caducado</td></tr>";
    session_destroy();
    /* metodo abstracto, solo lo usamos, no necesitamos
      saber como funciona */
    print '<tr><td><a href="iniciar_sesion.html"> Volver a Login </a></td></tr>';
} else {
    print "<tr><td align='center'>Debe logearse</td></tr>"
            . "<tr><td align='center'><a href='iniciar_sesion.html'>Ir a Login</a></td></tr>";
}