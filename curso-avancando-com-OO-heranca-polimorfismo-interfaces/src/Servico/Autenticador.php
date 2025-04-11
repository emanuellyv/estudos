<?php

namespace Curso\Banco\Servico;

use Curso\Banco\Modelo\Autenticavel;

class Autenticador
{
    public function tentaLogin(Autenticavel $autenticavel, string $senha): void
    {
        if ($autenticavel->podeAutenticar($senha)) {
            echo "Autenticado com sucesso!";
        } else {
            echo "Ops, senha incorreta.";
        }
    }
}