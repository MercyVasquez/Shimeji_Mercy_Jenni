<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('php/datos.php')}}">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <title>ShimejiRD</title>
</head>
<body>
    <div class="login-container">
        <img class="image-container" src="image/elimina.jpg" alt="">
          <div class="login-info-container">
            <h1 class="title">Elimina</h1>
            <p>¿Eliminaras nuestros recuerdos?</p>
            <form class="inputs-container" action="Elimina.php" method="post">
                <input class="input" type="email"  placeholder="Correo" required name="email">
                <p>Cambiar un usuario? <span class="span">Click aqui <a href="Actualiza">+</a></span></p>
                <button class="btn" >Eliminar</button>
                <p>Usuarios existentes? <span class="span">Click aqui <a href="user">+</a></span></p>
            </form>
          </div>
      </div>
</body>
</html>