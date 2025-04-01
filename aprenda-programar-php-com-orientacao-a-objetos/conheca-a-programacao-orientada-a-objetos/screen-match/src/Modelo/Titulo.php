<?php

class Titulo
{
    private array $notas;

    /* 	
		Definir um modificador de acesso (private/public) para um parâmetro no método __construct,
		o parâmetro se torna uma propriedade da classe, ou seja, o parâmetro é automaticamente inicializado
		e definido como uma propriedade da classe.
		- Propriedades precisam sempre ser tipadas;
		- Propriedades readonly só podem ser modificadas 1x, então podemos deixar acesso como public e remover os getters
	*/
	public function __construct(
		public readonly string $nome,
		public readonly int $anoLancamento,
		public readonly Genero $genero,
	) {
		$this->notas = [];
	}

	public function avaliar(float $nota): void
	{
		$this->notas[] = $nota;
	}

	public function calcularMedia(): float
	{
		$somaNotas = array_sum($this->notas);
		$quantidadeNotas = count($this->notas);

		return $somaNotas / $quantidadeNotas;
	}

    public function duracaoEmMinutos(): int
    {
        return 0;
    }
}