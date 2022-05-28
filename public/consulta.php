<?php
require("connect.php");

$consulta = "SELECT * FROM shimejimj";
$query = mysqli_query($con,$consulta);
$array = mysqli_fetch_array($query);
?>