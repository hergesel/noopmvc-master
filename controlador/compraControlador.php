<?php
require_once 'modelo/produtoModelo.php';
require_once 'modelo/usuarioModelo.php';
require_once 'modelo/cupomModelo.php';


require_once 'modelo/pedidoModelo.php';



function index () {
    if (ehPost()) {
        $cupom = $_POST["cupom"];
        $cup = BuscarCupom($cupom);
        //echo($cup);
        $desconto = $cup['desconto'];
        $dados['desconto'] = $desconto;
    }
    
    $cliente = $_SESSION["auth"]["user"]["id"];
    $dados["dados_cliente"] = pegarUsuarioPorId($cliente);
    
    //echo "<pre>";
    //print_r($dados);
    $produtos_comprados = array();
    foreach ($_SESSION["carrinho"] as $valor) {
        $produtos_comprados[] = pegarProdutoPorId($valor["id"]);
    }
   //   print_r($produtos_comprados);
    $dados["produtos"] = $produtos_comprados;
    exibir("compra/listar",$dados);
   

}

 
?>

