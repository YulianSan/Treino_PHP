<?php 
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Cache-Control, Pragma, Authorization, Accept, Accept-Encoding");

    header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
    header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past

    if( file_exists("./xmlTeste.xml")):    
        $xml = simplexml_load_file("./xmlTeste.xml"); // abre o arquivo xml

        // echo $xml->asXML(); // retorna uma string do xml

        // foreach( $xml->children() as $nsei){
        //     echo "<br />";
        //     echo "<br />";
        //     echo "<br />";
        //     echo "<br />";
        //     var_dump($nsei) ; 

        //     foreach( $nsei->children() as $outronsei){
        //         echo "<br />";
        //         echo "<br />";
            
        //         var_dump($outronsei) ; 
        //     }

        // }

        http_response_code(200); // passa o status do request
        echo $xml->asXML();
        // echo json_encode($xml); // json
    else:
        http_response_code(400);
    endif;
?>