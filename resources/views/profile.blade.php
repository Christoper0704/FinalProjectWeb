@extends('layouts.navbar')

@section('content')
<body class="antialiased">
        <main class="py-4">
            <div class="container">
                <div class ="row align-items-start">
                    <div class="col-md-4">
                        <img src="{{ $image }}" width="300px" height="200px">
                    </div>
                    @foreach ($resto as $res)
                    <div class="col-md-8" style="background-color:#C4C4C4; text-align:center;">
                            <h3>{{ $res->data()['restoname'] }}</h3>
                    
                    <div class="row mt-2">
                        <div class="col">
                            <b>Operational Day:</b>
                            <p>{{ $res->data()['opday'] }}</p>
                        </div>
                        <div class="col">
                            <b>Operational Time:</b>
                            <p>{{ $res->data()['optime'] }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <b>Restaurant Location:</b>
                            <p>{{ $res->data()['restolocation']  }}</p>
                        </div>
                        <div class="col">
                            <b>Restaurant Type:</b>
                            <p>{{ $res->data()['restotype']  }}</p>
                        </div>
                    </div>
                    </div>
                    @endforeach
            </div>
            </div>

            <form>

            </form>
        </main>
</body>
</html>
@endsection