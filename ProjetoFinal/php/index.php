
<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Adicionando o bootstrap ao projeto -->
    <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <script src="../javaScript/login.js"></script>
    <title>SGI-Login</title>
    <style>
    </style>
</head>
<body class="body_login">

    <main class="container ">
        
        <div class="row justify-content-center vh-100">
            <div class=" area_form col-sm-6 col-md-4 align-self-center  pb-4" >
                <h1 class="text-center display-3"><strong>SGI</strong></h1>
                <p class="font-weight-bold mb-0"><strong>Bem Vindo!</strong></p>
                <span><?php echo($erro);?></span>
                <form action="autenticarLogin.php" method="post" class="form-group "  onsubmit="return ValidaLogin()">
                    <label id="label_usuario"><strong>Login</strong></label> <br>
                    <input type="email" class="form-control" name="email" id="email_login"> <br>
                    <label id="label_senha"><strong>Senha</strong></label> <br>
                    <input type="password" class="form-control" name="senha" id="senha_login"><br>
                    <input type="submit" class="form-control btn btn-info" value="Login">
                    <span ><?php echo $erro?></span>
                </form>
            </div>
        </div>
        
    </main>
    
    <!--Adicionando o js do bootstrap ao projeto -->
    <script src="bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>