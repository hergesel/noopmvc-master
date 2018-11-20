<?php
require_once 'modelo/produtoModelo.php';
require_once 'modelo/usuarioModelo.php';
require_once 'modelo/cupomModelo.php';


require_once 'modelo/pedidoModelo.php';



function index () {
    if (ehPost()) {
        $cupom = $_POST["cupom"];
        $cup = BuscarCupom($cupom);
        print_r($cup);
    }
    
    $cliente = $_SESSION["auth"]["user"]["id"];
    $dados["dados_cliente"] = pegarUsuarioPorId($cliente);
    
    echo "<pre>";
    print_r($dados);
    $produtos_comprados = array();
    foreach ($_SESSION["carrinho"] as $valor) {
        $produtos_comprados[] = pegarProdutoPorId($valor["id"]);
    }
    print_r($produtos_comprados);
    $dados["produtos_comprados"] = $produtos_comprados;
    exibir("compra/index",$dados);
   
}


function finalizarPedido() {
    $usuarioLogado = $_SESSION["auth"]["user"];
    $produtosCarrinho = $_SESSION["carrinho"];
    
   
    
    $idPedido = adicionarPedido($idusuario, $total, $desconto);
    
    foreach ($produtosCarrinho as $produto) {
        adicionarItemPedido($idPedido, $produto["id"], $produto["quantidade"], $precoproduto, $total);
        echo $produto["id"];
        echo $produto["quantidade"];
        echo "<BR>";
    }
    
    
    
    
    

    
     
    
    
    

}
?>

