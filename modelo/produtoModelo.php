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
    $id = mysqli_real_escape_string(conn(), $id);
    $sql = "SELECT * FROM produto WHERE id= $id";
    $resultado = mysqli_query(conn(), $sql);
    $produto = mysqli_fetch_assoc($resultado);
    return $produto;
}


function pegarProduto($id, $descricao, $preco, $imagem) {
    $id = mysqli_real_escape_string(conn(), $id);
    $descricao = mysqli_real_escape_string(conn(), $descricao);
    $preco = mysqli_real_escape_string(conn(), $preco);
    $sql = "SELECT * FROM produto WHERE id= $id AND descricao = $descricao AND preco = $preco AND imagem = $imagem";
    $resultado = mysqli_query(conn(), $sql);
    $produto = mysqli_fetch_array($resultado);
    return $produto;
}

function adicionarProduto($descricao, $preco, $departamento, $imagem) {
    $descricao = mysqli_real_escape_string(conn(), $descricao);
    $preco = mysqli_real_escape_string(conn(), $preco);
    $departamento = mysqli_real_escape_string(conn(), $departamento);
    $sql = "INSERT INTO produto (descricao, preco, departamento, imagem) 
			VALUES ('$descricao', '$preco', '$departamento', '$imagem')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao cadastrar produto' . mysqli_error($cnx)); }
    return 'Produto cadastrado com sucesso!';
}


function editarProduto($id, $descricao, $preco, $departamento, $imagem) {
    $id = mysqli_real_escape_string(conn(), $id);
    $descricao = mysqli_real_escape_string(conn(), $descricao);
    $preco = mysqli_real_escape_string(conn(), $preco);
    $departamento = mysqli_real_escape_string(conn(), $departamento);
    $sql = "UPDATE produto SET descricao = '$descricao', preco = '$preco', departamento = '$departamento', imagem = '$imagem' WHERE id = $id";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao alterar produto' . mysqli_error($cnx)); }
    return 'Produto alterado com sucesso!';
}



function deletarProduto($id) {
    $id = mysqli_real_escape_string(conn(), $id);
    $sql = "DELETE FROM produto WHERE id = $id";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao deletar produto' . mysqli_error($cnx)); }
    return 'Produto deletado com sucesso!';
            
}
?>