<html>
    <head>
        <meta charset="UTF-8">
        <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <script src="../../vendor/jquery/jquery.min.js"></script>
    </head>
    <body>

        <?php
        if (isset($_GET['msj'])) {
            if ($_GET['msj'] == "guardado") {
                echo '<script>alert("Se han guardado los cambios");</script>';
            }
        }
            include '../crudBoletas/buscarBoleta.php';
            if(isset($comunidad) and isset($encargado) and isset($_GET['nb'])){
            ?>
            <section class="container1" style="margin-left: 0px;margin-right: 0px;">
                <form action="../crudBoletas/updateBoleta.php" method="post">
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
                            <?php }?>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </body>
</html>