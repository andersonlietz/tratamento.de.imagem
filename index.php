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

    <h1>Adicione uma foto: </h1>
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
        rename($f['tmp_name'], 'img/' . date('U') . $f['name']);
        header("location: exibir-foto.php");
    }
}
?>


<form enctype="multipart/form-data" method="POST">
    
    <input name="arquivo" type="file" />
    <button type="submit">Enviar</button>
</form>
<?php
$fotos = scandir('img');
//echo "<pre>";
//print_r ($fotos);
//echo "</pre>";

/*foreach($fotos as $f){
    if(is_jpg($f)){
        echo '<img src= img/'.$f.'>';
    }
} */
?>
</main>
<footer>
    &copy; Tratamento de Imagens
</footer>
</body>
</html>


