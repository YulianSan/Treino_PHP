<?php 
    $json_contacs_content = implode( "" ,file("contacts.json") );
    $json_contacs = fopen("contacts.json", "w+");
    
    $decode_contacs = json_decode($json_contacs_content);
    $decode_contacs[] = array( "operation"=> "acess", "time" => date('h:i:s')); 

    $json_contacs_content = str_replace( "{", PHP_EOL . "\t{" , json_encode($decode_contacs));

    fwrite($json_contacs, $json_contacs_content);
    fclose($json_contacs);
?>