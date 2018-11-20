<h1> Dados Cliente </h1>

<?php

echo "<pre>";
print_r($dados_cliente);
?>

<h1> Produtos Comprados </h1>

<?php

print_r($produtos_comprados);


?>

<form action="" method="POST">
    Cupom: <input type="text" name="cupom">
    <input type="submit" value="Validar">
</form>



<a href="./compra/finalizarPedido">Finalizar Pedido</a>