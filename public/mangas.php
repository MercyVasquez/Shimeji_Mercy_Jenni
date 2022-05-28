<?php
$name = $_POST['name'];
$volum = $_POST['volum'];
$autor = $_POST['autor'];
$edito = $_POST['edito'];
$stock = $_POST['stock'];
$precio = $_POST['precio'];


require("connect.php");
$checkemail= $con->query("SELECT * from `mangas` WHERE nombre='$name' AND volumen='$volum' AND editorial='$edito'"); //revisa si el registro existe
foreach($checkemail as $check_mail) {}


    if(!empty($check_mail)){
        echo '<script language="javascript">alert("Atencion, este el manga existe, verifique sus datos");</script> ';
        echo "<script>location.href='AgregaM'</script>";
    }else{
   $query ="INSERT INTO `mangas` VALUES(id, '$name', '$volum', '$autor','$edito', '$stock', '$precio')"; 
    mysqli_query($con, $query) or die(mysqli_error($con));
    echo '<script language="javascript">alert("Manga guardado con éxito");</script> '; //manga guardado
    echo "<script>location.href='Mangas'</script>";
    }
?>