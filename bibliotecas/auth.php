<?php
require "modelo/usuarioModelo.php";


define('AUTENTICADOR', true);

function authLogin($login, $passwd) {



    $usuario = pegarUsuarioPorEmailESenha($login, $passwd);

   

    if ($login === $usuario["email"] && $passwd == $usuario["senha"]) {
        $_SESSION["auth"] = array("user" => $usuario, "role" => $usuario["tipo"]);
        return true;
    }//elseif ($login != $usuario["email"] && $passwd == $usuario["senha"])
    return false;
}

function authIsLoggedIn() {
    return isset($_SESSION["auth"]);
}

function authLogout() {
    if (isset($_SESSION["auth"])) {
        $_SESSION["auth"] = null;
        unset($_SESSION["auth"]);
    }
}

function authGetUserRole() {
    if (authIsLoggedIn()) {
        return $_SESSION["auth"]["role"];
    }
}

function authGetUserId() {
    if (authIsLoggedIn()) {
        return $_SESSION["auth"]["id"];
    }
}