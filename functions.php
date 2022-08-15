<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FUNÇÕES</title>
</head>
<body>
    

<?php
    function soma($v=1,$v2=1){
        return $v.$v2."<br />";
    }
    echo soma("oi","Oi");
    function soma1(int $v=1,int $v2=1){//fala o tipo de valor para cada parametro
        return $v.$v2;
    }
    
    try{
        throw new Error("Dado passado é uma string");//dispara um erro
        soma1("oi","Oi");// da um erro
        
    }catch(Error $e) {//trata o erro
        echo "Erro: $e";
    }//se passar uma string da erro

    function soma2(int $v=1,int $v2=1): int|string{//fala o tipo de valor para cada parametro, e o tipo de retorno, | significa ou, pode retornar um int ou string
        return "$v.$v2 OI";//se retornar outro valor da erro
    }
    soma2();
    echo "<br/>";
    var_dump(range(1,10,2));//cria um array começando com 1 e que termina em 10 e soma 2 em 2
    
    
    function hello()
    {
        yield "Stack Overlow";// yield retorna um valor e já prepara o outro para ser retornado
        yield "Mandioca";
        yield "Milho";
    }

    $gen = hello();//chama a function
    var_dump($gen->current());//pega o primeiro valor de yield
    $gen->next();//passa para o próximo yield
    var_dump($gen->current());//mostra o segundo valor

    echo "<br/>";
    $zero = 0;

    function alterarValor( &$v ){// & faz a variável ser usada
        $v++;
    }

    alterarValor($zero);// altera a variável passada
    echo $zero;

    function mostar(...$nome){
        foreach($nome as $value):
            echo "<br>Olá $value <br>";
        endforeach;
    }
    mostar("yulian","aisha");
?>
</body>
</html>    