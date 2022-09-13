<?php
require_once 'index.php';
$fotos = scandir('img');

    if(is_jpg($f)){
        echo '<img src="/img/'.$f.'" width="300"/>';
    }