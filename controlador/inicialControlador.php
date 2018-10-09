<?php

require "modelo/inicialModelo.php";

/** anon */
function index() {
    $dados["produtos"] = pegarTodosProdutos();
    exibir("inicial/listar", $dados);
}

function visualizar($id) {
    $dados['produto'] = pegarProdutoPorId($id);
    exibir("inicial/visualizar", $dados);
}

?>