<?php

require "../../funciones.php";

function crearComunidad($nombre) {

    $link = conectar();

    $sql = "INSERT INTO comunidad
                (nombre)
        VALUES ('$nombre');";

    mysql_query($sql, $link);
    $error = mysql_error($link);

    if ($error == null) {
        header("Location: ../listaComunidades.php?estado=guardado");
    } else {
        header("Location: ../listaComunidades.php?estado=errordatos");
        echo "<center>";
        echo "<h1> " . $error . "</h1>";
        echo "</center>";
    }
}

function eliminarComunidad($id) {
    $link = conectar();
    $sql = "DELETE
            FROM comunidado
            WHERE idComunidad = idComunidad";

    mysql_query($sql, $link);
    $error = mysql_error($link);

    if ($error == null) {
        header("Location: ../listaComunidades.php");
    } else {
        header("Location: ../listaComunidades.php?estado=errordatos");
        echo "<center>";
        echo "<h1> " . $error . "</h1>";
        echo "</center>";
    }
    mysql_close($link);
}

function editarComunidad($id, $nombre) {
    $link = conectar();

        $sql = "UPDATE comunidad
                SET
                  nombre = '$nombre'
                WHERE idComunidad = '$id';";

        mysql_query($sql, $link);
        $error = mysql_error($link);

        if ($error == null) {
            header("Location: ../listaComunidades.php?estado=guardado");
        } else {
            header("Location: ../listaComunidades.php?estado=errordatos");
            echo "<center>";
            echo "<h1> " . $error . "</h1>";
            echo "</center>";
        }
        mysql_close($link);
}

?>
