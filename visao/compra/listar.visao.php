<h1> Dados Cliente </h1>


Nome: <h3><?=$dados_cliente['nome']?></h3>
Email: <h3><?=$dados_cliente['email']?></h3>
CPF: <h3><?=$dados_cliente['cpf']?></h3>
Endereço: <h3><?=$dados_cliente['endereco']?></h3>



<h1> Produtos Comprados </h1>

<?php

print_r($produtos_comprados);


?>

<form action="" method="POST">
    Cupom: <input type="text" name="cupom">
    <input type="submit" value="Validar">
</form>



<a href="./compra/finalizarPedido">Finalizar Pedido</a>