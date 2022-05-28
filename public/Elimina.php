<?php
$email = $_POST['email'];

require("connect.php");
$query ="DELETE FROM `user_shimeji` WHERE gmail='$email'"; // elimina un usuario
mysqli_query($con, $query) or die(mysqli_error($con));
echo '<script language="javascript">alert("Se elimino con éxito");</script> ';
echo "<script>location.href='user'</script>";
?>