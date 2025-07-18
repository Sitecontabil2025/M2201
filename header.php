<?php require_once("dados.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php $json = (isset($url_json)) ? get_materias($url_json) : NULL; ?>
    <?php $json_ler = (isset($url_json_ler)) ? get_materias($url_json_ler) : NULL; ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php $titulo_pagina = (isset($pagina_noticias) && !isset($max)) ? $json[0]->titulo : $titulo_pagina; ?>
    <?php $descricao_pagina = (isset($pagina_noticias) && !isset($max)) ? limitar_texto(strip_tags(html_entity_decode($json[0]->texto)), 300) : $descricao_pagina; ?>
    <title> <?= $escritorio; ?> - <?= $titulo_pagina; ?></title>

    <!-- Arquivos CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">     -->
    <?= "<style>" ?>
        <?= file_get_contents('assets/css/support.min.css'); ?>
        <?= file_get_contents('assets/css/bootstrap-grid.min.css'); ?>
        <?= file_get_contents('assets/css/style.min.css'); ?>
        <?= file_get_contents('assets/css/owl.carousel.min.css'); ?>
        <?= file_get_contents('assets/css/owl.theme.default.min.css'); ?>
    <?= "</style>" ?>    
    
    <!-- Arquivos JS -->
    <script src="assets/js/jquery.min.js"></script>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/imgs/favicon.png" type="image/x-icon">

    <!-- SEO metaTags -->
    <meta property="og:title" content="<?= $titulo_pagina; ?>" />
    <meta property="og:description" content="<?= $descricao_pagina; ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="<?= $escritorio; ?>" />
    <meta property="og:image" content="assets/imgs/og-img.jpg">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="800">
    <meta property="og:image:height" content="600">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta http-equiv="content-language" content="pt-BR" />
    <meta name="author" content="<?= $escritorio; ?>" />
    <meta name="contact" content="<?= $email; ?>" />
    <meta name="copyright" content="Copyright (c) <?= date("Y"); ?> - <?= $escritorio; ?>." />
    <meta name="description" content="<?= $descricao; ?>" />
    <meta name="keywords" content="<?= $keywords; ?>" />
    <meta name="resource-type" content="website" />
</head>

<body>

<!-- whatsapp -->
<!-- <a class="d-flex align-items-center justify-content-center" href="<?= $whatsapp_link ?>" style="position:fixed; width:50px;height:50px;bottom:10px;right:10px;background-color:#25d366;color:#FFF;border-radius:50px; font-size:25px;z-index:1000;" target="_blank">
    <i class="fab fa-whatsapp"></i>
</a> -->

<header>
    <div class="topo line">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-auto d-flex justify-content-center justify-content-md-start">
                    <div class="logo py-1">
                        <a href="index.php" target="_self"> <img src="assets/imgs/logo.png" alt=""> </a>
                    </div>
                </div>
                <div class="col-md">
                    <nav class="text-align-center">
                        <a class="d-md-none botao-responsivo"> <i class="fa fa-lg fa-fw fa-bars pull-right"></i> Menu principal </a>
                        <ul class="d-none d-md-flex flex-wrap align-items-center justify-content-center justify-content-md-end main-menu">
                            <!-- <li class="abre">
                                <a style="cursor: default;"> serviços dominio <i class="fas fa-angle-down"></i> </a>
                                <ul class="sm">           
                                    <li><a href="#"> nome serviço </a> </li>
                                    <li><a href="#"> nome serviço </a> </li>
                                </ul>
                            </li> -->
                            <li><a href="index.php"> Home </a></li>
                            <li><a href="empresa.php"> Empresa </a></li>
                            <li><a href="servicos.php"> Serviços </a></li>
                            <li><a href="lgpd.php"> LGPD </a></li>
                            <li><a href="javascript:movimenta('#form');"> Contato </a> </li>
                            <a class="sear fa fa-search" href="javascript:janela_modal('#modal_search')"> </a>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="zero"></div> -->

    <div class="banner">      
        <div class="banner-foto" style="background:url(assets/imgs/b1.jpg) right; background-size :cover;" data-cycle-fx=tileSlide data-cycle-tile-count=8> </div>
        <!-- <div class="banner-foto" style="background:url(assets/imgs/b2.jpg) right; background-size :cover;" data-cycle-fx=tileSlide data-cycle-tile-count=8> </div> -->
    </div>
        
    <div class="altura last d-flex flex-column align-items-center justify-content-center">
        <div class="container">
            <div class="d-flex flex-column justify-content-center align-items-center my-10">
                <div class="owl-slogan owl-carousel owl-theme mb-4">
                    <div class="text-align-center cor">
                        <p class="h2 mb-1" style="word-break: break-word;"> Bem-vindo ao </p>
                        <p class="display-3 font-weight-700 mb-1 cor-c2"> <?= $escritorio ?> </p>
                        <p class="h5"> Oferecemos mais praticidade, transparência e ecônomia para empreendedores. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="rectangle p-4">
            <div class="row cor">
                <div class="col-lg">
                    <h4 class="mb-0 font-weight-400"> Você está procurando um </h1>
                    <h2 class="mb-1 font-weight-400 cor-c2"> Consultor de planos de negócios? </h2>
                    <p class="m-0"> Teremos prazer em conhecê-lo e entender sobre seus negócios, agende uma sessão de estratégia para sua empresa agora mesmo. </p>
                </div>
                <div class="col-lg-auto">
                    <h3 class="mt-0"> <small> Contato </small>  <span class="d-block font-weight-400 cor-c2"> WhatsApp </span> </h3>
                    <p class="m-0 d-flex align-items-center"> <i class="fab fa-fw fa-lg fa-whatsapp cor-c2"></i> <a href="<?php echo $whatsapp ?>"> <span class="h4"> <?php echo $whatsapp ?> </span> </a> </p>
                </div>  
                <div class="col-lg-auto">
                    <h3 class="mt-0"> <small> Suporte </small>  <span class="d-block font-weight-400 cor-c2"> E-mail </span> </h3>
                    <p class="m-0 d-flex align-items-center"> <i class="fas fa-fw fa-lg fa-envelope cor-c2"></i> <a href="mailto:<?php echo $email ?>">  <?php echo $email ?> </a> </p>
                </div>
            </div>
        </div>
    </div>    

<div id="modal">
    <div class="janela_modal" id="modal_search">
    <h2 class="display-3 font-weight-600 my-1 cor-c2"> <span class="font-weight-300 cor"> Busca </span> Google </h2>
        <form class="search" name="busca" action="https://www.google.com.br/search" method="get" target="_blank">
            <div class="d-flex flex-wrap">
                <input type="search" name="q" placeholder="Faça sua pesquisa" required="" size="40">
                    <button> Buscar </button>
            </div>
        </form>
    </div>
</div>

</header>

<?php if (!isset($index)) : ?>
    <style>
        .altura{ min-height: auto !important; }
        .last{ display: none !important; }
        /* .banner-foto{background: linear-gradient(135deg, white 0%, #f2f2f2 45%, #ededed 45%, white 100%) !important; } */
        /* .banner:before{ display: none !important; } */
    </style>
<?php endif; ?>