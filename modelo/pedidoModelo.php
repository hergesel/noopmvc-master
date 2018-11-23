<?php
date_default_timezone_set ("America/Sao_Paulo");
function AdicionarPedido ($id_usuario,$data_pedido,$cpf,$cep,$cidade,$estado,$endereco,$total) {
	$sql = "INSERT INTO pedido (id,data_pedido,cpf,cep,cidade,estado,endereco,total)
	VALUES ('$id_usuario','$data_pedido','$cpf','$cep','$cidade','$estado','$endereco','$total')";
	$resultado = mysqli_query($cnx = conn(), $sql);
	$id_pedido = mysqli_insert_id($cnx);
	if (!$resultado) {
		echo "erro ao cadastrar pedido ".mysqli_error($cnx);
	} 
	return $id_pedido;
}
function inserirProdutoPedido($id_pedido,$id_produto,$quantidade_comprada){
	$sql = "INSERT INTO produtopedido (IDpedido,IDproduto,quantidade) VALUES ('$id_pedido','$id_produto','$quantidade_comprada')";
	$resultado = mysqli_query($cnx = conn(), $sql);
	//$id = mysqli_insert_id($cnx);
	if (!$resultado) {
		echo "erro ao inserir produto " . mysqli_error($cnx);
		die();
	}
}
function pegarprodutospedidosespecificos($id){
	$sql = "SELECT cp.nome, cp.imagem, cp.preco, pp.quantidade from pedido as p 
	INNER JOIN produtopedido as pp ON (p.IDpedido = pp.IDpedido)
	INNER JOIN cadastroproduto as cp ON (pp.IDproduto = cp.IDproduto)
	WHERE p.IDpedido = '$id'";
	$resultado = mysqli_query($cnx = conn(), $sql);
	if (!$resultado) {
		echo "Erro inesperado ".mysqli_error($cnx);
	}
	while ($linha = mysqli_fetch_assoc($resultado)) {
		$produtos_pedidos[] = $linha;
	}
	return $produtos_pedidos;
}
function receberpedidosrealizados ($id) {
	$sql = "SELECT * FROM pedido WHERE IDUsuario = '$id'";
	$resultado = mysqli_query($cnx = conn(), $sql);
	if (!$resultado) {
		echo "erro inesperado".mysqli_error($cnx);
		die();
	}
	while($linha = mysqli_fetch_assoc($resultado)){
$produtos_comprados["produtos_comprados"] = pegarprodutospedidosespecificos($linha["IDpedido"]);	
$pedidos_realizados = array_merge_recursive($linha,$produtos_comprados);
	}
	if (!empty($pedidos_realizados)) {
		return $pedidos_realizados;
	} else {
		return null;
	}
}
?>