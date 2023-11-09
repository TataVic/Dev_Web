<?php

global $config;
global $db;

$config['dbname'] = 'teste_Web';
$config['host']   = 'localhost';
$config['dbuser'] = 'root';
$config['dbpass'] = '';

try{
    $db = new PDO("mysql:dbname=".$config['dbname']
                ."host=".$config['host']
                ,$config['dbuser']
                ,array(PDO::MYSQL_ATTR_INIT_COMMAND=> "SET NAMES utf8mb3"));

    $db->setAttribute(PDO::AFTE_ERRMODE
                    ,PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e){
    echo "erro de conexão: ".$e->getMessage();
    exit;
}