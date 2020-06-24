<?php
session_start();
//12345
define('PASS', '827ccb0eea8a706c4c34a16891f84e7b');
define('NAME', 'Carolina');

$senha = filter_input(INPUT_POST, 'txtSenha', FILTER_SANITIZE_STRING);

if(PASS == md5($senha)){
    $_SESSION['logado'] = '1';
    setcookie('nome', NAME, time() + 3600, '/');

    header('Location: painel.php');
}else{
    echo 'Acesso negado';
}