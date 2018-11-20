<?php

function conn() {
    $cnx = mysqli_connect("localhost", "id341893_livrariausuario", "", "id341893_livraria");
    if (!$cnx) die('Deu errado a conexao!');
    return $cnx;
}