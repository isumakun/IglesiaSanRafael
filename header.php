<header id="header" data-plugin-options='{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 57, "stickySetTop": "-57px", "stickyChangeLogo": true}'>
    <div class="header-body">
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-logo">
                         <a href="http://localhost/IglesiaSanRafael/index.php" style="background-color: transparent !important">
                            <img alt="Porto" width="150" height="60" data-sticky-width="82" data-sticky-height="30" data-sticky-top="40" src="http://localhost/IglesiaSanRafael/img/logo.png">
                        </a>
                    </div>
                </div>
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-search hidden-xs">
                            <br><br>
                        </div>
                        <nav class="header-nav-top">
                            
                        </nav>
                    </div>
                    <div class="header-row">
                        <div class="header-nav">
                            <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
                                <i class="fa fa-bars"></i>
                            </button>
                            <ul class="header-social-icons social-icons hidden-xs">
                                <li class="social-icons-facebook"><a href="https://www.facebook.com/sanrafael2004" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                <li class="social-icons-instagram"><a href="http://www.instagram.com/" target="_blank" title="Instagram"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                            <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
                                <nav>
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li class="<?php echo validarHeader("inicio") ?>">
                                            <a href="index.php?header=inicio">
                                                Inicio
                                            </a>
                                        </li>
                                        <li class="<?php echo validarHeader("about") ?>">
                                            <a href="about-us.php?header=about">
                                                Nosotros
                                            </a>
                                        </li>
                                        <li class="<?php echo validarHeader("login") ?>">
                                            <a href="login_page.php?header=login">
                                                Login
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="">
                                                Sobre Nosotros
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="">
                                                Contáctanos
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<?php 

function validarHeader($header){
    if($header===$_GET['header']){
        return "active";
    }else{
        return "";
    }
}

?>
