<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Administration Oluwatobi Trans</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sidebars/">
    <link rel="stylesheet" href="{{ asset('css/style5.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      @media (max-width: 1000px) {
    .containers {
      display: none; /* Masque la boîte sur les petits écrans */
    }

    .centered-container {
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background: rgb(206, 206, 206)
    }
  }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/sidebars.css') }}" rel="stylesheet">
  </head>
  <body>

<main class="d-flex flex-nowrap">
  <h1 class="visually-hidden">Oluwatobi Trans</h1>

  <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 400px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
      <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
      <span class="fs-4">Oluwatobi Trans</span>
    </a>
    <hr>
      <h3 class="text-center btn btn-danger" onclick="toggleContainers()">Postez vos réalisations</h3>
    <hr>
      @if (session ('deleted'))
        <h6 class="alert alert-info">{{ session('deleted')}}</h6>
      @endif
    <div class="list-group list-group-flush border-bottom scrollarea mb-5">


      @foreach ( $adminposts as $adminpost )       
      <div class="px-3 py-3" style="">          
          <div class="card" style="width: 18rem; background-color: rgb(224, 224, 224);">
              <img src="{{ asset('uploads/photos/' . $adminpost->photo) }}" class="card-img-top img-fluid" alt="..."> 
              <div class="card-body">
                  <h5 class="card-title text-bold">{{ $adminpost->title }} </h5>
                  <p class="card-text">{{ $adminpost->comments }}</p>
                  <form action="/post/{{ $adminpost->id }}/delete" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                  </form>
              </div>
          </div>
      </div>
  @endforeach


    </div>
    <div class="dropdown mt-5 fixed-bottom bg-dark p-3 text-light">
    <a href="#" class="d-flex align-items-center link-light text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
      <img src="{{ asset('css/photo1.jpg') }}" alt="" width="32" height="32" class="rounded-circle me-2">
      <strong class="text-light" style="color: white">
        @if (auth()->check())
        <p>{{ auth()->user()->email }}</p>
      @endif
      </strong>
    </a>
    <ul class="dropdown-menu text-small shadow">
      <li>
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submit" class="dropdown-item text-dark">Se déconnecter</button>
        </form>
      </li>
    </ul>
  </div>

    </div>

    <div class="containers">
      @if (session('status'))
        <h6 class="alert alert-success">{{ session('status') }}</h6>
      @endif
    
      <form action="{{ route('post') }}" method="POST" enctype="multipart/form-data">
        @csrf
    
        <div class="mb-3">
          <label for="title" class="form-label">Titre du poste</label>
          <input type="text" class="form-control" id="title" name="title" aria-describedby="titleHelp" required>
          <div id="titleHelp" class="form-text">Un titre en référence avec votre ce que vous voulez poster</div>
        </div>
    
        <div class="mb-3">
          <label for="comments" class="form-label">Votre commentaire</label>
          <textarea class="form-control" id="comments" name="comments" rows="3" required></textarea>
          <div id="titleHelp" class="form-text">Un commentaire descriptif de votre post</div>
        </div>
    
        <div class="mb-4">
          <label for="photo" class="form-label">Choisir une photo</label>
          <input type="file" class="form-control" name="photo" id="photo" required>
        </div>
    
        <button type="submit" class="btn btn-primary mb-3">Poster une réalisation</button>
      </form>
    </div>
    

</main>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

      <script src="{{ asset('js/script.js') }}"></script>

      <script>
        function toggleContainers() {
          var containers = document.querySelector('.containers');
          var viewportWidth = window.innerWidth || document.documentElement.clientWidth;
      
          // Ajoutez cette condition pour ne rien faire si la largeur de l'écran dépasse 1000px
          if (viewportWidth > 1000) {
            return;
          }
      
          containers.classList.toggle('centered-container');
          containers.style.display = (containers.style.display === 'none' || containers.style.display === '') ? 'block' : 'none';
        }
      
        // Modifiez votre formulaire pour masquer la boîte "containers" après la soumission
        document.querySelector('form').addEventListener('submit', function() {
          var containers = document.querySelector('.containers');
          containers.style.display = 'none';
        });
      </script>
  </body>
</html>
