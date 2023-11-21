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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tabela Pessoa - conexão com Banco</title>
        <style title="text/css">
            body{
                background-color: #e2be8b;
            }
            .titulo_tabela h1{
                display: flex;
                justify-content: center;
                align-items: center; 
                margin-top: 20px;
                margin-bottom: 10px;
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <div class="titulo_tabela">
            <h1>Tabela Pessoa </h1>
            <br>
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
            <table class="table table-hover table-secondary">
                <thead  class="table-dark">
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Idade</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Edição</th>
                    <th scope="col">Exclusão</th>
                </tr>
                </thead>
                <tbody class="table-group-divider">
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