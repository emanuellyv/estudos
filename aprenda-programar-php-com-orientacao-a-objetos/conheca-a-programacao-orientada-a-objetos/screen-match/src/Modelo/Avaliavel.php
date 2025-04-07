<?php

namespace ScreenMatch\Modelo;

interface Avaliavel
{
    public function avaliar(float $nota): void;
    public function calcularMedia(): float;

}