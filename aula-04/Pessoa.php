<?php

class Pessoa
{
    private $salario;

    public function __construct()
    {
        $this->salario = 1.500;
    }

    function calculaSalario(int $ajuste)
    {
        return $this->salario + $ajuste;
    }
}