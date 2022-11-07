<?php

    $content = $_POST['content'];
    $title = $_POST['title'];

    file_put_contents("$title.doc", $content);
?>
