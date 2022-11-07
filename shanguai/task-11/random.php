<?php

    $n_colunas = rand(5, 15);
    $array_nomes = $array_dados = ['andrey','bianca','camille','daiane','esdras','felipe','giovana','henrique','iara','julia','kerollayne','lucas','maria','naiara','osvaldo'];
    $array_dados = [];

    for ($i = 0; $i < $n_colunas; $i++) { 
        $array_dados[$i]['nome']  = $array_nomes[$i]; 
        $array_dados[$i]['valor'] = rand(500,0);
    }

    echo json_encode( $array_dados);


?>