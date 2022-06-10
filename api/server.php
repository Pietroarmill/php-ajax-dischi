<?php
include __DIR__ ."/../database.php";
$json_data = json_encode($database);
header("Content-Type: application/json"); 
echo $json_data;
?>