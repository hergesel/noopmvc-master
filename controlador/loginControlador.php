<?php

/** anon */
function index() {
    if (ehPost()) {
        $login = $_POST["login"];
        $passwd = $_POST["passwd"];
        if (authLogin($login, $passwd)){

            $tipo = authGetUserRole();
            if  ($tipo == "user") {
                alert("bem vindo" . $login);
                redirecionar("inicial");
            } elseif ($tipo == "admin")  {
                alert("bem vindo" . $login);
                redirecionar("produto");;
            }
        } else {
            alert("usuario ou senha invalidos!");
        }   
    }
    exibir("login/index");
}

/** anon */
function logout() {
    authLogout();
    alert("deslogado com sucesso!");
    redirecionar("usuario");
}

?>