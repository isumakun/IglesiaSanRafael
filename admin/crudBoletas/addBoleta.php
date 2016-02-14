<?php
include '../funciones/conexion.php';
$link = conectar();
if(isset($_POST['boleta'])and isset($_POST['p']) and isset($_POST['evento'])){
mysql_query("INSERT INTO boletas(numero, estado ,Persona_idPersona , Evento_idEvento) "
        . "VALUES ('$_POST[boleta]','En Trámite','$_POST[p]','$_POST[evento]')", $link);
}