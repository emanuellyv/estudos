<?php

use Curso\Banco\Modelo\CPF;
use Curso\Banco\Modelo\Funcionario\Diretor;
use Curso\Banco\Servico\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();
$diretor = new Diretor(
    'João',
    new CPF('123.456.789-10'),
    10000
);

$autenticador->tentaLogin($diretor, '123456');