<?php

$notasBimestre1 = [
    'Isabelle' => 10,
    'Emanuelly' => 7,
    'Melissa' => 9,
    'Eryka' => 6,
];

$notasBimestre2 = [
    'Isabelle' => 10,
    'Emanuelly' => 7,
    'Melissa' => 9,
];

/**
 * array_keys => retorna as chaves
 *      parâemtro strict -> faz verificações mais restritas (utilização do ===)
 * array_values => retorna os valores
 */
$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);
$nomesAlunosFaltantes = array_keys($alunosFaltantes);
$notasAlunosFaltantes = array_values($alunosFaltantes);

// array_combine => 2 arrays precisam ter o mesmo tamanho
var_dump(array_combine($notasAlunosFaltantes, $nomesAlunosFaltantes));
// arra_flip => inverte chave e valor
var_dump(array_flip($alunosFaltantes));

// ---------------------------------------------------------------------------------------- //

$alunos2024 = [
    0 => 'Isabelle',
    1 => 'Emanuelly',
    2 => 'Melissa',
    3 => 'Eryka',
];

$novosAlunos = [
    4 => 'Patricia',
    5 => 'Nico',
    6 => 'Kilderson',
    7 => 'Daiane'
];

/**
 * array_merge => une vários arrays, SEM preservar as chaves
 *      -> chaves numéricas são reorganizadas (adicionadas)
 *      -> chaves strings são sobreescritas
 */
$alunos2025 = array_merge($alunos2024, $novosAlunos);
var_dump($alunos2025);

/**
 * ... => desempacotamento de array -> remove os colchetes
 *      -> Permite adicionar valores no meio
 */
$alunosUnpack = [...$alunos2024, 'Camila', ...$novosAlunos];
var_dump($alunosUnpack);

// ---------------------------------------------------------------------------------------- //
// Irei utilizar o array $alunos2024 e $novosAlunos

/**
 * array_push => recebe o array de referência e adiciona novos valores NO FINAL DO ARRAY
 *            -> $array[] = 'Novo valor'
 *
 * array_unshift => recebe o array de referência e adiciona novos valores NO COMEÇO DO ARRAY
 */
array_push($alunos2024, 'Alice', 'Bob');
$alunos2024[] = 'Matheus';

array_unshift($alunos2024, 'Carlos', 'Karin');

echo array_shift($alunos2024) . PHP_EOL;
echo array_pop($alunos2024) . PHP_EOL;
var_dump($alunos2024);
/**
 * array_shift => remove e retorna o 1º elemento
 * array_pop => remove e retorna o último elemento
 */

teste