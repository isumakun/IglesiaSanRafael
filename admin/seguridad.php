<?php
session_start();
if ($_SESSION["autenticado"] != "autenticado") { 
   	//si no existe, envio a la página de autentificacion 
   	header("Location: ../login_page.php?estado=login"); 
   	//ademas salgo de este script 
   	exit(); 
}
