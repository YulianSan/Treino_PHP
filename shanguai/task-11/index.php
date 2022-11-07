<?php
    header("Content-Type: image/png");
    $content = json_decode( file_get_contents('http://localhost/treino_php/shanguai/task-11/random.php') );
    $width = 1400;
    $spaceX = ($width-150)/count($content);
    $spaceY = (790-70)/5;
    $img = imagecreate($width, 900);
    

    $black = imagecolorallocate($img, 0, 0, 0);
    $white = imagecolorallocate($img, 255, 255, 255);
    imagefilledrectangle($img, 0, 0, $width, 1000, $white);
    
    
    imageline($img, 30, 790, $width - 50, 790, $black);
    imageline($img, 70, 50, 70, 850, $black);

    for($i = 0; $i < count($content); $i++){
        $cor = imagecolorallocate($img, rand(0,255), rand(0,255), rand(0,255));
        imagefilledrectangle($img, 110 + ($i * $spaceX), (($spaceY * 5 - 110) - ($content[$i]->valor )), 110 + ($i * $spaceX) + $spaceX*2/3, 789, $cor);
        imagestring($img, 3, 110 + ($i * $spaceX), 800, $content[$i]->nome, $black);
        
    }

    for ($i=5; $i >= 0; $i--) { 

        imagestring($img, 3, 50, 100 + ( $spaceY * $i), strval( 500 - $i*100 ), $black);
    }


    imagepng($img);
    imagedestroy($img);
?>