<?php

require '../funciones/conexion.php';

function agregarBoleta($numero, $persona, $evento) {
    $link = conectar();
    $sql = "INSERT INTO boletas(numero, estado ,Persona_idPersona , Evento_idEvento) "
            . "VALUES ('$numero','En Trámite','$persona','$evento')";
    mysql_query($sql, $link);
    $error = mysql_error($link);

   
        if ($error == null) {
            header("Location: ../listaBoletas.php?estado=guardado");
        } else {
            header("Location: ../listaBoletas.php?estado=errordatos");
            echo "<center>";
            echo "<h1> " . $error . "</h1>";
            echo "</center>";
        }
    
}

function agregarBoletas($first, $last, $persona, $evento) {
    $link = conectar();

    while ($first <= $last) {
        $sql = "INSERT INTO boletas(numero, estado ,Persona_idPersona , Evento_idEvento) "
                . "VALUES ('$first','En Trámite','$persona','$evento')";
        
        mysql_query($sql, $link);

        $error = mysql_error($link);

       
            if ($error == null) {
                $first++;

            if($first > $last){
                    header("Location: ../listaBoletas.php?estado=guardado");
                }
            } else {
                header("Location: ../listaBoletas.php?estado=errordatos");
                echo "<center>";
                echo "<h1> " . $error . "</h1>";
                echo "</center>";
            }
    }
}