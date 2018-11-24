<form action="<?=@$acao?>" method="POST" enctype="multipart/form-data">
    descricao: <input type="text" name="descricao" value="<?=@$produto['descricao']?>">
    preco: <input type="text" name="preco" value="<?=@$produto['preco']?>">
    departamento: <input type="text" name="departamento" value="<?=@$produto['departamento']?>">
    imagem: <input type="file" name="imagem" value="" class="form-control">
    <button type="submit">Enviar</button>
</form>