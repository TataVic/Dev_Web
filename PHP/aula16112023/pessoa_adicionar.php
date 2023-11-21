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
                background-color: #c79685;
            }
            </style>
</head>
<body>
    <div class="d-flex justify-content-center"> 
        <form method="POST" action="PessoaAdicionar.php">
            <div class="col-12"><input type="text" class="form-control form-control-lg" name="nome" required placeholder = "Digite seu nome"></div>
        <div class="col-12"><input type="number" class="form-control form-control-lg" name="idade" required placeholder = "Idade" min="18" max="105"></div>
        
            <div class="dropdown">
                <select class="dropdown-toggle" name="sexo" required>
                <option class="dropdown-menu" value = "">Selecione</option>
                <option class="dropdown-item" value = "M">Masculino</option>
                <option class="dropdown-item" value = "F">Feminino</option>
            </select>
            </div>
            <div class="col-12"> <input type="text"  class="form-control form-control-lg" name="endereco" required placeholder = "Digite seu endereço" ></div>
            <div class="botaos">
                <button><a href="index.php">Voltar</a></button>
                <button  type="submit">Salvar</button>
            </div>
        </form>
    </div>
</body>
</html>