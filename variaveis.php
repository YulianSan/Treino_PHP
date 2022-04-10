<?php
    $Singed = "123";
    if(is_string($Singed)){// is ve se é uma tipo de variável EX: is_int, is_bool
        echo $Singed.="100" ."<br>"; // msm sendo string ele soma os valores, . contadena, + soma
        echo $Singed;
    }
    $Singed = (int) $Singed;// converte o valor em int
    
    if(is_int($Singed)){
        echo $Singed+100 . "<br>";
    }
    $Singed=1;
    $Singed = (bool) $Singed;
    echo $Singed;
    $Singed = "<br>Sou variável de escopo global";
    //unset($Singed); // destrói a variável
    
    function getSinged(){
        echo $GLOBALS['Singed'];
    }
    getSinged();
    