function EsconderBotao(){
    document.getElementById('BotaoSair').style.display = 'none';
}
//ocultação do botao de sair ao ser clicado
function Sair(){
    var display = document.getElementById('BotaoSair').style.display;
    if(display == "none" ){
        document.getElementById('BotaoSair').style.display = 'inline-block';
    }else{
        document.getElementById('BotaoSair').style.display = 'none';
    }
}

// MASCARAS  DO FORMULARIO DE CADASTROS DOS CLIENTES-------------------------------------------

//Adiciona os pontos e traço no cpf durante o preenchimento
function mascara_cpf(){
    var cpf = document.getElementById('cpf_cadastro')
    if(cpf.value.length == 3){
        cpf.value +='.'
    }if(cpf.value.length == 7){
        cpf.value +='.'
    }if(cpf.value.length == 11){
        cpf.value +='-'
    }
    if(cpf.value.length == 14){
        document.getElementById('label_cpf').style.color = 'black'
        document.getElementById('msg_erro').innerHTML = ''
    }
}

//muda cor da fonte apos a data perder o foco caso a mesma esteja preenchida
function MascaraData(){
    if(document.getElementById('data_cadastro').value.length == 10){
        document.getElementById('label_data').style.color = 'black'
        document.getElementById('msg_erro').innerHTML = ''
    }else{
        document.getElementById('label_data').style.color = 'red'
        document.getElementById('msg_erro').innerHTML = 'Por favor, informe a data de nascimento!'
    }
}

//define a cor do campo quando o mesmo perder o foco, se esta ou não preenchido
function MascaraGenero(){
    if(document.getElementById('genero_cadastro').value == 'masculino' || document.getElementById('genero_cadastro').value == 'feminino') {
        document.getElementById('label_genero').style.color = 'black'
        document.getElementById('msg_erro').innerHTML = ''
    }else{
        document.getElementById('label_genero').style.color = 'red'
        document.getElementById('msg_erro').innerHTML = 'Por favor, informe o gênero que você se identifica!'
    }
}

//adiciona o primeiro parenteses do ddd no input do celular
function AdicionaCampoParentese(){
    var celular = document.getElementById('celular_cadastro').value;
    if(celular == ""){
        document.getElementById('celular_cadastro').value = '('
    }
    
    
}

//adiciona parenteses e espaços no numero de telefone durante o preenchimento
function mascara_celular(){
    var celular = document.getElementById('celular_cadastro');
    if(celular.value.length == 3) {
        celular.value += ')'
    }if(celular.value.length == 5) {
        celular.value += ' '
    }
    if(celular.value.length == 10) {
        celular.value += '-'
    }
    if (celular.value.length == 15){
        document.getElementById('label_celular').style.color = 'black'
        document.getElementById('msg_erro').innerHTML = ''
    }
    
}

//caso o campo celular não esteja completo ao perder o foco, o mesmo sera limpo
function MascaraCelular2(){
    if(document.getElementById('celular_cadastro').value.length < 4){
        document.getElementById('celular_cadastro').value = "";
    }
    else{
        document.getElementById('msg_erro').innerHTML = 'Por favor, informe um celular valido!'
        document.getElementById('label_celular').style.color = 'red'
    }
}


//mascara de email, limpa o campo caso não esteja completo quando perde o fof  do mouse 
function ValidarEmail(){
    if(document.getElementById('email_cadastro').value.length > 3){
        document.getElementById('msg_erro').innerHTML = ''
        document.getElementById('label_email').style.color = 'black'
    }else{
        document.getElementById('msg_erro').innerHTML = 'Por favor, informe um e-mail valido!'
        document.getElementById('label_email').style.color = 'red'
    }
}

//Muda a cor do campo quando perder o foco caso a senha esteja de acordo com o solicitado
function MascaraSenha(){
    if(document.getElementById('senha_cadastro').value.length >= 6){
        document.getElementById('label_senha').style.color ='black'
        document.getElementById('msg_erro').innerHTML = ''
    }
    else{
        document.getElementById('label_senha').style.color ='red'
        document.getElementById('msg_erro').innerHTML = 'Sua senha deve conter entre 6 e 12 caracteres!'
    }
}

//Muda a cor do campo quando perder o foco de acordo com o solicitado
function MascaraStatus(){
    if(document.getElementById('status_cadastro').value == 'ativo' || document.getElementById('status_cadastro').value == 'inativo' ){
        document.getElementById('label_status').style.color = ' black'
        document.getElementById('msg_erro').innerHTML = ''
    }else{
        document.getElementById('label_status').style.color = ' red'
        document.getElementById('msg_erro').innerHTML = 'Por favor, inform o status do cliente!'
    }


}

