<h2>Carrinho</h2>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Descrição</th>
            <th>Departamento</th>
            <th>Preço</th>
            <th>Quantidade</th>
            <th>Total</th>
        </tr>
    </thead>

    
    
    <?php foreach ($produtos as $produto): ?>
    <tr>
        <td><?=$produto['id']?></td>
        <td><?=$produto['descricao']?></td>
        <td><?=$produto['departamento']?></td>
        <td><?=$produto['preco']?></td>
        <td><?=$produto['quantidade']?></td>
        <td><?=$produto['preco'] * $produto['quantidade']?></td>
    </tr>
    <?php endforeach; ?>
</table>
<form action="<?=@$acao?>" method="POST">
    nome do cupom:  <input type="text" name="nomecupom" value="<?=@$cupom['nomecupom']?>">
    <button type="submit">Enviar</button>
</form>
<h3> Total: R$<?=$total?>,00 </h3>
