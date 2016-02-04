<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Iglesia San Rafael</title>

        <!-- Google Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="logincss/css/animate.css">
        <!-- Custom Stylesheet -->
        <link rel="stylesheet" href="logincss/css/style.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    </head>

    <body>
        <div class="container">
            <div class="top">
                <div class="center">
                    <center>
                    
                    </center>
                </div>
            </div>
            <div class="login-box animated fadeIn">
                <div class="box-header" style="padding-top: 10px; padding-bottom: 10px; margin-bottom: 10px">
                    <img src="img/logo-white.png"/>
                </div>
                <form method="POST" action="login.php">
                <label for="username">Usuario</label>
                <br/>
                <input type="text" id="username" name="usuario">
                <br/>
                <label for="password">Contraseña</label>
                <br/>
                <input type="password" id="password" name="password">
                <br/>
                <button type="submit">Iniciar Sesión</button>
                <button type="button"><a href="index.php?header=inicio" style="color: white">Volver</a></button>
                <br/>
                <a href="#"><p class="small">Olvidaste la contraseña?</p></a>
                </form>
            </div>
        </div>
    </body>

    <script>
        $(document).ready(function () {
            $('#logo').addClass('animated fadeInDown');
            $("input:text:visible:first").focus();
        });
        $('#username').focus(function () {
            $('label[for="username"]').addClass('selected');
        });
        $('#username').blur(function () {
            $('label[for="username"]').removeClass('selected');
        });
        $('#password').focus(function () {
            $('label[for="password"]').addClass('selected');
        });
        $('#password').blur(function () {
            $('label[for="password"]').removeClass('selected');
        });
    </script>

</html>