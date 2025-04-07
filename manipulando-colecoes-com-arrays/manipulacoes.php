<?php

$notasBimestre1 = [
    'Isabelle' => 10,
    'Emanuelly' => 7,
    'Melissa' => 9,
    'Eryka' => 6,
];

$notasBimestre2 = [
    'Isabelle' => 8,
    'Emanuelly' => 10,
    'Melissa' => 6,
    'Eryka' => 10,
];

/**
 * array_diff => Retorna um novo array contendo elementos que existe no 1º array e não nos próximos
 *              -> Leva em consideração apenas os VALORES
 * array_diff_key -> leva em consideração apenas as CHAVES
 * array_diff_assoc -> Leva em consideração CHAVES e VALORES
 */
var_dump(array_diff($notasBimestre1, $notasBimestre2));