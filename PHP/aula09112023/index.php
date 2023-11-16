<?php
    require 'run.php';

    $pessoa = new Pessoa();
    $dados = $pessoa->getAll();

    print_r($dados);
?>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tabela Pessoa</title>
    </head>
    <body>
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
                    <td><?php echo $item['nome']; ?> </td>
                    <td><?php echo $item['idade']; ?> </td>
                    <td><?php echo $item['sexo']; ?> </td>
                    <td><?php echo $item['endereco']; ?> </td>
                <?php endforeach; ?>
            </tbody>
        </table>
    </body>
    </html>