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
            <form class="inputs-container" action="EliminaM.php" method="post">
                <input class="input" type="text"  placeholder="Nombre" required name="name">
                <input class="input" type="number"  placeholder="Volumen" required name="volum">
                <input class="input" type="text" name="edito" id="" placeholder="Editorial" required>
                <p>Cambiar un manga? <span class="span">Click aqui <a href="ActualizaM">+</a></span></p>
                <button class="btn" >Eliminar</button>
                <p>Mangas existentes? <span class="span">Click aqui <a href="Mangas">+</a></span></p>
            </form>
          </div>
      </div>
</body>
</html>