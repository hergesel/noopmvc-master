<h1> Dados Cliente </h1>

<br>
Nome: <h3><?=$dados_cliente['nome']?></h3>
Email: <h3><?=$dados_cliente['email']?></h3>
CPF: <h3><?=$dados_cliente['cpf']?></h3>
Endereço: <h3><?=$dados_cliente['endereco']?></h3>

<br>
<br>
<br>

<h1> Produtos Comprados </h1>

<?php
$quantidade = 0;
$total = 0;
foreach ($produtos as $produto) {?>
    <?php
    foreach ($_SESSION['carrinho'] as $prod) {
        if ($prod['id'] == $produto['id']) {
            $quantidade = $prod['quantidade'];  $total = $total + ($produto['preco'] * $prod['quantidade']);
          //echo $total. "<br>";
        }
        
    }
  
    ?>
<br>
Produto: <h3><?=$produto['descricao'];?></h3> <br>
Preço: <h3><?=$produto['preco'];?></h3><br>
Quantidade: <h3><?=$quantidade; ?></h3> <br>
<br>
<?php } ?>

Total a pagar: <h3><?php
if (!isset($desconto)) {
echo $total;        
} else {
  echo $total - $desconto;
}
?></h3>
<br>
<br>



<form action="" method="POST">
    Cupom: <input type="text" name="cupom">
    <input type="submit" value="Validar">
</form>
<br>
<br>
<form>
    <h4><input type="radio" value="boleto" name="pgmt">Boleto</h4>
    <h4><input type="radio" value="credito" name="pgmt">Cartão de crédito</h4>
    <h4><input type="radio" value="debito" name="pgmt">Cartão de débito</h4>
</form>




<a href="./pedido/finalizarPedido">Finalizar Pedido</a>