<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style5.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Oluwatobi Trans</title>
</head>
<body>

    <div class="containers">
        @if (session('status'))
          <h6 class="alert alert-success">{{ session('status') }}</h6>
        @endif

        <form action="" method="POST" >
          @csrf

          <div class="mb-3">
            <label for="title" class="form-label">Votre Nom</label>
            <input type="text" class="form-control input-field" id="name" name="name" aria-describedby="titleHelp" required>
          </div>

          <div class="mb-3">
            <label for="title" class="form-label">Votre email</label>
            <input type="text" class="form-control input-field" id="email" name="email" aria-describedby="titleHelp" required>
          </div>

          <div class="mb-3">
            <label for="comments" class="form-label">Votre message</label>
            <textarea class="form-control input-field" id="message" name="message" rows="3" required></textarea>
          </div>

          <button type="button" onclick="sendWhatsapp()" class="btn btn-primary mb-3">Envoyer</button>
        </form>
      </div>



      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

      <script>
        function sendWhatsapp() {
          var phoneNumber = "+22991697576";
          var name = document.querySelector('.input-field[name="name"]').value;
          var email = document.querySelector('.input-field[name="email"]').value;
          var message = document.querySelector('.input-field[name="message"]').value;

          var url = "https://wa.me/" + phoneNumber + "?text=" +
            "*Mon Nom*:" + name + "%0a" +
            "*Mon Email*:" + email + "%0a" +
            "*Mon Message*:" + message + "%0a";

          window.open(url, '_blank').focus();
        }
      </script>
</body>
</html>
