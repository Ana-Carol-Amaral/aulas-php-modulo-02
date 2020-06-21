'use strict'
document.getElementById('frmCadastro').addEventListener('submit', function(event) { 
    
    var obj = {
        nome: getValue('txtNome'),
        email: getValue('txtEmail'),
        fone: getValue('txtFone'),
        assunto: getValue('txtAssunto'),
        mensagem: getValue('txtMessage')
    };

    if (!validar(obj))
        event.preventDefault();
});

function validar(obj){

    if(obj.nome.length == " " || obj.nome.length < 2){
        alert('Nome inválido! No min 3 e no máx 50.');
        return false;
    }

    if(obj.email.length == " " || obj.email.length < 6 || obj.email.indexOf('@') <= 0 || obj.email.indexOf('.') <= 0){
        alert('E-mail inválido!');
        return false;
    }

    if(obj.fone.length == " " || obj.fone.length < 14){
        alert('Telefone inválido');
        return false;
    }

    if(obj.assunto.length == " " || obj.assunto < 1 || obj.assunto > 4){
        alert('Assunto inválido! Por favor, escolha uma das opções.');
        return false;
    }

    if(obj.mensagem.length == " " || obj.mensagem.length < 10 || obj.mensagem.length > 500){
        alert('Insira uma mensagem entre 10 à 500 caracteres.')
        return false;
    }

    return true;
}

function getValue(element){
    return document.getElementById(element).value;
}