// muda a cor do campo nome de acordo com o solicitado quando o mesmo perde o foco
function ValidarNome(){
    if(document.getElementById('nome_cadastro').value.length >= 8){
        document.getElementById('label_nome').style.color = 'black'
        document.getElementById('msg_erro').innerHTML = ''
    }else{
        document.getElementById('label_nome').style.color = 'red'
        document.getElementById('msg_erro').innerHTML = 'Por favor, informe seu nome completo!'
    }
}

//VALIDAÇÃO DO FORMULARIO
//A validação ocorre no momento em que se clica no botão salvar, e so sera postado caso tudo esteja de acordo com o solicitado nos campos
function ValidaFormulario(){
    //validação do nome----------------------------------------------------
    var nome = document.getElementById('nome_cadastro').value;
    if( nome  == '' || nome.length < 8){
        document.getElementById('label_nome').style.color = 'red';
        document.getElementById('msg_erro').innerHTML = 'Por favor, informe seu nome completo!'
        document.getElementById('nome_cadastro').focus();
        //console.log(nome.length)
        return false;
    }

    //validação da data de nascimento--------------------------------------
    var data = document.getElementById('data_cadastro').value;
    if(data.length < 10){
        document.getElementById('label_data').style.color = 'red';
        document.getElementById('msg_erro').innerHTML = 'Por favor, informe sua data de nascimento!'
        document.getElementById('data_cadastro').focus();
        console.log(data.length)
        return false;
    }

    //Validação do gênero---------------------------------------------------
    var genero = document.getElementById('genero_cadastro').value;
    if( genero == ""){
        document.getElementById('label_genero').style.color = 'red';
        document.getElementById('genero_cadastro').focus();
        return false;
    }
    //-------------------------------------------------VALIDAÇÃO DE CPF-------------------------------------------------------
    var cpf = document.getElementById('cpf_cadastro').value;
    cpf = cpf.replace(/\./g, "").replace(/\-/, "");
    // var primeiro = cpf[0];
    // let diferente = false;
    if(cpf == "" || cpf.length < 11){
        document.getElementById('label_cpf').style.color = 'red'
        document.getElementById('msg_erro').innerHTML = 'Por favor, informe um CPF valido!'
        document.getElementById('cpf_cadastro').focus()
        return false;
    }else{//Validação primeiro verificador
        var soma = 0;
        for(var i = 0; i < 9; i++){
            soma += cpf[i] * (10 - i);
        }
        console.log(cpf)
        soma = (soma * 10) % 11;
        if(soma == 10 || soma == 11){
            soma = 0;
            
        }
        if(soma != cpf[9]){
            alert('erro')
            return false;
        }
        //validação do segundo verificador caso o primeiro esteja correto
        else{
            console.log(soma)
            var soma2 = 0;
            for(var i = 0; i < 10; i++){
                soma2 += cpf[i] * (11  - i);
            }
            soma2 = (soma2 * 10) % 11;
            console.log(soma2)
            if(soma2 == 10 || soma2 == 11){
                soma2 = 0;
            }
            if(soma2 != cpf[10]){
                document.getElementById('msg_erro').innerHTML = 'Por favor, informe um CPF valido'
                return false;
            }
            else{
    
            }
            
        }
    }

    //Validação de celular
    var celular = document.getElementById('celular_cadastro').value;
    if(celular == "" || celular.length < 15){
        document.getElementById('label_celular').style.color = 'red'; 
        document.getElementById('msg_erro').innerHTML = 'Por favor, informe seu número de celular!'
        document.getElementById('celular_cadastro').focus();
        return false;
    }

    //Validação de email
    var email = document.getElementById('email_cadastro').value
    if( email == "" || email.indexOf('@') == -1 || email.indexOf('.') == -1 ){
        document.getElementById('label_email').style.color = 'red'
        document.getElementById('msg_erro').innerHTML = 'Por favor, informe um e-mail valido!'
        return false;
    }
    
    //Validação de senha 
    var senha = document.getElementById('senha_cadastro').value
    if(senha.length < 6){
        document.getElementById('label_senha').style.color = 'red'
        document.getElementById('msg_erro').innerHTML = 'Sua senha deve conter de 06 a 12 caracteres!'
        return false;
    }

    //Validaçaõ status
   var status = document.getElementById('status_cadastro').value
   if(status == ""){
    document.getElementById('msg_erro').innerHTML = 'Por favor, informe o status do cliente!'
    document.getElementById('label_status').style.color = 'red'
    return false;
   }
    
}




