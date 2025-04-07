<?php

$array = [
    1 => 'um',
    2 => 'dois',
    3 => 'tres',
];

foreach ($array as $numeral => $nomeNumero) {
    echo "$numeral em português é: $nomeNumero" . PHP_EOL;
}

// count() => utilizado para pegar a quantidade de um array
echo "Total: " . count($array) . PHP_EOL;