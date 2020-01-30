<?php include_once 'includes/header.inc.php'?>
<?php include_once 'includes/menu.inc.php'?>

<div class="row container">
    <div class="col s12">
        <h5 class="light">Consultas</h5><hr>

        <table class="striped">
            <thead>
                <tr>
                    <th>Empresa</th>
                    <th>E-mail</th>
                    <th>Telefone</th>
                    <th>CNPJ</th>
                    <th>CEP</th>
                </tr>
            </thead>
            <Tbody>
                <?php
                    include_once 'read2.php'
                ?>
            </Tbody>
        </table>

    </div>
</div>

<?php include_once 'includes/footer.inc.php'?>