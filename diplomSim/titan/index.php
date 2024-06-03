<?php

require_once("data.php");
require_once("render-Template.php");

$header_content = renderTemplate('templates/header.php', ['guns' => $guns_list]);

$page_content = renderTemplate('templates/main.php', ['guns' => $guns_list]);

$layout_content = renderTemplate('templates/layout.php', ['title' => "Titan",'content' => $page_content, 'header' => $header_content]);

echo $layout_content;