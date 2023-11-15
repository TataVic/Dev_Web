<?php
    require 'run.php';

    $pessoa = new Pessoa();
    $dados = $pessoa->getAll();

    //print_r($dados); //imprimi key e value dos registros
?>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <title>Conexão com o Banco</title>
        <style title="text/css">
            .botao{
                margin-botton: 30px;
            }
            .botao a{
                text-decoration: none;
                background-color: blue;
                padding: 20px 10px;
                color:#fff;
            }
        </style>
            
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tabela Pessoa</title>
    </head>
    <body>
        <div class="botao">
            <a href="pessoa_adicionar.php">Adicionar</a>
        </div>
    <h3>Tabela Pessoa </h3>
        <table>
            <thread>
            <tr>
                <th>Nome</th>
                <th>Idade</th>
                <th>Sexo</th>
                <th>Endereço</th>
            </tr>
            </thread>
            <tbody>
                <?php foreach($dados as $item): ?>
                    <tr>
                    <td><?php echo $item['nome']; ?> </td>
                    <td><?php echo $item['idade']; ?> </td>
                    <td><?php echo ($item['sexo']=="M")?"Masculino":"Feminino"; ?> </td>
                    <td><?php echo $item['endereco']; ?> </td>
                    <td><a href="pessoa_editar.php?id_pessoa=<?php echo $item['id_pessoa']; ?>"> EDITAR</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </body>
    </html>