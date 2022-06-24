<?php
    session_start();
    include 'validar_cadastro.php';

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
    <script src="../javaScript/cadastro.js"></script>
    <title>SGI-CADASTRO</title>
    <style>
    </style>
</head>
<body onload="EsconderBotao()">
    <header class="container-flex ">
        <div class="row justify-content-between m-0">
            <div class="col-4 col-sm-2 d-flex DivTituloCabecalho justify-content-center">
                <h1 class="TituloCabecalho  ">SGI</h1>
            </div>
            <div class="col-2 col-sm-2  d-flex justify-content-end DivUsuarioLogado">
                <span class="align-self-center SpanUsuarioLogado"><strong><?php echo $_SESSION['usuario'];?></strong></span>
                <span onclick="Sair()" class="align-self-center SpanImg"><img src="../imagens/person.svg" alt=""></span>
            </div>
        </div>
    </header>
    <main class="container-flex ">
        <div class="row m-0 Conteudos ">
            <div class="d-none d-sm-block col-sm-2 col-md-2  AreaLateral  d-flex">
                <span><img src="../imagens/person.svg" alt=""></span>
                <a href="banco_de_dados.php">Clientes</a>
            </div>
            <div class="col-12 col-sm-10 col-md-10   CorpoSistema">
                <div class="d-flex justify-content-between Botoes">
                    <h3>CADASTRO</h3>
                    <div>
                        <a id="BotaoSair" class="btn btn-outline-dark  " href="deslogar.php">Sair</a>
                        <a  class="btn btn-warning BotaoCadastrar align-self-center " href="banco_de_dados.php"><strong><</strong></a>
                    </div>
                </div>
                <div class=" container AreaFormularioCadastro  p-0">
                    <form action="validar_cadastro.php" method="post" class="form-group" id="formulario_cadastro" name="Formulario" 
                    onsubmit="  return ValidaFormulario()">
                        <h4>Cadastrar clientes</h4>
                        <div class="row d-flex justify-content-between m-0 p-0">
                            <!-- linha 1 de formularios -->
                            <div class=" col-12 col-sm-6 col-lg-3">
                                <label id="label_nome">Nome completo</label><br>
                                <input class="form-control" type="text" name="nome" id="nome_cadastro" autocomplete="off" onkeyup="ValidarNome()">
                            </div>
                            <div class=" col-12 col-sm-6 col-lg-3 ">
                                <label id="label_data">Data de Nascimento</label><br>
                                <input class="form-control" type="date" name="data" id="data_cadastro" maxlength="10" onkeyup="MascaraData()">
                            </div>
                            <div class=" col-12 col-sm-6 col-lg-3">
                                <label id="label_genero">Genero</label> <br>
                                <select class="form-control" name="genero" id="genero_cadastro" onblur="MascaraGenero()">
                                    <option value="">selecione</option>
                                    <option value="masculino">Masculino</option>
                                    <option value="feminino">Feminino</option>
                                </select>
                            </div>
                            <div class=" col-12 col-sm-6 col-lg-3">
                                <label id="label_cpf">CPF</label> <br>
                                <input class="form-control" type="text" name="cpf" id="cpf_cadastro" placeholder="000.000.000-00" maxlength="14" autocomplete="off" onkeyup="mascara_cpf()">
                            </div>
                        </div>
                        <!--Linha 2 de formularios -->
                        <div class="row justify-content-between m-0 p-0">
                            <div class=" col-12 col-sm-6 col-lg-3">
                                <label id="label_celular">Celular</label> <br>
                                <input class="form-control" type="text" name="celular"  id="celular_cadastro" maxlength="15" autocomplete="off" onkeyup="mascara_celular()" onfocus="AdicionaCampoParentese()" onblur="MascaraCelular2()">
                            </div>
                            <div class=" col-12 col-sm-6 col-lg-3">
                                <label id="label_email">E-mail</label> <br>
                                <input class="form-control" type="email" name="email" id="email_cadastro" placeholder="exemplo@email.com.br"
                                onkeyup="ValidarEmail()">
                            </div>
                            <div class=" col-12 col-sm-6 col-lg-3">
                                <label id="label_senha">Senha</label> <br>
                                <input class="form-control" type="password" name="senha" id="senha_cadastro" placeholder="******" maxlength="12" onkeyup="MascaraSenha()" >
                            </div>
                            <div class=" col-12 col-sm-6 col-lg-3">
                                <label id="label_status">Status</label> <br>
                                <select class="form-control" name="status" id="status_cadastro" onblur="MascaraStatus()">
                                    <option value="">selecione</option>
                                    <option value="ativo">Ativo</option>
                                    <option value="inativo">Inativo</option>
                                </select>
                            </div>
                        </div>
                        <div class="row justify-content-between  m-0 p-0">
                            <div class="col-7 col-md-9 MsgErro">
                                <span id="msg_erro"><?php echo $msgErro;?></span>
                            </div>
                            <div class=" col-5 col-md-3 col-lg-2 item  ">
                                <input class="form-control btn btn-warning BotaoSalvarCadastro mb-3" type="submit" value="Salvar" id="botao_cadastro" name="Bt_salvar">
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