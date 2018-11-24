<?php

function conn() {
    $cnx = mysqli_connect("https://livrarialegal.000webhostapp.com/", "root", "", "livraria");
    if (!$cnx) die('Deu errado a conexao!');
    return $cnx;
}