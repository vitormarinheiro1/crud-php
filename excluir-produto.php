<?php

require "src/conexao-bd.php";
require "src/Model/Produto.php";
require "src/Repository/ProdutoRepositorio.php";

$produtoRepositorio = new ProdutoRepositorio($pdo);
$produtoRepositorio->deletar($_GET['id']);

var_dump($_GET['id']);
