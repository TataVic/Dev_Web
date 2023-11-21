<?php
require 'run.php';
$pessoa = new Pessoa();
$dados = $pessoa->get($_GET['id_pessoa']);
//print_r($dados);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Pessoa</title>
    <style title="text/css">
            .botao{
                margin-bottom: 20px;
            }
            </style>
            
</head>
<body>
<form method="POST" action="PessoaEditar.php?id_pessoa=<?php echo $dados['id_pessoa']; ?>">
    <input type="text" name="nome" required placeholder="Digite seu nome" value="<?php echo $dados['nome']; ?>">
    <input type="number" name="idade" required placeholder="Digite sua idade" min="18" max="105" value="<?php echo $dados['idade']; ?>">
    <select name="sexo" required>
        <option value="">Selecione</option>
        <option value="M" <?php echo ($dados['sexo']=="M")?'selected':null; ?>>Masculino</option>
        <option value="F"<?php echo ($dados['sexo']=="F")?'selected':null; ?>>Feminino</option>
    </select>
    <input type="text" name="endereco" required placeholder="Digite seu endereco" value="<?php echo $dados['endereco']; ?>">

    <div class="botao">
        <a href="index.php">Voltar</a>
        <button type="submit">Salvar</button>
    </div>
</form>
</body>
</html>