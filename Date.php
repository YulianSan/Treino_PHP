<style>
    *{
        font-family:Arial;
    }
</style>
<?php 
    $Singed = date("d \of l \of F \of o");//cada letra significa uma coisa, "\" fala para ele n interpretar o caracter 
    echo $Singed;
    echo "<br>";

    $Data_a = new DateTime('2005-03-13 14:02:10');
    echo "<br>";
    echo $Data_a->format('d/m/Y H:i:s');//forma a data d significa dia, m mes, Y ano, H hora, i minutos, s segundos





