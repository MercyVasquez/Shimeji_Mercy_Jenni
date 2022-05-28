<?php
$ID = $_POST['id'];
$name = $_POST['name'];
$gmail = $_POST['gmail'];
$pass = $_POST['pass'];
$rol = $_POST['rol'];
//actualiza usuarios
require("connect.php");
$query ="UPDATE `user_shimeji` SET name='$name',gmail='$gmail',pass='$pass',rol='$rol' WHERE id='$id'"; 
mysqli_query($con, $query) or die(mysqli_error($con));
echo '<script language="javascript">alert("Actualizacion completa");</script> ';
echo "<script>location.href='user'</script>";
?>