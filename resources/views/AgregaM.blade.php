<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link rel="stylesheet" href="{{asset('css/registro.css')}}">
    <link rel="stylesheet" href="{{asset('img')}}"> 
    <title>ShimejiRD</title>

</head>
<body>
      <div class="login-container">
          <div class="login-info-container">
            <h1 class="title">Agregar</h1>
            <p>Agrega tu historia</p>
            <form class="inputs-container" action="mangas.php" method="POST">
            @csrf
                <input class="input" type="text" placeholder="Nombre" name="name" required>
                <input class="input" type="number" placeholder="Volumen" name="volum" required>
                <input class="input" type="text"placeholder="Autor" name="autor" required>
                <input class="input" type="text" placeholder="Editorial" name="edito" required>
                <input class="input" type="number" placeholder="Cant. en stock" name="stock" required>
                <input class="input" type="number"placeholder="Precio" name="precio" required>
                <p>Ver los existentes? <span class="span">Click aqui<a href="Mangas"> +</a></span></p>
                <button class="btn" type="submit">Agregar</button>
                <p>Eliminar manga? <span class="span">Click aqui<a href="EliminaM"> +</a></span></p>
            </form>
          </div>
            <img class="image-container" src="image/registerimage.jpg" alt="">
      </div>

</body>
</html>