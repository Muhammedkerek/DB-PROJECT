<?php 
$host = "localhost";
$port = "5432";
$dbname = "main";
$user = "postgres";
$password = "Muhammed123"; 
$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
$dbconn = pg_connect($connection_string);     
?>