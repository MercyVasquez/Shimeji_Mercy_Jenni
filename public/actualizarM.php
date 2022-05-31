<?php
$id = $_POST['id'];
$name = $_POST['name'];
$volum = $_POST['volum'];
$autor = $_POST['autor'];
$edito = $_POST['edito'];
$stock = $_POST['stock'];
$precio = $_POST['precio'];
 //actualiza mangas
require("connect.php");
$query ="UPDATE `manga` SET nombre='$name',volumen='$volum',creador='$autor',editorial='$edito',stock='$stock',precio='$precio' WHERE id='$id'"; 
mysqli_query($con, $query) or die(mysqli_error($con));
echo '<script language="javascript">alert("Actualizacion completa");</script> ';
echo "<script>location.href='Mangas'</script>";
?>