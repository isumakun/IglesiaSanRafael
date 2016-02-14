<?php
include '../funciones/conexion.php';
$link = conectar();
if(isset($_POST['nombre'])and isset($_POST['cumple']) and isset($_POST['tel']) 
        and isset($_POST['email']) and isset($_POST['comunidad'])){
mysql_query("INSERT INTO boletas(nombre, cumpleanos ,telefono, correo , Comunidad_idComunidad) "
        . "VALUES ('$_POST[nombre]','$_POST[cumple]','$_POST[tel]','$_POST[email]', '$_POST[comunidad]')", $link);
}
