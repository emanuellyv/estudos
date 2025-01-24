<?php

function ordenarString (array $array): array {
	sort($array);
	return $array;
}

$array = array("banana", "abacaxi", "laranja", "uva");
$arrayOrdenado = ordenarString($array);
echo "Array ordenado: ";
print_r($arrayOrdenado);