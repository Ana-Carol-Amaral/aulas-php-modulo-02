<?php
//criamos um cookie
setcookie('nome', 'Ana Carolina', null, '/');

//Destrói a cookie
//setcookie('nome', 'Ana Carolina', time() + 3600, '/');

//Forma alternativa
//$_COOKIE['nome'] = 'teste';

//Verifica se o índice existe
if (isset($_COOKIE['nome'])) {
    //Exibe o valor da cookie
    echo $_COOKIE['nome'];
}

?>