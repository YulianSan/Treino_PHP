<?php
list(,$img_string) = explode('base64,',$_POST['img']);

$img = fopen('/img/img'. uniqid() . '.png', 'w+');
fwrite($img, base64_decode($img_string));
fclose($img);

header('Location: index.php');