function EsconderBotao(){
    document.getElementById('BotaoSair').style.display = 'none';
}

function Sair(){
    var display = document.getElementById('BotaoSair').style.display;
    if(display == "none" ){
        document.getElementById('BotaoSair').style.display = 'inline-block';
    }else{
        document.getElementById('BotaoSair').style.display = 'none';
    }
}