<?php 
$db_host = 'localhost';
$db_user = 'root';
$db_name = 'placement';
$db_pass = '';

$mysqli = new mysqli($db_host,$db_user,$db_pass,$db_name);

if($mysqli->connect_error){

printf("Connecct failed: %s\n",$mysqli->connect_error);
}

 ?>