<?php
    require_once "C:/xampp/htdocs/Treino_PHP/desafio/config.php"; 
    require_once $base."/dogFile.php";

    $id = (int) $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);
    
    DogFile::delete($id);

    header("Location: ../index.php");
?>