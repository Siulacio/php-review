<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

class Carro
{
    protected array $piezas = [];

    public function __set(string $name, string $value)
    {
        $this->piezas[$name] = $value;
    }
}

$carro = new Carro();
$carro->ruedas = 4;
var_dump($carro);
