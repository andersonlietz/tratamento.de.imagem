<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tratamento de Imagem</title>
</head>
<body>
    <header>

<h1>Tratamento de Imagem</h1>
    </header>
    <main>
<?php 

function is_jpg($name){
    return substr( $name, -4 ) === '.jpg';
}

if(array_key_exists('arquivo', $_FILES)){
    $f = $_FILES['arquivo'];
    if(!is_jpg($f['name'])){
        echo '<p style="color: red">Erro! Envie apenas JPGs</p>';
    } else {
        rename($f['tmp_name'],'./img/' . date('U') . $f['name']);
    }
}
?>

<h1>Adicione uma foto: </h1>
<form enctype="multipart/form-data" method="POST">
    
    <input name="arquivo" type="file" />
    <a href="resultado.php"><button type="submit">Enviar</button></a>
</form>
<?php
$fotos = scandir('img');
foreach($fotos as $f){
    if(is_jpg($f)){
        echo '<img src="/img/'.$f.'" width="300" "height:auto"/>';
    }
}
?>
</main>
<footer>
    &copy; Tratamento de Imagens
</footer>
</body>
</html>


