<?php

function pegarTodosUsuarios() {
    $sql = "SELECT * FROM usuario";
    $resultado = mysqli_query(conn(), $sql);
    $usuarios = array();
    while ($linha = mysqli_fetch_array($resultado)) {
        $usuarios[] = $linha;
    }
    return $usuarios;
}

function pegarUsuarioPorId($id) {
    $sql = "SELECT * FROM usuario WHERE id= $id";
    $resultado = mysqli_query(conn(), $sql);
    $usuario = mysqli_fetch_array($resultado);
    return $usuario;
}

function pegarUsuarioPorEmailESenha($login, $senha) {
    //echo $login;
    //echo $senha;
    $sql = "SELECT * FROM usuario WHERE email = '$login' AND senha = '$senha'";
    $resultado = mysqli_query(conn(), $sql);
    //print_r($resultado);
    $usuario = mysqli_fetch_array($resultado);
    return $usuario;
}

function adicionarUsuario($nome, $email, $senha, $cpf, $nascimento, $telefone, $endereco , $sexo, $tipo) {
    $sql = "INSERT INTO usuario (nome, email, senha, cpf, nascimento, telefone, endereco, sexo, tipo) 
			VALUES ('$nome', '$email', '$senha', '$cpf', '$nascimento', '$telefone', '$endereco', '$sexo', '$tipo')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao cadastrar usuário' . mysqli_error($cnx)); }
    return 'Usuario cadastrado com sucesso!';
}

function editarUsuario($id, $nome, $email) {
    $sql = "UPDATE usuario SET nome = '$nome', email = '$email' WHERE id = $id";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao alterar usuário' . mysqli_error($cnx)); }
    return 'Usuário alterado com sucesso!';
}

function deletarUsuario($id) {
    $sql = "DELETE FROM usuario WHERE id = $id";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao deletar usuário' . mysqli_error($cnx)); }
    return 'Usuario deletado com sucesso!';
            
}
?>