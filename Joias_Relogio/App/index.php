<?php
    /* Fazer as conexões entre as pastas - navegações ppor rotas */

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    /* echo $url; */
    switch($url){
        case '/':
            echo "pagina inicial";
        break;
        case '/Cliente':
            echo "login do cliente | Cadastro";
        break;
        case '/Cliente':
            echo "Cadastro do cliente";
        break;

        default:
            echo "Error 404";
        break;
    }