<?php
    session_start();
    include ('verificaLogin.php');
    include ('conectar_banco.php');
    

    $result = $mysqli->query("select * from clientes");
   

    while ($cliente = $result->fetch_assoc()) {
        //print_r($cliente);
        $listaClientes .= '<tr>
        <td>'.$cliente['nome'].'</td>
        <td>'.$cliente['cpf'].'</td>
        <td>'.$cliente['celular'].'</td>
        <td>'.$cliente['email'].'</td>
        <td>'.$cliente['status'].'</td>
        <td ><a class="btn text-white btn-warning p-1 m-0 " " href="/php/ver.php?cliente_id='.$cliente['id'].'"> Ver </a></td>
        
    </tr>';
    }
?>

<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Adicionando o bootstrap ao projeto -->
    <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <script src="../javaScript/BancoDeDados.js"></script>
    <title>SGI-CLIENTES</title>
    <style>
    </style>
</head>
<body onload="EsconderBotao()">
    <header class="container-flex ">
        <div class="row justify-content-between m-0">
            <div class="col-4 col-sm-2 d-flex DivTituloCabecalho justify-content-center">
                <h1 class="TituloCabecalho  ">SGI</h1>
            </div>
            <div class="col-2 col-md-2 d-flex justify-content-end DivUsuarioLogado">
                <span  class="align-self-center SpanUsuarioLogado"><strong><?php echo $_SESSION['usuario'];?></strong></span>
                <span  onclick="Sair()" class="align-self-center SpanImg"><img src="../imagens/person.svg" alt=""></span>
            </div>
        </div>
    </header>
    <main class="container-flex ">
        <div class="row m-0 Conteudos">
            <div class="d-none d-md-block col-md-2  AreaLateral d-flex">
                <span><img src="../imagens/person.svg" alt=""></span>
                <a href="banco_de_dados.php">Clientes</a>
            </div>
            <div class="col-12 col-sm-12 col-md-10 CorpoSistema">
                <div class="d-flex justify-content-between Botoes">
                    <h3>Clientes</h3>
                    <div>
                        <a id="BotaoSair" class="btn btn-outline-dark  " href="deslogar.php">Sair</a>
                        <a  class="btn btn-warning BotaoCadastrar align-self-center " href="cadastro.php"><strong>+</strong></a>
                    </div>

                </div>
                <div class=" table-responsive AreaTabela">
                    <table class="table Tabela">
                        <thead class="bg-dark cabecalhoTabela">
                            <tr>
                                <th class="BordaDireita">NOME COMPLETO</th>
                                <th>CPF</th>
                                <th>CELULAR</th>
                                <th>E-MAIL</th>
                                <th>STATUS</th>
                                <th class="BordaEsquerda">AÇÃO</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php echo $listaClientes; ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
        
    </main>
    
    <!--Adicionando o js do bootstrap ao projeto -->
    <script src="../bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>