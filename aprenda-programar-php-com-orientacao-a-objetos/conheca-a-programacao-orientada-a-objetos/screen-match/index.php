<?php

require __DIR__ . "/src/Modelo/Filme.php";

echo "Bem-vindo(a) ao Screen Match\n";

$filme = new Filme();
$filme->definirAnoLancamento(2021);
// $filme->nome = 'Thor - Ragnarok';
// $filme->anoLancamento = 2021;
// $filme->genero = 'super-heroi';

$filme->avaliarFilme(10);
$filme->avaliarFilme(6);
$filme->avaliarFilme(4.2);
$filme->avaliarFilme(2.9);

var_dump($filme);
echo $filme->calcularMedia() . "\n";

echo $filme->anoLancamento() . "\n";