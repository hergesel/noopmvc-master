<form action="<?=@$acao?>" method="POST">
    nome do cupom:  <input type="text" name="nomecupom" value="<?=@$cupom['nomecupom']?>">
    desconto:  <input type="text" name="desconto" value="<?=@$cupom['desconto']?>">
    <button type="submit">Enviar</button>
</form>