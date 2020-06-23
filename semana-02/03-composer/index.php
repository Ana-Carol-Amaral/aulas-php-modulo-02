<?php
require_once('vendor/autoload.php');

//new \App\Controller;


use App\Controller;

$controller = new Controller();

$dados = [
    'nome' => 'Ana Carolina'
];

$controller->view('contato/teste.php', $dados);
