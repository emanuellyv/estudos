<?php

echo "Bem-vindo(a) ao Screen Match!\n";

$nomeFilme = "Pulp Fiction";
$nomeFilme = "Bastardos Inglórios";
$nomeFilme = "Robô Selvagem";

$anoLancamento = 1994;

$qtdDeNotas = $argc - 1;
$notas = [];

for ($contador = 1; $contador < $argc; $contador++) {
    $notas[] = (float)$argv[$contador];
}

$notaFilme = array_sum($notas) / $qtdDeNotas;

$incluidoNoPlano = true;
$planoPrime = true;
$incluidoNoPlano = $planoPrime || $anoLancamento < 2000;

echo "Nome do filme: $nomeFilme\n";
echo "Nota do filme: $notaFilme\n";
echo "Ano de lançamento: $anoLancamento\n";

if ($anoLancamento < 2020) {
    echo "Esse filme é antigo!\n";
} elseif ($anoLancamento >= 2020 && $anoLancamento < 2024) {
    echo "Esse filme é recente!\n";
} else {
    echo "Esse filme é lançamento!\n";
}

$genero = match($nomeFilme) {
    "Pulp Fiction" => "Drama Policial",
    "Bastardos Inglórios" => "Ação",
    "Robô Selvagem" => "Animação",
    default => "desconhecido"
};

echo "O gênero do filme é: $genero\n";

$filme = [
    "Nome" => "Thor: Ragnarok",
    "Ano" => 2021,
    "Nota" => 7.8,
    "Genero" => "Super-herói" 
];