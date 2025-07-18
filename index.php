<?php
$titulo_pagina = "Bem-vindo ao nosso website";
$descricao_pagina = "Somos uma empresa de terceirização de serviços de contabilidade, constituída por profissionais com larga experiência nas áreas em que atuamos: Contábil - Tributária - Fiscal e Trabalhista.";
$index = true;
?>
<?php include_once('header.php'); ?>

<section class="bkg">

    <div class="container pt-10">
        <div class="row">
            <div class="col-lg text-align-justify">
                <h2> Contabilidade digital <span class="cor-c2"> completa e pensada</span> para sua empresa. </h2>
                    <p>Atuamos no mercado auxiliando as empresas, quanto a sua constituição, administração, consultorias e quando necessário, no encerramento das mesmas. Possuímos uma equipe de profissionais gabaritados nas áreas contábil, fiscal, trabalhista e de assessoria. </p>
                    <p>Efetuamos um diagnóstico sobre as atividades e as rotinas da empresa, em busca de uma melhor performance na utilização de artifícios legais para redução da carga tributária (Planejamento Tributário). </p>
            </div>
            <div class="col-lg d-flex align-items-center justify-content-center text-align-center">
                <div>
                    <img src="assets/imgs/h1.png" alt="">
                    <!-- <div id="shiva"> -->
                    <div id="shiva" class="contador mt-2 text-align-center">
                        <h2 class="mr-1 cor-c2"> <span class="h1 font-weight-200"> + </span> <span class="count display-3">50 </span> </h2> 
                        <p class="h4 cor-c1">cidades <span class="font-weight-600"> atendidas </span> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container pt-10">
        <h2 class="text-align-center"> Confira alguns dos nossos <span class="cor-c2"> serviços prestados</span>. </h2>
            <div class="row">
                <div class="col-lg-3 col-md-6 text-align-center">
                    <i class="fas fa-comments-dollar fa-3x cor-c2"></i>
                    <h4 class="my-3 text-transform-capitalize"> área <span class="d-block">contábil</span> </h4>
                    <a class="bt bt-b2" href="servicos.php" target="_self" rel="noopener noreferrer"> saiba mais </a>
                </div>
                <div class="col-lg-3 col-md-6 text-align-center">
                    <i class="fas fa-file-alt fa-3x cor-c2"></i>
                    <h4 class="my-3 text-transform-capitalize"> obrigações <span class="d-block">trabalhistas</span> </h4>
                    <a class="bt bt-b2" href="servicos.php" target="_self" rel="noopener noreferrer"> saiba mais </a>
                </div>
                <div class="col-lg-3 col-md-6 text-align-center">
                    <i class="fas fa-chart-line fa-3x cor-c2"></i>
                    <h4 class="my-3 text-transform-capitalize"> assessoria <span class="d-block">empresarial</span> </h4>
                    <a class="bt bt-b2" href="servicos.php" target="_self" rel="noopener noreferrer"> saiba mais </a>
                </div>
                <div class="col-lg-3 col-md-6 text-align-center">
                    <i class="fas fa-file-signature fa-3x cor-c2"></i>
                    <h4 class="my-3 text-transform-capitalize"> departamento <span class="d-block">fiscal</span> </h4>
                    <a class="bt bt-b2" href="servicos.php" target="_self" rel="noopener noreferrer"> saiba mais </a>
                </div>
            </div>
    </div>

    <div class="img img-i2 mt-10">
        <div class="container py-8 text-align-center position-relative">
            <h2> Venha fazer uma <span class="cor"> parceria</span> de sucesso! </h2>
            <p> Nossa equipe está pronta para auxiliar as empresas no crescimento e fortalecimento administrativo financeiro em busca da maior qualidade, utilizando-se de sistemas e profissionais de alto nível. </p>
            <a class="bt bt-b1" href="javascript:movimenta('#form');" rel="noopener noreferrer"> falar com o especialista </a>
        </div>
    </div>

    <div class="container text-align-center mt-8">
        <h2 class="m-0"> <span class="cor-c2">Conheçam os clientes</span> que confiaram em nosso trabalho </h2>
    </div>
    <div class="background-light py-2 mt-8">
        <div class="container text-align-center">
            <div class="owl-cliente owl-carousel owl-theme">
                <!-- 1 -->
                <div class="my-2">
                    <img src="assets/imgs/l1.png" alt="auto">
                </div>
                <!-- 2 -->
                <div class="my-2">
                    <img src="assets/imgs/l2.png" alt="auto">
                </div>
                <!-- 3 -->
                <div class="my-2">
                    <img src="assets/imgs/l3.png" alt="auto">
                </div>
                <!-- 4 -->
                <div class="my-2">
                    <img src="assets/imgs/l4.png" alt="auto">
                </div>
            </div>
        </div>
    </div>

    <div class="bkg-b1">
        <div class="container py-10">
            <h2 class="m-0 text-align-center"> <span class="cor-c2">Notícias Empresariais </span> </h2>

            <div class="row mt-5">
            <?php $dados = get_materias('https://sitecontabil.com.br/json/?db=sc_noticias&limite=6'); ?>
            <?php foreach($dados as $item): ?>
                <div class="col-lg-6 d-flex mt-5">
                    <div class="mr-2">
                        <h3 class="data font-weight-400"> <?= mostra_data($item->pubdate, '<big>%d </big> <br> <strong class=""> %b </strong> <br> <small> %Y </small>'); ?></h3>
                    </div>
                    <div class="cor">
                        <h5 class="font-weight-500 mb-1"> <?= limitar_texto($item->titulo, 100)?> </h5>
                        <a class="" href="noticias-ler.php?id=<?= $item->id ?>">
                        <?= limitar_texto(strip_tags(html_entity_decode($item->texto)), 200); ?>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
            <a class="bt bt-b2 mt-5" href="noticias.php" target="_self"> Confira todas nossas notícias </a>
        </div>
    </div>

</section>

<?php include_once('footer.php'); ?>

