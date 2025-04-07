<?php

/**
 * ORDENAÇÃO SIMPLES: sort() -> parâmetro por REFERÊNCIA (modifica valor de uma variável)
 * Números -> em ordem crescente
 * Strings -> em ordem alfabética
 */
$notas = [
    10,
    8,
    6,
    9
];
sort($notas);
var_dump($notas);

/**
 *  ORDENAÇÃO COMO QUISER A PARTIR DE VALOR: usort():
 *  1º parâmetro -> array que será ordenado
 *  2º parâmetro -> função criada para ordenação
 *
 * ORDENAÇÃO COMO QUISER A PARTIR DAS CHAVES: uksort()
 */
$notas = [
    [
        'aluno' => 'Emanuelly',
        'nota' => 8,
    ],
    [
        'aluno' => 'Isabelle',
        'nota' => 10,
    ],
    [
        'aluno' => 'Melissa',
        'nota' => 5,
    ],
    [
        'aluno' => 'Eryka',
        'nota' => 7,
    ]
];

function ordenarNotas(array $nota1, array $nota2): int
{
//    if ($nota1['nota'] > $nota2['nota']) {
//        return -1;
//    }
//    if ($nota1['nota'] < $nota2['nota']) {
//        return 1;
//    }
//    return 0;

    // SIMPLIFICANDO COM <=>
    return $nota1['nota'] <=> $nota2['nota'];
}
usort($notas, 'ordenarNotas');
var_dump($notas);

/**
 * ORDENAÇÃO SIMPLES REVERSA: rsort() -> parâmetro por REFERÊNCIA (modifica valor de uma variável)
 * Números -> em ordem DEcrescente
 * Strings -> em ordem alfabética
 */
$notas = [
    10,
    8,
    6,
    9,
    7
];
rsort($notas);
var_dump($notas);

/**
 * ORDENAÇÃO DE VALORES MANTENDO CHAVES:
 * asort -> crescente com as chaves
 * arsort -> decrescente com as chaves
 */
$notas = [
    'Isabelle' => 10,
    'Emanuelly' => 7,
    'Melissa' => 9,
    'Eryka' => 6,
];
arsort($notas);
var_dump($notas);

/**
 * ORDENAÇÃO DE CHAVES MANTENDO VALORES:
 * ksort -> em ordem alfabética
 * krsort -> em ordem alfabética decrescente
 */
$notas = [
    'Isabelle' => 10,
    'Emanuelly' => 7,
    'Melissa' => 9,
    'Eryka' => 6,
];
ksort($notas);
var_dump($notas);