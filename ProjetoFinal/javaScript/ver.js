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

//Verificando se teve alteração no nome apos perder o foco
function MascaraNome(){
    var nome_alt = document.getElementById('nome_alt').value;
    var nome_alt = document.getElementById('nome_alt').value;
    if(nome_alt.length > 8){
        document.getElementById('msg_erro').innerHTML = ''
    }
}

//Verificando se teve alteração na Data apos perder o foco
function MascaraData(){
    var data_alt = document.getElementById('data_alt').value;
    if(data_alt.length == 10){
        document.getElementById('msg_erro').innerHTML = ''
        //alert(data_alt)
    }
}

//Verificando se houve alteração no campo CPF
function MascaraCpf(){
    var cpf_alt = document.getElementById('cpf_alt');
    if(cpf_alt.value.length == 3){
        cpf_alt.value +='.'
    }if(cpf_alt.value.length == 7){
        cpf_alt.value +='.'
    }if(cpf_alt.value.length == 11){
        cpf_alt.value +='-'
    }
    if(cpf_alt.value.length == 14){
        document.getElementById('msg_erro').innerHTML = ''
    }
}
//Verificar alterações no celular e adicionar todas as mascaras necessarias no campo do input-------------------------------
//adiciona o primeiro parentese no campo de preenchimento do input ao receber o foco
function AdicionaCampoParentese(){ 
    var celular_alt = document.getElementById('celular_alt').value;
    if(celular_alt.value == ""){
        document.getElementById('celular_alt').value = '('
    }
    
    
}
//adiciona o segundo parentese do DDD o espaço apos o 9 e o traço no numero
function mascara_celular(){
    var celular_alt = document.getElementById('celular_alt');
    if(celular_alt.value.length == 3) {
        celular_alt.value += ')'
    }if(celular_alt.value.length == 5) {
        celular_alt.value += ' '
    }
    if(celular_alt.value.length == 10) {
        celular_alt.value += '-'
    }
    if (celular_alt.value.length == 15){
        document.getElementById('msg_erro').innerHTML = ''
    }
}
//Caso o usuario apenas entre no campo mas não o preencha por completo, ele apaga o primeiro parentese do ddd, pois so tera ele
function MascaraCelular2(){
    if(document.getElementById('celular_alt').value.length <= 2){
        document.getElementById('celular_alt').value = "";
    }
}

//Mascara e verificação se houve mudança no campo email
//mascara de email
function ValidarEmail(){
    var email_alt = document.getElementById('email_alt').value;
    if(email_alt.value.length > 3){
        document.getElementById('msg_erro').innerHTML = ''
    }
}



//-----------------------------VALIDAÇÃO GERAL DO FORMULARIO DE UPDATE------------------------------
function ValidaAlteracao(){
    
    //validação do nome na hora de submeter o formulario, caso tenha algum tipo de alteração no campo
    var nome = document.getElementById('nome_alt').value;
    if(nome.value != nome_alt.value){
        if(nome_alt.value.length < 8 || nome_alt.value == "" ){
            document.getElementById('msg_erro').innerHTML = 'O campo nome está sendo alterado para um valor invalido!'
            document.getElementById('nome_alt').focus();
            return false;
        }
    }

    //Validação da data caso tenha algum tipo de alteração
    var data = document.getElementById('data_alt').value;
    if(data.value != data_alt.value){
        if(data_alt.value.length < 10 || data_alt.value == ""){
            document.getElementById('msg_erro').innerHTML = 'O campo Data está sendo alterado para um valor invalido!'
            return false;
        }
    }

    //Validação do campo CPF caso tenha alguma alteração
    var cpf = document.getElementById('cpf_alt').value;
    cpf = cpf.replace(/\./g, "").replace(/\-/, "");
    if(cpf == "" || cpf.length < 11){
        document.getElementById('msg_erro').innerHTML = 'Por favor, informe um CPF valido!'
        document.getElementById('cpf_alt').focus()
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
            document.getElementById('msg_erro').innerHTML = 'Por favor, informe um CPF valido!'
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

    //Validação do celular
    var celular = document.getElementById('celular_alt').value;
    if(celular.value != celular_alt){ 
        if(celular_alt.value.length < 15 || celular_alt.value == ""){
            document.getElementById('msg_erro').innerHTML = 'Por favor, informe um número de celular valido!'
            document.getElementById('celular_alt').focus();
            return false;
        }
    }

    //Validação de email
    var email = document.getElementById('email_alt').value;
    if(email.value != email_alt.value){
        if( email_alt.value == "" || email_alt.value.indexOf('@') == -1 || email_alt.value.indexOf('.') == -1 ){
            document.getElementById('msg_erro').innerHTML = 'Por favor, informe um e-mail valido!'
            return false;
        }
        
    }

    //Validaçaõ status
    var status = document.getElementById('status_cadastro').value
    if(status == ""){
        document.getElementById('msg_erro').innerHTML = 'Por favor, informe o status do cliente!'
    }

    
}
 