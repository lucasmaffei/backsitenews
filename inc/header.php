<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Backsite News</title>

    <!-- favicon -->
    <link href="<?php echo BASEURL; ?>assets/img/favicon.png" rel=icon>

    <!-- web-fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,500' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link href="<?php echo BASEURL; ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- font-awesome -->
    <link href="<?php echo BASEURL; ?>assets/fonts/font-awesome/font-awesome.min.css" rel="stylesheet">
    <!-- Mobile Menu Style -->
    <link href="<?php echo BASEURL; ?>assets/css/mobile-menu.css" rel="stylesheet">

    <!-- Owl carousel -->
    <link href="<?php echo BASEURL; ?>assets/css/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo BASEURL; ?>assets/css/owl.theme.default.min.css" rel="stylesheet">
    <!-- Theme Style -->
    <link href="<?php echo BASEURL; ?>assets/css/style.css" rel="stylesheet">
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar">
<div id="main-wrapper">

<div class="uc-mobile-menu-pusher">
<div class="content-wrapper">
<section id="header_section_wrapper" class="header_section_wrapper">
    <div class="container">
        <div class="header-section">
            <div class="row">
                <div class="col-md-4">
                    <div class="left_section">
                                            <span class="date">
                                                <?php echo date("d/m/y"); ?>
                                            </span>
                                            <span class="time">
                                                <?php echo date("H:i");  ?>
                                            </span>
                        <div class="social">
                            <a class="icons-sm fb-ic"><i class="fa fa-facebook"></i></a>
                            <a class="icons-sm tw-ic"><i class="fa fa-twitter"></i></a>
                            <a class="icons-sm inst-ic"><i class="fa fa-instagram"> </i></a>
                            <a class="icons-sm tmb-ic"><i class="fa fa-tumblr"> </i></a>
                            <a class="icons-sm rss-ic"><i class="fa fa-rss"> </i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="logo">
                        <a href="index.php"><img src="<?php echo BASEURL; ?>assets/img/logo.png" alt="Jornal logo"></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="right_section">
                        <ul class="nav navbar-nav">
                            <li><a href="#">Entrar</a></li>
                            <li><a href="#">Registre-se</a></li>
                            <li class="dropdown lang">
                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">BR <i
                                        class="fa fa-angle-down"></i></button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="#">EN</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav-cta hidden-xs">
                            <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle"><i
                                    class="fa fa-search"></i></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="head-search">
                                            <form role="form">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Busque por algo"> <span class="input-group-btn">
                                                                            <button type="submit" class="btn btn-primary">Buscar</button>
                                                                        </span></div>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="navigation-section">
            <nav class="navbar m-menu navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#navbar-collapse-1"><span class="sr-only">Toggle navigation</span> <span
                                class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="#navbar-collapse-1">
                        <ul class="nav navbar-nav main-nav">
                            <li class="active"><a href="index.php">Notícias</a></li>
                            <li><a href="#">Tech</a></li>
                            <li><a href="#">Esportes</a></li>
                            <li><a href="#">Ciência</a></li>
                            <li><a href="#">Política</a></li>
                            <li><a href="#">Curiosidades</a></li>
                            
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</section>
