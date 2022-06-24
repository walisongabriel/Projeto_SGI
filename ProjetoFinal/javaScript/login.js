function ValidaLogin(){
    var usuario = document.getElementById('email_login').value;
    var senha = document.getElementById('senha_login').value;
    //validação basica de email
    if( usuario == "" || usuario.indexOf('@') == -1 || usuario.indexOf('.') == -1 ){
        document.getElementById('label_usuario').style.color = 'red'
        document.getElementById('erroEmail').innerHTML = 'Por favor, informe um e-mail valido!'
        document.getElementById('email_login').focus();
        return false;
    }
    //validação basica de senha
    if(senha == ""){
        document.getElementById('label_senha').style.color = 'red'
        document.getElementById('erroSenha').innerHTML = 'O campo senha não pode estar vazio!'
        return false;
    }

}