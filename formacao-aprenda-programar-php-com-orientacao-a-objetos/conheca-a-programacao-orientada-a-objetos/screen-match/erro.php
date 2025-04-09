<?php

use ScreenMatch\Calculos\ConversorNotaEstrela;
use ScreenMatch\Exception\NotaInvalidaException;
use ScreenMatch\Modelo\Episodio;
use ScreenMatch\Modelo\Genero;
use ScreenMatch\Modelo\Serie;

require 'autoload.php';

$serie = new Serie('The Office', 2006, Genero::Comedia, 9, 26, 20);
$episodio =new Episodio($serie, 'Piloto', 1);

try {
    $episodio->avaliar(45);
    $episodio->avaliar(-35);

    $conversor = new ConversorNotaEstrela();
    echo $conversor->converte($episodio);
} catch (NotaInvalidaException $erro) {
    echo "Um problema aconteceu: " . $erro->getMessage();
}