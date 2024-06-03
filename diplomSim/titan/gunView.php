<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<style>
    *{
        color: black;
    }
</style>
<?php

require_once("data.php");
require_once("render-Template.php");

$id = $_GET["id"];

$header_content = renderTemplate('templates/header.php', ['guns' => $guns_list]);

foreach($guns_list as $gun){
    if($gun['id'] == $id)
        $page_content = renderTemplate('templates/weapon.php', ['gun' => $gun]);
}

$layout_content = renderTemplate('templates/layout.php', ['content' => $page_content, 'header' => $header_content]);

echo $layout_content;
