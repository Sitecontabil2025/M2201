<?php 
	ob_start(); // inicial a sessao
	session_start(); // inicial a sessao
    
    // se não gerar/aparecer a imagem, descomentar a linha abaixo
    //ob_clean();
	
    header("Content-type: image/png"); // define o tipo do arquivo

	function captcha($largura,$altura,$tamanho_fonte,$quantidade_letras){
		$imagem = imagecreate($largura,$altura); // define a largura e a altura da imagem
		$fonte = __DIR__."/arial.ttf"; //voce deve ter essa ou outra fonte de sua preferencia em sua pasta
		$fundo = imagecolorallocate($imagem,32,32,32); // definindo a cor do fundo da imagem em formato rgb
		$letras = imagecolorallocate($imagem,15, 205, 149); // definindo a cor do texto da imagem em formato rgb
		
		// define a palavra conforme a quantidade de letras definidas no parametro $quantidade_letras
		$palavra = substr(str_shuffle("abcdefghijklmnopqrstuvwxyz23456789"),0,($quantidade_letras));
		$_SESSION["palavraCaptcha"] = $palavra; // atribui para a sessao a palavra gerada
		
		for($i = 1; $i <= $quantidade_letras; $i++){
			imagettftext($imagem,$tamanho_fonte,rand(-25,25),($tamanho_fonte*$i),($tamanho_fonte + 10),$letras,$fonte,substr($palavra,($i-1),1)); // atribui as letras a imagem
		}
		
		imagejpeg($imagem, NULL, 100); // gera a imagem
		imagedestroy($imagem); // limpa a imagem da memoria
	}

	$largura = (isset($_GET["l"])) ? $_GET["l"] : 130; // recebe a largura
	$altura = (isset($_GET["a"])) ? $_GET["a"] : 35; // recebe a altura
	$tamanho_fonte = (isset($_GET["tf"])) ? $_GET["tf"] : 20; // recebe o tamanho da fonte
	$quantidade_letras = (isset($_GET["ql"])) ? $_GET["ql"] : 5; // recebe a quantidade de letras que o captcha terá

	captcha($largura,$altura,$tamanho_fonte,$quantidade_letras); // executa a funcao captcha passando os parametros recebidos
?>