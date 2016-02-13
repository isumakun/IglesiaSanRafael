<?php

include '../funciones/conexion.php';

while($first <= $last){
    mysql_query("INSERT INTO boletas(numero, estado ,Persona_idPersona , Evento_idEvento) "
            . "VALUES ('$first','En Trámite','$persona','$evento')");
    $first++;
}