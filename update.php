<?php
session_start();
include_once 'conexao.php';
$id = $_SESSION['id'];

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_SPECIAL_CHARS);
$profissao = filter_input(INPUT_POST, 'profissao', FILTER_SANITIZE_SPECIAL_CHARS);
$pis = filter_input(INPUT_POST, 'pis', FILTER_SANITIZE_SPECIAL_CHARS);
$empresa = filter_input(INPUT_POST, 'empresa', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_SPECIAL_CHARS);
$cnpj = filter_input(INPUT_POST, 'cnpj', FILTER_SANITIZE_SPECIAL_CHARS);
$cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_SPECIAL_CHARS);

$queryUpdate = $conexao->query("update usuarios set nome='$nome', cpf='$cpf', profissao='$profissao', pis='$pis', empresa='$empresa', email='$email', telefone='$telefone', cnpj='$cnpj', cep='$cep' where id=$id");
$affected_rows = mysqli_affected_rows($link);
if($affected_rows > 0):
    header("Location:consultas.php");
endif;

?>