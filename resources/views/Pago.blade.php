<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pago</title>
    <script src="https://kit.fontawesome.com/4437f1e5d2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="pago.css">
    <link rel="stylesheet" href="{{asset('css/pago.css')}}">
</head>
<body>
    <div class="wrapper">
        <h2>Metodo de pago</h2>
        <form action="" method="POST">
  <!--Aqui va  la cosita esa larga que se llena :D-->

  <h4>Cuenta</h4>
  <div class="input_group">
      <div class="input_box">
          <input type="text" placeholder="Nombre Completo" required class="name">
          <i class="fa-solid fa-child-reaching icon"></i>
      </div>
      <div class="input_box">
          <input type="text" placeholder="Tarejta" required class="name">
          <i class="fa-solid fa-address-card icon"></i>
      </div>
  </div>
  <div class="input_group">
      <div class="input_box">
          <input type="email" placeholder="Email" required class="name">
          <i class="fa-solid fa-envelope-open-text icon"></i>
      </div>
  </div>
  <div class="input_group">
      <div class="input_box">
          <input type="text" placeholder="Direccion" required class="name">
          <i class="fa-solid fa-address-book icon"></i>
      </div>
  </div>
  <div class="input_group">
      <div class="input_box">
          <input type="text" placeholder="Ciudad" required class="name">
          <i class="fa-solid fa-city icon"></i>
       </div>
  </div>

   <!--Aqui va el cumple y genero-->
   <div class="input_group">
    <div class="input_box">
        <h4>Fecha de cumpleaños</h4>
        <input type="text" placeholder="Dia" required class="dob">
        <input type="text" placeholder="Mes" required class="dob">
        <input type="text" placeholder="Año" required class="dob">
    </div>
    <div class="input_box">
        <h4>Genero</h4>
        <input type="radio" name="gender" class="radio" id="b1" checked>
        <label for="b1">Hombre</label>
        <input type="radio" name="gender" class="radio" id="b2">
        <label for="b2">Mujer</label>
    </div>
</div>
    <!--Aqui va todo lo de la tarjeta-->
    <div class="input_group">
        <div class="input_box">
            <h4>Detalles del pago</h4>
            <input type="radio" name="pay" class="radio" id="bc1" checked>
            <label for="bc1"><span>
                    <i class="fa fa-cc-visa"></i>Credito</span></label>
            <input type="radio" name="pay" class="radio" id="bc2">
            <label for="bc2"><span>
                    <i class="fa fa-cc-paypal"></i>Paypal</span></label>
        </div>
    </div>

    <div class="input_group">
        <div class="input_box">
            <input type="tel" name="" class="name" placeholder="Numero de tarjeta 1111-2222-3333-4444" required>
            <i class="fa-solid fa-credit-card icon"></i>
        </div>
    </div>
    <div class="input_group">
        <div class="input_box">
            <input type="tel" name="" class="name" placeholder="CVC 632" required>
            <i class="fa-solid fa-user icon"></i>
        </div>
    </div>
    <div class="input_group">
        <div class="input_box">
            <div class="input_box">
                <input type="number" placeholder="Mes Exp" required class="name">
                <i class="fa-solid fa-calendar icon"></i>
            </div>
        </div>
        <div class="input_box">
            <input type="number" placeholder="Year Exp" required class="name">
            <i class="fa-solid fa-calendar-days icon"></i>
        </div>
    </div>
    <div class="input_box">
        <input type="number" placeholder="Cantidad" required class="name">
        <i class="fa-solid fa-money-bill icon"></i>
    </div>
    <!--Payment Details End-->

    <div class="input_group">
        <div class="input_box">
            <button type="submit">Pagar ahora</button>
        </div>
    </div>

</form>
</div>

</body>

</html>
