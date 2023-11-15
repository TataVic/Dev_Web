<?php
require 'run.php';
$pessoa = new Pessoa();
$dados = $pessoa->get($_GET['id_pessoa']);
print_r($dados);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style title="text/css">
            .botao{
                margin-botton: 20px;
            }
            </style>
            
</head>
<body>
    <form method="POST" action="PessoaAdicionar.php">
        <input type="text" name="nome" required placeholder = "Digite aqui seu nome" >
        <input type="number" name="idade" required placeholder = "Digitr sua idade" min="18" max="105">
        <select name="sexo" required>
            <option value = "">Selecione</option>
            <option value = "M">Masculino</option>
            <option value = "F">Feminino</option>
        </select>
        <input type="text" name="endereco" required placeholder = "Digite seu endereço" >
        <div class="botao">
            <a href="index.php">Voltar</a>
            <button type="submit">Salvar</button>
        </div>
    </form>
</body>
</html>