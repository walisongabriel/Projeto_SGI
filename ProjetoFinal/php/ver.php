<?php
    session_start();
    include ('verificaLogin.php');
    include 'conectar_banco.php';
    

    $result = $mysqli->query("select * from clientes where id= ".$_GET['cliente_id']);
    $cliente = $result->fetch_assoc();
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
    <script src="../javascript/ver.js"></script>
    <title>SGI-VER</title>
    <style>
    </style>
</head>
<body onload="EsconderBotao()">
    <header class="container-flex ">
        <div class="row justify-content-between m-0">
            <div class="col-4 col-sm-2  d-flex DivTituloCabecalho justify-content-center">
                <h1 class="TituloCabecalho  ">SGI</h1>
            </div>
            <div class="col-2 col-sm-2 d-flex justify-content-end DivUsuarioLogado">
                <span class="align-self-center SpanUsuarioLogado"><strong><?php echo $_SESSION['usuario'];?></strong></span>
                <span onclick="Sair()" class="align-self-center SpanImg"><img src="../imagens/person.svg" alt=""></span>
            </div>
        </div>
    </header>
    <main class="container-flex ">
        <div class="row m-0 Conteudos  ">
            <div class="d-none d-sm-block col-sm-2 col-md-2  AreaLateral  d-flex">
                <span><img src="../imagens/person.svg" alt=""></span>
                <a href="banco_de_dados.php">Clientes</a>
            </div>
            <div class="col-12 col-sm-10 col-md-10   CorpoSistema">
                <div class="d-flex justify-content-between Botoes">
                    <h3>VER / EDITAR</h3>
                    <div>
                        <a id="BotaoSair" class="btn btn-outline-dark  " href="deslogar.php">Sair</a>
                        <a  class="btn btn-warning BotaoCadastrar align-self-center " href="banco_de_dados.php"><strong><</strong></a>
                    </div>
                </div>
                <div class=" container AreaFormularioCadastro  p-0">
                    <form action="alteracao.php" method="post" class="form-group" onsubmit=" return ValidaAlteracao()">
                        <h4>CLIENTE</h4>
                        <div class="row d-flex justify-content-between m-0 p-0">
                            <!-- linha 1 de formularios -->
                            <div class=" col-12 col-sm-6 col-lg-3">
                                <label>Nome completo</label><br>
                                <input class="form-control" type="text" value="<?php echo $cliente['nome'];?>" name="nome" id="nome_alt" onblur="MascaraNome()">
                            </div>
                            <div class=" col-12 col-sm-6 col-lg-3 ">
                                <label>Data de Nascimento</label><br>
                                <input class="form-control" type="date" value="<?php echo $cliente['nascimento'];?>" name="data" id="data_alt" onblur="MascaraData()">
                            </div>
                            <div class=" col-12 col-sm-6 col-lg-3">
                                <label>Genero</label> <br>
                                <select class="form-control" name="genero" id="genero_alt">
                                    <option value="<?php echo strtolower($cliente['genero']);?>"><?php echo $cliente['genero'];?></option>
                                    <option value="masculino">Masculino</option>
                                    <option value="feminino">Feminino</option>
                                </select>
                            </div>
                            <div class=" col-12 col-sm-6 col-lg-3">
                                <label>CPF</label> <br>
                                <input class="form-control" type="text"  value="<?php echo $cliente['cpf'];?>" name="cpf" id="cpf_alt" maxlength="14" onkeyup="MascaraCpf()">
                            </div>
                        </div>
                        <!--Linha 2 de formularios -->
                        <div class="row justify-content-between m-0 p-0">
                            <div class=" col-12 col-sm-6 col-lg-3">
                                <label>Celular</label> <br>
                                <input class="form-control" type="text" value="<?php echo $cliente['celular'];?>" name="celular" id="celular_alt" onkeyup="mascara_celular()"onfocus="AdicionaCampoParentese()" onblur="MascaraCelular2()" >
                            </div>
                            <div class=" col-12 col-sm-6 col-lg-3">
                                <label>E-mail</label> <br>
                                <input class="form-control" type="email" value="<?php echo $cliente['email'];?>" name="email" id="email_alt" onblur="ValidarEmail()">
                            </div>
                            <div class=" col-12 col-sm-6 col-lg-3">
                                <label>Senha</label> <br>
                                <input class="form-control" type="password" id="senha_alt" placeholder="******" disabled>
                            </div>
                            <div class=" col-12 col-sm-6 col-lg-3">
                                <label>Status</label> <br>
                                <select class="form-control" name="status" id="status_alt">
                                    <option value="<?php echo strtolower($cliente['status']);?>"><?php echo $cliente['status'];?></option>
                                    <option value="ativo">Ativo</option>
                                    <option value="inativo">Inativo</option>
                                </select>
                                <input type="hidden" name="cliente_id" value="<?php echo $cliente['id'];?>" >
                            </div>
                        </div>
                        <div class="row d-flex justify-content-between  m-0 p-0">
                            <div class="col-7 col-md-8 MsgErro">
                                <span id="msg_erro"></span>
                            </div>
                            <div class="col-5 col-md-3 col-lg-2 ">
                                <input class="form-control btn btn-warning BotaoSalvarCadastro mb-4" type="submit" value="Salvar" id="SalvarCadastro">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </main>
    
    <!--Adicionando o js do bootstrap ao projeto -->
    <script src="../bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>