<?php

require_once('vendor/autoload.php');

define('VAR_NAME', "Ana");

use app\controller\Controller;

new Controller('teste',[
    'idade' => 18,
    'nome' => 'Carol',
    'cidade' => [
        'Florianópolis',
        'Navegantes',
        'Piçarras',
        'Itajaí',
        'Penha'
    ],
    'mensagem' => 'O rato roeu a roupa do rei de Roma',
    'data' => date('Y-m-d H:i:s') 
]);