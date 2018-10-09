<?php

require "modelo/produtoModelo.php";

function index() {
    $dados["produtos"] = pegarTodosProdutos();
    exibir("produto/listar", $dados);
}

/** admin */
function adicionar() {
    if (ehPost()) {
        extract($_POST);
        alert(adicionarProduto($descricao, $preco, $departamento));
        redirecionar("produto/index");
    } else {
        exibir("produto/formulario");
    }
}

/** admin */
function deletar($id) {
    alert(deletarProduto($id));
    redirecionar("produto/index");
}

/** admin */
function editar($id) {
    if (ehPost()) {
        $descricao = $_POST["descricao"];
        $preco = $_POST["preco"];
        $departamento = $_POST["departamento"];
        alert(editarProduto($id, $descricao, $preco, $departamento));
        redirecionar("produto/index");
    } else {
        $dados['produto'] = pegarProdutoPorId($id);
        $dados['acao'] = "./produto/editar/$id";
        exibir("produto/formulario", $dados);
    }
}

/** anon */
function visualizar($id) {
    $dados['produto'] = pegarProdutoPorId($id);
    exibir("produto/visualizar", $dados);
}

?>