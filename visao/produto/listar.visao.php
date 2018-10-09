<h2>Listar produtos</h2>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>DESCRICAO</th>
            <th>DEPARTAMENTO</th>
            <th>PRECO</th>
            <th>VIEW</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
    </thead>
    <?php foreach ($produtos as $produto): ?>
    <tr>
        <td><?=$produto['id']?></td>
        <td><?=$produto['descricao']?></td>
        <td><?=$produto['departamento']?></td>
        <td><?=$produto['preco']?></td>
        <td><a href="./produto/visualizar/<?=$produto['id']?>" class="btn btn-secondary">view</a></td>
        <td><a href="./produto/editar/<?=$produto['id']?>" class="btn btn-info">edit</a></td>
        <td><a href="./produto/deletar/<?=$produto['id']?>" class="btn btn-danger">del</a></td>
    </tr>
    <?php endforeach; ?>
</table>


<a href="./produto/adicionar" class="btn btn-primary">Adicionar novo produto</a>

