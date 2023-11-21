<?php
    require 'run.php';

    $pessoa = new Pessoa();
    $dados = $pessoa->getAll();

    //print_r($dados); //imprimi key e value dos registros
?>
    <!DOCTYPE html>
    <html lang="pt-br">
        <?php require 'head.php';?>
    <head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tabela Pessoa - conexão com Banco</title>
        <style title="text/css">
            .titulo_tabela h1{
                display: flex;
                justify-content: center;
                align-items: center; 
            }
            .botao{
                margin-bottom: 50px;
                margin-top: 50px;
                margin-left: 25px;
            }
            .botao a{
                text-decoration: none;
                background-color: blue;
                padding: 20px 10px;
                color:#fff;
                font-size: 15px;
            }
            table{
                margin-left: 15px;
                margin-right: 15px;
            }
           table tbody{
                margin: 20px 20px;
           }
        </style>   
        
        
    </head>
    <body>
    <div class="titulo_tabela">
            <h1>Tabela Pessoa </h1>
        </div>

    <!--     <div class="botao">
            <a href="pessoa_adicionar.php">Adicionar</a>
            <a >Editar</a>
        </div>
        <div class="botao">
            <a href="pessoa_adicionar.php">Adicionar</a>
            <a >Excluir</a>
        </div> -->
        <div class="tabela">
            <table>
                <thread>
                <tr>
                    <th>Nome</th>
                    <th>Idade</th>
                    <th>Sexo</th>
                    <th>Endereço</th>
                    <th>Edição</th>
                    <th>Exclusão</th>
                </tr>
                </thread>
                <tbody>
                    <?php foreach($dados as $item): ?>
                        <tr>
                        <td><?php echo $item['nome']; ?> </td>
                        <td><?php echo $item['idade']; ?> </td>
                        <td><?php echo ($item['sexo']=="M")?"Masculino":"Feminino"; ?> </td>
                        <td><?php echo $item['endereco']; ?> </td>
                        <td><a href="pessoa_editar.php?id_pessoa=<?php echo $item['id_pessoa']; ?>"> Editar</a></td>
                        <td><a href="pessoa_excluir.php?id_pessoa=<?php echo $item['id_pessoa']; ?>"> Excluir</a></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </body>
    </html>