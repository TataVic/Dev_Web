<?php 
    session_start();
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if(!empty($email) && !empty($senha)){
        if($email == "michelfranco17@gmail.com" && $senha == '12345'){
            $_SESSION['logado'] = true;
            header("Location: pagina2.php");
            exit;
        }else{
            echo 'Dados de acesso inválidos';
            exit;
        }
    }else{
        echo 'dados de login não enviados';
        exit;
    }
?>