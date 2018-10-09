<form action="<?=@$acao?>" method="POST">
    nome: <input type="text" name="nome" value="<?=@$usuario['nome']?>">
    email: <input type="text" name="email" value="<?=@$usuario['email']?>">
    senha: <input type="text" name="senha" value="<?=@$usuario['senha']?>">
    cpf: <input type="text" name="cpf" value="<?=@$usuario['cpf']?>">
    data de nascimento: <input type="text" name="nascimento" value="<?=@$usuario['nascimento']?>">
    telefone: <input type="text" name="telefone" value="<?=@$usuario['telefone']?>">
    endereço: <input type="text" name="endereco" value="<?=@$usuario['endereco']?>">
    <select name="sexo">
        <option value="m" <?=@assinalarCampo($usuario['sexo'], 'm')?>>Masculino</option>
        <option value="f" <?=@assinalarCampo($usuario['sexo'], 'f')?>>Feminino</option>
    </select>
    tipo: <input type="text" name="tipo" value="<?=@$usuario['tipo']?>">
    <button type="submit">Enviar</button>
</form>