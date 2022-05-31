<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/inicioAdmin.css')}}">
    <link rel="stylesheet" href="{{asset('gif/ed1.gif')}}"> 
    <title>InicioA</title>
</head>
<body>
    <section>
        <div class="circle"></div>
        <header>
            <a href="" class="logo"><img src="./image/Logopepe.png"></a>
            <ul>
                <li><a href="user">Usuarios</a></li>
                <li><a href="Login">Login</a></li>
            </ul>
         </header>
         <div class="content">
             <div class="textBox">
                 <h2>Tu parada de manga <span> Favorita.</span></h2>
             <p>Bienvenido administrador, esta seccion esta encargada del manejo de usuarios y manejo de productos existentes en la tienda virtual de nuestra empresa llamada Shimeji rd encargada de la distribucion de mangas/manhuas/manwhuas.
            </p>
            <a href="Mangas">Productos</a>
        </div>       
            <div class="imgBox">
                <img src="./image/loguito.png" class="Hongito">
            </div> 
            </div>
            <ul class="thumb">
                <li><img src="./image/loguito.png" onclick="imgSlider('./image/loguito.png')"></img></li>
                <li><img src="./image/ed1.gif" onclick="imgSlider('./image/ed1.gif')"></img></li>
                <li><img src="./image/ed2.gif" onclick="imgSlider('./image/ed2.gif')"></img></li>
                <li><img src="./image/ed3.gif" onclick="imgSlider('./image/ed3.gif')"></img></li>

            </ul>
    </section>
<script type="text/javascript">
    function imgSlider(anything){
        document.querySelector('.Hongito').src = anything
    }
</script>
</body>
</html>