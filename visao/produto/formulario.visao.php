<form action="<?=@$acao?>" method="POST">
    descricao: <input type="text" name="descricao" value="<?=@$produto['descricao']?>">
    preco: <input type="text" name="preco" value="<?=@$produto['preco']?>">
    departamento: <input type="text" name="departamento" value="<?=@$produto['departamento']?>">
    imagem: <input type="file" name="fileUpload" value="<?=@$produto['imagem']?> enctype="multipart/form-data">
    <button type="submit">Enviar</button>
</form>