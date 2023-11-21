<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Pessoa</title>
    <style title="text/css">
           form{
            margin: 100px;
           }
            .button{
                margin: 10px;
            }
            </style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body style="background-color: bisque">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <div class="container">
        <div class="row">
            <div class=" col-12 d-flex justify-content-center"> 
                <form method="POST" action="PessoaAdicionar.php">
                <label for="nome">Nome:</label>
                    <div class="col-12 form-group">
                       
                        <input type="text" class="form-control" id="nome" name="nome" required placeholder = "Digite seu nome">
                    </div>
                <label for="idade">Idade:</label>
                    <div class="col-12 form-group">
                        <input  id="idade" type="number" class="form-control" name="idade" required placeholder = "Idade" min="18" max="105">
                    </div>
                <label for="fem_mas">Sexo Biológico:</label>
                    <div class="dropdown form-group">
                        <select id="fem_mas" class="dropdown-toggle form-control" name="sexo" required>
                        <option class="dropdown-menu" value = "">Selecione</option>
                        <option class="dropdown-item" value = "M">Masculino</option>
                        <option class="dropdown-item" value = "F">Feminino</option>
                    </select>
                    </div>
                <label for="nome">Endereço:</label>
                    <div class="col-12 form-group" id="endereco"> 
                        <input id="endereco" type="text"  class="form-control" name="endereco" required placeholder = "Digite seu endereço" >
                    </div>
                    <div class="button">
                        <a class="btn btn-secondary" href="index.php">Voltar</a>
                        <button class="btn btn-success" type="submit">Salvar</button>
                    </div>
                    </form>
            </div>
        </div>
    </div>
</body>
</html>