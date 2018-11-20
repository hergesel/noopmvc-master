    <?php
require_once "modelo/produtoModelo.php";
 //unset ($_SESSION["carrinho"]);
//http://localhost/app/carrinho



function index()
{
    
    if (isset($_SESSION["carrinho"])) {
        $produtosCarrinho = array();
        $produtoTotal = 0;
        foreach ($_SESSION["carrinho"] as $produtoID) {
            
            $produto = pegarProdutoPorId($produtoID["id"]);
            $produto["quantidade"] = $produtoID["quantidade"];
            
            $produtoTotal = $produtoTotal + ($produto["preco"] * $produto["quantidade"]);
            $produtosCarrinho[] = $produto;
        }
        //echo $produtoTotal;
        $produtoDados = array();
        //foreach ($produtosCarrinho as $produto) {
           // echo $produto["id"];
        //}
       
        
        
        $dados["produtos"] = $produtosCarrinho;
        $dados["total"] = $produtoTotal;
        //echo "<pre>";
        //print_r($dados);
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
function deletar($id)
{
   for ($i = 0; $i < count($_SESSION["carrinho"]); $i++) {
       if ($_SESSION["carrinho"][$i]["id"] == $id) {
           $_SESSION["carrinho"][$i]["quantidade"] -= 1;
                if ($_SESSION["carrinho"][$i]["quantidade"] == 0) {
                    unset($_SESSION["carrinho"][$i]);
                    $_SESSION["carrinho"] = array_values($_SESSION["carrinho"]);
                    redirecionar("carrinho/index");
                }

       }
       }
       
       redirecionar ("carrinho/index");
   }


function adicionarQuantidade ($id) {
   for ($i = 0; $i < count($_SESSION["carrinho"]); $i++) {
       if ($_SESSION["carrinho"][$i]["id"] == $id) {
           $_SESSION["carrinho"][$i]["quantidade"] += 1;
       }
       }
       
       redirecionar ("carrinho/index");
   }
      
    
   
