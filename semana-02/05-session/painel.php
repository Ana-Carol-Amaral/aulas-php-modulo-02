<?php

session_start();

if(!isset($_SESSION['logado']) || $_SESSION['logado'] != 1){
    header('Location: negado.php');
    die();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel adim</title>
</head>

<body>
    <h1>Olá, <?=$_COOKIE['nome'] ?? 'desconhecido';?></h1>
    <a href="logout.php">Sair</a>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore ab, ducimus quidem autem illum inventore. Quis, inventore. Accusantium ipsam natus minus officiis dignissimos magni enim, cum perspiciatis exercitationem culpa optio.</p>
</body>

</html>