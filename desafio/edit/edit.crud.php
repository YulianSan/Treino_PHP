<?php 
    require_once "../dog.php";
    require_once "../dogFile.php";
    
    $nome = htmlspecialchars($_POST["nome"], ENT_QUOTES);
    $id = filter_var($_POST["id"], FILTER_VALIDATE_INT);
    $raca = htmlspecialchars($_POST["raca"], ENT_QUOTES);
    $key = filter_var($_POST["index"], FILTER_VALIDATE_INT);

    $dogAlter = new DogBase($nome, $raca, $id);

    DogFile::put($dogAlter, $key);
    
    

?>