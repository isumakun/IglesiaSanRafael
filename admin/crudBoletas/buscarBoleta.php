<?php
if (isset($_POST['evento']) and $_POST['evento'] != "") {
                    include 'funciones/conexion.php';
                    $q = mysql_query("SELECT idEvento FROM Evento WHERE nombre = '$_POST[evento]'");
                    $reg = mysql_fetch_array($q);
                    $evento = $reg['idEvento'];
                    $numbol = $_POST['numbol'];    
          
            
        }
