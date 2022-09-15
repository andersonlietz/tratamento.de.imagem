<?php
$fotos = scandir('img/');
if(unlink('img/'.$f.'')){ 
    echo "Removido com sucesso!"; 
    header("location: index.php");
    } else { 
    echo "Erro ao remover!";
    }
