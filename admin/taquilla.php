<!DOCTYPE html>
<html>

    <!-- Mirrored from preview.oklerthemes.com/porto/4.4.0/index-corporate-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Jan 2016 16:53:31 GMT -->
    <head>

        <!-- Basic -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">	        
        <title>Comunidad San Rafael</title>	

        <meta name="keywords" content="HTML5 Template" />
        <meta name="description" content="Porto - Responsive HTML5 Template">
        <meta name="author" content="okler.net">

        <!-- Favicon -->
        <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon" />
        <link rel="apple-touch-icon" href="../img/apple-touch-icon.png">

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <!-- Web Fonts  -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

        <!-- Vendor CSS -->
        <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../vendor/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../vendor/simple-line-icons/css/simple-line-icons.min.css">
        <link rel="stylesheet" href="../vendor/owl.carousel/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="../vendor/owl.carousel/assets/owl.theme.default.min.css">
        <link rel="stylesheet" href="../vendor/magnific-popup/magnific-popup.min.css">

        <!-- Theme CSS -->
        <link rel="stylesheet" href="../css/theme.css">
        <link rel="stylesheet" href="../css/theme-elements.css">
        <link rel="stylesheet" href="../css/theme-blog.css">
        <link rel="stylesheet" href="../css/theme-shop.css">
        <link rel="stylesheet" href="../css/theme-animate.css">

        <!-- Current Page CSS -->
        <link rel="stylesheet" href="../vendor/rs-plugin/css/settings.css" media="screen">
        <link rel="stylesheet" href="../vendor/rs-plugin/css/layers.css" media="screen">
        <link rel="stylesheet" href="../vendor/rs-plugin/css/navigation.css" media="screen">
        <link rel="stylesheet" href="../vendor/circle-flip-slideshow/css/component.css" media="screen">

        <!-- Skin CSS -->
        <link rel="stylesheet" href="../css/skins/default.css">

        <!-- Theme Custom CSS -->
        <link rel="stylesheet" href="../css/custom.css">

        <!-- Head Libs -->
        <script src="../vendor/modernizr/modernizr.min.js"></script>

    </head>
    <body>

        <div class="body">


            <?php require '../header.php'; 
                if(isset($_GET['msj']) and $_GET['msj']=="guardado"){
                    echo '<script>alert("Se han guardado los cambios!")</script>';
                }
            ?>
            <div class="page-header"></div>
            <div role="main" class="main">
                <form class="form-inline" action="taquilla.php" method="post">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">    
                                <div class="col-xs-1"></div>
                                <div class="col-xs-3">
                                    <select id="evento" name="evento" class="form-control">
                                        <option value="Retiro de Carnavales 2016">Retiro de Carnavales 2016</option>
                                        <option value="Bingo San Rafael 2016">Bingo San Rafael 2016</option>
                                    </select>
                                </div>
                                <div class="col-xs-3">
                                    <input class="form-control" id="numbol" name="numbol" type="text" value="" 
                                           placeholder="Ingrese aquí el número de la boleta" required="true"/>
                                </div>
                                <button class="btn btn-info" type="submit">Buscar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <?php
        include './crudEvento/buscarEvento.php';
        ?>

    </body>
</html>
