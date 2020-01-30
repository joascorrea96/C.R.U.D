<?php
include_once 'conexao.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
$queryDelete = $conexao->query("delete from usuarios where codigo='$id'");

if(mysqli_affected_rows($conexao) > 0):
    header("Location:/consultas.php");
endif;
?>