<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/inicio.css')}}">
    <link rel="stylesheet" href="{{ asset('images/Login.png') }}"> 
    <link rel="shortcut icon" href="image/loguito.png" type="image/x-icon">
    <title>ShimejiRD</title>
 <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> -->
      <script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@300&display=swap" rel="stylesheet">
</head>

<body>
      <div class="container">

            <div class="left-col">

                  <div class="logo">ShimejiRD</div>

                  <div class="cover">
                  </div>

                  <div class="data">

                        <div class="album-name">
                        <p id="name">SHIMEJIRD</p>
                        </div>

                        <div class="album-artist">
                        <p id="artist">Cualquier historia que puedas imaginar</p>
                        </div>

                  </div>

                  <div class="block-cover"></div>

                  <div class="buy">
                        <a href="Login"><p id="mores">Login</p></a>
                        <a href="Registro"><p id="mores">Sign up</p></a>
                  </div>

            </div>

            <div class="right-col">

                  <div class="upper">

                        <div class="about">

                              <h1>Shop info</h1>
                              <div class="album-name2">
                              <p><ion-icon name="radio"></ion-icon> &nbsp;<span>shimeji@gmail.com</span></p>
                              </div>

                              <div class="album-artist2">
                              <p><ion-icon name="person"></ion-icon>  &nbsp;<span>(809) 592-2763</span></p>
                              </div>

                              <div class="album-genre2">
                              <p><ion-icon name="musical-notes"></ion-icon>  &nbsp;<span>(809) 589-2823</span></p>
                              </div>

                              <div class="media">

                                    <p>See now : </p>

                                    <ul>
                                          <li><ion-icon name="logo-facebook" href="facebook.com"></ion-icon></li>
                                          <li><ion-icon name="logo-instagram"></ion-icon></li>
                                          <li><ion-icon name="logo-twitter"></ion-icon></li>
                                          <li><ion-icon name="logo-whatsapp"></ion-icon></li>
                                    </ul>

                              </div>

                        </div>

                  </div>
                  <div class="upper-block"></div>

                  <div class="bottom">
                        <div class="more">
                              <p id="more">Comprar</p>
                        </div>

                  </div>
                  <div class="block-bottom"></div>

            </div>

      </div>
      <script type="text/javascript">

      TweenMax.from(".left-col", 2, {
            width: "0%",
            ease: Expo.easeInOut
      })

      TweenMax.from(".logo", 2, {
            delay: 2.5,
            y: 20,
            opacity: 0,
            ease: Expo.easeInOut
      })

      TweenMax.from(".buy", 2, {
            delay: 2.8,
            y: 20,
            opacity: 0,
            ease: Expo.easeInOut
      })

      TweenMax.from(".year", 2, {
            delay: 3.1,
            y: 20,
            opacity: 0,
            ease: Expo.easeInOut
      })

      TweenMax.from(".album-name", 2, {
            delay: 2.4,
            y: 20,
            opacity: 0,
            ease: Expo.easeInOut
      })

      TweenMax.from(".album-artist", 2, {
            delay: 2.6,
            y: 20,
            opacity: 0,
            ease: Expo.easeInOut
      })

      TweenMax.from(".about h1", 2, {
            delay: 3,
            y: 20,
            opacity: 0,
            ease: Expo.easeInOut
      })

      TweenMax.from(".album-name2", 2, {
            delay: 3.2,
            y: 20,
            opacity: 0,
            ease: Expo.easeInOut
      })

      TweenMax.from(".album-artist2", 2, {
            delay: 3.4,
            y: 20,
            opacity: 0,
            ease: Expo.easeInOut
      })

      TweenMax.from(".album-genre2", 2, {
            delay: 3.6,
            y: 20,
            opacity: 0,
            ease: Expo.easeInOut
      })

      TweenMax.from(".media p", 2, {
            delay: 3.6,
            y: 20,
            opacity: 0,
            ease: Expo.easeInOut
      })

      TweenMax.staggerFrom(".media ul li", 2, {
            delay: 3.8,
            opacity: 0,
            y: 20,
            ease: Expo.easeInOut
      }, 0.1);


      TweenMax.from(".album-name3", 2, {
            delay: 4,
            y: 20,
            opacity: 0,
            ease: Expo.easeInOut
      })

      TweenMax.from(".album-artist3", 2, {
            delay: 4.2,
            y: 20,
            opacity: 0,
            ease: Expo.easeInOut
      })

      TweenMax.from(".next", 2, {
            delay: 4.4,
            y: 20,
            opacity: 0,
            ease: Expo.easeInOut
      })

      TweenMax.from(".more", 2, {
            delay: 4.6,
            y: 20,
            opacity: 0,
            ease: Expo.easeInOut
      })


      </script>
</body>
</html>
