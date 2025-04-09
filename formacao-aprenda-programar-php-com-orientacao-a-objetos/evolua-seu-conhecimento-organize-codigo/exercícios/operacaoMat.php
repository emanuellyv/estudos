<?php

function operacaoMatematica (int $x, int $y, string $operacao) {
	return match($operacao) {
		'soma' => $x + $y,
		'subtracao' => $x - $y,
		'divisao' => $x - $y,
		'multiplicacao' => $x * $y
	};
}