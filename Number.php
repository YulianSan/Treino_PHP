<style>
    *{
        font-family:Arial;
    }
</style>
<?php
    $Singed= 1000230.5090;
    echo number_format($Singed,2,",",".");//forma um número, parâmetros: numero, número de casas decimais, separador decimal, separador por mil
    echo "<br>";

    echo rand(1,100);//gera um número aleatorio, parâmetros: menor número possível, maior número possível
    echo "<br>";

    echo round($Singed);//arredonda um número, parâmetros: número

