<?php

$dadosJson = file_get_contents('filme.json');
$filme = json_decode($dadosJson, true);

?>

<h1>Sucesso ao inserir um novo filme!</h1>

<h4>Aqui estão as informações do filme:</h4>
<ul>
	<li><b>Nome: <?= $filme['nome']; ?></b></li>
	<li>Ano de lançamento: <?= $filme['anoLancamento']; ?></li>
	<li>Nota: <?= $filme['nota']; ?></li>
	<li>Gênero: <?= $filme['genero']; ?></li>
</ul>