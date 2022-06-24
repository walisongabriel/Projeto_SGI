<?php
    include 'funcoes.php';
    include 'conectar_banco.php';

    //Validação do formulario
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        //Validação dos dados recebidos no campo nome
        $nome = ucwords($_POST["nome"]);
        $nome = limpaPost($nome); // limpando, retirando caracteres invalidos
        if(empty($nome) || strlen($nome) < 8){
            die('Por favor, digite seu nome completo');
            return false;
        }
        //Validação do campo data
        $data = $_POST["data"];
        if(empty($data)) {
            die('Por favor, informe a data de nascimento!');
            return false;
        }else{
            $data = limpaPost($data);
            if(strlen($data) < 10){
                die('Por favor, informe a data correta, no formato DD/MM/AAAA!');
                return false;
            }

        }
        //Validação do campo genero
        $genero = $_POST["genero"];
        if(empty($genero)){
            die('Por favor, informe o genero que você se considera!');
            return false;
        }
        //Validação do cpf
        $cpf  = $_POST["cpf"];
        if(empty($cpf)){
            die('O campo CPF está vazio!');
            return false;
        }else{
            $cpf = limpaPost($cpf);
            if(strlen($cpf) < 11){
                die('Por favor, informe um CPF valido!');
                return false;
            }
        }
        //Validação do celular
        $celular = $_POST["celular"];
        if(empty($celular) ){
            die('O campo celular está vazio!');
            return false;
        }else{
            $celular = limpaPost($celular);
            if( strlen($celular) < 11){
                die('Por favor, informe um celular valido, contendo DDD e nono digito!');
                return false;
            }
            
        }
        //Validação do email
        $email = $_POST["email"];
        if(empty($email)){
            $erroEmail = false;
            die('Preencha o campo e-mail!');
        }else{

            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                die('Digite um email valido!');
                return false;
            }else{
                $email = limpaPost($email);
                //Verificando se o email ja consta cadastrado no banco de dados, caso esteja não sera permitido o cadastro
                $query = "SELECT * FROM clientes WHERE email = '$email'";
                $result = $mysqli->query($query);
                $quantidade = $result->num_rows;
                if($quantidade == 1){
                    die('Este e-mail já se encontra cadastrado, por favor tente com outro email caso este não pertença a você!');
                }
            }
        }
        //validação de senha------------------------------------------
        $senha = $_POST["senha"];
        if(empty($senha)){
            die('Por favor informe uma senha!');
            return false;
        }else{
            $senha = limpaPost($senha);
            if(strlen($senha) < 6){
                die('A senha deve conter entre 06 e 12 caracteres!');
                return false;
            }
        }
        //Validação do campo status
        $status = $_POST["status"];
        if(empty($status)){
            die('Por favor, informe o status do cliente!');
            return false;
        }
        
        $mysqli->query("insert into clientes (`nome`, `cpf`, `celular`, `email`, `status`, `genero`, `nascimento`, `senha`) values ('".ucwords($_POST['nome'])."','".$_POST['cpf']."','".$_POST['celular']."','".$_POST['email']."','".$_POST['status']."','".$_POST['genero']."','".$_POST['data']."','".$_POST['senha']."')");
        
        header('location:banco_de_dados.php');
    }

    


?>