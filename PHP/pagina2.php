<?php 
    session_start();
    if(!isset($_SESSION['logado'])){
        header("Location: index.php");
        
    }
?>
<html>
  <head>
    <title>Aula Get & Post</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=devide-width, initial-scale=1.0,maximum-scale=1.0,user-scalable=0">        
  </head>
  <body>
    <h1>Boas vindas ao sistema</h1>
  </body>
</html>