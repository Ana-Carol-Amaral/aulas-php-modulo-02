<?php

$string = 'sffdfdfdfd';
$numero = 215156;
$bool = true;
$bool2 = false;
//echo $numero;

//const NOME_COMPLETO = 'Ana Carolina';
//define('NOME_COMPLETO', 'ANA CAROLINA');
//echo NOME_COMPLETO;

/*
$jogos = array(
    'Resident Evil', 
    'Far Cry 3', 
    'Silent Hill'
);
*/

include 'config.php';

include_once 'config.php';


$jogos = [ 
    'Resident Evil', 
    'Far Cry 3', 
    'Silent Hill'
];

//echo $jogos[0];

$dados = [
    'nome' => 'Ana Carolina',
    'email' => 'anacarolina@sdfsdsd.com',
];

$clientes = [
    ['Carol', 'SC'],
    ['Carol', 'SC'],
    ['Carol', 'SC'],
    ['Carol', 'SC'],
];


/*foreach($clientes as $clientes)
    echo $clientes[0].'<br>';



for($i = 0; $i < count($clientes); $i++) {
    echo $clientes[$i][0] . '<br>';
}

//dd($clientes);
//var_dump($clientes[0][1]);

//echo json_encode($dados);

//echo $dados['nome'];

function dd($p = [])
{
    echo '<pre>';
    print_r($p);
    echo '</pre>';
}

//echo soma(5);

function soma($val){
    return $val + $val;
}


$idade = 18; //Pode entrar
//$idade = 17; //Entra com acompanhante
//$idade = 15; //Não entra

if($idade >= 18){
    echo 'Pode entrar!';
}elseif($idade < 18 && $idade >= 16){
    echo 'Entra com acompanhante.';
} else{
    echo 'Não pode entrar!';
}


$periodo = 'mAnha';

switch(strtolower($periodo)){
    case 'manha':
        echo 'Bom dia';
        break;
    case 'tarde':
        echo 'Boa tarde';
        break;
    case 'noite':
        echo 'Boa noite';
        break;
    case 'madrugada':
        echo 'Vai dormir';
        break;
    default:
        echo 'Periodo inexistente';
}
*/