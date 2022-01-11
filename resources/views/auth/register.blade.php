@extends('layouts.app')

@section('content')
<head>
    <title>Foodie</title>
</head>
<body class="antialiased">
<div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-8 col-xl-6">
            <div class="card rounded-3" style="background-color:#EC7700;">
            <img src="{{url('/images/foodie.png')}}" class="mx-auto d-block w-50" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem; text-align:center;" alt="Libary">
                <div class="card-body p-4 p-md-5">
                    <form method="POST" action="{{ route('register') }}" class="px-md-2 needs-validation">
                        @csrf

                        <div class="form-outline mb-2">

                                <input id="name" type="text" placeholder="Nama Lengkap (Sesuai KTP)" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-outline mb-2">

                                <input id="nomorakta" type="text" placeholder="Nomor Akta Pendirian" class="form-control @error('nomorakta') is-invalid @enderror" name="nomorakta" value="{{ old('nomorakta') }}" required autocomplete="nomorakta">

                                @error('nomorakta')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-outline mb-2">

                            <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-outline mb-2">

                            <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-outline mb-2">

                            <input placeholder="Confirm Password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                        

                        <div class="form-outline mb-2" style="text-align: right;">
                            <a href="{{ route('login') }}">Already have an account? Login</a>
                        </div>

                        <button type="submit" class="btn btn-m mb-1 d-grid gap-2 col-9 mx-auto" style="background-color:#FFE194;">Sign Up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection
