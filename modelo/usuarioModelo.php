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
    $id = mysqli_real_escape_string(conn(), $id);
    $sql = "SELiECT * FROM usuario WHERE id= $id";
    $resultado = mysqli_query(conn(), $sql);
    $usuario = mysqli_fetch_array($resultado);
    return $usuario;
}

function pegarUsuarioPorEmailESenha($login, $senha) {
    $login = mysqli_real_escape_string(conn(), $login);
    $senha = mysqli_real_escape_string(conn(), $senha);
    $sql = "SELECT * FROM usuario WHERE email = '$login' AND senha = '$senha'";
    $resultado = mysqli_query(conn(), $sql);
    //print_r($resultado);
    $usuario = mysqli_fetch_array($resultado);
    return $usuario;
}

function adicionarUsuario($nome, $email, $senha, $cpf, $nascimento, $telefone, $endereco , $sexo, $tipo) {
    $nome = mysqli_real_escape_string(conn(), $nome);
    $email = mysqli_real_escape_string(conn(), $email);
    $senha = mysqli_real_escape_string(conn(), $senha);
    $cpf = mysqli_real_escape_string(conn(), $cpf);        
    $nascimento = mysqli_real_escape_string(conn(), $nascimento);
    $telefone = mysqli_real_escape_string(conn(), $telefone);
    $endereco = mysqli_real_escape_string(conn(), $endereco);
    $sexo = mysqli_real_escape_string(conn(), $sexo);
    $tipo = mysqli_real_escape_string(conn(), $tipo);
    $sql = "INSERT INTO usuario (nome, email, senha, cpf, nascimento, telefone, endereco, sexo, tipo) 
			VALUES ('$nome', '$email', '$senha', '$cpf', '$nascimento', '$telefone', '$endereco', '$sexo', '$tipo')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao cadastrar usuário' . mysqli_error($cnx)); }
    return 'Usuario cadastrado com sucesso!';
}

function editarUsuario($id, $nome, $email) {
    $id = mysqli_real_escape_string(conn(), $id);
    $nome = mysqli_real_escape_string(conn(), $nome);
    $email = mysqli_real_escape_string(conn(), $email);
    $sql = "UPDATE usuario SET nome = '$nome', email = '$email' WHERE id = $id";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao alterar usuário' . mysqli_error($cnx)); }
    return 'Usuário alterado com sucesso!';
}

function deletarUsuario($id) {
    $id = mysqli_real_escape_string(conn(), $id);
    $email = mysql_real_escape_string($email);
    $sql = "DELETE FROM usuario WHERE id = $id";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao deletar usuário' . mysqli_error($cnx)); }
    return 'Usuario deletado com sucesso!';
            
}
?>