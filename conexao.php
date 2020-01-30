<?php
$utf8 = header("Content-Type: text/html; charset=utf-8"); #tirar isso se der erro aki

$hostname = "localhost";
$user = "root";
$password = "";
$database = "mycadastro";
$conexao = mysqli_connect($hostname, $user, $password, $database);

$conexao->set_charset('utf8');

if(!$conexao) {
    print "Falha na conexão com o Banco de Dados";
}

?> 