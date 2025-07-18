<?php $pagina_noticias = true ?>
<?php $titulo_pagina = "Notícias Empresariais" ?>

<?php
$id = (isset($_GET["id"])) ? $_GET["id"] : 1;
$regiao_url = (isset($_GET["regiao"])) ? $_GET["regiao"] : 'brasil';

if(isset($_GET["p"])):
    if($_GET["p"] < 1) :
        $p = 1;
    elseif($_GET["p"] > 10) :
        $p = $max / $limite;
    else :
        $p = $_GET["p"];
    endif;
else :
    $p = 1;
endif;

$url_json = "https://sitecontabil.com.br/json/?db=sc_noticias&id=$id";
?>

<?php include "header.php" ?>

<article class="background-white">

    <div class="container pt-10 text-align-justify overflow-hidden">
        <?php if(array_key_exists("error", $json)): ?>
            <h1 class="titulos-paginas h2"><?= $titulo_pagina; ?></h1>
            <p><?= $json->error; ?></p>
        <?php else: ?>
            <?php foreach($json as $item): ?>
                <h1 class="titulos-paginas h2"><?= $titulo_pagina; ?></h1>
                <div class="row small my-2">
                    <div class="col-auto"><i class="fas fa-fw fa-calendar mr-1"></i> <?= mostra_data($item->pubdate); ?></div>
                    <div class="col-auto"><i class="fas fa-fw fa-map-marker mr-1"></i> <a href="noticias.php?regiao=<?= $item->regiao ?>"><?= $regiao[$item->regiao]; ?></a></div>
                    <div class="col-auto"><i class="fas fa-fw fa-newspaper mr-1"></i> <?= $item->fonte; ?></div>
                </div>
                <?= html_entity_decode($item->texto) ?>
            <?php endforeach; ?>
            <div class="my-3">
                <div class="p-2 background-white border border-light border-radius shadow">
                    <h6 class="mt-0 mb-2 texto-dark"><i class="fas fa-share-alt mr-1"></i> Compartilhe nas redes sociais</h6>
                    <a id="share-facebook" class="btn btn-sm btn-facebook"><i class="fab mr-1 fa-facebook-f"></i> Facebook</a>
                    <a id="share-twitter" class="btn btn-sm btn-twitter"><i class="fab mr-1 fa-twitter"></i> Twitter</a>
                    <a id="share-linkedin" class="btn btn-sm btn-linkedin"><i class="fab mr-1 fa-linkedin-in"></i> Linkedin</a>
                </div>
            </div>
            <a href="noticias.php?p=<?= $p ?>&regiao=<?= $regiao_url ?>" class="btn btn-sm btn-dark"><i class="fas mr-1 fa-inbox"></i> Voltar para a listagem de notícias</a>
        <?php endif; ?>
    </div>

</article>
<?php include "footer.php" ?>