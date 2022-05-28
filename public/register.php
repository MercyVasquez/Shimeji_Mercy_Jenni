<?php
$name = $_POST['name'];
$gmail = $_POST['gmail'];
$pass = $_POST['pass'];
$rpass = $_POST['rpass'];


require("connect.php");
$checkemail= $con->query("SELECT * from `user_shimeji` WHERE gmail='$gmail'"); // revisa si el gmail existe
foreach($checkemail as $check_mail) {}


if($pass==$rpass){
    if(!empty($check_mail)){
        echo '<script language="javascript">alert("Atencion, ya existe el mail designado para un usuario, verifique sus datos");</script> ';
        // si existe no entra
    }else{
   $query ="INSERT INTO `user_shimeji` VALUES(id, '$name', '$gmail', '$pass',rol)"; // crea un usuario
    mysqli_query($con, $query) or die(mysqli_error($con));
    echo '<script language="javascript">alert("Usuario guardado con éxito");</script> '; 
    echo "<script>location.href='Login'</script>";
}
}else{
    echo '<script>alert("Las contraseñas son incorrectas");</script>'; // si las contrasenas estan mal no entra
}

?>