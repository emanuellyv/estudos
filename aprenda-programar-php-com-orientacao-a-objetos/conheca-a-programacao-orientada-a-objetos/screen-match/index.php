<?php

require __DIR__ . "/src/Modelo/Titulo.php";
require __DIR__ . "/src/Modelo/Genero.php";
require __DIR__ . "/src/Modelo/Filme.php";
require __DIR__ . "/src/Modelo/Serie.php";
require __DIR__ . "/src/Calculos/CalculadoraDeMaratona.php";

echo "Bem-vindo(a) ao Screen Match\n";

$filme = new Filme(
    'Thor - Ragnarok',
    2021,
    Genero::SuperHeroi,
    180
);

$filme->avaliar(10);
$filme->avaliar(6);
$filme->avaliar(4.2);
$filme->avaliar(2.9);

var_dump($filme);
echo $filme->calcularMedia() . "\n";
echo $filme->anoLancamento . "\n";

$serie = new Serie(
    'Cobra Kai',
    2018,
    Genero::Acao,
    6,
    10,
    30
);

$serie->avaliar(9);
echo $serie->anoLancamento . "\n" . $serie->calcularMedia(). "\n";

$calculadora = new CalculadoraDeMaratona();
$calculadora->incluir($filme);
$calculadora->incluir($serie);
$duracao = $calculadora->duracao();

echo "Para essa maratona, você precisa de $duracao minutos\n";