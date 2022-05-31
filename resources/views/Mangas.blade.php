<?php
require("connect.php");

$consulta = "SELECT * FROM manga";
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
            <th scope="col">Volumen</th>
            <th scope="col">Autor</th>
            <th scope="col">Editorial</th>
            <th scope="col">Stock</th>
            <th scope="col">Precio</th>
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
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['volumen']; ?></td>
            <td><?php echo $row['creador']; ?></td>
            <td><?php echo $row['editorial']; ?></td>
            <td><?php echo $row['stock']; ?></td>
            <td><?php echo $row['precio']; ?></td>
            <td class="red"> <a href="EliminaM">Eliminar</a></td>
            <td class="green"><a href="ActualizaM">Actualizar</a> </td>

        </tr>
        
        </tbody>
        <?php
        }
 
        ?>
    </table>
    </div>

</body>
</html>