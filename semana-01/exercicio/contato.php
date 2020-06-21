<?php

$dados = getInput();
$nome= null;

$valido = validate($dados);

if ($valido) {
    $ex = explode(' ', $dados->nome);
    $nome = $ex[0];
}

function getInput()
{
    return (object) [
        'nome' => filter_input(INPUT_POST, 'txtNome', FILTER_SANITIZE_STRING),
        'email' => filter_input(INPUT_POST, 'txtEmail', FILTER_SANITIZE_EMAIL),
        'fone' => filter_input(INPUT_POST, 'txtFone', FILTER_SANITIZE_STRING),
        'assunto' => filter_input(INPUT_POST, 'txtAssunto', FILTER_SANITIZE_NUMBER_INT),
        'mensagem' => filter_input(INPUT_POST, 'txtMessage', FILTER_SANITIZE_STRING)
    ];
}

function validate($dados)
{
    if(strlen($dados->nome) == " " || strlen($dados->nome) < 2){
        return false;
    }

    if(strlen($dados->email) == " " || strlen($dados->email) < 6 || strpos($dados->email, '@') <= 0 || strpos($dados->email, '.') <= 0){
        return false;
    }

    if(strlen($dados->fone) == " " || strlen($dados->fone) < 14){
        return false;
    }

    if(strlen($dados->assunto) == " " || $dados->assunto < 1 || $dados->assuntos > 4){
        return false;
    }

    if(strlen($dados->mensagem) == " " || strlen($dados->mensagem) < 10 || strlen($dados->mensagem) > 500){
        return false;
    }

    return true;
}

$code = $dados->assunto;

function getAssunto($code)
{
    switch ($code) {
        case 1:
            echo 'Comercial';
        break;
        case 2:
            echo 'Dúvidas';
        break;
        case 3:
            echo 'Parcerias';
        break;
        case 4:
            echo 'Outros';
        break;
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
    <div class="max-width">
        <h1>Contato</h1>
        <?php if ($valido) : ?>
            <p>Olá, <span><?= $nome; ?></span>, recebemos sua mensagem, em breve, um de nossos atendenetes irá responde-lo.</p>

            <hr>

            <p><span>Nome: </span><?= $dados->nome; ?></p>
            <p><span>E-mail: </span><?= $dados->email; ?></p>
            <p><span>Telefone: </span><?= $dados->fone; ?></p>
            <p><span>Assunto: </span><?= getAssunto($dados->assunto); ?></p>
            <p><span>Mensagem: </span></p>
            <p><?= $dados->mensagem ?></p>

        <?php else : ?>
            <p>Formulário inválido</p>
        <?php endif; ?>
    </div>
</body>

</html>