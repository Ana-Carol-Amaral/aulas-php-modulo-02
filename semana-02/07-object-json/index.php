<?php

$cidades = [
    'Florianópolis',
    'Navegantes',
    'Piçarras',
    'Itajaí',
    'Penha'
];

//gravar($cidades);

$dados = ler();

var_dump($dados);

function gravar($cidades)
{
    $fp = fopen('teste.txt', 'w');

    fwrite($fp, json_encode($cidades));

    fclose($fp);
}

function ler()
{
    $fp =  fopen('teste.txt', 'r');

    $conteudo = fread($fp, filesize('teste.txt'));

    fclose($fp);

    return json_decode($conteudo);
}