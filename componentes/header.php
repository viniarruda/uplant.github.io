<html>
<head>
    <?php include "scripts/conexao.php"; ?>
    <title>Uplant</title>
    <meta charset="utf-8">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/normalize.css"/>
    <link rel="stylesheet" href="css/jquery.sidr.light.css"/>
    <link rel="stylesheet" href="css/animate.min.css"/>
    <link rel="stylesheet" href="css/md-slider.css"/>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/base.css"/>
    <link rel="stylesheet" type="text/css" href="teste.css">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="content/images/favicon.ico" type="image/x-icon">
    <link rel="icon" sizes="152x122" href="content/images/48d2b70d-eb8f-237e-c1c2-cd91e8facbcc.webPlatform.png">
    <link rel="icon" sizes="120x120" href="content/images/fa86b201-67fe-dc90-10c7-d37947b69b51.webPlatform.png">
    <link rel="apple-touch-icon" sizes="152x122" href="content/images/48d2b70d-eb8f-237e-c1c2-cd91e8facbcc.webPlatform.png">
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="content/images/fa86b201-67fe-dc90-10c7-d37947b69b51.webPlatform.png">
    <!--[if lte IE 7]>
    <link rel="stylesheet" href="css/ie7.css"/>
    <![endif]-->
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="css/ie8.css"/>
    <![endif]-->
    <link rel="stylesheet" href="css/responsive.css"/>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="js/html5.js"></script>
    <![endif]-->
    <script type="text/javascript" src="app.js"></script>
    <?php include 'scripts/scripts.php'; ?>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="manifest" href="/manifest.json"/>
</head>
<body>
<div id="wrapper">
    <header id="header">
        <div class="wrap-top-menu">
            <div class="container_12 clearfix">
                <div class="grid_12">
                    <nav class="top-menu">
                        <ul id="main-menu" class="nav nav-horizontal clearfix">
                            <li class="active"><a href="index.php"><i class="fa fa-home fa-menu-top"></i> Home</a></li>
                            <li class="sep"></li>
                            <li><a href="#sobre"><i class="fa fa-info fa-menu-top"></i> Sobre</a></li>
                            <li class="sep"></li>
                            <li><a href="how-it-work.html"><i class="fa fa-question fa-menu-top"></i> Ajuda</a></li>
                            <li class="sep"></li>
                            <li><a href="contato.php"><i class="fa fa-envelope fa-menu-top"></i> Contato</a></li>
                        </ul>
                        <a id="btn-toogle-menu" class="btn-toogle-menu" href="#alternate-menu">
                            <span class="line-bar"></span>
                            <span class="line-bar"></span>
                            <span class="line-bar"></span>
                        </a>
                        <div id="right-menu">
                            <ul class="alternate-menu">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="investimentos.php">Investir</a></li>
                                <li><a href="contato.php">Contato</a></li>
                                <li><a href="login.php">Login</a></li>
                                <li><a href="logout.php" class="logout">Logout</a></li>
                                <li><a href="login.php">Cadastro</a></li>
                            </ul>
                        </div>
                    </nav>
                    <div class="top-message clearfix">
                        <a href=""><span class="social-header"><i class="fa fa-facebook"></i></span></a>
                        <a href=""><span class="social-header"><i class="fa fa-twitter"></i></span></a>
                        <a href="" class="social-last" ><span class="social-header"><i class="fa fa-skype"></i></span></a>
                        <a href="login.php"><span class="txt-message btn-login"><i class="fa fa-user"></i> Login</span></a>
                        <a href="logout.php"><span class="txt-message btn-logout"><i class="fa fa-user"></i> Logout</span></a>
                        <a href="perfilUsuario.php"><span class="txt-message btn-perfil"><i class="fa fa-user"></i> Perfil</span></a>
                        <a href="login.php"><span class="txt-message btn-cadastro">Cadastro</span></a>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div><!-- end: .wrap-top-menu -->
        <div class="container_12 clearfix">
            <div class="grid_12 header-content">
                <div id="sys_header_right" class="header-right">
                    <!-- <div class="account-panel"> -->
                      <a href="enviarInvestimento.php" class="btn btn-red">Criar investimento!</a>
                    <!-- </div> -->
                </div>
                <h1 id="logo">
                    <a href="index.php"><img src="content/images/up-logo-header.png" alt="Uplant"/></a>
                </h1>
                <div class="header-left">
                    <div class="main-nav clearfix">
                        <div class="nav-item">
                            <a href="investimentos.php" class="nav-title">Invista</a>
                            <p class="rs nav-description">Veja mais</p>
                        </div>
                        <span class="sep"></span>
                        <div class="nav-item">
                            <a href="#" class="nav-title">Por que devo investir?</a>
                            <p class="rs nav-description">Tire suas dúvidas</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header><!--end: #header -->
</div>
