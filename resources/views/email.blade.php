<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/email.css')}}">
    <link rel="shortcut icon" href="{{asset('Img/Logo.png')}}" type="image/x-icon">
    
    <title>ShimejiRD</title>
</head>
<body>
      <div class="login-container">
          <div class="login-info-container">
            <h1 class="title">Entra aqui</h1>

            <p>o</p>
            <form class="inputs-container" action="{{route('composeEmail')}}" method="post" enctype="multipart/form-data">
            @csrf

            @if(Session::has("success"))
            <div class="alert alert-success alert-dismissible"><button type="button" class="close">&times;</button>{{Session::get('success')}}</div>
            @elseif(Session::has("failed"))
            <div class="alert alert-danger alert-dismissible"><button type="button" class="close">&times;</button>{{Session::get('failed')}}</div>
            @endif

                <input class="input" type="email"  placeholder="Cc:" name="emailRecipient" required value="mercidalmanzar@gmail.com" readonly>
                <input class="input" type="email"  placeholder="Cc:" name="emailCc" required>
                <input class="input" type="email"  placeholder="Bcc:" name="emailBcc" required>
                <input class="input" type="text"  placeholder="Asunto:" name="emailSubject" required>
                <textarea class="input" placeholder="Informaciones necesitadas (+ tu email):"  rows="9" cols="35" maxlength="50" name="emailBody" required></textarea>
                <input class="input" type="file" name="emailAttachments[]" multiple="multiple">


                <input type="submit" class="btn btn-success" value="Send-Email">
                <p>Ya tienes una cuenta? <span class="span">Click aqui</span></p>
            </form>
          </div>
          <img class="image-container" src="image/contact.jpg" alt="">
      </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>