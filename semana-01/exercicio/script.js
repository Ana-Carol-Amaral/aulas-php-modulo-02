'use strict'

document.addEventListener('DOMContentLoaded', () => {
    document.getElementById('frmCadastro').addEventListener('submit', (event) => { 
        var obj = getAttributes();

        if (!validar(obj))
            event.preventDefault();
    });
});

function getAttributes(){
    return {
        nome: [getValue('txtNome'), 'txtNome'],
        email: [getValue('txtEmail'), 'txtEmail'],
        fone: [getValue('txtFone'), 'txtFone'],
        assunto: [getValue('txtAssunto'), 'txtAssunto'],
        mensagem: [getValue('txtMessage'), 'txtMessage']
    };
}

function validar(obj){
    let erros = [];

    if(obj.nome[0].length == "" || obj.nome[0].length < 3 || obj.nome[0].length > 50){
        erros.push('Nome inválido! No min 3 e no máx 50.');
        alert('Nome inválido! No min 3 e no máx 50.');
    }

    if((obj.email[0].length == "" || obj.email[0].length < 5 || obj.email[0].length > 100) || !/.+?\@.+?\..+/.test(obj.email[0])) {
        erros.push('E-mail inválido!');
        alert('E-mail inválido!');
    }

    if((obj.fone[0].length == "") || !/^\\([0-9]{2}\\)((3[0-9]{7})|(9[0-9]{8}))$/.test(obj.fone[0])) {
        erros.push('Telefone inválido!');
        alert('Telefone inválido!');
    }

    if(obj.assunto[0].length == "" || obj.assunto[0].length != 1 || obj.assunto[0].length != 2 || obj.assunto[0].length != 3 || obj.assunto[0].length != 4){
        erros.push('Assunto inválido! Por favor, escolha uma das opções.');
        alert('Assunto inválido! Por favor, escolha uma das opções.');
    }

    if(obj.mensagem[0].length == "" || obj.mensagem[0].length < 10){
        erros.push('Insira uma mensagem d,e pelo menos, 10 caracteres!');
        alert('Insira uma mensagem de, pelo menos, 10 caracteres!');
    }

    return true;
}

