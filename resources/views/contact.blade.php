<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style3.css') }}">
    <title>Contactez-moi</title>
</head>
<body class="container">

    <main class="container">
        <div class="d-flex col-md-3">
            @foreach ( $adminpost as $adminposts )       
                <div class="px-3 col-md" style="">          
                    <div class="card" style="width: 18rem; background-color: rgb(224, 224, 224);">
                        <img src="{{ $adminposts->photo }}" class="card-img-top" alt="..."> 
                        <div class="card-body">
                            <h5 class="card-title">{{ $adminposts->title }} </h5>
                            <p class="card-text">{{ $adminposts->comments }}</p>
                            <a href="#" class="btn btn-primary">Me contacter</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </main>

      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>   
</body>
</html>