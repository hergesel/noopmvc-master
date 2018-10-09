<?php

function pegarTodosProdutos (){
	$sql = "SELECT * FROM produto";
	$retorno = mysqli_query(conn(), $sql);
	$produtos = array();
	while($linha = mysqli_fetch_assoc($retorno)) {
		$produtos[] = $linha;
	}
	return $produtos;

}

function pegarProdutoPorId($id) {
    $sql = "SELECT * FROM produto WHERE id= $id";
    $resultado = mysqli_query(conn(), $sql);
    $produto = mysqli_fetch_array($resultado);
    return $produto;
}

?>