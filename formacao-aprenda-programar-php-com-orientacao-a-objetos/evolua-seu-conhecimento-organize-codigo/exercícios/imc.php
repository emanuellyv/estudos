<?php

function calcularImc (float $altura, float $peso) {
	return $peso / $altura ** 2;
}