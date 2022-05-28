<?php
require("connect.php");

$consulta = "SELECT * FROM user_shimeji";
$query = mysqli_query($con,$consulta);
$array = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('Img/ipisa.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/user.css')}}">
    <title>ShimejiRD</title>
</head>
<body>
    
<div >
    <table>
        <thead>
        <tr id="header">
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Gmail</th>
            <th scope="col">Contraseña</th>
            <th scope="col">Rol</th>
            <th></th>
            <th></th>

        </tr>
        </thead>
        <tbody id="datos">
        <?php
        foreach ($query as $row) {
        ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['gmail']; ?></td>
            <td><?php echo $row['pass']; ?></td>
            <td><?php echo $row['rol']; ?></td>
            <td class="red"> <a href="Eliminar">Eliminar</a></td>
            <td class="green"><a href="Actualizar">Actualizar</a> </td>

        </tr>
        
        </tbody>
        <?php
        }
 
        ?>
    </table>
    </div>

</body>
</html>