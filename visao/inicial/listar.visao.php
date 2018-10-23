<center><h1>Conheça nossos produtos!!</h1></center>

<table class="table">
    <?php foreach ($produtos as $produto): ?>
        <br>
        <h1><?=$produto['descricao']?></h1>
        <br>
        <h3><?=$produto['departamento']?></h3>
        <br>
        <h3><?=$produto['preco']?></h3>
        <br>
        <a href="./carrinho/adicionar/<?=$produto['id']?>" class="btn btn-secondary">Comprar</a>
        <br>
        <br>
    </tr>
    <?php endforeach; ?>
</table>


