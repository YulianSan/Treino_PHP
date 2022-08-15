<?php 
    // para validar um dado use FILTER_VALIDATE_ o tipo de dado
    // como IP, EMAIL, DOMAIN entre outros

    // como tem acentuação ele retorna falso
    $email = filter_var( "Yúlian@gmail.com", FILTER_VALIDATE_EMAIL ); 
    var_dump( $email ); // @return falso

    echo "<br />";
    // aqui diferente do anterior ele apenas retira os acentos e retorna o resto
    $email = filter_var( "Yúlian@gmail.com" ,FILTER_SANITIZE_EMAIL );
    var_dump( $email ); // @return Ylian@gmail.com

    echo "<br />";
    // aqui ele filtra o html
    $html = filter_var( "<p> Olá Mundo </p>", FILTER_SANITIZE_SPECIAL_CHARS );
    var_dump( $html );
    
    echo "<br />";
    // retira todu que pode ser de ruim para uma string
    $string = filter_var( "<p> Olá Mundo </p>", FILTER_SANITIZE_STRING );
    echo $string; // @return Olá Mundo

    echo "<br />";
    // isso impede o XSS, que é executar scripts indesejados
    $XSS = htmlspecialchars("<script> alert('Sou hacker') </script> ", ENT_QUOTES, 'UTF-8'); 
    echo $XSS;
    echo "<script> alert('Sou hacker') </script> "; // se n filtar ele ira executar o script
?>