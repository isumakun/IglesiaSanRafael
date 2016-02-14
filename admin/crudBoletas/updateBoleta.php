<?php

include '../funciones/conexion.php';
if (isset($_POST['estado']) and isset($_POST['bol'])) {

    mysql_query("UPDATE boletas SET estado = '$_POST[estado]' WHERE numero = $_POST[bol]");

    header("Location: ../iframes/boleteria.php?msj=guardado");
}