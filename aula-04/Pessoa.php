<?php

require_once('Trabalho.php');

class Pessoa extends Trabalho
{
    private $salario;

    public function __construct()
    {
        $this->salario = 500;
    }

    public function calculaSalario(int $ajuste)
    {
        return $this->salario + $ajuste;
    }

    public function setSalario($salario)
    {
        $this->salario = ($salario); 
    }

    public function getSalario(){
        return $this->salario;
    }

    public function obterDados(string $nome)
    {
        $this->setNome($nome);

        return $this->padronizaNome();
    }
}