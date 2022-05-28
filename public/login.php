<?php
require ("connect.php");

$gmail = $_POST['gmail'];
$pass = $_POST['pass'];

$sql = $con -> query("SELECT * FROM user_shimeji WHERE gmail='$gmail' AND rol='User'"); // cuenta normal
$sql1 = $con -> query("SELECT * FROM user_shimeji WHERE gmail='$gmail' AND rol='Admin'"); //cuenta admi



foreach($sql1 as $f){
    if ($pass==$f['pass']){
        header("Location: user"); // cuenta normal entra aqui
    } else {
        echo '<script> alert("CONTRASENA INCORRECTA")</script>';
        echo "<script>location.href='Login'</script>";
    }
}
foreach($sql as $f){
    if ($pass==$f['pass']){
        header("Location: Inicio"); // cuenta admi entra aqui
    } else {
        echo '<script> alert("CONTRASENA INCORRECTA")</script>';
        echo "<script>location.href='Login'</script>";
    }
}
if (empty($f)){
    echo '<script> alert("ESTE USUARIO NO EXISTE, POR FAVOR REGISTRESE PARA PODER INGRESAR")</script>'; // no existe cuenta
    echo "<script>location.href='Login'</script>";
}