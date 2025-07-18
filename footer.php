<footer class="bkg">

    <!-- ebook -->
    <div class="container py-10">
        <div class="row align-items-center">
            <div class="col-lg">
                <img src="assets/imgs/h4.png" alt="" width="100%" height="350px" style="object-fit: contain;">
            </div>
            <div class="col-lg-7">
                <h3 class="mb-1 font-weight-400"> Baixe <strong> gratuitamente </strong> nossos materiais exclusivos! </h3>
                <h2 class="cor-c2 mb-4"> Cadastre-se e receba nossos materiais</h2>
                
                <h5 class="font-weight-400 mb-1 mt-2"> Em nossa empresa, sempre nos preocupamos em atender todas suas <span class="cor-c2 font-weight-600">necessidades</span> </h5>
                <a href="ebook" target="_blank" class="bt bt-b2 my-1 text-transform-uppercase">Acesse nossos materiais</a>
            </div>
        </div>
    </div>

    <div class="img img-i1 py-10">
        <div class="container"> <a id="form"></a>
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="bkg-b1 cor p-2 p-lg-6 text-align-justify text-align-lg-left d-flex flex-column align-items-start" style="border-radius: 4px;">
                        <h4 class="font-weight-300"> Tem alguma dúvida? </h4>
                        <h2 class="display-4 font-weight-400"> Fale <span class="cor-c2 font-weight-600">conosco agora </span></h2>
                        <p class="m-0"> De segunda-feira à sexta-feira das <span class="h5"> 08:00h </span>às <span class="h5">17:00h</span>  </p>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="bkg-b1a cor p-2 p-lg-6" style="border-radius: 4px;">
                        <h4 class="font-weight-300 mb-1"> Entre em <span class="cor-c2 font-weight-500">contato </span> e faça uma <span class="cor-c2 font-weight-500">parceria </span>de sucesso! </h4>
                        <h2 class="font-weight-300"> Interessado em nossos <span class="cor-c2 font-weight-500"> serviços</span>?</h2> 
                        <?php require_once("contato.php"); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="position-relative background-light">
        <!-- newsletter -->
        <!-- <div class="container rectangle2 p-4">
            <div class="row">
                <div class="col-lg d-flex flex-column justify-content-center">
                    <h3 class="mb-1 font-weight-400"> Cadastre  <strong>  seu email  </strong> e receba</h3>
                    <h2 class="mb-0"> Nossas <strong>Newsletters</strong></h2>
                </div>
                <div class="col-lg-7">
                    <h5 class="font-weight-400 mb-1 mt-2"> Fique atento as novidades do mundo empresarial! </h5>
                    <a href="newsletter" target="_blank" class="bt bt-b1 my-1 text-transform-uppercase">Cadastre-se</a>
                </div>
            </div>
        </div> -->

        <div class="container py-5">
            <div class="row">
                <div class="col-md-6 col-lg-auto d-flex align-items-center">
                    <div class="logo2">
                        <a href="index.php" target="_self"> <img src="assets/imgs/logo.png" alt=""> </a>
                    </div>
                    <!-- <h4 class="my-2 text-align-center"> Caro empreendedor! <span class="d-block h6 font-weight-400 mt-1"> Temos soluções pontuais para o seu negócio! </span> <span class="cor-c0 text-transform-uppercase font-weight-500 h2 d-block mt-2"> Qual a sua necessidade? </span></h4> -->
                </div>
                <div class="col-md-6 col-lg mt-lg-0 mt-4 text-align-justify">
                    <p class="h4 font-weight-500 cor-c2"> Localização</p>
                    <p class="d-flex align-items-baseline"> <i class="mr-1 fas fa-fw fa-map-marker-alt cor-c2"></i> <?= $endereco ?> – <?= $bairro ?> <br> <?= $cidade ?> – <?= $cep ?> </p>
                    <p class="d-flex align-items-center"> <i class="mr-1 fas fa-fw fa-phone cor-c2"></i> <a href="tel:55<?= str_replace(array('(',')',' ','-','.'), "", $telefone) ?>"> <span class="font-weight-400 h4"> <?= $telefone ?>  </span></a> </p>
                    <?php if(!empty($crc)): ?><p class="d-flex align-items-center"> <i class="mr-1 fas fa-fw fa-file cor-c2"></i> <?= $crc ?> </p><?php endif; ?>
                    <p class="mb-0 d-flex align-items-center"> <i class="mr-1 fas fa-fw fa-envelope cor-c2"></i> <a href="mailto:<?= $email ?>"> <?= $email ?> </a> </p>
                </div>
                <div class="col-md-6 col-lg-auto mt-lg-0 mt-4">
                    <p class="h4 font-weight-500 cor-c2"> WhatsApp </p>
                    <p class="d-flex align-items-center">
                        <!-- <i class="mx-1 fab fa-fw fa-whatsapp"></i> <a href="<?= $whatsapp_link ?>" target="_blank"> <span class="h4 font-weight-500"> <?= $whatsapp ?> </span> </a> -->
                        <a href="<?= $whatsapp_link ?>" target="_blank" class="bt bt-whats font-weight-600 text-transform-uppercase mb-0 cor-c2 d-flex align-items-center" style="font-variant: small-caps;"> <i class="mr-1 fab fa-fw fa-whatsapp"></i> <small> WhatsApp </small> </a>
                    </p>
                </div>
                <div class="col-md-6 col-lg-auto mt-lg-0 mt-4">
                    <p class="h4 font-weight-500 cor-c2"> Redes Sociais </p>
                    <div class="d-flex justify-content-start mt-2">
                        <?php if(isset($facebook) && !empty($facebook)): ?><a href="<?= $facebook; ?>" target="_blank" class="p-2 p-lg-0 social social-fb fab fa-fw fa-facebook-f"> </a><?php endif; ?>
                        <?php if(isset($twitter) && !empty($twitter)): ?><a href="<?= $twitter; ?>" target="_blank" class="p-2 p-lg-0 social social-tw fab fa-fw fa-twitter"> </a><?php endif; ?>
                        <?php if(isset($instagram) && !empty($instagram)): ?><a href="<?= $instagram; ?>" target="_blank" class="p-2 p-lg-0 social social-ig fab fa-fw fa-instagram"> </a><?php endif; ?>
                        <?php if(isset($linkedin) && !empty($linkedin)): ?><a href="<?= $linkedin; ?>" target="_blank" class="p-2 p-lg-0 social social-in fab fa-fw fa-linkedin-in"> </a><?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bkg-b1">
        <div class="container py-1">
            <p class="m-0 text-align-center cor" style="vertical-align: text-bottom;"> Copyright <i class="far fa-copyright"></i> <?= date('Y'); ?> <a href="https://sitecontabil.com.br/modelos" target="_blank" rel="noopener noreferrer"> <img src="https://sitecontabil.com.br/imgs/logo-sc-b.png" width="20px" alt="" class="position-relative" style="top: 4px;"> Design e desenvolvimento </a> | <strong> <?= $escritorio ?> </strong></p>
        </div>
    </div>

</footer>

<!-- Arquivos JS -->
<script src="assets/js/jquery.mask.js"></script>
<script src="assets/js/cycle2.js"></script>
<script src="assets/js/cycle2.tile.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/scripts.js"></script>

<!-- CONTADOR  -->
<script>
    $(document).ready(function(){
        var inicio = true;
        var tela = $(".contador").offset().top - $(window).height(); 
        console.log(tela);
        console.log($(window).scrollTop());
        $(window).scroll(function(){ 
            if ($(window).scrollTop() > tela && inicio == true){    
                $('.count').each(function () { 
                    $(this).prop('Counter',0).animate({ 
                        Counter: $(this).text() 
                    }, { 
                        duration: 4000, 
                        easing: 'swing', 
                        step: function (now) { 
                            $(this).text(Math.ceil(now)); 
                        } 
                    }); 
                }); 
                inicio = false; 
            } 
        });
    });
</script>
<script src="assets/js/cookie.min.js" data-cor="#333333" data-position="left"></script>
</body>
</html>

