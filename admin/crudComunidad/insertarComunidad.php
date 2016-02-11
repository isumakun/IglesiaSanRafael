<?php

require "../modelos/Comunidad.php";

if (isset($_POST['id'])) {
    if (isset($_POST['nombre'])) {
        editarComunidad($_POST['id'], $_POST['nombre']);
    } else {
        echo 'error';
    }
} else {
    if (isset($_POST['nombre'])) {
        crearComunidad($_POST["nombre"]);
    } else {
        echo 'error';
    }
}
