<?php
if (isset($_GET['ev']) and isset($_GET['nb'])) {
    $evento  = $_GET['ev'];
    $numbol = $_GET['nb'];
    include '../funciones/conexion.php';
    $link = conectar();
  $q2 = mysql_query("SELECT boletas.estado AS 'estado', persona.nombre AS 'nombre', comunidad.nombre AS 'com' 
        FROM boletas INNER JOIN persona ON persona.idPersona = boletas.Persona_idPersona 
        INNER JOIN comunidad ON comunidad.idComunidad = persona.Comunidad_idComunidad
        WHERE boletas.Evento_idEvento = '$evento' AND boletas.numero = '$numbol'", $link) or die(mysql_error());
            $rg = mysql_fetch_array($q2);
            $comunidad = $rg["com"];
            $encargado = $rg["nombre"];
            $est = $rg["estado"];
            if($comunidad == "" and $encargado == "" and $est == ""){
                echo '<script>alert("Ese n\xfamero de boleta no existe.\nPor favor verificar.")</script>';
            }
}