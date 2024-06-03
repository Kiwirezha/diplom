<?php
$id = $_COOKIE['weapon_id'];
$mysql = new mysqli('localhost', 'root', '', 'titan_bd');
$mysql -> query("DELETE FROM `weapons`
WHERE `id` = '$id'");
$mysql -> close();
header('Location: ../../index.php');
