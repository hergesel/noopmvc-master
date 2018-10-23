<?php
require_once "modelo/produtoModelo.php";
 
//http://localhost/app/carrinho
function index()
{
    if (isset($_SESSION["carrinho"])) {
        $produtosCarrinho = array();
        foreach ($_SESSION["carrinho"] as $produtoID) {
            $produtosCarrinho[] = pegarProdutoPorId($produtoID["id"]);
        }

        $produtoDados = array();
        foreach ($produtosCarrinho as $produto) {
            echo $produto["id"];
        }
       
        
        
        $dados["produtos"] = $produtoDados;

        exibir("carrinho/listar", $dados);
    } else {
        echo "Nao existem produtos no carrinho!";
    }
}

//http://localhost/app/carrinho/adicionar/2
function adicionar($id)
{
    if (!isset($_SESSION["carrinho"])) {
        $_SESSION["carrinho"] = array();
    }

    //vai existir a sessao carrinho!
    $alt = false ;


    for ($i=0; $i < count($_SESSION["carrinho"]); $i++) {
        if ($_SESSION["carrinho"][$i]["id"] == $id) {
            $alt = true;
            $_SESSION["carrinho"][$i]["quantidade"]++;
        }
    }
    if (!$alt) {
        $produto["id"] = $id;

        $produto["quantidade"]=1;

        $_SESSION["carrinho"][] = $produto;
    }

 
   
    redirecionar("carrinho");
}

//http://localhost/app/carrinho/deletar/2
function deletar($index)
{
    unset($_SESSION["carrinho"][$index]);
    $_SESSION["carrinho"] = array_values($_SESSION["carrinho"]);
    redirecionar("carrinho/index");
}

function teste()
{
    $vetor = array();

    $vetor[0] = array(1, 2);
    $vetor[1] = array(2, 5);
    $vetor[3] = array(3, 2);
    $vetor[5] = array(4, 6);

    echo "<pre>";
    print_r($vetor);
}
