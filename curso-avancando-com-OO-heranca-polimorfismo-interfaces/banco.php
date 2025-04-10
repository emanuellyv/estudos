<?php

require_once 'autoload.php';

use Curso\Banco\Modelo\Conta\Titular;
use Curso\Banco\Modelo\Endereco;
use Curso\Banco\Modelo\CPF;
use Curso\Banco\Modelo\Conta\Conta;

$endereco = new Endereco('Curitiba', 'Cachoeira', 'Travessa Schultz', '288');
$emanuelly = new Titular(new CPF('123.456.789-10'), 'Emanuelly', $endereco);
$primeiraConta = new Conta($emanuelly);
$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$isabelle = new Titular(new CPF('698.549.548-10'), 'Isabelle', $endereco);
$segundaConta = new Conta($isabelle);
var_dump($segundaConta);

$outroEndereco = new Endereco('A', 'B', 'c', '111');
$outra = new Conta(new Titular(new CPF('123.654.789-01'), 'Abcdefg', $outroEndereco));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();
