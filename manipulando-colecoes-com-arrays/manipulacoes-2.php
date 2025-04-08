<?php

$dados = [
    'nome' =>'Emanuelly',
    'nota' => 10,
    'idade' => 23
];

/**
 * A sintaxe abaixo chama a função list() => da significado aos valores do array
 */
// ['nome' => $nome, 'nota' => $nota, 'idade' => $idade] = $dados;

/**
 * extract => percorre o array e transforma cda chave em uma variável
 * compact => transforma variáveis em um array
 */
extract($dados);
var_dump($nome, $nota, $idade);
var_dump(compact('nome', 'nota', 'idade'));