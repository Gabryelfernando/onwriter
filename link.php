<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$db = "onwrite";

$link = mysqli_connect($host, $usuario,$senha ,$db);
if (!$link) {
    die('Erro ao conectar ao banco');
}else{
	//echo "Ok";
}?>