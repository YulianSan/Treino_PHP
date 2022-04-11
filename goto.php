<?php
    goto a;//vamos para é sua tradução, elel indica para o "a", pula parte do codigo e vai direto para o a: ja embaixo
    echo 'Foo';

    a:
    echo 'Bar';

    goto b;
    echo 'Você não será exibido';
    b: 
    echo "Eu vou";

    for($i=0;$i<10;$i++){
        if($i===3){
            goto c;//tamber faz voltar parte do codigo
        }
    }
    echo "Oi";

    c: 
    echo "Olá goto";