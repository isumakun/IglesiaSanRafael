<?php

function conectar() {
    $link = mysql_connect("localhost", "root", "") or die("Error al conectar" . mysql_error());
    mysql_select_db("entrevistas") or die("No se pudo conectar a Inventario");
    return $link;
}

