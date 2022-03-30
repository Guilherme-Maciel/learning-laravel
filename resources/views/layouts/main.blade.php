<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <script src="/js/scripts.js"></script>
        <!-- CSS Aplicação-->
        <link rel="stylesheet" href="/css/styles.css">

        <!-- CSS Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    </head>
    <body>
        <header>
        <nav>
            <div class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar"></div>

                <h1>USO DE ROTAS: </h1>
                <a href="/product">PRODUCT</a>
                <a href="/contact">CONTACT</a>
                <a href="/events/create">CRIAR EVENTOS</a>

            </div>
        </nav>
        </header>
        
        @yield('content')
    <footer>
        <p>Guizo &copy; 2022</p>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>
