<?php

$altura = $argv[1];
$peso = $argv[2];

$imc = $peso / $altura ** 2;

echo "Com altura de $altura cm e peso de $peso kg seu IMC é de $imc\n";

switch ($imc){
	case $imc < 18.5:
		echo "Abaixo do peso\n";
		break;
	
	case $imc >= 18.5 && $imc < 25:
		echo "Peso normal\n";
		break;

	case $imc >= 25 && $imc < 30:
		echo "Excesso de peso\n";
		break;

	case $imc >= 30;
		echo "Obesidade\n";
		break;
}
