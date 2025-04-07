<?php

$notas = [
    'Isabelle' => 10,
    'Emanuelly' => 7,
    'Melissa' => 9,
    'Eryka' => 6,
];
ksort($notas);
var_dump($notas);

// Verifica apenas se é um array
if (is_array($notas)) {
    echo 'Sim, é um array' . PHP_EOL;
}

// Verifica se é array, se é numérico e crescente (lista) -> apenas a partir do PHP 8.1
var_dump(array_is_list($notas));

/**
 * isset => Verifica se uma chave existe no array e se não é nulo
 * array_key_exists => Apenas verifica se uma chave existe no array, mesmo que seja nulo
 * in_array => verifica se o valor existe no array
 */
echo 'Isabelle fez a prova:' . PHP_EOL;
isset($notas['Isabelle']);

// Pesquisar melhor sobre o strict
echo 'Alguém tirou nota 10?' . PHP_EOL;
var_dump(in_array(10, $notas, true));

echo 'Quem tirou 10?' . PHP_EOL;
echo array_search(10, $notas);