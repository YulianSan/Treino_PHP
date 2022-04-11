<?php
    $Singed="Mono Singed";
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
    echo str_replace("Monó","Mono",$Singed)."<br>";//troca uma string de um texto por outra string, parametros: valor a ser substituido, valor que substitui, string

    $arrayStr = explode(" ",$Singed);
    // var_dump($arrayStr);

    echo (str_contains($Singed, "Singed")?"TRUE":"FALSE")."<br>";//procura em uma string se tem uma palavra, se sim retorna 1 se não retorna 0, parametros: string, palavra a ser procurada

    echo match (true){//faz uma procura dentro desse escopo por um valor igual que está dentro do parenteses, 
        //retorna o valor que é igual ao parenteses, valor é aquele que está depois da seta
        1<0 => "Que louco",
        1==2 => "Mais louco ainda",
        1==1 => "Ai sim"
    };

    echo "<br>";

    echo match("Yuli"){//pode fazer uma procura por varias strings
        "Yulia" =>"não é eu",
        "Santiago" => "Esse é meu segundo nome",
        "Yulian" => "Eu msm",
        default => "Erro: vc errou"//um valor default
    };