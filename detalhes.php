<?php


use LAGO\Cliente\Model\DbClientes;

require_once "autoload.php";

?>

<html>
    <head>
        <head>
            <title>Lista de Clientes</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
            <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        </head>
    </head>
<body>
<div class="container">
<br>
<h2>Cliente detalhado</h2>
    </br>
    <a class="btn btn-default btn-sm " href="<?php echo 'index.php?' ?>" >Lista todos os clientes</a>
<hr>
    <?php

    $cliteste = new DbClientes();
    $resto = $cliteste->getClientes();

foreach($resto as $value){

    if($value->getId() == $_GET['id'])
    {


    ?>
    <ul>
        <li><p><b><?php echo "Classificação:" ?></b><?php echo $value->getImportancia() ?></li>
        <li><p><b><?php echo "Tipo de cliente:" ?></b><?php echo $value->getTipo() ?></li>
        <li><p><b><?php echo "Nome:" ?></b><?php echo $value->getNome() ?></li>
        <li><p><b><?php echo "Idade:" ?></b><?php echo $value->getIdade() ?></li>
        <li><p><b><?php echo "Cpf:" ?></b><?php echo $value->getCpf() ?></li>
        <li><p><b><?php echo "Rg:" ?></b><?php echo $value->getRg() ?></li>
    </ul>
    <hr>

<?php } }

    $endereco = new DbClientes();
    $resultado = $endereco->getEnderecos();

    foreach($resultado as $value1){

    if($value1->getIdCliente() == $_GET['id'])
    {

    ?>
    <ul>
        <li><p><b><?php echo "Tipo de enderço:" ?></b><?php echo $value1->getTipo() ?></li>
        <li><p><b><?php echo "Endereço:" ?></b><?php echo $value1->getEndereco() ?></li>
        <li><p><b><?php echo "Telefone:" ?></b><?php echo $value1->getTelefone() ?></li>
        <li><p><b><?php echo "e-mail:" ?></b><?php echo $value1->getEmail() ?> </li>
    </ul>
    <hr>

    <?php } }; ?>

</div>
</body>
</html>
<?php
