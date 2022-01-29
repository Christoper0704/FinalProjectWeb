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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>

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
            background-color: #C4C4C4;
        }
        input[type="text"]::placeholder,[type="password"]::placeholder,[type="email"]::placeholder{
            text-align: center;
            color: black;
        }
        input[type="text"]:focus,[type="password"],[type="email"]:focus{
            background-color: #C4C4C4;
        }
        a:link{
            color:black;
            text-decoration: none;
        }
        a:visited{
            color:black;
        }
        .imageupload{
            position: relative;
        }
        .centered {
            position: absolute;
            top: 40%;
            left: 43%;
            transform: translate(-50%, -280%);
        }
        .textbottom{
            position: absolute;
            top: 67%;
            left: 43%;
            transform: translate(-50%, -50%);
        }
        .file-upload{
            height:50px;
            width:50px;
            border-radius: 100px;
            position:relative;

            display:flex;
            justify-content:center;
            align-items: center;  

            overflow:hidden;
            background-size: 100% 200%;
            transition: all 1s;
            color: #FFFFFF;
            font-size:100px;
        }
        input[type='file']{
            height:200px;
            width:200px;
            position:absolute;
            top:0;
            left:0;
            opacity:0;
            cursor:pointer;
        }
        select option{
            margin: 40px;
            background: #C4C4C4;
            color: black;
            text-shadow: 0 1px 0 rgba(0, 0, 0, 0.4);
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-sm">
    <div class="container-fluid">
        <a class="navbar-brand text-dark" href="#">
        <img src="{{url('/images/Foodie.png')}}" alt="Logo" style="width:50px;" class="rounded-pill"><span>Foodie</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="navbar-toggler-icon"></span>
		</button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
    <ul class="navbar-nav ">
			<li class="nav-item">
			  <a class="nav-link active" aria-current="page" href="/profilerestaurant">Info</a>
			</li>
			<li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/booking">Booking</a>
			</li>	
            <li class="nav-item">
            <a class="nav-link active" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
			</li>			
		  </ul>	
    </div>
    </div>
    </nav>

    <main class="py-4">
            @yield('content')
    </main>
</body>