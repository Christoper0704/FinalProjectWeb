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
        input[type="text"]:focus,[type="password"]:focus{
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
            transform: translate(-50%, -50%);
        }
        .textbottom{
            position: absolute;
            top: 80%;
            left: 43%;
            transform: translate(-50%, -50%);
        }
    </style>
</head>
<body class="antialiased">
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
			  <a class="nav-link active" aria-current="page" href="#">Info</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="#">Booking</a>
			</li>		
			<li class="nav-item">
			  <a class="nav-link" href="#">My Restaurant</a>
			</li>				
		  </ul>	
    </div>
    </div>
    </nav>

        <main class="py-4">
            <div class="container">
                <form class="row align-items-start rounded-3 px-md-2">
                    <div class="col-md-4 imageupload">
                        <a href="#"> 
                            <img src="{{url('/images/greyrectangle.png')}}" width="300px" height="200px">
                            <img src="{{url('/images/plus.png')}}" width="50px" class="centered" />
                            <p class="textbottom">Add Restaurant Image</p>
                        </a>   
                    </div>
                    <div class="col-md-4">
                            @csrf

                            <div class="form-outline mb-2">

                                <input id="restoname" type="text" placeholder="Enter Restaurant Name" class="form-control @error('restoname') is-invalid @enderror" name="restoname" value="{{ old('restoname') }}" required autocomplete="restoname" autofocus>

                                @error('restoname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-outline mb-2">

                                <input id="opday" type="text" placeholder="Operational Day" class="form-control @error('opday') is-invalid @enderror" name="opday" value="{{ old('opday') }}" required autocomplete="opday">

                                @error('opday')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-outline mb-2">

                                <input id="optime" type="text" placeholder="Operational Time" class="form-control @error('optime') is-invalid @enderror" name="optime" value="{{ old('optime') }}" required autocomplete="optime">

                                @error('optime')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-outline mb-2">

                                <input id="type" type="text" placeholder="Type Restaurant" class="form-control @error('type') is-invalid @enderror" name="type" value="{{ old('type') }}" required autocomplete="type">

                                @error('type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>   
                            
                            <div class="form-outline mb-2">

                                <input id="location" type="text" placeholder="Location Restaurant" class="form-control @error('location') is-invalid @enderror" name="type" value="{{ old('location') }}" required autocomplete="location">

                                @error('location')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>  
                    </div>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-m mb-1 d-grid gap-2 col-9 mx-auto" style="background-color:#EC7700; margin-top: 420px;">Save</button>
                    </div>
                </form>
            </div>
        </main>
</body>
</html>
