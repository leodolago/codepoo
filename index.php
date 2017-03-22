<?php

use LAGO\Cliente\Model\DbClientes;

require_once "autoload.php";

?>
    <html>
    <head>
        <title>Lista de Clientes</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
    <body>
    <div class="container">
        <br>
        <h2>Lista de clientes</h2>
        <p>Aqui voce pode visualizar todo os clientes:</p>
        </br>
        <form action="" method="get">
            <label class="radio-inline">
                <input type="radio" name="ord" id="inlineRadio1" value="0">Crescente
            </label>
            <label class="radio-inline">
                <input type="radio" name="ord" id="inlineRadio2" value="1">Decrescente
            </label>
        <input type="submit" class="btn btn-default btn-sm " value="Modificar ordem">
        </form>
        <hr>
        <div class="container">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Tipo</th>
                    <th>Nome</th>
                    <th>Cpf/Cnpj</th>
                    <th>Classificação</th>
                </tr>
                </thead>
                <tbody>
                <?php

                $cliteste = new DbClientes();
                $ord = $_GET["ord"];
                $resto = $cliteste->ordClientes($ord);

                foreach($resto as $value){
                    ?>
                    <tr>
                        <td><?php echo $value->getTipo() ?></td>
                        <td><a href="<?php echo 'detalhes.php?id='.$value->getId() ?>" ><?php echo $value->getNome() ?></td>
                        <td><?php echo $value->getCpf() ?></td>
                        <td><?php echo $value->getImportancia() ?></td>
                    </tr>
                <?php }; ?>
                </tbody>
            </table>
        </div>
        <hr>

    </div>
    </body>
    </html>
<?php