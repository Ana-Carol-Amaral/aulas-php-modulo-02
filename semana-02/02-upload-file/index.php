<?php
//date_default_timezone_set('America/Santa_Catarina');

$path = 'files/';

if (isset($_FILES['file'])) {
/*
    [name] => Nigui.jpg
    [type] => image/jpeg
    [tmp_name] => /tmp/phpHEfu6Q
    [error] => 0
    [size] => 1218794   = bytees
*/

    $mime = [
        'image/jpeg',
        'image/png',
        'image/jpg'
    ];

    $rename = true;

    //2MB > Bytes
    $maxSize = 2000000;

    $file = $_FILES['file'];

    /*
    echo '<pre>';
    print_r($file);
    die();
    */

    //Validando o MIME Type
    $type = mime_content_type($file['tmp_name']);
    if(!in_array($type, $mime)){
        echo 'MIME Type inválido!';
        return;
    }

    if($file['size'] > $maxSize){
        echo 'O arquivo é grande demais para ser enviado.';
        return;
    }

    $name = $_FILES['file']['name'];

    if($rename){
        //dia mês ano horas minuto segundos
        //Y = 2019 y = 19
    
        $ex = explode('.', $file['name']);
        $name = md5(date('dmYHis')) . '.' . end($ex); 
    }

    move_uploaded_file($_FILES['file']['tmp_name'], $path .$name);
    echo 'Arquivo enviado...';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploadfile</title>
</head>

<body>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="file" accept="image/*">
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>