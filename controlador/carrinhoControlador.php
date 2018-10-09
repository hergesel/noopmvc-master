<?php
require "modelo/produtoModelo.php";
function index (){
	
	if(isset($_SESSION["carrinho"])){

		$produtosCarrinho = array();

		foreach ($_SESSION["carrinho"] as $produtoID) {
			$produtosCarrinho[] = pegarProdutosPorId($produtoID);
		}

		$dados["produtos"] = $produtosCarrinho;

		exibir("carrinho/listar", $dados);

	}else{
		echo "Carrinho vazio!";
	}

}

function adicionar ($id){
	
	if (isset($_SESSION["carrinho"])){
		$_SESSION["carrinho"] =  array();
	}
		$_SESSION["carrinho"][] = $id;
		redirecionar("carrinho");


}

function deletar ($id){
	
}

?>