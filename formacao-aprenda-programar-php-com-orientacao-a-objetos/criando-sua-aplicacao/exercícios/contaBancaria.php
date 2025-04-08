<?php

$conta = [
	'titular' => 'Emanuelly Valenga',
	'saldo' => 2000
];

echo "***********\nTitular: " . $conta['titular'] . "\n";
echo "Saldo atual: " . $conta['saldo'] . "\n***********\n";

do {
	echo "1. Consultar conta\n2. Sacar valor\n3. Depositar valor\n4. Sair\n";
	
	$opcao = (int) fgets(STDIN);
	switch ($opcao) {
		case 1:
			echo $conta['titular'] . ' possui ' . $conta['saldo'] . " reais de saldo.\n";
			break;
		case 2:
			echo "Qual valor deseja sacar?\n";
			$sacar = (float) fgets(STDIN);
			
			if ($sacar <= $conta['saldo']){
				$conta['saldo'] -= $sacar;
				echo "Você sacou $sacar e agora possui R$" . $conta['saldo'] . "\n";
			} else {
				echo "Saldo insuficiente!\n";
			}
			break;
		case 3:
			$depositar = (float) fgets(STDIN);
			$conta['saldo'] += $depositar;
			echo "Você depositou R$ $depositar\n";
			break;
		case 4:
			echo "Adeus!\n";
			break;
		default:
			echo "Opção inválida\n";
	}
} while ($opcao != 4);
