<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Oluwatobi Trans</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="icon" href="{{ asset('css/zig.png') }}" type="image/x-icon">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    </head>
    <body >
        <video autoplay loop muted id="background-video">
            <source src="{{ asset('css/videoBack.mp4') }}" type="video/mp4">
        </video>
        <div class="blur-effect"></div>
        <div class="container">
            <div class="navbar">
                <div class="navbar-content">
                    <img class="navbar-icones" src="{{ asset('css/phone-solid.svg') }}" alt=""><span>+229 91697576</span>
                </div>
                <div class="navbar-content">
                     <img class="navbar-icones" src="{{ asset('css/envelope-solid.svg') }}" alt=""><span>houngbedjiseraphin94@gmail.com</span>
                 </div>
            </div>
    
            <div class="sections">
                <div class="section-1">
                   <p>
                        Bienvenue chez Oluwatobi Trans, votre partenaire de 
                        confiance pour des solutions de transport fiables 
                        et efficaces. <p>Explorez notre monde de services exceptionnels 
                        dès maintenant! Plongez dans une expérience de transport exceptionnelle 
                        alliant confort, sécurité et fiabilité. Embarquez vers un avenir sans tracas avec nous.
                    </p>  <br><br>                
                    <div class="auth">
                        @if (Route::has('login'))
                            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}" >Se connecter</a>
            
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" >S'inscrire</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                    </div>
                </div>
                <div class="section-2">
                    <img class="profile" src="{{ asset('css/photo2.jpg') }}" alt="">
                </div>
            </div>
    
            <div class="footer">
                <a href="{{ route('contact') }}">  <div class="circle"><img class="icones post" src="{{ asset('css/note.png') }}" alt=""></div> </a>
                <a href="https://wwww.facebook.com/seraphin.houngbedji"> <div class="circle"><img class="icones" src="{{ asset('css/facebook.svg') }}" alt=""></div> </a>
                <a href="{{ route('homepage') }}"><div class="circle"><img class="icones" src="{{ asset('css/user-solid.svg') }}" alt=""></div></a>
            </div>
    
        
        </div>
    <script src="{{ asset('js/script.js') }}"></script>
    </body>
</html>
