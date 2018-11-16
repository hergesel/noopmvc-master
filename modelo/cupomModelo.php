<?php

function pegarTodosCupons() {
    $sql = "SELECT * FROM cupom";
    $resultado = mysqli_query(conn(), $sql);
    $cupons = array();
    
    while ($linha = mysqli_fetch_array($resultado)) {
        $cupons[] = $linha;
    }
    return $cupons;
}

function pegarCupomPorId($id) {
    $sql = "SELiECT * FROM cupom WHERE id= $id";
    $resultado = mysqli_query(conn(), $sql);
    $cupom = mysqli_fetch_array($resultado);
    return $cupom;
}


function adicionarCupom($nomecupom, $desconto) {
    $nomecupom = mysqli_real_escape_string(conn(), $nomecupom);
    $sql = "INSERT INTO cupom (nomecupom, desconto) 
			VALUES ('$nomecupom', '$desconto')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao cadastrar cupom' . mysqli_error($cnx)); }
    return 'Cupom cadastrado com sucesso!';
}

function editarCupom($id, $nomecupom, $desconto) {
    $sql = "UPDATE cupom SET nomecupom = '$nomecupom', desconto = $desconto WHERE id = $id";
    $resultado  = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao alterar cupom' . mysqli_error($cnx)); }
    return 'Cupom alterado com sucesso!';
}

function deletarCupom($id) {
    $id = mysqli_real_escape_string(conn(), $id);
    $sql = "DELETE FROM cupom WHERE id = $id";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao deletar cupom' . mysqli_error($cnx)); }
    return 'Cupom deletado com sucesso!';
            
}
?>

