<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('php/actualizar.php')}}">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <title>ShimejiRD</title>
</head>
<body>
    <div class="login-container">
        <img class="image-container" src="image/actualiza.jpg" alt="">
          <div class="login-info-container">
            <h1 class="title">Actualizar</h1>
            <p>¿Me vas a cambiar?</p>
            <form class="inputs-container" action="actualizar.php" method="post">
            <input class="input" type="number" name="id" id="" placeholder="ID" required>
            <input class="input" type="text" name="name" id="" placeholder="Nombre" required>
            <input class="input" type="email" name="gmail" id="" placeholder="Correo" required>
            <input class="input" type="password" name="pass" id="" placeholder="Contrasena" required>
            <input class="input" type="text" name="rol" id="" placeholder="Rol" required>
                <p>Eliminar usuario? <span class="span">Click aqui<a href="Eliminar"> +</a></span></p>
                <button class="btn" >Actualiza</button>
                <p>Ver los existentes? <span class="span">Click aqui<a href="user"> +</a></span></p>
            </form>
          </div>
      </div>
</body>
</html>