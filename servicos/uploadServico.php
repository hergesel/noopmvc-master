<?php

function uploadImagem ($arquivo, $caminhoImagem = "publico/upload/imagens/") {
		$imagemtmp = $arquivo["tmp_name"];
		$imagem = basename($arquivo["name"]);
		move_uploaded_file($imagemtmp, $caminhoImagem. $imagem);
		$diretorio = $caminhoImagem. $imagem;
		return $diretorio;
	}
        
?>