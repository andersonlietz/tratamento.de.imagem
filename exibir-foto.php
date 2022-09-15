<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css" type="text/css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main id="especial">
    <?php
    function is_jpg($name){
        return substr( $name, -4 ) === '.jpg';
    }
    $fotos = scandir('img');

  foreach($fotos as $f){
if(is_jpg($f)){
        echo '<img src="img/'.$f.'"/>';
   }
}



?>
<a href="excluir.php"><button>Excluir</button></a>
</main>
</body>
</html>