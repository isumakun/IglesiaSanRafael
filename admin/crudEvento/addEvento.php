<?php
include '../funciones/conexion.php';
mysql_query("INSERT INTO evento(nombre, estado ,fecha_inicio , fecha_final) "
        . "VALUES ('$_POST[nom]]','Abierto','$_POST[init]','$_POST[end]')");
