<?php

require __DIR__ . "/src/Modelo/Filme.php";
require __DIR__ . "/src/funcoes.php";

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
$incluidoNoPlano = incluidoNoPlano($planoPrime, $anoLancamento);

echo "Nome do filme: $nomeFilme\n";
echo "Nota do filme: $notaFilme\n";
echo "Ano de lançamento: $anoLancamento\n";

$genero = match($nomeFilme) {
    "Pulp Fiction" => "Drama Policial",
    "Bastardos Inglórios" => "Ação",
    "Robô Selvagem" => "Animação",
    default => "desconhecido"
};

echo "O gênero do filme é: $genero\n";

$filme = criarFilme(
    nome: "Thor: Ragnarok", 
    anoLancamento: 2021, 
    nota: 7.8, 
    genero: "Super-herói"
);

echo $filme->anoLancamento;

$posicaoDoisPontos = strpos($filme->nome, ':');
var_dump($posicaoDoisPontos);
var_dump(substr($filme->nome, 0, $posicaoDoisPontos));

$filmeComoStringJson = json_encode($filme);
file_put_contents(__DIR__ . '/filme.json', $filmeComoStringJson);