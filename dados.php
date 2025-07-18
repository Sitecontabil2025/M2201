<?php
// VARIAVEIS DE INFORMAÇÕES PRINCIPAIS
$escritorio = "Escritório Modelo 1";
$descricao = "Atuamos no mercado auxiliando as empresas, quanto a sua constituição, administração, consultorias e quando necessário, no encerramento das mesmas. Possuímos uma equipe de profissionais gabaritados nas áreas contábil, fiscal, trabalhista e de assessoria.";
$keywords = "contabilidade, contábil, escritório, serviços";
$crc = 'CRC/UF 00000-0';

// VARIAVEIS PARA MONTAGEM DO ENDEREÇO
// $endereco = "Alameda Rio Negro - nº 1030 / esc 206";
$endereco = "Endereço do local - nº 000";
$bairro = "Bairro local";
$cidade = "Cidade/UF";
$cep = " CEP. 00000-000";
$email = "contato@dominio.com.br";
$telefone = "(00) 0000-0000";
$telefone_link = (isset($telefone) && !empty($telefone)) ? "+55" . str_replace(array('(',')',' ','-','.'), "", $telefone) . "" : NULL;
$whatsapp = "(00) 00000-0000";
$whatsapp_link = (isset($whatsapp) && !empty($whatsapp)) ? "https://api.whatsapp.com/send?phone=55" . str_replace(array('(',')',' ','-','.'), "", $whatsapp) . "&text=Olá,%20estou%20entrando%20em%20contato%20pelo%20site!" : NULL;

// LINKS DAS REDES SOCIAIS
$facebook = "https://www.facebook.com/";
$twitter = "https://twitter.com/";
$instagram = "https://www.instagram.com/";
$linkedin = "https://www.linkedin.com/";

// ANO DESENVOLVIMENTO DO SITE
$ano_dev = 2022;

// VERIFICANDO SE EXISTE TÍTULO E DESCRIÇÃO DE PÁGINA
if (!isset($titulo_pagina)):
    $titulo_pagina = "Bem-vindo ao nosso site";
endif;

if (!isset($descricao_pagina)):
    $descricao_pagina = $descricao;
endif;

// FUNÇÃO PARA CRIAR RESUMO DE TEXTO
function limitar_texto($texto, $limite = 250){
    $contador = strlen($texto);
    if ( $contador >= $limite ) :
        $texto = substr($texto, 0, strrpos(substr($texto, 0, $limite), " ")) . "...";
        return trim($texto);
    else :
        return trim($texto);
    endif;
}

// FUNÇÃO PARA CRIAR CARREGAR NOTÍCIAS JSON
function get_json($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL,$url);
    $result=curl_exec($ch);
    curl_close($ch);

    if ($result) return $result;
    else return null;
}

// FUNÇÃO PARA PEGAR MATÉRIAS
function get_materias($url = "https://sitecontabil.com.br/json/?db=sc_noticias&limite=10"){
    return json_decode(get_json($url));
}

// FUNÇÃO PARA MODIFICAR A REGIÃO
setlocale(LC_TIME, "pt_BR", "pt_BR.utf-8", "pt_BR.utf-8", "portuguese");
date_default_timezone_set("America/Sao_Paulo");

// FUNÇÃO PARA MOSTRAR DATAS
function mostra_data($data = 'today', $formato = 'Publicado em %d de %B de %Y'){
    return utf8_encode(strftime($formato, strtotime($data)));
}

// REGIÃO DO BRASIL
$regiao = array(
    'brasil' => 'Brasil',
    'ac' => 'Acre',
    'al' => 'Alagoas',
    'am' => 'Amazonas',
    'ap' => 'Amapá',
    'ba' => 'Bahia',
    'ce' => 'Ceará',
    'df' => 'Distrito Federal',
    'es' => 'Espírito Santo',
    'go' => 'Goiás',
    'ma' => 'Maranhão',
    'mt' => 'Mato Grosso',
    'ms' => 'Mato Grosso do Sul',
    'mg' => 'Minas Gerais',
    'pa' => 'Pará',
    'pb' => 'Paraíba',
    'pr' => 'Paraná',
    'pe' => 'Pernambuco',
    'pi' => 'Piauí',
    'rj' => 'Rio de Janeiro',
    'rn' => 'Rio Grande do Norte',
    'rs' => 'Rio Grande do Sul',
    'ro' => 'Rondônia',
    'rr' => 'Roraima',
    'sc' => 'Santa Catarina',
    'sp' => 'São Paulo',
    'se' => 'Sergipe',
    'to' => 'Tocantins',
);