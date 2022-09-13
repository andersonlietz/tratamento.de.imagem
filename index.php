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