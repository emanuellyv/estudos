<?php

function exibirMensagemLancamento (int $ano): void {
    if ($ano < 2020) {
        echo "Esse filme é antigo!\n";
    } elseif ($ano >= 2020 && $ano < 2024) {
        echo "Esse filme é recente!\n";
    } else {
        echo "Esse filme é lançamento!\n";
    }
}

function incluidoNoPlano (bool $planoPrime, int $anoLancamento): bool {
    return $planoPrime || $anoLancamento < 2020;
}
