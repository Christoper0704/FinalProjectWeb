@extends('layouts.navbar')

@section('content')
<body class="antialiased">
        <main class="py-4">
            <div class="container">
                <div class ="row align-items-start">
                    <div class="col-md-4">
                        <img src="{{ $image }}" width="300px" height="200px">
                    </div>
                    <div class="col-md-8" style="background-color:#C4C4C4; text-align:center;">
                            <h3>{{ $restoname }}</h3>
                    
                    <div class="row mt-2">
                        <div class="col">
                            <b>Operational Day:</b>
                            <p>{{ $opday }}</p>
                        </div>
                        <div class="col">
                            <b>Operational Time:</b>
                            <p>{{ $optime }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <b>Restaurant Location:</b>
                            <p>{{ $restolocation }}</p>
                        </div>
                        <div class="col">
                            <b>Restaurant Type:</b>
                            <p>{{ $restotype }}</p>
                        </div>
                    </div>
                    </div>
            </div>
            </div>
        </main>
</body>
</html>
@endsection