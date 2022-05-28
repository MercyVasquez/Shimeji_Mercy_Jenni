<?php
$name = $_POST['name'];
$volum = $_POST['volum'];
$edito = $_POST['edito'];

require("connect.php");
$query ="DELETE FROM `mangas` WHERE nombre='$name' AND volumen='$volum' AND editorial='$edito'"; //elimina un manga
mysqli_query($con, $query) or die(mysqli_error($con));
echo '<script language="javascript">alert("Se elimino con éxito");</script> ';
echo "<script>location.href='Mangas'</script>";
?>