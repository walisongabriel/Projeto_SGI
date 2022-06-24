<?php
    session_start();
    include ('conectar_banco.php');

    //verificando se os campos estão vazios
    if(empty($_POST['email']) || empty($_POST['senha'])){
        die('<h1>Os campos email e senha estão vazios! <a href="index.php">VOLTAR</a> </h1>');
    }

    //pegando os dados digitados nos campos de login
    $usuario = $mysqli->real_escape_string($_POST['email']);
    $senha = $mysqli->real_escape_string($_POST['senha']);

    //Fazendo a busca no banco de dados dos dados identicos aos digitados
    $query = "SELECT * FROM clientes WHERE email = '$usuario' AND senha = '$senha'";
    $result = $mysqli->query($query);

    //buscando no banco de dados o nome referente ao usuario do email e a senha do login
    $nome_query = "SELECT nome FROM clientes WHERE email = '$usuario' AND senha = '$senha'";
    $nome_result = $mysqli->query($nome_query);
    $cliente = $result->fetch_assoc();
    $nome = $cliente['nome'];
    echo $nome;

    //fazendo a validação e login dos dados recebidos 
    $quantidade = $result->num_rows;
    if($quantidade == 1){
        $_SESSION['usuario'] = $nome; //colocando o nome do cliente logado para aparecer como usuario logado
        header('location: banco_de_dados.php');
        exit();
    }else{
        die('Login ou senha invalidos! <a href="index.php">VOLTAR</a>');
    }
    
?>