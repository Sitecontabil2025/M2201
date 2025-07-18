<?php
$titulo_pagina = "LGPD - Lei Geral de Proteção de Dados";
$descricao_pagina = "Atuamos no mercado auxiliando as empresas, quanto a sua constituição, administração, consultorias e quando necessário, no encerramento das mesmas. Possuímos uma equipe de profissionais gabaritados nas áreas contábil, fiscal, trabalhista e de assessoria.";
?>

<?php include_once('header.php'); ?>

<article class="background-white">

    <div class="container pt-10 text-align-justify overflow-hidden">
        <p class="mt-0"><big> Lei Geral de Proteção de Dados </big></p>
        <h1 class=""> LGPD </h1>
        <div class="row">
            <div class="col-lg">
                <h2>Política de Cookies</h2>
                <h2 class="h5">Seção 1 - O que faremos com esta informação?</h2>
                <p>Esta Política de Cookies explica o que são cookies e como os usamos. Você deve ler esta política para entender o que são cookies, como os usamos, os tipos de cookies que usamos, ou seja, as informações que coletamos usando cookies e como essas informações são usadas e como controlar as preferências de cookies. Para mais informações sobre como usamos, armazenamos e mantemos seus dados pessoais seguros, consulte nossa Política de Privacidade. Você pode, a qualquer momento, alterar ou retirar seu consentimento da Declaração de Cookies em nosso site.Saiba mais sobre quem somos, como você pode entrar em contato conosco e como processamos dados pessoais em nossa Política de Privacidade.</p>
        
                <h2 class="h5">Seção 2 - Coleta de dados</h2>
                <p>Coletamos os dados do usuário conforme ele nos fornece, de forma direta ou indireta, no acesso e uso dos sites, aplicativos e serviços prestados. Utilizamos Cookies e identificadores anônimos para controle de audiência, navegação, segurança e publicidade, sendo que o usuário concorda com essa utilização ao aceitar essa Política de Privacidade.</p>
        
                <h2 class="h5">Seção 3 - Consentimento</h2>
                <p>Como vocês obtêm meu consentimento? Quando você fornece informações pessoais como nome, telefone e endereçopara completar uma solicitação, enviar formulário de contato, cadastrar em nossos sistemas ou procurar um contador. Após a realização de ações entendemos que você está de acordo com a coleta de dados para serem utilizados pela nossa empresa. Se pedimos por suas informações pessoais por uma razão secundária, como marketing, vamos lhe pedir diretamente por seu consentimento, ou lhe fornecer a oportunidade de dizer não. E caso você queira retirar seu consentimento, como proceder? Se após você nos fornecer seus dados, você mudar de ideia, você pode retirar o seu consentimento para que possamos entrar em contato, para a coleção de dados contínua, uso ou divulgação de suas informações, a qualquer momento, entrando em contato conosco.</p>
        
                <h2 class="h5">Seção 4 - Divulgação</h2>
                <p>Podemos divulgar suas informações pessoais caso sejamos obrigados pela lei para fazê-lo ou se você violar nossos Termos de Serviço.</p>
        
                <h2 class="h5">Seção 5 - Serviços de terceiros</h2>
                <p>No geral, os fornecedores terceirizados usados por nós irão apenas coletar, usar e divulgar suas informações na medida do necessário para permitir que eles realizem os serviços que eles nos fornecem. Entretanto, certos fornecedores de serviços terceirizados, tais como gateways de pagamento e outros processadores de transação de pagamento, têm suas próprias políticas de privacidade com respeito à informação que somos obrigados a fornecer para eles de suas transações relacionadas com compras. Para esses fornecedores, recomendamos que você leia suas políticas de privacidade para que você possa entender a maneira na qual suas informações pessoais serão usadas por esses fornecedores. Em particular, lembre-se que certos fornecedores podem ser localizados em ou possuir instalações que são localizadas em jurisdições diferentes que você ou nós. Assim, se você quer continuar com uma transação que envolve os serviços de um fornecedor de serviço terceirizado, então suas informações podem tornar-se sujeitas às leis da(s) jurisdição(ões) nas quais o fornecedor de serviço ou suas instalações estão localizados. Como um exemplo, se você está localizado no Canadá e sua transação é processada por um gateway de pagamento localizado nos Estados Unidos, então suas informações pessoais usadas para completar aquela transação podem estar sujeitas a divulgação sob a legislação dos Estados Unidos, incluindo o Ato Patriota. Uma vez que você deixe o site da nossa loja ou seja redirecionado para um aplicativo ou site de terceiros, você não será mais regido por essa Política de Privacidade ou pelos Termos de Serviço do nosso site. Quando você clica em links em nosso site, eles podem lhe direcionar para fora do mesmo. Não somos responsáveis pelas práticas de privacidade de outros sites e lhe incentivamos a ler as declarações de privacidade deles.</p>
        
                <h2 class="h5">Seção 6 - Segurança</h2>
                <p>Para proteger suas informações pessoais, tomamos precauções razoáveis e seguimos as melhores práticas da indústria para nos certificar que elas não serão perdidas inadequadamente, usurpadas, acessadas, divulgadas, alteradas ou destruídas.</p>
        
                <h2 class="h5">Seção 7 - Alterações para essa política de privacidade</h2>
                <p>Reservamos o direito de modificar essa política de privacidade a qualquer momento, então por favor, revise-a com frequência. Alterações e esclarecimentos vão surtir efeito imediatamente após sua publicação no site. Se fizermos alterações de materiais para essa política, iremos notificá-lo aqui que eles foram atualizados, para que você tenha ciência sobre quais informações coletamos, como as usamos, e sob que circunstâncias, se alguma, usamos e/ou divulgamos elas. Se nosso site for adquirido ou fundido com outra empresa, suas informações podem ser transferidas para os novos proprietários para que possamos continuar a vender produtos e serviços para você.</p>
            </div>

            <?php if (isset($whatsapp) || isset($email)) : ?>
                <div class="col-lg-5">
                    <div class="bg-white rounded p-3 shadow">
                        <h2 class="h3 mb-4">Solicitações</h2>
                        <form id="solicitar">
                            <div class="form-group mb-2">
                                <label for="nome" class="font-weight-bold">Digite seu nome</label>
                                <input type="text" name="nome" id="nome" class="form-campo">
                            </div>

                            <div class="form-group mb-2">
                                <label for="email" class="font-weight-bold">Digite seu e-mail</label>
                                <input type="text" name="email" id="email" class="form-campo">
                            </div>

                            <div class="form-group mb-2">
                                <label for="telefone" class="font-weight-bold">Digite seu telefone</label>
                                <input type="text" name="telefone" id="telefone" class="form-campo">
                            </div>

                            <div class="form-group mb-2">
                                <label for="assunto" class="font-weight-bold">Digite seu assunto</label>
                                <select id="assunto" name="assunto" class="form-campo" style="width: 100%;">
                                    <option value="Quero atualizar meus dados"> Quero atualizar meus dados</option>
                                    <option value="Quero confirmar a existência meus dados"> Quero confirmar a existência meus dados </option>
                                    <option value="Quero solicitar a exclusão dos meus dados"> Quero solicitar a exclusão dos meus dados </option>
                                    <option value="Quero solicitar a portabilidade dos meus dados"> Quero solicitar a portabilidade dos meus dados </option>
                                    <option value="Quero ter acesso aos meus dados pesssoais"> Quero ter acesso aos meus dados pesssoais </option>
                                </select>
                            </div>

                            <div class="form-group mb-2">
                                <label for="mensagem" class="font-weight-bold">Digite sua mensagem</label>
                                <textarea name="mensagem" id="mensagem" rows="5" class="form-campo"></textarea>
                            </div>

                            <?php if (isset($email)) : ?>
                                <button type="button" id="enviar_email" class="bt bt-b1">Enviar por e-mail</button>
                            <?php endif ?>

                            <?php if (isset($whatsapp)) : ?>
                                <button type="button" id="enviar_whatsapp" class="bt bt-b1">Enviar por WhatsApp</button>
                            <?php endif ?>
                        </form>
                    </div>
                </div>

                <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
                <link href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@x.x.x/dist/select2-bootstrap4.min.css" rel="stylesheet">
                <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

                <script>
                $(document).ready(function() {
                    $('#assunto').select2({
                        theme: 'bootstrap4',
                        'language': 'pt-BR'
                    });

                    <?php if (isset($email)) : ?>
                    $('#enviar_email').on('click', function(e){
                        e.preventDefault();
    
                        $nome = $('#nome').val();
                        $email = $('#email').val();
                        $telefone = $('#telefone').val();
                        $assunto = $('#assunto').val();
                        $mensagem = $('#mensagem').val();
    
                        $conteudo_email = 'Olá, gostaria de fazer uma solicitação dos meus dados!\n\n';
                        $conteudo_email += 'NOME: '+$nome+'\n';
                        $conteudo_email += 'E-MAIL: '+$email+'\n';
                        $conteudo_email += 'TELEFONE: '+$telefone+'\n';
                        $conteudo_email += 'ASSUNTO: '+$assunto+'\n';
                        $conteudo_email += 'MENSAGEM: '+$mensagem+'\n\n';
                        $conteudo_email += 'E-mail enviado do formulário de solicitação de dados.';
                        
                        $url = "mailto:<?= $email ?>?Subject=Solicitar%20Dados&body="+encodeURIComponent($conteudo_email);
                        window.open($url, '_blank');
                    });
                    <?php endif; ?>
    
                    <?php if (isset($whatsapp)) : ?>
                    $('#enviar_whatsapp').on('click', function(e){
                        e.preventDefault();
    
                        $nome = $('#nome').val();
                        $email = $('#email').val();
                        $telefone = $('#telefone').val();
                        $assunto = $('#assunto').val();
                        $mensagem = $('#mensagem').val();
                        
                        $conteudo_whatsapp = 'Olá, meu nome é '+$nome+' e gostaria de fazer uma solicitação dos meus dados!\n';
                        $conteudo_whatsapp += '*NOME:* '+$nome+'\n';
                        $conteudo_whatsapp += '*E-MAIL:* '+$email+'\n';
                        $conteudo_whatsapp += '*TELEFONE:* '+$telefone+'\n';
                        $conteudo_whatsapp += '*ASSUNTO:* '+$assunto+'\n';
                        $conteudo_whatsapp += '*MENSAGEM:* '+$mensagem+'\n';
                        $conteudo_whatsapp += 'Solicitação enviada do formulário de solicitação de dados.';
    
                        $url = "https://api.whatsapp.com/send?phone=55<?= str_replace(array('(',')','.','-',' '), '', $whatsapp) ?>&text="+encodeURIComponent($conteudo_whatsapp);
                        window.open($url, '_blank');
                    });
                    <?php endif; ?>
                });
                </script>
            <?php endif ?>
        </div>
    </div>

</article>

<?php include_once('footer.php'); ?>