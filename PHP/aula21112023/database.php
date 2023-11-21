<?php

global $config;
global $db;

$config['dbname'] = 'teste_web';
$config['host']   = 'localhost';
$config['dbuser'] = 'root';
$config['dbpass'] = '';

try{
    $db = new PDO("mysql:dbname=".$config['dbname']
                .";host=".$config['host']
                ,$config['dbuser']
                ,$config['dbpass']
                ,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

    $db->setAttribute(PDO::ATTR_ERRMODE
                    ,PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e){
    echo "Erro de conexão ao Banco de dados: ".$e->getMessage();
    exit;
}