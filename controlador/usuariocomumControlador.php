<?php

function adicionar() {
    if (ehPost()) {
        extract($_POST);
        alert(adicionarUsuario($nome, $email, $senha, $cpf, $nascimento, $telefone, $endereco , $sexo));
        redirecionar("usuario/index");
    } else {
        exibir("usuario/formulario");
    }
}


?>