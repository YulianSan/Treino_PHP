<?php
    $Singed="Monó Singed";
    echo mb_strtoupper($Singed);//deixa tudo em caixa alta

    echo "<br>".mb_strtolower($Singed);//deixa em caixa baixa
    echo "<br>";


    echo mb_substr($Singed,5,3);//separa uma parte do texto, parametros: string, inicio, quantos caracteres
    echo "<br>";
    echo str_pad($Singed,20,"_");//faz a string ter um determminado tamanho, parametros:string, tamanho que vc quer, caracter que sera usado para preencher o tamanho

    echo "<br>";
    echo str_repeat($Singed,10);//repete uma string determinada quantidade de vezes, parametros:string, quantas vezes será repetida

    echo "<br>";
    echo mb_strlen($Singed);//mostra o tamanho da string, paramentros: string

    echo "<br>";
    echo str_replace("Monó","Mono",$Singed);//troca uma string de um texto por outra string, parametros: valor a ser substituido, valor que substitui, string

    $arrayStr = explode(" ",$Singed);
    var_dump($arrayStr);