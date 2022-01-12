@extends('layouts.navbar')

@section('content')
<body class="antialiased">
        <main class="py-4">
            <div class="container">
                <div class ="row align-items-start">
                    <div class="col-md-4">
                        <img src="{{url('/images/greyrectangle.png')}}" width="300px" height="200px">
                    </div>
                    <div class="col-md-8" style="background-color:#C4C4C4; text-align:center;">
                            <h3>{{ $restoname }}</h3>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p>Operational Day:</p>
                            <p>{{ $opday }}</p>
                        </div>
                        <div class="col">
                            <p>Operational Time:</p>
                            <p>{{ $optime }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p>Restaurant Location:</p>
                            <p>{{ $restolocation }}</p>
                        </div>
                        <div class="col">
                            <p>Restaurant Type:</p>
                            <p>{{ $restotype }}</p>
                        </div>
                    </div>
            </div>
            </div>
        </main>
</body>
</html>
@endsection