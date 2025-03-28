<?php

class Filme {
	private string $nome = 'Nome padrão';
	private int $anoLancamento = 2025;
	private string $genero = 'ação';
	private array $notas = [];

	public function avaliarFilme(float $nota): void
	{
		$this->notas[] = $nota;
	}

	public function calcularMedia(): float
	{
		$somaNotas = array_sum($this->notas);
		$quantidadeNotas = count($this->notas);

		return $somaNotas / $quantidadeNotas;
	}

	public function anoLancamento(): int
	{
		return $this->anoLancamento;
	}

	public function definirAnoLancamento(int $anoLancamento): void
	{
		$this->anoLancamento = $anoLancamento;
	}

	public function nome(): int
	{
		return $this->nome;
	}

	public function definirNome(int $nome): void
	{
		$this->nome = $nome;
	}

	public function genero(): int
	{
		return $this->genero;
	}

	public function definirGenero(int $genero): void
	{
		$this->genero = $genero;
	}
}
