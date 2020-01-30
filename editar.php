<?php 
include_once 'includes/header.inc.php';
include_once 'includes/menu.inc.php';
?>

<div class="row container">
    <div class="col s12">
        <h5 class="light">Edição de Registros</h5><hr>
    </div>
</div>

<?php 
    include_once 'conexao.php';
    $id = filter_input(INPUT_GET, 'codigo', FILTER_SANITIZE_NUMBER_INT);
    $querySelect = $conexao->query("select * from usuarios where codigo='$id'");
    $_SESSION['id'] = $id;
    while($registros = $querySelect->fetch_assoc()):
        $nome = $registros['nome'];
        $cpf = $registros['cpf'];
        $profissao = $registros['profissao'];
        $pis = $registros['pis'];
        $empresa = $registros['empresa'];
        $email = $registros['email'];
        $telefone = $registros['telefone'];
        $cnpj = $registros['cnpj'];
        $cep = $registros['cep'];
    endwhile;

?>

<div class="row container">
        <p>&nbsp;</p>
    <form method="post" action="update.php" class="col s12">
        <fieldset class="formulario" style="padding: 15px">
           <h5 class="light center">Alteração</h5>
           

            <div class="input-field col s12">
                <i class="material-icons prefix">account_circle</i>
                <input type="text" name="nome" class="campo" value="<?php echo $nome?>" maxlength="40" placeholder="Digite seu nome" required autofocus>
                <label for="nome">Nome do Cadastrante</label>
            </div>    

            <div class="input-field col s12">
                <i class="material-icons prefix">book</i>
                <input type="text" name="cpf" class="campo" data-js="cpf" value="<?php echo $cpf?> placeholder="Ex: 000.000.000-00" required>
                <label for="cpf">CPF</label>
             </div>  


             <div class="input-field col s12">
                <i class="material-icons prefix">work</i>
                <input type="text" name="profissao" class="campo" value="<?php echo $profissao?> maxlength="40" placeholder="Ex: Gerente Administrativo" required>
                <label for="profissao">Profissão</label>
             </div>  
             
             <div class="input-field col s12">
                <i class="material-icons prefix">book</i>
                <input type="text" name="pis" class="campo" data-js="pis" value="<?php echo $pis?>  placeholder="Ex: 000.00000.00-0" required>
                <label for="pis">pis</label>
             </div>

             <div class="input-field col s12">
                <i class="material-icons prefix">home</i>
                <input type="text" name="empresa" class="campo" value="<?php echo $empresa?> maxlength="40" placeholder="Informe o nome de sua empresa" required autofocus>   
                <label for="empresa">Empresa</label>
             </div>

             <div class="input-field col s12">
                <i class="material-icons prefix">email</i>
                <input type="email" name="email" class="campo" value="<?php echo $email?> maxlength="50" placeholder="E-mail da empresa" required>
                <label for="email">E-mail</label>
             </div>

             <div class="input-field col s12">
                <i class="material-icons prefix">phone</i>
                <input type="text" name="telefone" class="campo" value="<?php echo $telefone?> placeholder="(00)00000-000" data-js="phone" required>
                <label for="telefone">Telefone para Contato</label>
             </div>

             <div class="input-field col s12">
                <i class="material-icons prefix">business</i>
                <input type="text" name="cnpj" class="campo" data-js="cnpj" value="<?php echo $cnpj?> placeholder="Ex: 00.000.000/0000-00" required>
                <label for="cnpj">CNPJ</label>
             </div>
             
             <div class="input-field col s12">
                <i class="material-icons prefix">address</i>
                <input type="text" name="cep" class="campo" data-js="cep" value="<?php echo $cep?> placeholder="Ex: 00000-00" required>
                <label for="cep">CEP</label>
             </div>
            

            <div class="input-field col s12">
                <input type="submit" value="Alterar" class="btn blue" style="height:40px">
                <a href="Consultas.php" class="btn red">Cancelar</a>
            </div>
        </fieldset>
    </form>
</div>

<?php include_once 'includes/footer.inc.php';?>