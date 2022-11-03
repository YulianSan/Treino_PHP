<?php 
    require_once "../dog.php";
    require_once "../dogFile.php";
    
    $nome = htmlspecialchars($_GET["nome"], ENT_QUOTES);
    $raca = htmlspecialchars($_GET["raca"], ENT_QUOTES);

    $newDog = new DogBase($nome, $raca);

    DogFile::push($newDog);

    header("Location: ../index.php");
    
    

?>