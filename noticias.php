<?php $pagina_noticias = true ?>
<?php $titulo_pagina = "Notícias Empresariais" ?>

<?php
if(isset($_GET["regiao"])):
    $regiao_url = $_GET["regiao"];
else :
    $regiao_url = 'brasil';
endif;

$max = 100;
$limite = 10;
$url_json = "https://sitecontabil.com.br/json/?db=sc_noticias&limite=$max&regiao=$regiao_url";

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

$i = ($p - 1) * $limite;
$j = $i + $limite;
?>

<?php include "header.php" ?>

<article class="background-white">

    <div class="container pt-10 text-align-justify overflow-hidden">
        <h1 class="titulos-paginas h2"><?= $titulo_pagina; ?></h1>
        <?php if(array_key_exists("error", $json)): ?>
            <p><?= $json->error; ?></p>
        <?php else: ?>
            <?php for($i; $i < $j; $i++): ?>
                <?php if (isset($json[$i])) : ?>
                    <div class="mb-5">
                        <h5 class="m-0"><?= $json[$i]->titulo; ?></h5>
                        <div class="row small my-2">
                            <div class="col-auto"><i class="fas fa-fw fa-calendar mr-1"></i> <?= mostra_data($json[$i]->pubdate); ?></div>
                            <div class="col-auto"><i class="fas fa-fw fa-map-marker mr-1"></i> <a href="noticias.php?regiao=<?= $json[$i]->regiao ?>"><?= $regiao[$json[$i]->regiao]; ?></a></div>
                            <div class="col-auto"><i class="fas fa-fw fa-newspaper mr-1"></i> <?= $json[$i]->fonte; ?></div>
                        </div>
                        <p><?= limitar_texto(strip_tags(html_entity_decode($json[$i]->texto)), 350); ?></p>
                        <a href="noticias-ler.php?id=<?= $json[$i]->id ?>&p=<?= $p ?>&regiao=<?= $regiao_url ?>" class="bt bt-b2">Leia na integra</a>
                    </div>
                <?php endif ?>
            <?php endfor; ?>
            <div class="text-align-center">
                <?php
                    $num = 0;
                    if(count($json) < $max) $max = count($json);
                    $maxpag = $max / $limite;
                ?>
                <?php for($num;$num<$maxpag;$num++): ?>
                    <a href="noticias.php?p=<?= $num+1 ?>&regiao=<?= $regiao_url ?>" class="btn btn-sm btn-dark"><?= $num+1 ?></a>
                <?php endfor; ?>
            </div>
        <?php endif; ?>
    </div>

</article>

<?php include "footer.php" ?>