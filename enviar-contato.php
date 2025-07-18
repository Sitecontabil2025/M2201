<?php
    ob_start(); // inicial a sessao
    session_start(); // inicial a sessao
    
    // Não esquecer de alterar essas variáveis para funcionar o formulário
    $site = "https://dominio.com.br/"; // URL completa do site com o http:// ou https://
    $email_destinatario = "contato@dominio.com.br"; // E-mail que irá receber o formulário
    $email_from = "formulario@dominio.com.br"; // Endereço do servidor SMTP
    $smtp_host = "mail.dominio.com.br"; // Endereço do servidor SMTP
    $email_host = 'formulario@dominio.com.br'; // Usuário do servidor SMTP (O André está criando um e-mail formulario@dominio para fazer a altenticação)
    $senha_host = 'email@1234'; // Senha do servidor SMTP (O André está criando o e-mail com essa senha. não precisa alterar)

    $captcha = $_POST['captcha'];

    if (empty($captcha)):
        $resposta = array('tipo' => 'alert-warning', 'mensagem' => 'Você deve digitar os caracteres da imagem!');
        echo json_encode($resposta);
    elseif ($captcha != $_SESSION["palavraCaptcha"]):
        $resposta = array('tipo' => 'alert-warning', 'mensagem' => 'Os caracteres digitados não correspondem aos da imagem.');
        echo json_encode($resposta);
    else:
        // Pegando os dados do formulário de contato
        $formnome = $_POST['nome'];
        $formemail = $_POST['email'];
        $formtelefone = $_POST['telefone'];
        $formcelular = $_POST['celular'];
        $formassunto = $_POST['assunto'];
        $formmensagem = $_POST['mensagem'];
        
        // verificando se os campos foram todos digitados
        if ( empty($formnome) || empty($formemail) || empty($formtelefone) || empty($formassunto) || empty($formmensagem) ) :
            $campos = array();
            if ( empty($formnome) ) $campos[] = "nome";
            if ( empty($formemail) ) $campos[] = "e-mail";
            if ( empty($formtelefone) ) $campos[] = "telefone";
            if ( empty($formassunto) ) $campos[] = "assunto";
            if ( empty($formmensagem) ) $campos[] = "mensagem";

            $retorno = "";
            foreach($campos as $campo):
                $retorno .= "O campo <strong>$campo</strong> é de preenchimento obrigatório.<br>";
            endforeach;

            // passando o tipo do alerta e a mensagem
            $resposta = array('tipo' => 'alert-warning', 'mensagem' => $retorno);
            echo json_encode($resposta);
        elseif ( !filter_var($formemail, FILTER_VALIDATE_EMAIL) ) :
            // passando o tipo do alerta e a mensagem
            $resposta = array('tipo' => 'alert-warning', 'mensagem' => 'O e-mail inserido não é válido.');
            echo json_encode($resposta);
        else :
            // Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
            require_once("phpmailer/PHPMailerAutoload.php");
            
            // Inicia a classe PHPMailer
            $mail = new PHPMailer();
            
            // Define os dados do servidor e tipo de conexão
            $mail->IsSMTP(); // Define que a mensagem será SMTP
            $mail->Host = $smtp_host;
            $mail->SMTPAuth = true; // Usa autenticação SMTP?
            $mail->Username = $email_host;
            $mail->Password = $senha_host;
            // Caso o servidor use uma porta e uma autenticação diferente
            // $mail->Port = 587;
            // $mail->SMTPSecure = "tls";
            
            // Define o remetente
            $mail->setFrom($email_from);
            
            // Define os destinatário(s) (Tem de estar no mesmo servidor)
            $mail->AddAddress($email_destinatario);
            $mail->AddReplyTo($formemail);
            
            // Define os dados técnicos da Mensagem
            $mail->IsHTML(true); // Define que o e-mail será enviado como HTML
            $mail->CharSet = 'utf-8'; // Charset da mensagem
            //$mail->CharSet = 'iso-8859-1'; // Charset da mensagem

            // Define os anexos (Basta colocar o caminho do arquivo)
            //$mail->AddAttachment('caminho-do-arquivo.txt');

            if (date('G') > 0 && date('G') < 12):
                $saudacao = "Bom dia";
            elseif (date('G') >= 12 && date('G') < 18):
                $saudacao = "Boa tarde";
            else:
                $saudacao = "Boa noite";
            endif;
            
            // Escrevendo a mensagem do e-mail
            $mensagem = "<html>";
            $mensagem .= "<head>";
            $mensagem .= "<meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\" />";
            $mensagem .= "<title></title>";
            $mensagem .= "</head>";
            $mensagem .= "<body style='font-size:16px; background-color:#f7f7f7; margin:0; padding:0; overflow:hidden;'>";
            $mensagem .= "<div style='font-family:sans-serif; width:610px; padding:15px; border-radius:5px; background-color:#fff; margin-top:30px; margin-bottom:30px; margin-left:auto; margin-right:auto;'>";
            $mensagem .= "<h1 style='font-size:20px; margin-top:0;'>E-MAIL ENVIADO DE UM FORMULÁRIO DE CONTATO</h1>";
            $mensagem .= "<hr>";
            $mensagem .= "<p>$saudacao,</p>
            <p>Foi preenchido um novo formulário de contato no site <a href='$site'>$site</a>.</p>
            <p><strong>Nome:</strong> $formnome<br>
            <strong>E-mail:</strong> $formemail<br>
            <strong>Telefone:</strong> $formtelefone<br>";
            if (!empty($formcelular)):
                $mensagem .= "<strong>Celular:</strong> $formcelular<br>";
            endif;
            $mensagem .= "<strong>Assunto:</strong> $formassunto</p>
            <p>
            $formmensagem</p>";
            $mensagem .= "<hr>";
            $mensagem .= "<p style='margin:0; font-size:14px;'>Este e-mail foi enviado pelo formulário de contato do site <a href='$site'>$site</a>.</p>";
            $mensagem .= "</div>";
            $mensagem .= "</body>";
            $mensagem .= "</html>";
            
            // Escrevendo a mensagem alternativa caso o cliente de e-mail não suporte html
            $mensagem2 = "E-MAIL ENVIADO DE UM FORMULÁRIO DE CONTATO\r\n \r\n";
            $mensagem2 .= "$saudacao,\r\n \r\n
            Foi preenchido um novo formulário de contato no site $site.\r\n \r\n
            Nome: $formnome\r\n
            E-mail: $formemail\r\n
            Telefone: $formtelefone\r\n";
            if (!empty($formcelular)):
                $mensagem2 .= "Celular: $formcelular\r\n";
            endif;
            $mensagem2 .= "Assunto: $formassunto\r\n
            Mensagem enviada:\r\n
            $formmensagem\r\n \r\n
            Este e-mail foi enviado pelo formulário de contato do site $site.";
            
            // Define a mensagem (Texto e Assunto)
            $mail->Subject = "FORMULÁRIO DE CONTATO"; // Assunto da mensagem
            $mail->Body = $mensagem;
            $mail->AltBody = $mensagem2;
            
            // Envia o e-mail
            $enviado = $mail->Send();
            
            // Limpa os destinatários e os anexos
            $mail->ClearAllRecipients();
            $mail->ClearAttachments();
            
            // verifica se o e-mail foi enviado
            if ( $enviado ) :
                // passando o tipo do alerta e a mensagem
                $resposta = array('tipo' => 'alert-success', 'mensagem' => 'Seu e-mail foi enviado com sucesso.');
                echo json_encode($resposta);
            else :
                // passando o tipo do alerta e a mensagem
                $resposta = array('tipo' => 'alert-danger', 'mensagem' => 'Seu e-mail não pode ser enviado. Erro: ' . $mail->ErrorInfo);
                echo json_encode($resposta);
            endif;
        endif;
    endif;
?>