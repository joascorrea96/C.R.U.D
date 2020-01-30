<?php session_start() ?>
<?php include_once 'includes/header.inc.php'?>
    
    <?php include_once 'includes/menu.inc.php' ?>
        
    <div class="row container">
        <p>&nbsp;</p>
    <form method="post" action="processa.php" class="col s12">
        <fieldset class="formulario" style="padding: 15px">
           <h5 class="light center">Cadastre sua Empresa</h5>
           
            <?php 
                if(isset($_SESSION['msg'])):
                    echo $_SESSION['msg'];
                    session_unset();
                endif
            ?>

            <div class="input-field col s12">
                <i class="material-icons prefix">account_circle</i>
                <input type="text" name="nome" class="campo" maxlength="40" placeholder="Digite seu nome" required autofocus>
                <label for="nome">Nome do Cadastrante</label>
            </div>    

            <div class="input-field col s12">
                <i class="material-icons prefix">book</i>
                <input type="text" name="cpf" class="campo" data-js="cpf" placeholder="Ex: 000.000.000-00" required>
                <label for="cpf">CPF</label>
             </div>  


             <div class="input-field col s12">
                <i class="material-icons prefix">work</i>
                <input type="text" name="profissao" class="campo" maxlength="40" placeholder="Ex: Gerente Administrativo" required>
                <label for="profissao">Profissão</label>
             </div>  
             
             <div class="input-field col s12">
                <i class="material-icons prefix">book</i>
                <input type="text" name="pis" class="campo" data-js="pis"  placeholder="Ex: 000.00000.00-0" required>
                <label for="pis">pis</label>
             </div>

             <div class="input-field col s12">
                <i class="material-icons prefix">home</i>
                <input type="text" name="empresa" class="campo" maxlength="40" placeholder="Informe o nome de sua empresa" required autofocus>   
                <label for="empresa">Empresa</label>
             </div>

             <div class="input-field col s12">
                <i class="material-icons prefix">email</i>
                <input type="email" name="email" class="campo" maxlength="50" placeholder="E-mail da empresa" required>
                <label for="email">E-mail</label>
             </div>

             <div class="input-field col s12">
                <i class="material-icons prefix">phone</i>
                <input type="text" name="telefone" class="campo" placeholder="(00)00000-000" data-js="phone" required>
                <label for="telefone">Telefone para Contato</label>
             </div>

             <div class="input-field col s12">
                <i class="material-icons prefix">business</i>
                <input type="text" name="cnpj" class="campo" data-js="cnpj" placeholder="Ex: 00.000.000/0000-00" required>
                <label for="cnpj">CNPJ</label>
             </div>
             
             <div class="input-field col s12">
                <i class="material-icons prefix">address</i>
                <input type="text" name="cep" class="campo" data-js="cep" placeholder="Ex: 00000-00" required>
                <label for="cep">CEP</label>
             </div>
            

            <div class="input-field col s12">
                <input type="submit" value="Cadastrar" class="btn blue" style="height:40px">
                <input type="reset" value="Limpar" class="btn red" style="height:40px">
            </div>
        </fieldset>
    </form>
</div>

<?php include_once 'includes/footer.inc.php' ?>

    <script src="script.js"></script>
