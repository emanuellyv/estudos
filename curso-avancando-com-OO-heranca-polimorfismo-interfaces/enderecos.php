<?php

use Curso\Banco\Modelo\Endereco;

require_once 'autoload.php';

$endereco = new Endereco(
    'Curitiba',
    'Centro',
    'Marechal',
    '862'
);

$meuEndereco = new Endereco(
    'Tamandaré',
    'Jd. Graziela',
    'Travessa',
    '288'
);

echo $endereco . PHP_EOL;
echo $meuEndereco . PHP_EOL;