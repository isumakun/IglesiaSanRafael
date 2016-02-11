<?php

$link = conectar();

$sql = "SELECT * FROM comunidad";

$query = mysql_query($sql, $link);
        
        while ($line = mysql_fetch_array($query)) {
            echo '<tr>';
            echo "<td style='text-align: center'>" . $line['idComunidad'] . "</td>";
            echo "<td style='text-align: center'>" . $line['Nombre'] . "</td>";
            echo "<td><a href='crudComunidad/insertarComunidad.php?id=".$line["idComunidad"]."'><button class='btn btn-primary'><i class='fa fa-edit '></i> Editar</button></a>";
            echo "<a href='crudComunidad/eliminarComunidad.php?idUsuario=".$line["idUsuario"]."'>
                                <button class='btn btn-danger' onclick='return confirm(\"Seguro que desea eliminar este Usuario?\")';' ><i class='fa fa-thumbs-o-down '></i> Eliminar</button></a>";
            echo "</tr>";
        }
        mysql_close($link);
    
        