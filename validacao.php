<?php 
header('Content-Type: application/json; charset=utf-8');

//JSON COM OS DADOS
$url = "resposta.json";

$hash = file_get_contents($url);

$md5 = base64_encode(md5($hash,true));

//VALIDANDO MD5
	if(!isset($_SERVER['HTTP_CONTENT_MD5'])){
		echo "Erro: Informar Content-md5";
		exit;
	}

	//VALIDANDO OS DADOS ENVIADOS PARA O WEBSERVICE
	if($_SERVER['HTTP_CONTENT_MD5'] == '' or  $_SERVER['HTTP_CONTENT_MD5'] != $md5){

		header("Content-MD5: $md5",true);
		echo $hash;
		exit;

	} else {
		
		header("HTTP/1.1 304 Not Modified"); 
		exit;
		
	}
?>