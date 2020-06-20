<?php

$valido = false;

$nome = filter_input(INPUT_POST, 'txtNome', FILTER_SANITIZE_STRING);

$email = filter_input(INPUT_POST, 'txtEmail', FILTER_SANITIZE_STRING);

$telefone = filter_input(INPUT_POST, 'txtFone', FILTER_SANITIZE_STRING);

$assunto = filter_input(INPUT_POST, 'txtAssunto', FILTER_SANITIZE_STRING);

$mensagem = filter_input(INPUT_POST, 'txtMessage', FILTER_SANITIZE_STRING);

$valido = validar($nome, $email, $telefone, $assunto, $mensagem);

function validar($nome, $email, $telefone, $assunto, $mensagem)
{
    if($nome = "" || $nome < 3 || $nome > 50){
        echo "Nome inválido! No min 3 e no máx 50.";
    } else{
        echo "Nome válido!";
    }

    if($email){

    } 

    if($telefone){

    } 

    if($assunto == '1' || $assunto == '2' || $assunto == '3' || $assunto == '4'){
        echo "Assunto válido!";
    } else{
        echo "Assunto inválido! Por favor, escolha uma das opções.";
    }

    if($mensagem = "" || $mensagem < '10'){
        echo "Insira uma mensagem de, pelo menos, 10 caracteres!";
    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php if ($valido) : ?>

        <p><?=$nome?></p>
        <p><?=$email?></p>
        <p><?=$telefone?></p>
        <p><?=$assunto?></p>
        <p><?=$mensagem?></p>

    <?php else : ?>

        <p>Inválido</p>

    <?php endif; ?>
</body>

</html>