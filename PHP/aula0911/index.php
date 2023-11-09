<?php
    require 'run.php';

    $pessoa = new Pessoa();
    $dados = $pessoa->getAll();

    print_r($dados);