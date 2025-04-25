<?php

use Repositorio\ProdutoRepositorio;

require 'src/conexao-bd.php';
require 'src/Modelo/Produto.php';
require 'src/Repositorio/ProdutoRepositorio.php';

$produtoRepositorio = new ProdutoRepositorio($pdo);
$produtoRepositorio->excluirProduto($_POST['id']);

header('Location: admin.php');