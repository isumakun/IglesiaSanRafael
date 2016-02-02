<html>
    <head>
        <meta charset="UTF-8">
        <link href="../bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="../bootstrap-3.3.6-dist/js/jquery-2.2.0.min.js"></script>
    </head>
    <body>

        <?php
        if (isset($_GET['msj'])) {
            if ($_GET['msj'] == "guardado") {
                echo '<script>alert("Se han guardado los cambios");</script>';
            }
        }
        if (isset($_GET['ev']) and isset($_GET['nb'])) {
            include '../funciones/conexion.php';

            $q2 = mysql_query("SELECT boletas.estado AS 'estado', persona.nombre AS 'nombre', comunidad.nombre AS 'com' 
        FROM boletas INNER JOIN persona ON persona.idPersona = boletas.Persona_idPersona 
        INNER JOIN comunidad ON comunidad.idComunidad = persona.Comunidad_idComunidad
        WHERE boletas.Evento_idEvento = '$_GET[ev]' AND boletas.numero = '$_GET[nb]'") or die(mysql_error());
            $rg = mysql_fetch_array($q2);
            $comunidad = $rg["com"];
            $encargado = $rg["nombre"];
            $est = $rg["estado"];
            ?>
            <section class="container1" style="margin-left: 0px;margin-right: 0px;">
                <form action="../funciones/Boleta.php" method="post">
                    <div class="panel panel-default" style="width: 1202px;margin-left: 40px;margin-right: 100px;">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-2">
                                    <strong>Comunidad:</strong>
                                    <input id="com" name="com" class="form-control" type="text" value="<?php echo $comunidad; ?>" readonly="true">
                                </div>
                                <div class="col-xs-6">
                                    <strong>Miembro:</strong>
                                    <input id="enc" name="enc" class="form-control" type="text" value="<?php echo $encargado; ?>" readonly="true">
                                </div>
                                <div class="col-xs-2">
                                    <strong>Boleta #:</strong>
                                    <input id="bol" name="bol" class="form-control" type="text" value="<?php echo $_GET['nb']; ?>" readonly="true">
                                </div>
                                <div class="col-xs-1"></div>
                                <div class="col-xs-4">
                                    <br>
                                    <strong>Estado de la boleta:</strong>
                                    <select id="estado" name="estado" class="form-control">
                                        <option value="En Trámite">En trámite</option>
                                        <option value="Pagada">Pagada</option>
                                        <option value="Despachada">Despachada</option>
                                    </select>
                                    <script>$("#estado option[value='<?php echo $est; ?>']").attr('selected', 'selected');</script>
                                </div>
                                <div class="col-xs-6"><br></div>
                                <div class="col-xs-3">
                                    <br>
                                    <button class="btn btn-primary" type="submit">Guardar</button>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </body>
</html>

