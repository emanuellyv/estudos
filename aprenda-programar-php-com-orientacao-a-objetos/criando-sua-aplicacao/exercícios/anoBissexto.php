<?php

$ano = $argv[1];

// (($ano % 4 == 0 && $ano % 100 != 0) || $ano % 400 == 0)
if (($ano % 4 == 0 && $ano % 100 != 0) || $ano % 400 == 0) {
    echo "O ano $ano é um ano bissexto\n";
} else {
    echo "O ano $ano não é um ano bissexto\n";
}