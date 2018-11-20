<?php

function adicionarPedido($idusuario, $total, $desconto) {
    $sql = "INSERT INTO pedido (idusuario, total, desconto) 
			VALUES ('$idusuario', '$total', '$desconto')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao cadastrar pedido' . mysqli_error($cnx)); }
    $idPedido = mysqli_insert_id($cnx);
    return $idPedido;
}

function adicionarItemPedido($idpedido, $idproduto, $quantidade, $precoproduto, $total) {
    $sql = "INSERT INTO pedido (idpedido, idproduto, quantidade, precoproduto, total) 
			VALUES ('$idpedido', '$idproduto', '$quantidade', '$precoproduto', '$total')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao cadastrar pedido' . mysqli_error($cnx)); }
    return 'Pedido cadastrado com sucesso!';
}

