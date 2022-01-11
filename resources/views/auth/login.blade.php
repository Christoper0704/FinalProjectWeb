@extends('layouts.app')

@section('content')
<body class="antialiased">
<div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-8 col-xl-6">
            <div class="card rounded-3" style="background-color:#EC7700;">
            <img src="{{url('/images/foodie.png')}}" class="mx-auto d-block w-50" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem; text-align:center;" alt="Libary">
                <div class="card-body p-4 p-md-5">
                    <form method="POST" action="{{ route('login') }}" class="px-md-2 needs-validation">
                        @csrf

                        <div class="form-outline mb-2">

                        <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>

                        <div class="form-outline mb-2">

                            <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-outline mb-2">
                            <p style="text-align: left;"><a href="{{ route('register') }}">Don't have an account? Sign Up</a>
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request')}}" style="float:right;">Forgot Password?</a></p>
                            @endif
                        </div>

                        <button type="submit" class="btn btn-m mb-1 d-grid gap-2 col-9 mx-auto" style="background-color:#FFE194;">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://www.gstatic.com/firebasejs/7.14.0/firebase-app.js"></script>
      <script src="https://www.gstatic.com/firebasejs/7.14.0/firebase-auth.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
      <script>
      // Initialize Firebase
      var firebaseConfig = {
        apiKey: "AIzaSyCepdeYyM1tkfzuwB2HxCFt_Ex6SzmptZg",
        authDomain: "login-firebase-737c3.firebaseapp.com",
        databaseURL: "https://login-firebase-737c3.firebaseio.com/",
        projectId: "login-firebase-737c3",
        storageBucket: "login-firebase-737c3.appspot.com",
        messagingSenderId: "782989826329",
        appId: "1:782989826329:web:3d0dda8cd824026a6acd88",
        measurementId: "G-HE23M3BD0S"
      };
      firebase.initializeApp(config);
      var facebookProvider = new firebase.auth.FacebookAuthProvider();
      var googleProvider = new firebase.auth.GoogleAuthProvider();
      var facebookCallbackLink = '/login/facebook/callback';
      var googleCallbackLink = '/login/google/callback';
      async function socialSignin(provider) {
        var socialProvider = null;
        if (provider == "facebook") {
          socialProvider = facebookProvider;
          document.getElementById('social-login-form').action = facebookCallbackLink;
        } else if (provider == "google") {
          socialProvider = googleProvider;
          document.getElementById('social-login-form').action = googleCallbackLink;
        } else {
          return;
        }
        firebase.auth().signInWithPopup(socialProvider).then(function(result) {
          result.user.getIdToken().then(function(result) {
            document.getElementById('social-login-tokenId').value = result;
            document.getElementById('social-login-form').submit();
          });
        }).catch(function(error) {
          // do error handling
          console.log(error);
        });
      }
      </script>
</body>
@endsection
