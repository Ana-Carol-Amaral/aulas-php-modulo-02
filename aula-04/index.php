<?php

require_once('Pessoa.php');

$pessoa = new Pessoa();

$pessoa->setSalario(1500);

//echo $pessoa->getSalario();

//echo $pessoa->calculaSalario(500);

echo $pessoa->obterDados('Ana Carolina do Amaral Rosa');