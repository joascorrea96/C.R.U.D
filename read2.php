<?php

include_once("conexao.php");

$querySelect = $conexao->query("select * from usuarios");
while($registros = $querySelect->fetch_assoc()):
    $id = $registros['codigo'];
    $nome = $registros['nome'];
    $cpf = $registros['cpf'];
    $profissao = $registros['profissao'];
    $pis = $registros['pis'];
    $empresa = $registros['empresa'];
    $email = $registros['email'];
    $telefone = $registros['telefone'];
    $cnpj = $registros['cnpj'];
    $cep = $registros['cep'];

    echo "<tr>";
    echo "<td>$empresa</td><td>$email</td><td>$telefone</td><td>$cnpj</td><td>$cep</td><td><a href='editar.php?id=$id'><i class='material-icons'>edit</i></td><td><a href='delete.php?id=$id'><i class='material-icons'>delete</i></td>";
    echo "</tr>";
    
endwhile; ?>