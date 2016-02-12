<?php
if (isset($_POST['evento']) and $_POST['evento'] != "") {
                    include '/funciones/conexion.php';
                    $q = mysql_query("SELECT idEvento FROM Evento WHERE nombre = '$_POST[evento]'");
                    
                    
                    $reg = mysql_fetch_array($q);
                    $evento = $reg['idEvento'];
                    $numbol = $_POST['numbol'];    
                    if ($evento == ""){
                        echo '<script>alert("Este evento NO existe o esta cerrado.\nPor favor verificar")</script>';
                    }else{
            echo '
                    <div class="iframe">
                        <iframe width="95%" height="400" 
                                src="iframes/boleteria.php?ev='.$evento.'&nb='.$numbol.'" 
                                frameborder="0" allowfullscreen="" style="height: 400px; width: 1420px;"></iframe>
                    </div>
                ';
}}
