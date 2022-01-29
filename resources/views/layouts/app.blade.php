<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Foodie</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #FFE194;
        }

        nav{
            background-color: #F2A154;
        }
        input[type="text"],[type="password"],[type="email"]{
            background-color: #F2A154;
        }
        input[type="text"]::placeholder,[type="password"]::placeholder,[type="email"]::placeholder{
            text-align: center;
            color: black;
        }
        input[type="text"]:focus,[type="password"]:focus,[type="email"]:focus{
            background-color: #F2A154;
        }
        a:link{
            color:black;
            text-decoration: none;
        }
        a:visited{
            color:black;
        }
        a:hover{
            text-decoration: underline;
            color:blue;
        }
    </style>
</head>
<body>
    <div id="app">
    <nav class="navbar navbar-expand-sm">
    <div class="container-fluid">
        <a class="navbar-brand text-dark" href="/register">
        <img src="{{url('/images/Foodie.png')}}" alt="Logo" style="width:50px;" class="rounded-pill"><span>Foodie</span>
        </a>
    </div>
    </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
