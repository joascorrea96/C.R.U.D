<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_SPECIAL_CHARS);
$profissao = filter_input(INPUT_POST, 'profissao', FILTER_SANITIZE_SPECIAL_CHARS);
$pis = filter_input(INPUT_POST, 'pis', FILTER_SANITIZE_SPECIAL_CHARS);
$empresa = filter_input(INPUT_POST, 'empresa', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_SPECIAL_CHARS);
$cnpj = filter_input(INPUT_POST, 'cnpj', FILTER_SANITIZE_SPECIAL_CHARS);
$cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_SPECIAL_CHARS);

$querySelect = $conexao->query("select email from usuarios");
$array_emails = [];

while($emails = $querySelect->fetch_assoc()):
    $emails_existentes = $emails['email'];
    array_push($array_emails, $emails_existentes);
endwhile;

if(in_array($email, $array_emails)):
    $_SESSION['msg'] = "<p> class='center red-text'>".'Já existe um cliente cadastrado com esse email'."</p>";
    header("Location:../");
else:
    $queryInset = $conexao->query("insert into usuarios values(default, '$nome', '$cpf', '$profissao', '$pis', '$empresa', '$email', '$telefone', '$cnpj', '$cep')");
    $affected_rows = mysqli_affected_rows($conexao);

    if($affected_rows > 0):
        $_SESSION['msg'] = "<p class='center green-text'>".'Cadastro efetuado com sucesso!'."<br>";
        header("Location:../");
endif;
endif;
?>