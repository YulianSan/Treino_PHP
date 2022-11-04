<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        font-family: Arial, Helvetica, sans-serif;
    }
</style>
<body>
    <?php
    $array = [];
    $fator = $_GET['factor'];
    
    function createArray($v){
        global $array;
        if(count($array) > 39) return;
        
        array_push($array, $v);
        createArray(($v + 1));
        
    }
    createArray(1);
    
    function isMultiple($v){
        global $fator;
        
        if($v % $fator == 0){
            return $v . " Is multiple of $fator";
        }
        return $v;
    }
    
    function showMultiplies(){
        global $array;
        
        
        $array_multiples = array_map('isMultiple', $array);
        foreach($array_multiples as $key => $value){
            echo "[$key] => $value <br />";
        }
    }

    showMultiplies();
    ?>



</body>
</html>