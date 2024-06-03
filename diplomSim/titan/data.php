<?php

$mysql = new mysqli('localhost', 'root', '', 'titan_bd');
$guns_list = $mysql -> query("SELECT * FROM `weapons` 
WHERE 1");