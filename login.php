<?php

require 'funciones.php';
session_start();
$link = conectar();
if ((isset($_POST["usuario"])) && (isset($_POST["password"]))) {


    $usuarios = mysql_query("Select * from usuario where usuario='{$_POST['usuario']}'", $link);
    $nusuarios = mysql_num_rows($usuarios);


    if ($nusuarios != 0) {

        $sql1 = "select tipo from usuario where password='{$_POST["password"]}' 
                                                && usuario='{$_POST["usuario"]}'";
        $tipouser = mysql_query($sql1, $link);

        $resultContra = mysql_query("select password from usuario where usuario='{$_POST["usuario"]}'", $link);
        $contra = mysql_result($resultContra, 0);

        $sql2 = "select usuario from usuario where password='{$_POST["password"]}' 
                                                && usuario='{$_POST["usuario"]}'";

        $result = mysql_query($sql2, $link);
        $usuario = mysql_result($result, 0);

        if (validarFicha($usuario)) {
            $idAsp = getIDByUser($usuario);
            $sqlcargo = "select tipocargo from fichatrabajo where Aspirante_idAspirante= $idAsp";
            $result = mysql_query($sql2, $link);
            $tipocargo = mysql_result($result, 0);
            if (strpos($tipocargo, 'Jefatura') !== false) {
                $_SESSION['cargo'] = 'jefe';
            }else{
                 $_SESSION['cargo'] = 'aux';
            }
        }

        if ($contra == $_POST["password"]) {

            $_SESSION['tipo'] = mysql_result($tipouser, 0, 0);
            $_SESSION['usuario'] = $usuario;
            $_SESSION['password'] = $contra;
            $_SESSION['autenticado'] = "autenticado";

            if ($_SESSION['tipo'] == 1) {
                header("Location: index.php");
            } else {
                if (validarFicha($usuario)) {
                    header("Location: pruebas.php");
                } else {
                    header("Location: fichaTecnica.php");
                }
            }
        } else {
            header("Location: login.php?estado=contra");
        }
    } else {
        header("Location: login.php?estado=nousuario");
    }
}
mysql_close($link);
