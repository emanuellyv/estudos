<?php

$hora = $argv[1];

switch ($hora) {
	case $hora > 6 && $hora < 12:
		echo "Bom dia!\n";
		break;
	
	case $hora >= 12 && $hora < 18:
		echo "Boa tarde!\n";
		break;

	case $hora > 18:
		echo "Boa noite!\n";
		break;
}