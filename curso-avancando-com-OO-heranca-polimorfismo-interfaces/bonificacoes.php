<?php

require_once 'autoload.php';

use Curso\Banco\Modelo\CPF;
use Curso\Banco\Modelo\Funcionario\{Gerente, Diretor, Desenvolvedor, WebDesign};
use Curso\Banco\Servico\ControladorDeBonificacoes;

$desenvolvedor = new Desenvolvedor(
    'Emanuelly',
    new CPF('123.456.789-10'),
    1000
);
$desenvolvedor->sobeNivel();

$gerente = new Gerente(
    'Roger',
    new CPF('456.123.789-10'),
    3000
);

$diretor = new Diretor(
    'Melissa',
    new CPF('456.123.100-01'),
    5000
);

$designer = new WebDesign(
    'Isabelle',
    new CPF('789.789.789-10'),
    2000
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacao($desenvolvedor);
$controlador->adicionaBonificacao($gerente);
$controlador->adicionaBonificacao($diretor);
$controlador->adicionaBonificacao($designer);
$controlador->recuperaTotalBonificacoes();

echo $controlador->recuperaTotalBonificacoes();