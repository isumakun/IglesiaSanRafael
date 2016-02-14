<?php
if (isset($_GET['ev'])) {
    $evento  = $_GET['ev'];
    include '../funciones/conexion.php';
    $link = conectar();
  $q2 = mysql_query("SELECT boletas.numero AS 'numero', boletas.estado AS 'estado', persona.nombre AS 'nombre', comunidad.nombre AS 'com' 
        FROM boletas INNER JOIN persona ON persona.idPersona = boletas.Persona_idPersona 
        INNER JOIN comunidad ON comunidad.idComunidad = persona.Comunidad_idComunidad
        WHERE boletas.Evento_idEvento = '$evento'", $link) or die(mysql_error());
           
                while($rg = mysql_fetch_array($q2)){
                    if($rg['numero'] == ""){
                echo '<script>alert("El evento seleccionado no existe.\nPor favor verificar.")</script>';
                break;
            } else{
                    //TABLA CON TODAS LAS BOLETAS
            }
                }
            
}

