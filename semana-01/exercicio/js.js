'use strict'

function validar(){
    var nome = document.getElementById("txtNome");
    var email = document.getElementById("txEmail");
    var fone = document.getElementById("txtFone");
    var assunto = document.getElementById("txtAssunto");
    var mensagem = document.getElementById("txtMessage");
     
    if(nome.length == "" || nome.length < 3 || nome.length > 50){
        alert('Nome inválido! No min 3 e no máx 50.');
        nome.focus();
        return false;
    }

    if((email.length == "" || email.length < 5 || email.length > 100) || !/.+?\@.+?\..+/.test(email)) {
        alert('E-mail inválido!');
        email.focus();
        return false;
    }

    if((fone.length == "") || !/^\\([0-9]{2}\\)((3[0-9]{7})|(9[0-9]{8}))$/.test(fone)) {
        alert('Telefone inválido!');
        fone.focus();
        return false;
    }

    if(assunto.length == "" || assunto.length != 1 || assunto.length != 2 || assunto.length != 3 || assunto.length != 4){
        alert('Assunto inválido! Por favor, escolha uma das opções.');
        assunto.focus();
        return false;
    }

    if(mensagem.length == "" || mensagem.length < 10){
        alert('Insira uma mensagem de, pelo menos, 10 caracteres!');
        mensagem.focus();
        return false;
    }

    return true;
}