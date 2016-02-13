<?php
include '../funciones/conexion.php';
mysql_query("INSERT INTO boletas(numero, estado ,Persona_idPersona , Evento_idEvento) "
        . "VALUES ('$_POST[boleta]','En Trámite','$_POST[p]','$_POST[evento]')");