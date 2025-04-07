<?php

namespace ScreenMatch\Modelo;

/* 
Classes abstratas podem ter métodos abstratos (duracaoEmMinutos)
	- Se tiver um método abstrato, as classes que extenderem a classe mãe, *precisam* ter o método
	- Não é possível instanciar classes abstratas
*/
abstract class Titulo implements Avaliavel
{
	use ComAvaliacao;
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
	}

	abstract public function duracaoEmMinutos(): int;
}