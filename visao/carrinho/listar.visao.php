<h2>Carrinho</h2>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Descrição</th>
            <th>Departamento</th>
            <th>Preço</th>
            <th>Quantidade</th>
            <th>Adicionar</th>
            <th>Deletar</th>
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
        <td><a href="./carrinho/adicionarQuantidade/<?=$produto['id']?>"> Adicionar</td> </a>
        <td><a href="./carrinho/deletar/<?=$produto['id']?>"> Deletar</td> </a>
        <td><?=$produto['preco'] * $produto['quantidade']?></td>
    </tr>
    <?php endforeach; ?>
</table>
<h3> Total: R$<?=$total?>,00 </h3>
<a href="./compra"> Continuar </a>
