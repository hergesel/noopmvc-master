<?php
require 'modelo/produtoModelo.php';
require 'modelo/cupomModelo.php';
require_once 'modelo/pedidoModelo.php';
require_once 'modelo/usuarioModelo.php';
function index () {
	$id_cliente = $_SESSION['auth']['user']['IDUsuario'];
	if($pedidos = receberpedidosrealizados($id_cliente)){
		$dados["pedidos"] = true;
			foreach ($pedidos as $pedido => $valor) {
				if ($pedido == "produtos_comprados") {
					$produtos = $pedidos[$pedido];
					$dados["produtos_comprados"] = $produtos;
				} else {
					$pedidos_realizados[$pedido] = $pedidos[$pedido];
					$dados["pedidos_realizados"] = $pedidos_realizados;
				}        
			}
		
	}else{
		$dados["pedidos"] = null;
	}
exibir("pedido/listar", $dados);
}
function finalizarPedido () {
	$cupom = pegarTodosCupons();
	if (!empty($cupom)) {
		echo "<pre>";
		print_r($cupom);
		$desconto = $cupom["desconto"];
		
	} else {
		echo "nenhum cupom";
		echo "";
	}
	//die();
	$data_pedido_realizado = strftime("%Y/%m/%d") . " " . strftime("%H:%M:%S");
	$usuario = $_SESSION["auth"]["user"];
	$ID_usuario = $usuario["id"];
	$cliente = pegarUsuarioPorId($ID_usuario);
	$total = 0;
	foreach ($_SESSION["carrinho"] as $key => $value) {
		$produto[] = pegarProdutoPorId($value["id"]);
		foreach ($produto as $key => $prod) {
			if ($value["id"] == $prod["id"]) {
				$total += $prod["preco"] * $value["quantidade"];
				$quantidade_comprada = $value["quantidade"];
				$estoque_atual = $prod["quantidade"];	
			}
		}
	}
	$total = $total - ($total * ($desconto/100));
	
	$id_pedido = AdicionarPedido($ID_usuario,$data_pedido_realizado,$cliente["cpf"],$cliente["CEP"],$cliente["cidade"],$cliente["estado"],$cliente["endereco"],$total);
	foreach ($produto as $key => $value) {
		inserirProdutoPedido($id_pedido,$value["id"],$quantidade_comprada);
		atualizarEstoque($value["id"],$estoque_atual,$quantidade_comprada);
	}
	unset($_SESSION["carrinho"]);
	redirecionar("produto/index");
}
?>

