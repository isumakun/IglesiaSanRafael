<?php

include '../funciones/conexion.php';

mysql_query("UPDATE boletas SET estado = '$_POST[estado]' WHERE numero = $_POST[bol]");

header("Location: ../iframes/boleteria.php?msj=guardado");
