<?php

use Curso\Banco\Modelo\Conta\Conta\{ContaPoupanca, ContaCorrente, Titular};
use Curso\Banco\Modelo\{CPF, Endereco};

require_once 'autoload.php';

$conta = new ContaCorrente(
    new Titular(
        new CPF('123.456.789-00'),
        'Emanuelly',
        new Endereco('Teste', 'bairro', 'travessa', '288')
    )
);

$conta->deposita(500);
$conta -> saca(100);

echo $conta->recuperaSaldo() . PHP_EOL;