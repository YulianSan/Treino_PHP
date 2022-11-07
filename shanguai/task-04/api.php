<?php
    $page = 1;
    $length = 10;
    if(isset($_GET['page'])) $page = $_GET['page'];
    if(isset($_GET['length'])) $page = min( $_GET['length'], 10);
    
    $json_data = file_get_contents('data.json');
    $array_data = json_decode($json_data);

    $res = array_slice($array_data, ($page - 1) * 10, $length);
    $res = json_encode($res);
    echo $res;
?>