<?php

require_once "modelo/cupomModelo.php";

/** admin */
function index() {
    $dados["cupons"] = pegarTodosCupons();
    exibir("cupom/listar", $dados);
    print_r($dados);
}
/** admin */
function adicionar() {
    if (ehPost()) {
        extract($_POST);
        alert(adicionarCupom($nomecupom, $desconto));
        redirecionar("cupom/index");
    } else {
        exibir("cupom/formulario");
    }
}
/** admin */
function deletar($id) {
    alert(deletarCupom($id));
    redirecionar("cupom/index");
}
/** admin */
function editar($id) {
    if (ehPost()) {
        $nomecupom = $_POST["nomecupom"];
        $desconto = $_POST["desconto"];
        alert(editarCupom($id, $nomecupom, $desconto));
        redirecionar("cupom/index");
    } else {
        $dados['cupom'] = pegarCupomPorId($id);
        $dados['acao'] = "./cupom/editar/$id";
        exibir("cupom/formulario", $dados);
    }
}
/** admin */
function visualizar($id) {
    $dados['cupom'] = pegarCupomPorId($id);
    exibir("cupom/visualizar", $dados);
}

?>

