<?php 
$host = "127.0.0.1";
$port = 3306;
$socket = "MySQL";
$user = "root";
$password = "mercy04";
$dbname = "shimejimj";
// conexion con la base de datos via workbench
$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
  or die ('Could not connect to the database server' . mysqli_connect_error());


?>