<?php

namespace Repositorio;

use Modelo\Produto;
use PDO;

class ProdutoRepositorio
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function formarObjeto($dados)
    {
        return new Produto(
            $dados['id'],
            $dados['tipo'],
            $dados['nome'],
            $dados['descricao'],
            $dados['imagem'],
            $dados['preco']
        );
    }

    public function opcoesCafe(): array
    {
        $sqlCafe = "SELECT * FROM produtos WHERE tipo = 'Café' ORDER BY preco";
        $statement = $this->pdo->query($sqlCafe);
        $produtosCafe = $statement->fetchAll(PDO::FETCH_ASSOC);

        $dadosCafe = array_map(function ($cafe){
            return $this->formarObjeto($cafe);
        }, $produtosCafe);

        return $dadosCafe;
    }

    public function opcoesAlmoco(): array
    {

        $sqlAlmoco = "SELECT * FROM produtos WHERE tipo = 'Almoço' ORDER BY preco";
        $statement = $this->pdo->query($sqlAlmoco);
        $produtosAlmoco = $statement->fetchAll(PDO::FETCH_ASSOC);

        $dadosAlmoco = array_map(function ($almoco){
            return $this->formarObjeto($almoco);
        }, $produtosAlmoco);

        return $dadosAlmoco;
    }

    public function buscarTodos()
    {
        $sql = "SELECT * FROM produtos ORDER BY preco";
        $statement = $this->pdo->query($sql);
        $dados = $statement->fetchAll(PDO::FETCH_ASSOC);

        $todosDados = array_map(function ($produto){
            return $this->formarObjeto($produto);
        }, $dados);

        return $todosDados;
    }

    public function excluirProduto(int $id): void
    {
        $sql = "DELETE FROM produtos WHERE id = ?";
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(1, $id);
        $statement->execute();
    }
}