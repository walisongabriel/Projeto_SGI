<?php 
    session_start();
    include ('autenticaLogin.php');

    function limpaPost($valor){
        $valor = trim($valor);
        $valor = stripcslashes($valor);
        $valor = htmlspecialchars($valor);
        return $valor;
    }


?>