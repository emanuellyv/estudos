<?php

$notas = [10, 5.5, 3.4, 7.7, 6, 6.1, 5.9];

foreach ($notas as $nota) {
	$resultado = $nota > 6 ? "aprovado" : "reprovado";

	echo "Esse aluno foi $resultado com a nota $nota\n";
}