<?php

//Nome do arquivo com a extensão
$filename = 'academy-satellasoft.txt';

//Verifica se o diretória não existe
if (!is_dir('dados')) {
    //Cria um diretória caso não exista
    mkdir('dados');
}

//escrever($filename);

ler($fliname);

function escrever($filename){

    //$dados = ['nome' => 'Ana', 'email' => 'email@email.com'];
    //$text = json_encode($dados);

    $text = 'Uma formiguinha atravessa, em diagonal, a página ainda em branco. Mas ele, aquela noite, não escreveu nada. Para quê? Se por ali já havia o frêmito e o mistério da vida...';

    //Abriu para escrita
    //$fp = fopen('dados/academy-satellasoft.txt'.$filename, 'w');   Não precisaria da parte de cima
    $fp = fopen('dados/' .$filename, 'w');

    //Escreve no arquivo
    fwrite($fp, $text);

    //Fecha o arquivo
    fclose($fp);
}

function ler ($filename)
{
    $path = 'dados/' .$filename;

    if(!file_exists($path))
        return;

    //Abre o arquivo para leitura
    $fp = fopen($path, 'r');

    //Lê todos os bytes do arquivo
    $conteudo = fread($fp, filesize($path));

    //Fecha o arquivo
    fclose($fp);


    //$arr = json_decode($conteudo);
    //print_r($arr->nome);

    echo $conteudo;
}