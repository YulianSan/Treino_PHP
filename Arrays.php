<style>
    *{
        font-family: Arial, Helvetica, sans-serif;
    }
</style>
<?php
    $Singed = array();
    $Singed[]="Primeiro";// adiciona no final do array
    echo $Singed[0]. "<br>";
    var_dump($Singed);//mostra os dados do array

    $Singed["nome"]="Careca";// Além de números para indicar indices pode se usar strings
    echo "<br>".$Singed['nome']."<br>";
    $Singed["idade"]=17;
    $Tamanho = count($Singed);
    echo $Tamanho."<br>";

    foreach ($Singed as $key => $value) {// aqui em php vc primeiro fala o Array que quer percorrer, diferente que no js, $key é a chave, $value o valor, pode fazer sem o $key colocando apenas o $value
        echo $key.": ".$value."<br>";
    }

    //Funções para Array
    if(is_array($Singed))://ve se é um array
        echo "<br>é um array";
    else:
        echo "<br>Não é um array";
    endif;

    //in_array, ve se existe um determinado valor no array
    echo "<br>". (in_array("Mintira",$Singed) ? "True" : "False")."<br>";
    
    $keys_singed = array_keys($Singed);//retorna os indices de um array
    var_dump($keys_singed);

    $new_Singed = array_values($Singed);// clona os valores, mas não passa os indices
    echo "<br>";
    var_dump($new_Singed);

    echo "<br>";
    $fusao = array_merge($new_Singed,$Singed);//junta dois arrays
    var_dump($fusao);
    
    echo "<br>";
    array_pop($Singed);//exclui o ultimo indice
    
    var_dump($Singed);

    //shift exclui o primeiro elemento de um array 
    //unshift adiciona no primeiro indice de um array EX: array_unshift($array,$value,$value2) pode ser mais de um valor
    //push adiciona no final de um array

    $somar = array(1,2,3,4,5,6,7,8);
    $somarS = array(2,3,4,5,6,7,8,9);
    echo "<br>".array_sum($somar)."<br>";
    $stringAleatoria="Me falta força, me falta hospedagem gratuita";
    print_r(explode(" ",$stringAleatoria));//separador e a string, transforma a string em array
    echo "<br>";
    print_r(implode(", ",$Singed));//junta elemento de um array, estando entre ele o separador que vc indicar, transforma array em string
    echo join(", ",$somar)."<br />"."<br />";//o mesmo que implode
    
    $soma1 = array_map(function($v, $v2){//muito parecido com o map do js, map sempre retorna um array, diferenças: não da para pegar o indice, da para usar mais de um array como o exemplo aqui
        return $v+$v2;
    },$somar, $somarS);
    foreach ($soma1 as $value):
        echo $value."<br />";
    endforeach;
    