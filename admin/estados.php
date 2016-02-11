<?php

if (isset($_GET['estado'])) {
    if ($_GET['estado'] == 'logout') {
        if (isset($_SESSION['estado'])) {
            unset($_SESSION['estado']);
            unset($_SESSION['usuario']);
            unset($_SESSION['password']);
        }
    } else if ($_GET['estado'] == "nousuario") {
        echo '<script> alert("El usuario no existe") </script>';
    } else if ($_GET['estado'] == "contra") {
        echo '<script> alert("La contraseña y el Usuario no coinciden") </script>';
    } else if ($_GET['estado'] == "login") {
        echo '<script> alert("Por favor logueese para ver esta pagina") </script>';
    }
}