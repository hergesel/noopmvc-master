<h2>Carrinho</h2>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Descricao</th>
            <th>Preco</th>
            <th>Quantidade</th>
            <th>Excluir</th>
        </tr>
    </thead>
    <?php
     for ($i = 0;$i < count($_SESSION["carrinho"]);$i++) {
    ?>
    <tr>
        <td><?=$_SESSION["carrinho"][$i]['id']?></td>
        <td><?=$_SESSION["carrinho"][$i]['descricao']?></td>
        <td><?=$_SESSION["carrinho"][$i]['preco']?></td>
        <td><?=$_SESSION["carrinho"][$i]['quantidade']?></td>
        <td><a href="./carrinho/deletar/<?=$i?>">excluir</a></td>

    </tr>
    <?php
}

    print_r($produtos);
    ?>
</table>


