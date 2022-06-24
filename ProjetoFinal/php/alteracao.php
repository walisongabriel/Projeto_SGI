<?php
    include 'conectar_banco.php';

    $mysqli->query("update clientes set nome = '".ucwords($_POST['nome'])."', cpf = '".$_POST['cpf']."', celular = '".$_POST['celular']."', email = '".$_POST['email']."', status = '".$_POST['status']."', genero = '".$_POST['genero']."', nascimento = '".$_POST['data']."' where id= " .$_POST['cliente_id']);
   
    header('location:banco_de_dados.php');

?>