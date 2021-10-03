<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>Portafolio</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
</head>

<body>
    <nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
        <img src="{{ asset('img/Avatar.svg') }}" alt="Avatar" width="150px">
        <a class="navbar-brand" href="#">Camilo Oyarzo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">Inicio<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Projects">Proyectos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/courses">Certificados</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">Sobre mí</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contacto</a>
                </li>
            </ul>
        </div>
    </nav>
    @yield('content')
   <footer class="bg-dark">

   </footer>
</body>

</html>
