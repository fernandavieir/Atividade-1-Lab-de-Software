<?php


$nomeCliente = $_GET["nome"];
$CPFCliente= $_GET["cpf"];
$telefoneCliente = $_GET["telefone"];
$emailCliente= $_GET["email"];

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salvar Cliente</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>Nome Completo</td>
            <td><?php echo $nomeCliente; ?></td>
        </tr>
        <tr>
            <td>CPF</td>
            <td><?php echo $CPFCliente; ?></td>
        </tr>
        <tr>
            <td>Telefone</td>
            <td><?php echo $telefoneCliente; ?></td>
        </tr>
        <tr>
            <td>E-mail</td>
            <td><?php echo $emailCliente; ?></td>
        </tr>
    </table>
</body>
</html>