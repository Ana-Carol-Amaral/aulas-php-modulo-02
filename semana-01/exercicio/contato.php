<?php

$valido = false;

$nome = filter_input(INPUT_POST, 'txtNome', FILTER_SANITIZE_STRING);
if(empty($nome)){
    "Campo nome obrigatório";
}

$email = filter_input(INPUT_POST, 'txtEmail', FILTER_SANITIZE_STRING);

$telefone = filter_input(INPUT_POST, 'txtFone', FILTER_SANITIZE_STRING);

$assunto = filter_input(INPUT_POST, 'txtAssunto', FILTER_SANITIZE_STRING);

$mensagem = filter_input(INPUT_POST, 'txtMessage', FILTER_SANITIZE_STRING);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
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