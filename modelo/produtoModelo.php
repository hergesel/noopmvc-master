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

function adicionarProduto($descricao, $preco, $departamento) {
    $sql = "INSERT INTO produto (descricao, preco, departamento) 
			VALUES ('$descricao', '$preco', '$departamento')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao cadastrar produto' . mysqli_error($cnx)); }
    return 'Produto cadastrado com sucesso!';
}


function editarProduto($id, $descricao, $preco, $departamento) {
    $sql = "UPDATE produto SET descricao = '$descricao', preco = '$preco', departamento = '$departamento' WHERE id = $id";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao alterar produto' . mysqli_error($cnx)); }
    return 'Produto alterado com sucesso!';
}



function deletarProduto($id) {
    $sql = "DELETE FROM produto WHERE id = $id";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao deletar produto' . mysqli_error($cnx)); }
    return 'Produto deletado com sucesso!';
            
}
?>