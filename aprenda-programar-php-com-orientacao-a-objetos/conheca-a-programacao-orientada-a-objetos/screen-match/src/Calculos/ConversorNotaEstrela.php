<?php

namespace ScreenMatch\Calculos;

use ScreenMatch\Modelo\Avaliavel;
use Throwable;

class ConversorNotaEstrela
{
    public function converte (Avaliavel $avaliavel): float
    {
        try {
            $nota = $avaliavel->calcularMedia();
            
            return round($nota) / 2;
        } catch(Throwable){
            // echo $erro->getMessage();
            return 0;
        }
    }
}