<?php

//dd($_POST);
//echo $_GET['login'];

$array = null;
parse_str($_SERVER['QUERY_STRING'], $array);

//dd($array);

dd(http_build_query($array));

die();

$login = filter_input(INPUT_GET, 'login', FILTER_SANITIZE_STRING);
$SENHA = FILTER_VAR($post['senha'], FILTER_SANITIZE_NUMBER_FLOAT);

if(isset($_POST['login']))
    echo $_POST['login'];


function dd($p = [])
{
    echo '<pre>';
    print_r($p);
    echo '</pre>';
}
