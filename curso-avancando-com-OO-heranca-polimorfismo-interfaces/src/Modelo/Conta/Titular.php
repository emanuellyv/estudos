<?php

namespace Curso\Banco\Modelo\Conta;

use Curso\Banco\Modelo\Autenticavel;
use Curso\Banco\Modelo\Pessoa;
use Curso\Banco\Modelo\CPF;
use Curso\Banco\Modelo\Endereco;

class Titular extends Pessoa implements Autenticavel
{
    private Endereco $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha = 'abcdef';
    }
}
