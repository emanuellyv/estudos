<?php

namespace Curso\Banco\Modelo;

interface Autenticavel
{
    public function podeAutenticar(string $senha): bool;
}