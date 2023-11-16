<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Pessoa</title>
    <style title="text/css">
            .botaos{
                margin-bottom: 50px;
                margin-top: 50px;
                margin-left: 50%;
                display: inline;
                
            }
            .botaos button{
                background-color: #CDCDCD;
                font-weight: bold;
                width: 100px; 
                height: 45px;
                align-items: center;
                justify-content: center;
            }
            .botaos a{
                text-decoration: none;
                background-color: #CDCDCD;
                font-weight: bold;
                width: 100px; 
                height: 45px;
                align-items: center;
                justify-content: center;
            }
            form{
                margin-top: 45px;
                margin-left: 50px;
                margin-right: 50px;
                display:grid;
                font-size: 25px;
            }
            form input{
                size: 100px;
            }
            body{
                background-color: #ff6961;
            }
            </style>
</head>
<body>
    <form method="POST" action="PessoaAdicionar.php">
        <input type="text" name="nome" required placeholder = "Digite aqui seu nome">
        <input type="number" name="idade" required placeholder = "Idade" min="18" max="105">
        <select name="sexo" required>
            <option value = "">Selecione</option>
            <option value = "M">Masculino</option>
            <option value = "F">Feminino</option>
        </select>
        <input type="text" name="endereco" required placeholder = "Digite seu endereço" >
        <div class="botaos">
            <button><a href="index.php">Voltar</a></button>
            <button  type="submit">Salvar</button>
        </div>
    </form>
</body>
</html>